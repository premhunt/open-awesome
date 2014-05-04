<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Controller;

use Ehann\Bundle\WebServiceBundle\Response\WebServiceResponse;
use JMS\Serializer\Annotation\XmlElement;
use Proxies\__CG__\Ehann\Bundle\OpenAwesomeBundle\Entity\System;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class AuditController extends Controller
{
    public $esParams;

    public function __construct()
    {
        $this->esParams = array(
            'index' => 'open-awesome'
        );
    }

    /**
     * @return \Elasticsearch\Client
     */
    function getElasticsearch()
    {
        return $this->get('ehann_open_awesome.elasticsearch_client');
    }

    /**
     * @param Request $request
     * @return WebServiceResponse
     * @throws \Symfony\Component\HttpKernel\Exception\BadRequestHttpException
     */
    public function indexAction(Request $request)
    {
        if (!$request->query->has('q')) {
            throw new BadRequestHttpException('"q" parameter is required');
        }
        $this->esParams['type'] = $request->query->has('component') ? $request->query->get('component') : '';
        $this->esParams['body']['query']['queryString']['query'] = $request->query->get('q');
        $queryResponse = $this->getElasticsearch()->search($this->esParams);
        return new WebServiceResponse($queryResponse);
    }

    /**
     * @param $component
     * @param $id
     * @return WebServiceResponse
     */
    public function getAction($component, $id)
    {
        $this->esParams['id'] = $id;
        $this->esParams['type'] = $component;
        $document = $this->getElasticsearch()->get($this->esParams);
        return new WebServiceResponse($document);
    }

    /**
     * @param Request $request
     * @return WebServiceResponse
     */
    public function postAction(Request $request)
    {
        $xmlContent = (object)simplexml_load_string($request->getContent());
        // System
        $system = $this->get('jms_serializer')->deserialize($xmlContent->sys->asXML(), 'Ehann\Bundle\OpenAwesomeBundle\Entity\System', 'xml');
        $system->generateSystemKey();
        $system->setLastSeen(new \DateTime());
        $system->setLastSeenBy('audit');
        $manager = $this->getDoctrine()->getManager();
        $existingSystem = $manager->getRepository('EhannOpenAwesomeBundle:System')->findOneBy(array('uuid' => $system->getUuid()));
        if ($existingSystem) {
            $system->setId($existingSystem->getId());
            $system = $manager->merge($system);
        } else {
            $system->setFirstTimestamp(new \DateTime());
            $system->setFqdn($system->getHostname() . "." . $system->getDomain());
            $system->setLinkedSys(0);
        }
        $manager->persist($system);
        $manager->flush();
        // Windows
        $this->persistComponent($manager, $xmlContent->windows, 'SysSwWindows', 'windows_', $system);
        // BIOS
        $this->persistComponent($manager, $xmlContent->bios, 'SysHwBios', 'bios_', $system);
        // SCSI Controllers
        foreach ($xmlContent->scsi_controllers->children() as $scsiControllerXml) {
            $this->persistComponent($manager, $scsiControllerXml, 'SysHwScsiController', 'scsi_controller_', $system);
        }

        $manager->flush();

        return new WebServiceResponse($system);
    }

    function persistComponent(&$manager, $componentXmlElement, $componentClass, $componentPrefix, $system = null)
    {
        $componentXml = simplexml_load_string('<component></component>');
        foreach ($componentXmlElement->children() as $node) {
            $newNodeName = str_replace($componentPrefix, '', $node->getName());
            $componentXml->addChild($newNodeName)->{0} = (string)$node;
        }
        $deserializationClass = 'Ehann\Bundle\OpenAwesomeBundle\Entity\\' . $componentClass;
        $component = $this->get('jms_serializer')->deserialize($componentXml->asXml(), $deserializationClass, 'xml');
        if ($system) {
            $component->setSystem($system);
        }
        $component->setTimestamp($system->getTimestamp());
        $existingComponent = $manager->getRepository('EhannOpenAwesomeBundle:' . $componentClass)->findOneBy(array('system' => $system->getId()));
        if ($existingComponent) {
            $component->setId($existingComponent->getId());
            $component = $manager->merge($component);
        } else {
            $component->setFirstTimestamp(new \DateTime());
        }
        $manager->persist($component);
    }
}

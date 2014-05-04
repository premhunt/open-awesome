<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Controller;

use Ehann\Bundle\WebServiceBundle\Response\WebServiceResponse;
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
            $system->setSystemId($existingSystem->getSystemId());
            $system = $manager->merge($system);
        } else {
            $system->setFirstTimestamp(new \DateTime());
            $system->setFqdn($system->getHostname() . "." . $system->getDomain());
            $system->setLinkedSys(0);
        }
        $manager->persist($system);
        $manager->flush();
        // Windows
        $windows = $this->get('jms_serializer')->deserialize($xmlContent->windows->asXML(), 'Ehann\Bundle\OpenAwesomeBundle\Entity\SysSwWindows', 'xml');
        $windows->setSystem($system);
        $windows->setTimestamp($system->getTimestamp());
        $existingWindows = $manager->getRepository('EhannOpenAwesomeBundle:SysSwWindows')->findOneBy(array('system' => $system->getSystemId()));
        if ($existingWindows) {
            $windows->setWindowsId($existingWindows->getWindowsId());
            $windows = $manager->merge($windows);
        } else {
            $windows->setFirstTimestamp(new \DateTime());
        }
        $manager->persist($windows);
        // BIOS
        $bios = $this->get('jms_serializer')->deserialize($xmlContent->bios->asXML(), 'Ehann\Bundle\OpenAwesomeBundle\Entity\SysHwBios', 'xml');
        $bios->setSystem($system);
        $bios->setTimestamp($system->getTimestamp());
        $existingBios = $manager->getRepository('EhannOpenAwesomeBundle:SysHwBios')->findOneBy(array('system' => $system->getSystemId()));
        if ($existingBios) {
            $bios->setBiosId($existingWindows->getWindowsId());
            $bios = $manager->merge($windows);
        } else {
            $bios->setFirstTimestamp(new \DateTime());
        }
        $manager->persist($bios);

        $manager->flush();

        return new WebServiceResponse($system);
    }
}

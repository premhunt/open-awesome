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
        foreach ($xmlContent->scsi_controllers->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysHwScsiController', 'scsi_controller_', $system);
        }
        // Processor
        $this->persistComponent($manager, $xmlContent->processor, 'SysHwProcessor', 'processor_', $system);
        // Memory
        foreach ($xmlContent->memory->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysHwMemory', '', $system);
        }
        // Motherboard
        $this->persistComponent($manager, $xmlContent->motherboard, 'SysHwMotherboard', '', $system);
        // Optical Drives
        foreach ($xmlContent->optical_drives->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysHwOpticalDrive', 'optical_drive_', $system);
        }
        // Video Cards
        foreach ($xmlContent->video_cards->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysHwVideo', 'video_', $system);
        }
        // Monitors
        foreach ($xmlContent->sound_cards->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysHwMonitor', '', $system);
        }
        // Sound Cards
        foreach ($xmlContent->sound_cards->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysHwSound', 'sound_', $system);
        }
        // Hard Drives
        foreach ($xmlContent->hard_disks->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysHwHardDrive', 'hard_drive_', $system);
        }
        // Partitions
        foreach ($xmlContent->partitions->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysHwPartition', 'partition_', $system);
        }
        // Shares
        foreach ($xmlContent->shares->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysSwShare', 'share_', $system);
        }
        // Network Cards
        foreach ($xmlContent->network_cards->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysHwNetworkCard', 'net_', $system);
        }
        // Addresses
        foreach ($xmlContent->addresses->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysHwNetworkCardIp', '', $system);
        }
        // DNS
        foreach ($xmlContent->dns->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysSwDns', 'dns_', $system);
        }
        // Printers
//        foreach ($xmlContent->printers->children() as $componentXml) {
//            $this->persistComponent($manager, $componentXml, 'System', 'printer_');
//        }
        // Logs
        foreach ($xmlContent->logs->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysSwLog', 'log_', $system);
        }
        // Pagefiles
        foreach ($xmlContent->pagefiles->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysSwPagefile', '', $system);
        }
        // Users
        foreach ($xmlContent->users->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysSwUser', 'user_', $system);
        }
        // Software
        foreach ($xmlContent->software->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysSwSoftware', 'software_', $system);
        }
        // Services
        foreach ($xmlContent->services->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysSwService', 'service_', $system);
        }
        // Database
        $this->persistComponent($manager, $xmlContent->database, 'SysSwDatabase', 'db_', $system);
        // Software Keys
        foreach ($xmlContent->software_keys->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysSwSoftwareKey', 'key_', $system);
        }
        // Routes
        foreach ($xmlContent->routes->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysSwRoute', '', $system);
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
        $class = 'Ehann\Bundle\OpenAwesomeBundle\Entity\\' . $componentClass;
        $component = $this->get('jms_serializer')->deserialize($componentXml->asXml(), $class, 'xml');
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

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
            $this->persistComponent($manager, $componentXml, 'SysHwScsiController', 'scsi_controller_', $system, $componentXml->device_id);
        }
        // Processor
        $this->persistComponent($manager, $xmlContent->processor, 'SysHwProcessor', 'processor_', $system);
        // Memory
        foreach ($xmlContent->memory->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysHwMemory', '', $system, $componentXml->bank);
        }
        // Motherboard
        $this->persistComponent($manager, $xmlContent->motherboard, 'SysHwMotherboard', '', $system);
        // Optical Drives
        foreach ($xmlContent->optical_drives->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysHwOpticalDrive', 'optical_drive_', $system, $componentXml->device_id);
        }
        // Video Cards
        foreach ($xmlContent->video_cards->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysHwVideo', 'video_', $system, $componentXml->device_id);
        }
        // Monitors
        foreach ($xmlContent->sound_cards->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysHwMonitor', '', $system, $componentXml->device_id);
        }
        // Sound Cards
        foreach ($xmlContent->sound_cards->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysHwSound', 'sound_', $system, $componentXml->device_id);
        }
        // Hard Drives
        foreach ($xmlContent->hard_disks->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysHwHardDrive', 'hard_drive_', $componentXml->device_id);
        }
        // Partitions
        foreach ($xmlContent->partitions->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysHwPartition', 'partition_', $system, $componentXml->device_id);
        }
        // Shares
        foreach ($xmlContent->shares->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysSwShare', 'share_', $system, $componentXml->name.$componentXml->path);
        }
        // Network Cards
        foreach ($xmlContent->network_cards->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysHwNetworkCard', 'net_', $system, $componentXml->mac_address);
        }
        // Addresses
        foreach ($xmlContent->addresses->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysHwNetworkCardIp', '', $system, $componentXml->net_mac_address.$componentXml->address_version);
        }
        // DNS
        foreach ($xmlContent->dns->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysSwDns', 'dns_', $system, $componentXml->full_name);
        }
        // Printers
        foreach ($xmlContent->printers->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'System', 'printer_');
        }
        // Logs
        foreach ($xmlContent->logs->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysSwLog', 'log_', $system, $componentXml->file_name);
        }
        // Pagefiles
        foreach ($xmlContent->pagefiles->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysSwPagefile', '', $system, $componentXml.file_name);
        }
        // Users
        foreach ($xmlContent->users->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysSwUser', 'user_', $system, $componentXml->sid);
        }
        // Software
        foreach ($xmlContent->software->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysSwSoftware', 'software_', $system, $componentXml->name);
        }
        // Services
        foreach ($xmlContent->services->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysSwService', 'service_', $system, $componentXml->name.$componentXml->path_name);
        }
        // Database
        $this->persistComponent($manager, $xmlContent->database, 'SysSwDatabase', 'db_', $system);
        // Software Keys
        foreach ($xmlContent->software_keys->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysSwSoftwareKey', 'key_', $system, $componentXml->name.$componentXml->text);
        }
        // Routes
        foreach ($xmlContent->routes->children() as $componentXml) {
            $this->persistComponent($manager, $componentXml, 'SysSwRoute', '', $system, $system, $componentXml->destination.$componentXml->protocol);
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
            $component->setTimestamp($system->getTimestamp());
        } else if ($componentClass === 'System'){
            $component->generateSystemKey();
            $component->setFqdn($component->getHostname() . "." . $component->getDomain());
            $now = new \DateTime();
            $component->setTimestamp($now);
            $component->setLastSeen($now);
            $component->setLastSeenBy('audit');
        }

        $repoClass = 'EhannOpenAwesomeBundle:' . $componentClass;
        if ($system && $existingComponent = $manager->getRepository($repoClass)->findOneBy(array('system' => $system->getId()))) {
            $component->setId($existingComponent->getId());
            $component = $manager->merge($component);
        } else {
            $component->setFirstTimestamp(new \DateTime());
        }
        $manager->persist($component);
    }
}

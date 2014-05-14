<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Controller;

use Ehann\Bundle\WebServiceBundle\Response\WebServiceResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Stopwatch\Stopwatch;

class AuditController extends Controller
{
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
        $query = $request->query->get('q');
        $index = $this->container->get('fos_elastica.index.website');

        $queryResponse = $request->query->has('component') ?
            $index->getType($request->query->get('component'))->search($query):
            $index->search($query);

        return new WebServiceResponse($queryResponse);
    }

    /**
     * @param $component
     * @param $id
     * @return WebServiceResponse
     */
    public function getAction($component, $id)
    {
        $document = $this->container->get('fos_elastica.index.website')
            ->getType($component)
            ->getDocument($id);

        return new WebServiceResponse($document);
    }

    /**
     * @param Request $request
     * @return WebServiceResponse
     */
    public function postAction(Request $request)
    {
        set_time_limit(18000);
        $xmlContent = (object)simplexml_load_string($request->getContent());
        // System
        $system = $this->get('jms_serializer')->deserialize($xmlContent->sys->asXML(), 'Ehann\Bundle\OpenAwesomeBundle\Entity\System', 'xml');
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
        $this->persistComponent($manager, $xmlContent->windows, 'SysSwWindows', 'windows_', $system, $system->getUuid());
        // BIOS
        $this->persistComponent($manager, $xmlContent->bios, 'SysHwBios', 'bios_', $system, $system->getUuid());
        // SCSI Controllers
        if (!empty($xmlContent->scsi_controllers)) {
            foreach ($xmlContent->scsi_controllers->children() as $componentXml) {
                $this->persistComponent($manager, $componentXml, 'SysHwScsiController', 'scsi_controller_', $system, $system->getUuid() . $componentXml->device_id);
            }
        }
        // Processor
        $this->persistComponent($manager, $xmlContent->processor, 'SysHwProcessor', 'processor_', $system, $system->getUuid());
        // Memory
        if (!empty($xmlContent->memory)) {
            foreach ($xmlContent->memory->children() as $componentXml) {
                $this->persistComponent($manager, $componentXml, 'SysHwMemory', '', $system, $system->getUuid() . $componentXml->bank);
            }
        }
        // Motherboard
        $this->persistComponent($manager, $xmlContent->motherboard, 'SysHwMotherboard', '', $system, $system->getUuid());
        // Optical Drives
        if (!empty($xmlContent->optical_drives)) {
            foreach ($xmlContent->optical_drives->children() as $componentXml) {
                $this->persistComponent($manager, $componentXml, 'SysHwOpticalDrive', 'optical_drive_', $system, $system->getUuid() . $componentXml->optical_drive_device_id);
            }
        }
        // Video Cards
        if (!empty($xmlContent->video_cards)) {
            foreach ($xmlContent->video_cards->children() as $componentXml) {
                $this->persistComponent($manager, $componentXml, 'SysHwVideo', 'video_', $system, $system->getUuid() . $componentXml->video_device_id);
            }
        }
        // Monitors
        if (!empty($xmlContent->monitors)) {
            foreach ($xmlContent->monitors->children() as $componentXml) {
                $this->persistComponent($manager, $componentXml, 'SysHwMonitor', '', $system, $system->getUuid() . $componentXml->device_id);
            }
        }
        // Sound Cards
        if (!empty($xmlContent->sound_cards)) {
            foreach ($xmlContent->sound_cards->children() as $componentXml) {
                $this->persistComponent($manager, $componentXml, 'SysHwSound', 'sound_', $system, $system->getUuid() . $componentXml->sound_device_id);
            }
        }
        // Hard Drives
        if (!empty($xmlContent->hard_disks)) {
            foreach ($xmlContent->hard_disks->children() as $componentXml) {
                $this->persistComponent($manager, $componentXml, 'SysHwHardDrive', 'hard_drive_', $system, $system->getUuid() . $componentXml->hard_drive_device_id);
            }
        }
        // Partitions
        if (!empty($xmlContent->partitions)) {
            foreach ($xmlContent->partitions->children() as $componentXml) {
                $this->persistComponent($manager, $componentXml, 'SysHwPartition', 'partition_', $system, $system->getUuid() . $componentXml->partition_device_id);
            }
        }
        // Shares
        if (!empty($xmlContent->shares)) {
            foreach ($xmlContent->shares->children() as $componentXml) {
                $this->persistComponent($manager, $componentXml, 'SysSwShare', 'share_', $system, $system->getUuid() . $componentXml->name . $componentXml->share_path);
            }
        }
        // Network Cards
        if (!empty($xmlContent->network_cards)) {
            foreach ($xmlContent->network_cards->children() as $componentXml) {
                $this->persistComponent($manager, $componentXml, 'SysHwNetworkCard', 'net_', $system, $system->getUuid() . $componentXml->net_mac_address);
            }
        }
        // Addresses
        if (!empty($xmlContent->addresses)) {
            foreach ($xmlContent->addresses->children() as $componentXml) {
                $this->persistComponent($manager, $componentXml, 'SysHwNetworkCardIp', 'ip_', $system, $system->getUuid() . $componentXml->net_mac_address . $componentXml->ip_address_version);
            }
        }
        // DNS
        if (!empty($xmlContent->dns)) {
            foreach ($xmlContent->dns->children() as $componentXml) {
                $this->persistComponent($manager, $componentXml, 'SysSwDns', 'dns_', $system, $system->getUuid() . $componentXml->dns_full_name);
            }
        }
        // Printers
//        foreach ($xmlContent->printers->children() as $componentXml) {
//            $this->persistComponent($manager, $componentXml, 'System', 'printer_');
//        }
        // Logs
        if (!empty($xmlContent->logs)) {
            foreach ($xmlContent->logs->children() as $componentXml) {
                $this->persistComponent($manager, $componentXml, 'SysSwLog', 'log_', $system, $system->getUuid() . $componentXml->log_file_name);
            }
        }
        // Pagefiles
        if (!empty($xmlContent->pagefiles)) {
            foreach ($xmlContent->pagefiles->children() as $componentXml) {
                $this->persistComponent($manager, $componentXml, 'SysSwPagefile', '', $system, $system->getUuid() . $componentXml->file_name);
            }
        }
        // Users
        if (!empty($xmlContent->users)) {
            foreach ($xmlContent->users->children() as $componentXml) {
                $this->persistComponent($manager, $componentXml, 'SysSwUser', 'user_', $system, $system->getUuid() . $componentXml->user_sid);
            }
        }
        // Software
        if (!empty($xmlContent->software)) {
            foreach ($xmlContent->software->children() as $componentXml) {
                $this->persistComponent($manager, $componentXml, 'SysSwSoftware', 'software_', $system, $system->getUuid() . $componentXml->software_name);
            }
        }
        // Services
        if (!empty($xmlContent->services)) {
            foreach ($xmlContent->services->children() as $componentXml) {
                $this->persistComponent($manager, $componentXml, 'SysSwService', 'service_', $system, $system->getUuid() . $componentXml->service_name . $componentXml->service_path_name);
            }
        }
        // Database
        $this->persistComponent($manager, $xmlContent->database, 'SysSwDatabase', 'db_', $system, $system->getUuid());
        // Software Keys
        if (!empty($xmlContent->software_keys)) {
            foreach ($xmlContent->software_keys->children() as $componentXml) {
                $this->persistComponent($manager, $componentXml, 'SysSwSoftwareKey', 'key_', $system, $system->getUuid() . $componentXml->key_name . $componentXml->key_text);
            }
        }
        // Routes
        if (!empty($xmlContent->routes)) {
            foreach ($xmlContent->routes->children() as $componentXml) {
                $this->persistComponent($manager, $componentXml, 'SysSwRoute', '', $system, $system->getUuid() . $componentXml->destination . $componentXml->protocol);
            }
        }

        $manager->flush();
        return new WebServiceResponse($system);
    }

    function persistComponent(&$manager, $componentXmlElement, $componentClass, $componentPrefix, $system, $componentKey)
    {
        $stopwatch = new Stopwatch();
        $stopwatch->start('persistComponent');

        if (empty($componentXmlElement)) {
            return;
        }
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
        } else if ($componentClass === 'System') {
            $component->setFqdn($component->getHostname() . "." . $component->getDomain());
            $now = new \DateTime();
            $component->setTimestamp($now);
            $component->setLastSeen($now);
            $component->setLastSeenBy('audit');
        }
        $repoClass = 'EhannOpenAwesomeBundle:' . $componentClass;
        $component->setComponentKey($componentKey);
        if ($existingComponent = $manager->getRepository($repoClass)->findOneBy(array('componentKey' => $component->getComponentKey()))) {
            $component->setId($existingComponent->getId());
            $component = $manager->merge($component);
        } else {
            $component->setFirstTimestamp(new \DateTime());
        }
        $manager->persist($component);
        $manager->flush();

        $event = $stopwatch->stop('persistComponent');
        print $event->getDuration() . ' duration ';
        print $event->getMemory() . ' memory ';
    }
}

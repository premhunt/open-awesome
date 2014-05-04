<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysHwHardDrive
 *
 * @ORM\Table(name="sys_hw_hard_drive", indexes={@ORM\Index(name="hard_drive_index", columns={"hard_drive_index"}), @ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysHwHardDrive extends SystemComponent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="hard_drive_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="hard_drive_caption", type="string", length=100, nullable=false)
     */
    private $caption;

    /**
     * @var string
     *
     * @ORM\Column(name="hard_drive_index", type="string", length=100, nullable=false)
     */
    private $index;

    /**
     * @var string
     *
     * @ORM\Column(name="hard_drive_interface_type", type="string", length=10, nullable=false)
     */
    private $interfaceType;

    /**
     * @var string
     *
     * @ORM\Column(name="hard_drive_manufacturer", type="string", length=100, nullable=false)
     */
    private $manufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="hard_drive_model", type="string", length=100, nullable=false)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="hard_drive_serial", type="string", length=100, nullable=false)
     */
    private $serial;

    /**
     * @var integer
     *
     * @ORM\Column(name="hard_drive_partitions", type="integer", nullable=false)
     */
    private $partitions;

    /**
     * @var string
     *
     * @ORM\Column(name="hard_drive_scsi_bus", type="string", length=10, nullable=false)
     */
    private $scsiBus;

    /**
     * @var string
     *
     * @ORM\Column(name="hard_drive_scsi_logical_unit", type="string", length=100, nullable=false)
     */
    private $scsiLogicalUnit;

    /**
     * @var string
     *
     * @ORM\Column(name="hard_drive_scsi_port", type="string", length=10, nullable=false)
     */
    private $scsiPort;

    /**
     * @var integer
     *
     * @ORM\Column(name="hard_drive_size", type="integer", nullable=false)
     */
    private $size;

    /**
     * @var string
     *
     * @ORM\Column(name="hard_drive_device_id", type="string", length=200, nullable=false)
     */
    private $deviceId;

    /**
     * @var string
     *
     * @ORM\Column(name="hard_drive_status", type="string", length=100, nullable=false)
     */
    private $status;

    /**
     * @var \Ehann\Bundle\OpenAwesomeBundle\Entity\System
     *
     * @ORM\ManyToOne(targetEntity="Ehann\Bundle\OpenAwesomeBundle\Entity\System")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="system_id", referencedColumnName="system_id")
     * })
     */
    private $system;

    /**
     * @param string $caption
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
    }

    /**
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * @param string $deviceId
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;
    }

    /**
     * @return string
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $index
     */
    public function setIndex($index)
    {
        $this->index = $index;
    }

    /**
     * @return string
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param string $interfaceType
     */
    public function setInterfaceType($interfaceType)
    {
        $this->interfaceType = $interfaceType;
    }

    /**
     * @return string
     */
    public function getInterfaceType()
    {
        return $this->interfaceType;
    }

    /**
     * @param string $manufacturer
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    /**
     * @return string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param string $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param int $partitions
     */
    public function setPartitions($partitions)
    {
        $this->partitions = $partitions;
    }

    /**
     * @return int
     */
    public function getPartitions()
    {
        return $this->partitions;
    }

    /**
     * @param string $scsiBus
     */
    public function setScsiBus($scsiBus)
    {
        $this->scsiBus = $scsiBus;
    }

    /**
     * @return string
     */
    public function getScsiBus()
    {
        return $this->scsiBus;
    }

    /**
     * @param string $scsiLogicalUnit
     */
    public function setScsiLogicalUnit($scsiLogicalUnit)
    {
        $this->scsiLogicalUnit = $scsiLogicalUnit;
    }

    /**
     * @return string
     */
    public function getScsiLogicalUnit()
    {
        return $this->scsiLogicalUnit;
    }

    /**
     * @param string $scsiPort
     */
    public function setScsiPort($scsiPort)
    {
        $this->scsiPort = $scsiPort;
    }

    /**
     * @return string
     */
    public function getScsiPort()
    {
        return $this->scsiPort;
    }

    /**
     * @param string $serial
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;
    }

    /**
     * @return string
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * @param int $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\System $system
     */
    public function setSystem($system)
    {
        $this->system = $system;
    }

    /**
     * @return \Ehann\Bundle\OpenAwesomeBundle\Entity\System
     */
    public function getSystem()
    {
        return $this->system;
    }

}

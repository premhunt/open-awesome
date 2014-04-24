<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysHwHardDrive
 *
 * @ORM\Table(name="sys_hw_hard_drive", indexes={@ORM\Index(name="hard_drive_index", columns={"hard_drive_index"}), @ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysHwHardDrive
{
    /**
     * @var integer
     *
     * @ORM\Column(name="hard_drive_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $hardDriveId;

    /**
     * @var string
     *
     * @ORM\Column(name="hard_drive_caption", type="string", length=100, nullable=false)
     */
    private $hardDriveCaption;

    /**
     * @var string
     *
     * @ORM\Column(name="hard_drive_index", type="string", length=100, nullable=false)
     */
    private $hardDriveIndex;

    /**
     * @var string
     *
     * @ORM\Column(name="hard_drive_interface_type", type="string", length=10, nullable=false)
     */
    private $hardDriveInterfaceType;

    /**
     * @var string
     *
     * @ORM\Column(name="hard_drive_manufacturer", type="string", length=100, nullable=false)
     */
    private $hardDriveManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="hard_drive_model", type="string", length=100, nullable=false)
     */
    private $hardDriveModel;

    /**
     * @var string
     *
     * @ORM\Column(name="hard_drive_serial", type="string", length=100, nullable=false)
     */
    private $hardDriveSerial;

    /**
     * @var integer
     *
     * @ORM\Column(name="hard_drive_partitions", type="integer", nullable=false)
     */
    private $hardDrivePartitions;

    /**
     * @var string
     *
     * @ORM\Column(name="hard_drive_scsi_bus", type="string", length=10, nullable=false)
     */
    private $hardDriveScsiBus;

    /**
     * @var string
     *
     * @ORM\Column(name="hard_drive_scsi_logical_unit", type="string", length=100, nullable=false)
     */
    private $hardDriveScsiLogicalUnit;

    /**
     * @var string
     *
     * @ORM\Column(name="hard_drive_scsi_port", type="string", length=10, nullable=false)
     */
    private $hardDriveScsiPort;

    /**
     * @var integer
     *
     * @ORM\Column(name="hard_drive_size", type="integer", nullable=false)
     */
    private $hardDriveSize;

    /**
     * @var string
     *
     * @ORM\Column(name="hard_drive_device_id", type="string", length=200, nullable=false)
     */
    private $hardDriveDeviceId;

    /**
     * @var string
     *
     * @ORM\Column(name="hard_drive_status", type="string", length=100, nullable=false)
     */
    private $hardDriveStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     */
    private $timestamp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="first_timestamp", type="datetime", nullable=false)
     */
    private $firstTimestamp;

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
     * Get hardDriveId
     *
     * @return integer 
     */
    public function getHardDriveId()
    {
        return $this->hardDriveId;
    }

    /**
     * Set hardDriveCaption
     *
     * @param string $hardDriveCaption
     * @return SysHwHardDrive
     */
    public function setHardDriveCaption($hardDriveCaption)
    {
        $this->hardDriveCaption = $hardDriveCaption;

        return $this;
    }

    /**
     * Get hardDriveCaption
     *
     * @return string 
     */
    public function getHardDriveCaption()
    {
        return $this->hardDriveCaption;
    }

    /**
     * Set hardDriveIndex
     *
     * @param string $hardDriveIndex
     * @return SysHwHardDrive
     */
    public function setHardDriveIndex($hardDriveIndex)
    {
        $this->hardDriveIndex = $hardDriveIndex;

        return $this;
    }

    /**
     * Get hardDriveIndex
     *
     * @return string 
     */
    public function getHardDriveIndex()
    {
        return $this->hardDriveIndex;
    }

    /**
     * Set hardDriveInterfaceType
     *
     * @param string $hardDriveInterfaceType
     * @return SysHwHardDrive
     */
    public function setHardDriveInterfaceType($hardDriveInterfaceType)
    {
        $this->hardDriveInterfaceType = $hardDriveInterfaceType;

        return $this;
    }

    /**
     * Get hardDriveInterfaceType
     *
     * @return string 
     */
    public function getHardDriveInterfaceType()
    {
        return $this->hardDriveInterfaceType;
    }

    /**
     * Set hardDriveManufacturer
     *
     * @param string $hardDriveManufacturer
     * @return SysHwHardDrive
     */
    public function setHardDriveManufacturer($hardDriveManufacturer)
    {
        $this->hardDriveManufacturer = $hardDriveManufacturer;

        return $this;
    }

    /**
     * Get hardDriveManufacturer
     *
     * @return string 
     */
    public function getHardDriveManufacturer()
    {
        return $this->hardDriveManufacturer;
    }

    /**
     * Set hardDriveModel
     *
     * @param string $hardDriveModel
     * @return SysHwHardDrive
     */
    public function setHardDriveModel($hardDriveModel)
    {
        $this->hardDriveModel = $hardDriveModel;

        return $this;
    }

    /**
     * Get hardDriveModel
     *
     * @return string 
     */
    public function getHardDriveModel()
    {
        return $this->hardDriveModel;
    }

    /**
     * Set hardDriveSerial
     *
     * @param string $hardDriveSerial
     * @return SysHwHardDrive
     */
    public function setHardDriveSerial($hardDriveSerial)
    {
        $this->hardDriveSerial = $hardDriveSerial;

        return $this;
    }

    /**
     * Get hardDriveSerial
     *
     * @return string 
     */
    public function getHardDriveSerial()
    {
        return $this->hardDriveSerial;
    }

    /**
     * Set hardDrivePartitions
     *
     * @param integer $hardDrivePartitions
     * @return SysHwHardDrive
     */
    public function setHardDrivePartitions($hardDrivePartitions)
    {
        $this->hardDrivePartitions = $hardDrivePartitions;

        return $this;
    }

    /**
     * Get hardDrivePartitions
     *
     * @return integer 
     */
    public function getHardDrivePartitions()
    {
        return $this->hardDrivePartitions;
    }

    /**
     * Set hardDriveScsiBus
     *
     * @param string $hardDriveScsiBus
     * @return SysHwHardDrive
     */
    public function setHardDriveScsiBus($hardDriveScsiBus)
    {
        $this->hardDriveScsiBus = $hardDriveScsiBus;

        return $this;
    }

    /**
     * Get hardDriveScsiBus
     *
     * @return string 
     */
    public function getHardDriveScsiBus()
    {
        return $this->hardDriveScsiBus;
    }

    /**
     * Set hardDriveScsiLogicalUnit
     *
     * @param string $hardDriveScsiLogicalUnit
     * @return SysHwHardDrive
     */
    public function setHardDriveScsiLogicalUnit($hardDriveScsiLogicalUnit)
    {
        $this->hardDriveScsiLogicalUnit = $hardDriveScsiLogicalUnit;

        return $this;
    }

    /**
     * Get hardDriveScsiLogicalUnit
     *
     * @return string 
     */
    public function getHardDriveScsiLogicalUnit()
    {
        return $this->hardDriveScsiLogicalUnit;
    }

    /**
     * Set hardDriveScsiPort
     *
     * @param string $hardDriveScsiPort
     * @return SysHwHardDrive
     */
    public function setHardDriveScsiPort($hardDriveScsiPort)
    {
        $this->hardDriveScsiPort = $hardDriveScsiPort;

        return $this;
    }

    /**
     * Get hardDriveScsiPort
     *
     * @return string 
     */
    public function getHardDriveScsiPort()
    {
        return $this->hardDriveScsiPort;
    }

    /**
     * Set hardDriveSize
     *
     * @param integer $hardDriveSize
     * @return SysHwHardDrive
     */
    public function setHardDriveSize($hardDriveSize)
    {
        $this->hardDriveSize = $hardDriveSize;

        return $this;
    }

    /**
     * Get hardDriveSize
     *
     * @return integer 
     */
    public function getHardDriveSize()
    {
        return $this->hardDriveSize;
    }

    /**
     * Set hardDriveDeviceId
     *
     * @param string $hardDriveDeviceId
     * @return SysHwHardDrive
     */
    public function setHardDriveDeviceId($hardDriveDeviceId)
    {
        $this->hardDriveDeviceId = $hardDriveDeviceId;

        return $this;
    }

    /**
     * Get hardDriveDeviceId
     *
     * @return string 
     */
    public function getHardDriveDeviceId()
    {
        return $this->hardDriveDeviceId;
    }

    /**
     * Set hardDriveStatus
     *
     * @param string $hardDriveStatus
     * @return SysHwHardDrive
     */
    public function setHardDriveStatus($hardDriveStatus)
    {
        $this->hardDriveStatus = $hardDriveStatus;

        return $this;
    }

    /**
     * Get hardDriveStatus
     *
     * @return string 
     */
    public function getHardDriveStatus()
    {
        return $this->hardDriveStatus;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysHwHardDrive
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set firstTimestamp
     *
     * @param \DateTime $firstTimestamp
     * @return SysHwHardDrive
     */
    public function setFirstTimestamp($firstTimestamp)
    {
        $this->firstTimestamp = $firstTimestamp;

        return $this;
    }

    /**
     * Get firstTimestamp
     *
     * @return \DateTime 
     */
    public function getFirstTimestamp()
    {
        return $this->firstTimestamp;
    }

    /**
     * Set system
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\System $system
     * @return SysHwHardDrive
     */
    public function setSystem(\Ehann\Bundle\OpenAwesomeBundle\Entity\System $system = null)
    {
        $this->system = $system;

        return $this;
    }

    /**
     * Get system
     *
     * @return \Ehann\Bundle\OpenAwesomeBundle\Entity\System 
     */
    public function getSystem()
    {
        return $this->system;
    }
}

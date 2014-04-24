<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysHwPartition
 *
 * @ORM\Table(name="sys_hw_partition", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysHwPartition
{
    /**
     * @var integer
     *
     * @ORM\Column(name="partition_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $partitionId;

    /**
     * @var string
     *
     * @ORM\Column(name="hard_drive_index", type="string", length=100, nullable=false)
     */
    private $hardDriveIndex;

    /**
     * @var string
     *
     * @ORM\Column(name="partition_mount_type", type="string", length=100, nullable=false)
     */
    private $partitionMountType;

    /**
     * @var string
     *
     * @ORM\Column(name="partition_mount_point", type="string", length=100, nullable=false)
     */
    private $partitionMountPoint;

    /**
     * @var string
     *
     * @ORM\Column(name="partition_name", type="string", length=100, nullable=false)
     */
    private $partitionName;

    /**
     * @var integer
     *
     * @ORM\Column(name="partition_size", type="integer", nullable=false)
     */
    private $partitionSize;

    /**
     * @var integer
     *
     * @ORM\Column(name="partition_free_space", type="integer", nullable=false)
     */
    private $partitionFreeSpace;

    /**
     * @var integer
     *
     * @ORM\Column(name="partition_used_space", type="integer", nullable=false)
     */
    private $partitionUsedSpace;

    /**
     * @var string
     *
     * @ORM\Column(name="partition_format", type="string", length=20, nullable=false)
     */
    private $partitionFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="partition_caption", type="string", length=100, nullable=false)
     */
    private $partitionCaption;

    /**
     * @var string
     *
     * @ORM\Column(name="partition_device_id", type="string", length=100, nullable=false)
     */
    private $partitionDeviceId;

    /**
     * @var string
     *
     * @ORM\Column(name="partition_disk_index", type="string", length=50, nullable=false)
     */
    private $partitionDiskIndex;

    /**
     * @var string
     *
     * @ORM\Column(name="partition_bootable", type="string", length=10, nullable=false)
     */
    private $partitionBootable;

    /**
     * @var string
     *
     * @ORM\Column(name="partition_type", type="string", length=50, nullable=false)
     */
    private $partitionType;

    /**
     * @var string
     *
     * @ORM\Column(name="partition_quotas_supported", type="string", length=10, nullable=false)
     */
    private $partitionQuotasSupported;

    /**
     * @var string
     *
     * @ORM\Column(name="partition_quotas_enabled", type="string", length=10, nullable=false)
     */
    private $partitionQuotasEnabled;

    /**
     * @var string
     *
     * @ORM\Column(name="partition_serial", type="string", length=100, nullable=false)
     */
    private $partitionSerial;

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
     * Get partitionId
     *
     * @return integer 
     */
    public function getPartitionId()
    {
        return $this->partitionId;
    }

    /**
     * Set hardDriveIndex
     *
     * @param string $hardDriveIndex
     * @return SysHwPartition
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
     * Set partitionMountType
     *
     * @param string $partitionMountType
     * @return SysHwPartition
     */
    public function setPartitionMountType($partitionMountType)
    {
        $this->partitionMountType = $partitionMountType;

        return $this;
    }

    /**
     * Get partitionMountType
     *
     * @return string 
     */
    public function getPartitionMountType()
    {
        return $this->partitionMountType;
    }

    /**
     * Set partitionMountPoint
     *
     * @param string $partitionMountPoint
     * @return SysHwPartition
     */
    public function setPartitionMountPoint($partitionMountPoint)
    {
        $this->partitionMountPoint = $partitionMountPoint;

        return $this;
    }

    /**
     * Get partitionMountPoint
     *
     * @return string 
     */
    public function getPartitionMountPoint()
    {
        return $this->partitionMountPoint;
    }

    /**
     * Set partitionName
     *
     * @param string $partitionName
     * @return SysHwPartition
     */
    public function setPartitionName($partitionName)
    {
        $this->partitionName = $partitionName;

        return $this;
    }

    /**
     * Get partitionName
     *
     * @return string 
     */
    public function getPartitionName()
    {
        return $this->partitionName;
    }

    /**
     * Set partitionSize
     *
     * @param integer $partitionSize
     * @return SysHwPartition
     */
    public function setPartitionSize($partitionSize)
    {
        $this->partitionSize = $partitionSize;

        return $this;
    }

    /**
     * Get partitionSize
     *
     * @return integer 
     */
    public function getPartitionSize()
    {
        return $this->partitionSize;
    }

    /**
     * Set partitionFreeSpace
     *
     * @param integer $partitionFreeSpace
     * @return SysHwPartition
     */
    public function setPartitionFreeSpace($partitionFreeSpace)
    {
        $this->partitionFreeSpace = $partitionFreeSpace;

        return $this;
    }

    /**
     * Get partitionFreeSpace
     *
     * @return integer 
     */
    public function getPartitionFreeSpace()
    {
        return $this->partitionFreeSpace;
    }

    /**
     * Set partitionUsedSpace
     *
     * @param integer $partitionUsedSpace
     * @return SysHwPartition
     */
    public function setPartitionUsedSpace($partitionUsedSpace)
    {
        $this->partitionUsedSpace = $partitionUsedSpace;

        return $this;
    }

    /**
     * Get partitionUsedSpace
     *
     * @return integer 
     */
    public function getPartitionUsedSpace()
    {
        return $this->partitionUsedSpace;
    }

    /**
     * Set partitionFormat
     *
     * @param string $partitionFormat
     * @return SysHwPartition
     */
    public function setPartitionFormat($partitionFormat)
    {
        $this->partitionFormat = $partitionFormat;

        return $this;
    }

    /**
     * Get partitionFormat
     *
     * @return string 
     */
    public function getPartitionFormat()
    {
        return $this->partitionFormat;
    }

    /**
     * Set partitionCaption
     *
     * @param string $partitionCaption
     * @return SysHwPartition
     */
    public function setPartitionCaption($partitionCaption)
    {
        $this->partitionCaption = $partitionCaption;

        return $this;
    }

    /**
     * Get partitionCaption
     *
     * @return string 
     */
    public function getPartitionCaption()
    {
        return $this->partitionCaption;
    }

    /**
     * Set partitionDeviceId
     *
     * @param string $partitionDeviceId
     * @return SysHwPartition
     */
    public function setPartitionDeviceId($partitionDeviceId)
    {
        $this->partitionDeviceId = $partitionDeviceId;

        return $this;
    }

    /**
     * Get partitionDeviceId
     *
     * @return string 
     */
    public function getPartitionDeviceId()
    {
        return $this->partitionDeviceId;
    }

    /**
     * Set partitionDiskIndex
     *
     * @param string $partitionDiskIndex
     * @return SysHwPartition
     */
    public function setPartitionDiskIndex($partitionDiskIndex)
    {
        $this->partitionDiskIndex = $partitionDiskIndex;

        return $this;
    }

    /**
     * Get partitionDiskIndex
     *
     * @return string 
     */
    public function getPartitionDiskIndex()
    {
        return $this->partitionDiskIndex;
    }

    /**
     * Set partitionBootable
     *
     * @param string $partitionBootable
     * @return SysHwPartition
     */
    public function setPartitionBootable($partitionBootable)
    {
        $this->partitionBootable = $partitionBootable;

        return $this;
    }

    /**
     * Get partitionBootable
     *
     * @return string 
     */
    public function getPartitionBootable()
    {
        return $this->partitionBootable;
    }

    /**
     * Set partitionType
     *
     * @param string $partitionType
     * @return SysHwPartition
     */
    public function setPartitionType($partitionType)
    {
        $this->partitionType = $partitionType;

        return $this;
    }

    /**
     * Get partitionType
     *
     * @return string 
     */
    public function getPartitionType()
    {
        return $this->partitionType;
    }

    /**
     * Set partitionQuotasSupported
     *
     * @param string $partitionQuotasSupported
     * @return SysHwPartition
     */
    public function setPartitionQuotasSupported($partitionQuotasSupported)
    {
        $this->partitionQuotasSupported = $partitionQuotasSupported;

        return $this;
    }

    /**
     * Get partitionQuotasSupported
     *
     * @return string 
     */
    public function getPartitionQuotasSupported()
    {
        return $this->partitionQuotasSupported;
    }

    /**
     * Set partitionQuotasEnabled
     *
     * @param string $partitionQuotasEnabled
     * @return SysHwPartition
     */
    public function setPartitionQuotasEnabled($partitionQuotasEnabled)
    {
        $this->partitionQuotasEnabled = $partitionQuotasEnabled;

        return $this;
    }

    /**
     * Get partitionQuotasEnabled
     *
     * @return string 
     */
    public function getPartitionQuotasEnabled()
    {
        return $this->partitionQuotasEnabled;
    }

    /**
     * Set partitionSerial
     *
     * @param string $partitionSerial
     * @return SysHwPartition
     */
    public function setPartitionSerial($partitionSerial)
    {
        $this->partitionSerial = $partitionSerial;

        return $this;
    }

    /**
     * Get partitionSerial
     *
     * @return string 
     */
    public function getPartitionSerial()
    {
        return $this->partitionSerial;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysHwPartition
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
     * @return SysHwPartition
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
     * @return SysHwPartition
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

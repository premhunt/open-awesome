<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysHwPartition
 *
 * @ORM\Table(name="sys_hw_partition", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysHwPartition extends SystemComponent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="partition_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
    private $mountType;

    /**
     * @var string
     *
     * @ORM\Column(name="partition_mount_point", type="string", length=100, nullable=false)
     */
    private $mountPoint;

    /**
     * @var string
     *
     * @ORM\Column(name="partition_name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="partition_size", type="integer", nullable=false)
     */
    private $size;

    /**
     * @var integer
     *
     * @ORM\Column(name="partition_free_space", type="integer", nullable=false)
     */
    private $freeSpace;

    /**
     * @var integer
     *
     * @ORM\Column(name="partition_used_space", type="integer", nullable=false)
     */
    private $usedSpace;

    /**
     * @var string
     *
     * @ORM\Column(name="partition_format", type="string", length=20, nullable=false)
     */
    private $format;

    /**
     * @var string
     *
     * @ORM\Column(name="partition_caption", type="string", length=100, nullable=false)
     */
    private $caption;

    /**
     * @var string
     *
     * @ORM\Column(name="partition_device_id", type="string", length=100, nullable=false)
     */
    private $deviceId;

    /**
     * @var string
     *
     * @ORM\Column(name="partition_disk_index", type="string", length=50, nullable=false)
     */
    private $diskIndex;

    /**
     * @var string
     *
     * @ORM\Column(name="partition_bootable", type="string", length=10, nullable=false)
     */
    private $bootable;

    /**
     * @var string
     *
     * @ORM\Column(name="partition_type", type="string", length=50, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="partition_quotas_supported", type="string", length=10, nullable=false)
     */
    private $quotasSupported;

    /**
     * @var string
     *
     * @ORM\Column(name="partition_quotas_enabled", type="string", length=10, nullable=false)
     */
    private $quotasEnabled;

    /**
     * @var string
     *
     * @ORM\Column(name="partition_serial", type="string", length=100, nullable=false)
     */
    private $serial;

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
     * @param string $bootable
     */
    public function setBootable($bootable)
    {
        $this->bootable = $bootable;
    }

    /**
     * @return string
     */
    public function getBootable()
    {
        return $this->bootable;
    }

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
     * @param string $diskIndex
     */
    public function setDiskIndex($diskIndex)
    {
        $this->diskIndex = $diskIndex;
    }

    /**
     * @return string
     */
    public function getDiskIndex()
    {
        return $this->diskIndex;
    }

    /**
     * @param string $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param int $freeSpace
     */
    public function setFreeSpace($freeSpace)
    {
        $this->freeSpace = $freeSpace;
    }

    /**
     * @return int
     */
    public function getFreeSpace()
    {
        return $this->freeSpace;
    }

    /**
     * @param string $hardDriveIndex
     */
    public function setHardDriveIndex($hardDriveIndex)
    {
        $this->hardDriveIndex = $hardDriveIndex;
    }

    /**
     * @return string
     */
    public function getHardDriveIndex()
    {
        return $this->hardDriveIndex;
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
     * @param string $mountPoint
     */
    public function setMountPoint($mountPoint)
    {
        $this->mountPoint = $mountPoint;
    }

    /**
     * @return string
     */
    public function getMountPoint()
    {
        return $this->mountPoint;
    }

    /**
     * @param string $mountType
     */
    public function setMountType($mountType)
    {
        $this->mountType = $mountType;
    }

    /**
     * @return string
     */
    public function getMountType()
    {
        return $this->mountType;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $quotasEnabled
     */
    public function setQuotasEnabled($quotasEnabled)
    {
        $this->quotasEnabled = $quotasEnabled;
    }

    /**
     * @return string
     */
    public function getQuotasEnabled()
    {
        return $this->quotasEnabled;
    }

    /**
     * @param string $quotasSupported
     */
    public function setQuotasSupported($quotasSupported)
    {
        $this->quotasSupported = $quotasSupported;
    }

    /**
     * @return string
     */
    public function getQuotasSupported()
    {
        return $this->quotasSupported;
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

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $usedSpace
     */
    public function setUsedSpace($usedSpace)
    {
        $this->usedSpace = $usedSpace;
    }

    /**
     * @return int
     */
    public function getUsedSpace()
    {
        return $this->usedSpace;
    }

}

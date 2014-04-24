<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysHwScsiController
 *
 * @ORM\Table(name="sys_hw_scsi_controller", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysHwScsiController
{
    /**
     * @var integer
     *
     * @ORM\Column(name="scsi_controller_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $scsiControllerId;

    /**
     * @var string
     *
     * @ORM\Column(name="scsi_controller_name", type="string", length=200, nullable=false)
     */
    private $scsiControllerName;

    /**
     * @var string
     *
     * @ORM\Column(name="scsi_controller_manufacturer", type="string", length=100, nullable=false)
     */
    private $scsiControllerManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="scsi_controller_device_id", type="string", length=200, nullable=false)
     */
    private $scsiControllerDeviceId;

    /**
     * @var string
     *
     * @ORM\Column(name="scsi_controller_type", type="string", nullable=false)
     */
    private $scsiControllerType;

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
     * Get scsiControllerId
     *
     * @return integer 
     */
    public function getScsiControllerId()
    {
        return $this->scsiControllerId;
    }

    /**
     * Set scsiControllerName
     *
     * @param string $scsiControllerName
     * @return SysHwScsiController
     */
    public function setScsiControllerName($scsiControllerName)
    {
        $this->scsiControllerName = $scsiControllerName;

        return $this;
    }

    /**
     * Get scsiControllerName
     *
     * @return string 
     */
    public function getScsiControllerName()
    {
        return $this->scsiControllerName;
    }

    /**
     * Set scsiControllerManufacturer
     *
     * @param string $scsiControllerManufacturer
     * @return SysHwScsiController
     */
    public function setScsiControllerManufacturer($scsiControllerManufacturer)
    {
        $this->scsiControllerManufacturer = $scsiControllerManufacturer;

        return $this;
    }

    /**
     * Get scsiControllerManufacturer
     *
     * @return string 
     */
    public function getScsiControllerManufacturer()
    {
        return $this->scsiControllerManufacturer;
    }

    /**
     * Set scsiControllerDeviceId
     *
     * @param string $scsiControllerDeviceId
     * @return SysHwScsiController
     */
    public function setScsiControllerDeviceId($scsiControllerDeviceId)
    {
        $this->scsiControllerDeviceId = $scsiControllerDeviceId;

        return $this;
    }

    /**
     * Get scsiControllerDeviceId
     *
     * @return string 
     */
    public function getScsiControllerDeviceId()
    {
        return $this->scsiControllerDeviceId;
    }

    /**
     * Set scsiControllerType
     *
     * @param string $scsiControllerType
     * @return SysHwScsiController
     */
    public function setScsiControllerType($scsiControllerType)
    {
        $this->scsiControllerType = $scsiControllerType;

        return $this;
    }

    /**
     * Get scsiControllerType
     *
     * @return string 
     */
    public function getScsiControllerType()
    {
        return $this->scsiControllerType;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysHwScsiController
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
     * @return SysHwScsiController
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
     * @return SysHwScsiController
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

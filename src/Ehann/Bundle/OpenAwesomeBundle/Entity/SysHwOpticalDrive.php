<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysHwOpticalDrive
 *
 * @ORM\Table(name="sys_hw_optical_drive", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysHwOpticalDrive
{
    /**
     * @var integer
     *
     * @ORM\Column(name="optical_drive_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $opticalDriveId;

    /**
     * @var string
     *
     * @ORM\Column(name="optical_drive_caption", type="string", length=100, nullable=false)
     */
    private $opticalDriveCaption;

    /**
     * @var string
     *
     * @ORM\Column(name="optical_drive_model", type="string", length=100, nullable=false)
     */
    private $opticalDriveModel;

    /**
     * @var string
     *
     * @ORM\Column(name="optical_drive_device_id", type="string", length=100, nullable=false)
     */
    private $opticalDriveDeviceId;

    /**
     * @var string
     *
     * @ORM\Column(name="optical_drive_mount_point", type="string", length=10, nullable=false)
     */
    private $opticalDriveMountPoint;

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
     * Get opticalDriveId
     *
     * @return integer 
     */
    public function getOpticalDriveId()
    {
        return $this->opticalDriveId;
    }

    /**
     * Set opticalDriveCaption
     *
     * @param string $opticalDriveCaption
     * @return SysHwOpticalDrive
     */
    public function setOpticalDriveCaption($opticalDriveCaption)
    {
        $this->opticalDriveCaption = $opticalDriveCaption;

        return $this;
    }

    /**
     * Get opticalDriveCaption
     *
     * @return string 
     */
    public function getOpticalDriveCaption()
    {
        return $this->opticalDriveCaption;
    }

    /**
     * Set opticalDriveModel
     *
     * @param string $opticalDriveModel
     * @return SysHwOpticalDrive
     */
    public function setOpticalDriveModel($opticalDriveModel)
    {
        $this->opticalDriveModel = $opticalDriveModel;

        return $this;
    }

    /**
     * Get opticalDriveModel
     *
     * @return string 
     */
    public function getOpticalDriveModel()
    {
        return $this->opticalDriveModel;
    }

    /**
     * Set opticalDriveDeviceId
     *
     * @param string $opticalDriveDeviceId
     * @return SysHwOpticalDrive
     */
    public function setOpticalDriveDeviceId($opticalDriveDeviceId)
    {
        $this->opticalDriveDeviceId = $opticalDriveDeviceId;

        return $this;
    }

    /**
     * Get opticalDriveDeviceId
     *
     * @return string 
     */
    public function getOpticalDriveDeviceId()
    {
        return $this->opticalDriveDeviceId;
    }

    /**
     * Set opticalDriveMountPoint
     *
     * @param string $opticalDriveMountPoint
     * @return SysHwOpticalDrive
     */
    public function setOpticalDriveMountPoint($opticalDriveMountPoint)
    {
        $this->opticalDriveMountPoint = $opticalDriveMountPoint;

        return $this;
    }

    /**
     * Get opticalDriveMountPoint
     *
     * @return string 
     */
    public function getOpticalDriveMountPoint()
    {
        return $this->opticalDriveMountPoint;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysHwOpticalDrive
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
     * @return SysHwOpticalDrive
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
     * @return SysHwOpticalDrive
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

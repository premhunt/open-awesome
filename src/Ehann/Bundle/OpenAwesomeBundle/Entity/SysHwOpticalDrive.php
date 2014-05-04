<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysHwOpticalDrive
 *
 * @ORM\Table(name="sys_hw_optical_drive", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysHwOpticalDrive extends SystemComponent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="optical_drive_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="optical_drive_caption", type="string", length=100, nullable=false)
     */
    private $caption;

    /**
     * @var string
     *
     * @ORM\Column(name="optical_drive_model", type="string", length=100, nullable=false)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="optical_drive_device_id", type="string", length=100, nullable=false)
     */
    private $deviceId;

    /**
     * @var string
     *
     * @ORM\Column(name="optical_drive_mount_point", type="string", length=10, nullable=false)
     */
    private $mountPoint;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set caption
     *
     * @param string $opticalDriveCaption
     * @return SysHwOpticalDrive
     */
    public function setCaption($opticalDriveCaption)
    {
        $this->caption = $opticalDriveCaption;

        return $this;
    }

    /**
     * Get caption
     *
     * @return string 
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Set model
     *
     * @param string $opticalDriveModel
     * @return SysHwOpticalDrive
     */
    public function setModel($opticalDriveModel)
    {
        $this->model = $opticalDriveModel;

        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set deviceId
     *
     * @param string $opticalDriveDeviceId
     * @return SysHwOpticalDrive
     */
    public function setDeviceId($opticalDriveDeviceId)
    {
        $this->deviceId = $opticalDriveDeviceId;

        return $this;
    }

    /**
     * Get deviceId
     *
     * @return string 
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * Set mountPoint
     *
     * @param string $opticalDriveMountPoint
     * @return SysHwOpticalDrive
     */
    public function setMountPoint($opticalDriveMountPoint)
    {
        $this->mountPoint = $opticalDriveMountPoint;

        return $this;
    }

    /**
     * Get mountPoint
     *
     * @return string 
     */
    public function getMountPoint()
    {
        return $this->mountPoint;
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

<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Type;

/**
 * SysHwScsiController
 *
 * @ORM\Table(name="sys_hw_scsi_controller", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysHwScsiController extends SystemComponent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="scsi_controller_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="scsi_controller_name", type="string", length=200, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="scsi_controller_manufacturer", type="string", length=100, nullable=false)
     */
    private $manufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="scsi_controller_device_id", type="string", length=200, nullable=false)
     */
    private $deviceId;

    /**
     * @var string
     *
     * @ORM\Column(name="scsi_controller_type", type="string", nullable=false)
     */
    private $type;

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
     * Set scsiControllerName
     *
     * @param string $scsiControllerName
     * @return SysHwScsiController
     */
    public function setName($scsiControllerName)
    {
        $this->name = $scsiControllerName;

        return $this;
    }

    /**
     * Get scsiControllerName
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set scsiControllerManufacturer
     *
     * @param string $scsiControllerManufacturer
     * @return SysHwScsiController
     */
    public function setManufacturer($scsiControllerManufacturer)
    {
        $this->manufacturer = $scsiControllerManufacturer;

        return $this;
    }

    /**
     * Get scsiControllerManufacturer
     *
     * @return string 
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set scsiControllerDeviceId
     *
     * @param string $scsiControllerDeviceId
     * @return SysHwScsiController
     */
    public function setDeviceId($scsiControllerDeviceId)
    {
        $this->deviceId = $scsiControllerDeviceId;

        return $this;
    }

    /**
     * Get scsiControllerDeviceId
     *
     * @return string 
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * Set scsiControllerType
     *
     * @param string $scsiControllerType
     * @return SysHwScsiController
     */
    public function setType($scsiControllerType)
    {
        $this->type = $scsiControllerType;

        return $this;
    }

    /**
     * Get scsiControllerType
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
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

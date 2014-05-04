<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysHwMonitor
 *
 * @ORM\Table(name="sys_hw_monitor", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysHwMonitor extends SystemComponent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="monitor_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="manufacturer", type="string", length=100, nullable=false)
     */
    private $manufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="device_id", type="string", length=100, nullable=false)
     */
    private $deviceId;

    /**
     * @var string
     *
     * @ORM\Column(name="manufacture_date", type="string", length=20, nullable=false)
     */
    private $manufactureDate;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=100, nullable=false)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="serial", type="string", length=50, nullable=false)
     */
    private $serial;

    /**
     * @var string
     *
     * @ORM\Column(name="size", type="string", length=5, nullable=false)
     */
    private $size;

    /**
     * @var string
     *
     * @ORM\Column(name="aspect_ratio", type="string", length=5, nullable=false)
     */
    private $aspectRatio;

    /**
     * @var string
     *
     * @ORM\Column(name="man_serial", type="string", length=50, nullable=false)
     */
    private $manSerial;

    /**
     * @var string
     *
     * @ORM\Column(name="edid_version", type="string", length=50, nullable=false)
     */
    private $edidVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="man_description", type="string", length=100, nullable=false)
     */
    private $manDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="man_value", type="string", length=50, nullable=false)
     */
    private $manValue;

    /**
     * @var string
     *
     * @ORM\Column(name="man_purchase_order_number", type="string", length=50, nullable=false)
     */
    private $manPurchaseOrderNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="man_date_purchased", type="date", nullable=false)
     */
    private $manDatePurchased;

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
     * Get monitorId
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Set manufacturer
     *
     * @param string $manufacturer
     * @return SysHwMonitor
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * Get manufacturer
     *
     * @return string 
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set deviceId
     *
     * @param string $deviceId
     * @return SysHwMonitor
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;

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
     * Set manufactureDate
     *
     * @param string $manufactureDate
     * @return SysHwMonitor
     */
    public function setManufactureDate($manufactureDate)
    {
        $this->manufactureDate = $manufactureDate;

        return $this;
    }

    /**
     * Get manufactureDate
     *
     * @return string 
     */
    public function getManufactureDate()
    {
        return $this->manufactureDate;
    }

    /**
     * Set model
     *
     * @param string $model
     * @return SysHwMonitor
     */
    public function setModel($model)
    {
        $this->model = $model;

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
     * Set serial
     *
     * @param string $serial
     * @return SysHwMonitor
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;

        return $this;
    }

    /**
     * Get serial
     *
     * @return string 
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * Set size
     *
     * @param string $size
     * @return SysHwMonitor
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string 
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set aspectRatio
     *
     * @param string $aspectRatio
     * @return SysHwMonitor
     */
    public function setAspectRatio($aspectRatio)
    {
        $this->aspectRatio = $aspectRatio;

        return $this;
    }

    /**
     * Get aspectRatio
     *
     * @return string 
     */
    public function getAspectRatio()
    {
        return $this->aspectRatio;
    }

    /**
     * Set manSerial
     *
     * @param string $manSerial
     * @return SysHwMonitor
     */
    public function setManSerial($manSerial)
    {
        $this->manSerial = $manSerial;

        return $this;
    }

    /**
     * Get manSerial
     *
     * @return string 
     */
    public function getManSerial()
    {
        return $this->manSerial;
    }

    /**
     * Set edidVersion
     *
     * @param string $edidVersion
     * @return SysHwMonitor
     */
    public function setEdidVersion($edidVersion)
    {
        $this->edidVersion = $edidVersion;

        return $this;
    }

    /**
     * Get edidVersion
     *
     * @return string 
     */
    public function getEdidVersion()
    {
        return $this->edidVersion;
    }

    /**
     * Set manDescription
     *
     * @param string $manDescription
     * @return SysHwMonitor
     */
    public function setManDescription($manDescription)
    {
        $this->manDescription = $manDescription;

        return $this;
    }

    /**
     * Get manDescription
     *
     * @return string 
     */
    public function getManDescription()
    {
        return $this->manDescription;
    }

    /**
     * Set manValue
     *
     * @param string $manValue
     * @return SysHwMonitor
     */
    public function setManValue($manValue)
    {
        $this->manValue = $manValue;

        return $this;
    }

    /**
     * Get manValue
     *
     * @return string 
     */
    public function getManValue()
    {
        return $this->manValue;
    }

    /**
     * Set manPurchaseOrderNumber
     *
     * @param string $manPurchaseOrderNumber
     * @return SysHwMonitor
     */
    public function setManPurchaseOrderNumber($manPurchaseOrderNumber)
    {
        $this->manPurchaseOrderNumber = $manPurchaseOrderNumber;

        return $this;
    }

    /**
     * Get manPurchaseOrderNumber
     *
     * @return string 
     */
    public function getManPurchaseOrderNumber()
    {
        return $this->manPurchaseOrderNumber;
    }

    /**
     * Set manDatePurchased
     *
     * @param \DateTime $manDatePurchased
     * @return SysHwMonitor
     */
    public function setManDatePurchased($manDatePurchased)
    {
        $this->manDatePurchased = $manDatePurchased;

        return $this;
    }

    /**
     * Get manDatePurchased
     *
     * @return \DateTime 
     */
    public function getManDatePurchased()
    {
        return $this->manDatePurchased;
    }

    /**
     * Set system
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\System $system
     * @return SysHwMonitor
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

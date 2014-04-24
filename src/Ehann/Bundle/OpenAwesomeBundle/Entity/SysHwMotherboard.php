<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysHwMotherboard
 *
 * @ORM\Table(name="sys_hw_motherboard", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysHwMotherboard
{
    /**
     * @var integer
     *
     * @ORM\Column(name="motherboard_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $motherboardId;

    /**
     * @var string
     *
     * @ORM\Column(name="manufacturer", type="string", length=50, nullable=false)
     */
    private $manufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=50, nullable=false)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="serial", type="string", length=100, nullable=false)
     */
    private $serial;

    /**
     * @var integer
     *
     * @ORM\Column(name="memory_slots", type="integer", nullable=false)
     */
    private $memorySlots;

    /**
     * @var integer
     *
     * @ORM\Column(name="processor_slots", type="integer", nullable=false)
     */
    private $processorSlots;

    /**
     * @var string
     *
     * @ORM\Column(name="processor_type", type="string", length=100, nullable=false)
     */
    private $processorType;

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
     * Get motherboardId
     *
     * @return integer 
     */
    public function getMotherboardId()
    {
        return $this->motherboardId;
    }

    /**
     * Set manufacturer
     *
     * @param string $manufacturer
     * @return SysHwMotherboard
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
     * Set model
     *
     * @param string $model
     * @return SysHwMotherboard
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
     * @return SysHwMotherboard
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
     * Set memorySlots
     *
     * @param integer $memorySlots
     * @return SysHwMotherboard
     */
    public function setMemorySlots($memorySlots)
    {
        $this->memorySlots = $memorySlots;

        return $this;
    }

    /**
     * Get memorySlots
     *
     * @return integer 
     */
    public function getMemorySlots()
    {
        return $this->memorySlots;
    }

    /**
     * Set processorSlots
     *
     * @param integer $processorSlots
     * @return SysHwMotherboard
     */
    public function setProcessorSlots($processorSlots)
    {
        $this->processorSlots = $processorSlots;

        return $this;
    }

    /**
     * Get processorSlots
     *
     * @return integer 
     */
    public function getProcessorSlots()
    {
        return $this->processorSlots;
    }

    /**
     * Set processorType
     *
     * @param string $processorType
     * @return SysHwMotherboard
     */
    public function setProcessorType($processorType)
    {
        $this->processorType = $processorType;

        return $this;
    }

    /**
     * Get processorType
     *
     * @return string 
     */
    public function getProcessorType()
    {
        return $this->processorType;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysHwMotherboard
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
     * @return SysHwMotherboard
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
     * @return SysHwMotherboard
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

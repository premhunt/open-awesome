<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysHwMotherboard
 *
 * @ORM\Table(name="sys_hw_motherboard", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysHwMotherboard extends SystemComponent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="motherboard_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * @var \Ehann\Bundle\OpenAwesomeBundle\Entity\System
     *
     * @ORM\ManyToOne(targetEntity="Ehann\Bundle\OpenAwesomeBundle\Entity\System")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="system_id", referencedColumnName="system_id")
     * })
     */
    private $system;

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
     * @param int $memorySlots
     */
    public function setMemorySlots($memorySlots)
    {
        $this->memorySlots = $memorySlots;
    }

    /**
     * @return int
     */
    public function getMemorySlots()
    {
        return $this->memorySlots;
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
     * @param int $processorSlots
     */
    public function setProcessorSlots($processorSlots)
    {
        $this->processorSlots = $processorSlots;
    }

    /**
     * @return int
     */
    public function getProcessorSlots()
    {
        return $this->processorSlots;
    }

    /**
     * @param string $processorType
     */
    public function setProcessorType($processorType)
    {
        $this->processorType = $processorType;
    }

    /**
     * @return string
     */
    public function getProcessorType()
    {
        return $this->processorType;
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

<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysHwProcessor
 *
 * @ORM\Table(name="sys_hw_processor", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysHwProcessor extends SystemComponent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="processor_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="processor_cores", type="integer", nullable=false)
     */
    private $cores;

    /**
     * @var string
     *
     * @ORM\Column(name="processor_description", type="string", length=100, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="processor_speed", type="integer", nullable=false)
     */
    private $speed;

    /**
     * @var string
     *
     * @ORM\Column(name="processor_manufacturer", type="string", length=100, nullable=false)
     */
    private $manufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="processor_power_management_supported", type="string", length=20, nullable=false)
     */
    private $powerManagementSupported;

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
     * @param int $cores
     */
    public function setCores($cores)
    {
        $this->cores = $cores;
    }

    /**
     * @return int
     */
    public function getCores()
    {
        return $this->cores;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
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
     * @param string $powerManagementSupported
     */
    public function setPowerManagementSupported($powerManagementSupported)
    {
        $this->powerManagementSupported = $powerManagementSupported;
    }

    /**
     * @return string
     */
    public function getPowerManagementSupported()
    {
        return $this->powerManagementSupported;
    }

    /**
     * @param int $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
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

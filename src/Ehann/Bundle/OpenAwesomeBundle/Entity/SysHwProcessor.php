<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysHwProcessor
 *
 * @ORM\Table(name="sys_hw_processor", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysHwProcessor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="processor_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $processorId;

    /**
     * @var integer
     *
     * @ORM\Column(name="processor_cores", type="integer", nullable=false)
     */
    private $processorCores;

    /**
     * @var string
     *
     * @ORM\Column(name="processor_description", type="string", length=100, nullable=false)
     */
    private $processorDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="processor_speed", type="integer", nullable=false)
     */
    private $processorSpeed;

    /**
     * @var string
     *
     * @ORM\Column(name="processor_manufacturer", type="string", length=100, nullable=false)
     */
    private $processorManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="processor_power_management_supported", type="string", length=20, nullable=false)
     */
    private $processorPowerManagementSupported;

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
     * Get processorId
     *
     * @return integer 
     */
    public function getProcessorId()
    {
        return $this->processorId;
    }

    /**
     * Set processorCores
     *
     * @param integer $processorCores
     * @return SysHwProcessor
     */
    public function setProcessorCores($processorCores)
    {
        $this->processorCores = $processorCores;

        return $this;
    }

    /**
     * Get processorCores
     *
     * @return integer 
     */
    public function getProcessorCores()
    {
        return $this->processorCores;
    }

    /**
     * Set processorDescription
     *
     * @param string $processorDescription
     * @return SysHwProcessor
     */
    public function setProcessorDescription($processorDescription)
    {
        $this->processorDescription = $processorDescription;

        return $this;
    }

    /**
     * Get processorDescription
     *
     * @return string 
     */
    public function getProcessorDescription()
    {
        return $this->processorDescription;
    }

    /**
     * Set processorSpeed
     *
     * @param integer $processorSpeed
     * @return SysHwProcessor
     */
    public function setProcessorSpeed($processorSpeed)
    {
        $this->processorSpeed = $processorSpeed;

        return $this;
    }

    /**
     * Get processorSpeed
     *
     * @return integer 
     */
    public function getProcessorSpeed()
    {
        return $this->processorSpeed;
    }

    /**
     * Set processorManufacturer
     *
     * @param string $processorManufacturer
     * @return SysHwProcessor
     */
    public function setProcessorManufacturer($processorManufacturer)
    {
        $this->processorManufacturer = $processorManufacturer;

        return $this;
    }

    /**
     * Get processorManufacturer
     *
     * @return string 
     */
    public function getProcessorManufacturer()
    {
        return $this->processorManufacturer;
    }

    /**
     * Set processorPowerManagementSupported
     *
     * @param string $processorPowerManagementSupported
     * @return SysHwProcessor
     */
    public function setProcessorPowerManagementSupported($processorPowerManagementSupported)
    {
        $this->processorPowerManagementSupported = $processorPowerManagementSupported;

        return $this;
    }

    /**
     * Get processorPowerManagementSupported
     *
     * @return string 
     */
    public function getProcessorPowerManagementSupported()
    {
        return $this->processorPowerManagementSupported;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysHwProcessor
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
     * @return SysHwProcessor
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
     * @return SysHwProcessor
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

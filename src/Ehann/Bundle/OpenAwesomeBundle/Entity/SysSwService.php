<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSwService
 *
 * @ORM\Table(name="sys_sw_service", indexes={@ORM\Index(name="system_id", columns={"system_id"}), @ORM\Index(name="timestamp", columns={"timestamp"}), @ORM\Index(name="first_timestamp", columns={"first_timestamp"}), @ORM\Index(name="service_name", columns={"service_name"}), @ORM\Index(name="service_display_name", columns={"service_display_name"})})
 * @ORM\Entity
 */
class SysSwService
{
    /**
     * @var integer
     *
     * @ORM\Column(name="service_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $serviceId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="service_display_name", type="string", length=100, nullable=false)
     */
    private $serviceDisplayName;

    /**
     * @var string
     *
     * @ORM\Column(name="service_name", type="string", length=100, nullable=false)
     */
    private $serviceName;

    /**
     * @var string
     *
     * @ORM\Column(name="service_path_name", type="text", nullable=false)
     */
    private $servicePathName;

    /**
     * @var string
     *
     * @ORM\Column(name="service_started", type="string", length=10, nullable=false)
     */
    private $serviceStarted;

    /**
     * @var string
     *
     * @ORM\Column(name="service_start_name", type="string", length=100, nullable=false)
     */
    private $serviceStartName;

    /**
     * @var string
     *
     * @ORM\Column(name="service_start_mode", type="string", length=10, nullable=false)
     */
    private $serviceStartMode;

    /**
     * @var string
     *
     * @ORM\Column(name="service_state", type="string", length=20, nullable=false)
     */
    private $serviceState;

    /**
     * @var string
     *
     * @ORM\Column(name="service_count", type="string", length=5, nullable=false)
     */
    private $serviceCount;

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
     * Get serviceId
     *
     * @return integer 
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return SysSwService
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set serviceDisplayName
     *
     * @param string $serviceDisplayName
     * @return SysSwService
     */
    public function setServiceDisplayName($serviceDisplayName)
    {
        $this->serviceDisplayName = $serviceDisplayName;

        return $this;
    }

    /**
     * Get serviceDisplayName
     *
     * @return string 
     */
    public function getServiceDisplayName()
    {
        return $this->serviceDisplayName;
    }

    /**
     * Set serviceName
     *
     * @param string $serviceName
     * @return SysSwService
     */
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;

        return $this;
    }

    /**
     * Get serviceName
     *
     * @return string 
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * Set servicePathName
     *
     * @param string $servicePathName
     * @return SysSwService
     */
    public function setServicePathName($servicePathName)
    {
        $this->servicePathName = $servicePathName;

        return $this;
    }

    /**
     * Get servicePathName
     *
     * @return string 
     */
    public function getServicePathName()
    {
        return $this->servicePathName;
    }

    /**
     * Set serviceStarted
     *
     * @param string $serviceStarted
     * @return SysSwService
     */
    public function setServiceStarted($serviceStarted)
    {
        $this->serviceStarted = $serviceStarted;

        return $this;
    }

    /**
     * Get serviceStarted
     *
     * @return string 
     */
    public function getServiceStarted()
    {
        return $this->serviceStarted;
    }

    /**
     * Set serviceStartName
     *
     * @param string $serviceStartName
     * @return SysSwService
     */
    public function setServiceStartName($serviceStartName)
    {
        $this->serviceStartName = $serviceStartName;

        return $this;
    }

    /**
     * Get serviceStartName
     *
     * @return string 
     */
    public function getServiceStartName()
    {
        return $this->serviceStartName;
    }

    /**
     * Set serviceStartMode
     *
     * @param string $serviceStartMode
     * @return SysSwService
     */
    public function setServiceStartMode($serviceStartMode)
    {
        $this->serviceStartMode = $serviceStartMode;

        return $this;
    }

    /**
     * Get serviceStartMode
     *
     * @return string 
     */
    public function getServiceStartMode()
    {
        return $this->serviceStartMode;
    }

    /**
     * Set serviceState
     *
     * @param string $serviceState
     * @return SysSwService
     */
    public function setServiceState($serviceState)
    {
        $this->serviceState = $serviceState;

        return $this;
    }

    /**
     * Get serviceState
     *
     * @return string 
     */
    public function getServiceState()
    {
        return $this->serviceState;
    }

    /**
     * Set serviceCount
     *
     * @param string $serviceCount
     * @return SysSwService
     */
    public function setServiceCount($serviceCount)
    {
        $this->serviceCount = $serviceCount;

        return $this;
    }

    /**
     * Get serviceCount
     *
     * @return string 
     */
    public function getServiceCount()
    {
        return $this->serviceCount;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysSwService
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
     * @return SysSwService
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
     * @return SysSwService
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

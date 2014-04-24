<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSwPrintQueue
 *
 * @ORM\Table(name="sys_sw_print_queue", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysSwPrintQueue
{
    /**
     * @var integer
     *
     * @ORM\Column(name="queue_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $queueId;

    /**
     * @var string
     *
     * @ORM\Column(name="queue_system_key", type="string", length=100, nullable=false)
     */
    private $queueSystemKey;

    /**
     * @var string
     *
     * @ORM\Column(name="queue_name", type="string", length=100, nullable=false)
     */
    private $queueName;

    /**
     * @var string
     *
     * @ORM\Column(name="queue_port_name", type="string", length=100, nullable=false)
     */
    private $queuePortName;

    /**
     * @var string
     *
     * @ORM\Column(name="queue_ip_address", type="string", length=100, nullable=false)
     */
    private $queueIpAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="queue_description", type="string", length=100, nullable=false)
     */
    private $queueDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="queue_model", type="string", length=100, nullable=false)
     */
    private $queueModel;

    /**
     * @var string
     *
     * @ORM\Column(name="queue_manufacturer", type="string", length=100, nullable=false)
     */
    private $queueManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="queue_shared", type="string", length=100, nullable=false)
     */
    private $queueShared;

    /**
     * @var string
     *
     * @ORM\Column(name="queue_shared_name", type="string", length=100, nullable=false)
     */
    private $queueSharedName;

    /**
     * @var string
     *
     * @ORM\Column(name="queue_location", type="string", length=100, nullable=false)
     */
    private $queueLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="queue_color", type="string", length=100, nullable=false)
     */
    private $queueColor;

    /**
     * @var string
     *
     * @ORM\Column(name="queue_duplex", type="string", length=100, nullable=false)
     */
    private $queueDuplex;

    /**
     * @var string
     *
     * @ORM\Column(name="queue_type", type="string", nullable=false)
     */
    private $queueType;

    /**
     * @var string
     *
     * @ORM\Column(name="queue_connection_status", type="string", length=100, nullable=false)
     */
    private $queueConnectionStatus;

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
     * Get queueId
     *
     * @return integer 
     */
    public function getQueueId()
    {
        return $this->queueId;
    }

    /**
     * Set queueSystemKey
     *
     * @param string $queueSystemKey
     * @return SysSwPrintQueue
     */
    public function setQueueSystemKey($queueSystemKey)
    {
        $this->queueSystemKey = $queueSystemKey;

        return $this;
    }

    /**
     * Get queueSystemKey
     *
     * @return string 
     */
    public function getQueueSystemKey()
    {
        return $this->queueSystemKey;
    }

    /**
     * Set queueName
     *
     * @param string $queueName
     * @return SysSwPrintQueue
     */
    public function setQueueName($queueName)
    {
        $this->queueName = $queueName;

        return $this;
    }

    /**
     * Get queueName
     *
     * @return string 
     */
    public function getQueueName()
    {
        return $this->queueName;
    }

    /**
     * Set queuePortName
     *
     * @param string $queuePortName
     * @return SysSwPrintQueue
     */
    public function setQueuePortName($queuePortName)
    {
        $this->queuePortName = $queuePortName;

        return $this;
    }

    /**
     * Get queuePortName
     *
     * @return string 
     */
    public function getQueuePortName()
    {
        return $this->queuePortName;
    }

    /**
     * Set queueIpAddress
     *
     * @param string $queueIpAddress
     * @return SysSwPrintQueue
     */
    public function setQueueIpAddress($queueIpAddress)
    {
        $this->queueIpAddress = $queueIpAddress;

        return $this;
    }

    /**
     * Get queueIpAddress
     *
     * @return string 
     */
    public function getQueueIpAddress()
    {
        return $this->queueIpAddress;
    }

    /**
     * Set queueDescription
     *
     * @param string $queueDescription
     * @return SysSwPrintQueue
     */
    public function setQueueDescription($queueDescription)
    {
        $this->queueDescription = $queueDescription;

        return $this;
    }

    /**
     * Get queueDescription
     *
     * @return string 
     */
    public function getQueueDescription()
    {
        return $this->queueDescription;
    }

    /**
     * Set queueModel
     *
     * @param string $queueModel
     * @return SysSwPrintQueue
     */
    public function setQueueModel($queueModel)
    {
        $this->queueModel = $queueModel;

        return $this;
    }

    /**
     * Get queueModel
     *
     * @return string 
     */
    public function getQueueModel()
    {
        return $this->queueModel;
    }

    /**
     * Set queueManufacturer
     *
     * @param string $queueManufacturer
     * @return SysSwPrintQueue
     */
    public function setQueueManufacturer($queueManufacturer)
    {
        $this->queueManufacturer = $queueManufacturer;

        return $this;
    }

    /**
     * Get queueManufacturer
     *
     * @return string 
     */
    public function getQueueManufacturer()
    {
        return $this->queueManufacturer;
    }

    /**
     * Set queueShared
     *
     * @param string $queueShared
     * @return SysSwPrintQueue
     */
    public function setQueueShared($queueShared)
    {
        $this->queueShared = $queueShared;

        return $this;
    }

    /**
     * Get queueShared
     *
     * @return string 
     */
    public function getQueueShared()
    {
        return $this->queueShared;
    }

    /**
     * Set queueSharedName
     *
     * @param string $queueSharedName
     * @return SysSwPrintQueue
     */
    public function setQueueSharedName($queueSharedName)
    {
        $this->queueSharedName = $queueSharedName;

        return $this;
    }

    /**
     * Get queueSharedName
     *
     * @return string 
     */
    public function getQueueSharedName()
    {
        return $this->queueSharedName;
    }

    /**
     * Set queueLocation
     *
     * @param string $queueLocation
     * @return SysSwPrintQueue
     */
    public function setQueueLocation($queueLocation)
    {
        $this->queueLocation = $queueLocation;

        return $this;
    }

    /**
     * Get queueLocation
     *
     * @return string 
     */
    public function getQueueLocation()
    {
        return $this->queueLocation;
    }

    /**
     * Set queueColor
     *
     * @param string $queueColor
     * @return SysSwPrintQueue
     */
    public function setQueueColor($queueColor)
    {
        $this->queueColor = $queueColor;

        return $this;
    }

    /**
     * Get queueColor
     *
     * @return string 
     */
    public function getQueueColor()
    {
        return $this->queueColor;
    }

    /**
     * Set queueDuplex
     *
     * @param string $queueDuplex
     * @return SysSwPrintQueue
     */
    public function setQueueDuplex($queueDuplex)
    {
        $this->queueDuplex = $queueDuplex;

        return $this;
    }

    /**
     * Get queueDuplex
     *
     * @return string 
     */
    public function getQueueDuplex()
    {
        return $this->queueDuplex;
    }

    /**
     * Set queueType
     *
     * @param string $queueType
     * @return SysSwPrintQueue
     */
    public function setQueueType($queueType)
    {
        $this->queueType = $queueType;

        return $this;
    }

    /**
     * Get queueType
     *
     * @return string 
     */
    public function getQueueType()
    {
        return $this->queueType;
    }

    /**
     * Set queueConnectionStatus
     *
     * @param string $queueConnectionStatus
     * @return SysSwPrintQueue
     */
    public function setQueueConnectionStatus($queueConnectionStatus)
    {
        $this->queueConnectionStatus = $queueConnectionStatus;

        return $this;
    }

    /**
     * Get queueConnectionStatus
     *
     * @return string 
     */
    public function getQueueConnectionStatus()
    {
        return $this->queueConnectionStatus;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysSwPrintQueue
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
     * @return SysSwPrintQueue
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
     * @return SysSwPrintQueue
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

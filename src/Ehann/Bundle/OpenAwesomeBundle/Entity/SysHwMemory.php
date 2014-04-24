<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysHwMemory
 *
 * @ORM\Table(name="sys_hw_memory", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysHwMemory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="memory_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $memoryId;

    /**
     * @var string
     *
     * @ORM\Column(name="memory_bank", type="string", length=100, nullable=false)
     */
    private $memoryBank;

    /**
     * @var string
     *
     * @ORM\Column(name="memory_type", type="string", length=100, nullable=false)
     */
    private $memoryType;

    /**
     * @var string
     *
     * @ORM\Column(name="memory_form_factor", type="string", length=100, nullable=false)
     */
    private $memoryFormFactor;

    /**
     * @var string
     *
     * @ORM\Column(name="memory_detail", type="string", length=100, nullable=false)
     */
    private $memoryDetail;

    /**
     * @var integer
     *
     * @ORM\Column(name="memory_capacity", type="integer", nullable=false)
     */
    private $memoryCapacity;

    /**
     * @var integer
     *
     * @ORM\Column(name="memory_speed", type="integer", nullable=false)
     */
    private $memorySpeed;

    /**
     * @var string
     *
     * @ORM\Column(name="memory_tag", type="string", length=100, nullable=false)
     */
    private $memoryTag;

    /**
     * @var string
     *
     * @ORM\Column(name="memory_serial", type="string", length=100, nullable=false)
     */
    private $memorySerial;

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
     * Get memoryId
     *
     * @return integer 
     */
    public function getMemoryId()
    {
        return $this->memoryId;
    }

    /**
     * Set memoryBank
     *
     * @param string $memoryBank
     * @return SysHwMemory
     */
    public function setMemoryBank($memoryBank)
    {
        $this->memoryBank = $memoryBank;

        return $this;
    }

    /**
     * Get memoryBank
     *
     * @return string 
     */
    public function getMemoryBank()
    {
        return $this->memoryBank;
    }

    /**
     * Set memoryType
     *
     * @param string $memoryType
     * @return SysHwMemory
     */
    public function setMemoryType($memoryType)
    {
        $this->memoryType = $memoryType;

        return $this;
    }

    /**
     * Get memoryType
     *
     * @return string 
     */
    public function getMemoryType()
    {
        return $this->memoryType;
    }

    /**
     * Set memoryFormFactor
     *
     * @param string $memoryFormFactor
     * @return SysHwMemory
     */
    public function setMemoryFormFactor($memoryFormFactor)
    {
        $this->memoryFormFactor = $memoryFormFactor;

        return $this;
    }

    /**
     * Get memoryFormFactor
     *
     * @return string 
     */
    public function getMemoryFormFactor()
    {
        return $this->memoryFormFactor;
    }

    /**
     * Set memoryDetail
     *
     * @param string $memoryDetail
     * @return SysHwMemory
     */
    public function setMemoryDetail($memoryDetail)
    {
        $this->memoryDetail = $memoryDetail;

        return $this;
    }

    /**
     * Get memoryDetail
     *
     * @return string 
     */
    public function getMemoryDetail()
    {
        return $this->memoryDetail;
    }

    /**
     * Set memoryCapacity
     *
     * @param integer $memoryCapacity
     * @return SysHwMemory
     */
    public function setMemoryCapacity($memoryCapacity)
    {
        $this->memoryCapacity = $memoryCapacity;

        return $this;
    }

    /**
     * Get memoryCapacity
     *
     * @return integer 
     */
    public function getMemoryCapacity()
    {
        return $this->memoryCapacity;
    }

    /**
     * Set memorySpeed
     *
     * @param integer $memorySpeed
     * @return SysHwMemory
     */
    public function setMemorySpeed($memorySpeed)
    {
        $this->memorySpeed = $memorySpeed;

        return $this;
    }

    /**
     * Get memorySpeed
     *
     * @return integer 
     */
    public function getMemorySpeed()
    {
        return $this->memorySpeed;
    }

    /**
     * Set memoryTag
     *
     * @param string $memoryTag
     * @return SysHwMemory
     */
    public function setMemoryTag($memoryTag)
    {
        $this->memoryTag = $memoryTag;

        return $this;
    }

    /**
     * Get memoryTag
     *
     * @return string 
     */
    public function getMemoryTag()
    {
        return $this->memoryTag;
    }

    /**
     * Set memorySerial
     *
     * @param string $memorySerial
     * @return SysHwMemory
     */
    public function setMemorySerial($memorySerial)
    {
        $this->memorySerial = $memorySerial;

        return $this;
    }

    /**
     * Get memorySerial
     *
     * @return string 
     */
    public function getMemorySerial()
    {
        return $this->memorySerial;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysHwMemory
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
     * @return SysHwMemory
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
     * @return SysHwMemory
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

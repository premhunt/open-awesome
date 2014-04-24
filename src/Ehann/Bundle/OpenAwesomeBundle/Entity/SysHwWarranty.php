<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysHwWarranty
 *
 * @ORM\Table(name="sys_hw_warranty", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysHwWarranty
{
    /**
     * @var integer
     *
     * @ORM\Column(name="warranty_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $warrantyId;

    /**
     * @var string
     *
     * @ORM\Column(name="warranty_provider", type="string", length=200, nullable=false)
     */
    private $warrantyProvider;

    /**
     * @var string
     *
     * @ORM\Column(name="warranty_type", type="string", length=100, nullable=false)
     */
    private $warrantyType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="warranty_start", type="datetime", nullable=false)
     */
    private $warrantyStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="warranty_end", type="datetime", nullable=false)
     */
    private $warrantyEnd;

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
     * Get warrantyId
     *
     * @return integer 
     */
    public function getWarrantyId()
    {
        return $this->warrantyId;
    }

    /**
     * Set warrantyProvider
     *
     * @param string $warrantyProvider
     * @return SysHwWarranty
     */
    public function setWarrantyProvider($warrantyProvider)
    {
        $this->warrantyProvider = $warrantyProvider;

        return $this;
    }

    /**
     * Get warrantyProvider
     *
     * @return string 
     */
    public function getWarrantyProvider()
    {
        return $this->warrantyProvider;
    }

    /**
     * Set warrantyType
     *
     * @param string $warrantyType
     * @return SysHwWarranty
     */
    public function setWarrantyType($warrantyType)
    {
        $this->warrantyType = $warrantyType;

        return $this;
    }

    /**
     * Get warrantyType
     *
     * @return string 
     */
    public function getWarrantyType()
    {
        return $this->warrantyType;
    }

    /**
     * Set warrantyStart
     *
     * @param \DateTime $warrantyStart
     * @return SysHwWarranty
     */
    public function setWarrantyStart($warrantyStart)
    {
        $this->warrantyStart = $warrantyStart;

        return $this;
    }

    /**
     * Get warrantyStart
     *
     * @return \DateTime 
     */
    public function getWarrantyStart()
    {
        return $this->warrantyStart;
    }

    /**
     * Set warrantyEnd
     *
     * @param \DateTime $warrantyEnd
     * @return SysHwWarranty
     */
    public function setWarrantyEnd($warrantyEnd)
    {
        $this->warrantyEnd = $warrantyEnd;

        return $this;
    }

    /**
     * Get warrantyEnd
     *
     * @return \DateTime 
     */
    public function getWarrantyEnd()
    {
        return $this->warrantyEnd;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysHwWarranty
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
     * @return SysHwWarranty
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
     * @return SysHwWarranty
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

<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSwRoute
 *
 * @ORM\Table(name="sys_sw_route", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysSwRoute
{
    /**
     * @var integer
     *
     * @ORM\Column(name="route_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $routeId;

    /**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", length=20, nullable=false)
     */
    private $destination;

    /**
     * @var string
     *
     * @ORM\Column(name="mask", type="string", length=20, nullable=false)
     */
    private $mask;

    /**
     * @var string
     *
     * @ORM\Column(name="metric", type="string", length=10, nullable=false)
     */
    private $metric;

    /**
     * @var string
     *
     * @ORM\Column(name="next_hop", type="string", length=20, nullable=false)
     */
    private $nextHop;

    /**
     * @var string
     *
     * @ORM\Column(name="protocol", type="string", length=10, nullable=false)
     */
    private $protocol;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=10, nullable=false)
     */
    private $type;

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
     * Get routeId
     *
     * @return integer 
     */
    public function getRouteId()
    {
        return $this->routeId;
    }

    /**
     * Set destination
     *
     * @param string $destination
     * @return SysSwRoute
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return string 
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set mask
     *
     * @param string $mask
     * @return SysSwRoute
     */
    public function setMask($mask)
    {
        $this->mask = $mask;

        return $this;
    }

    /**
     * Get mask
     *
     * @return string 
     */
    public function getMask()
    {
        return $this->mask;
    }

    /**
     * Set metric
     *
     * @param string $metric
     * @return SysSwRoute
     */
    public function setMetric($metric)
    {
        $this->metric = $metric;

        return $this;
    }

    /**
     * Get metric
     *
     * @return string 
     */
    public function getMetric()
    {
        return $this->metric;
    }

    /**
     * Set nextHop
     *
     * @param string $nextHop
     * @return SysSwRoute
     */
    public function setNextHop($nextHop)
    {
        $this->nextHop = $nextHop;

        return $this;
    }

    /**
     * Get nextHop
     *
     * @return string 
     */
    public function getNextHop()
    {
        return $this->nextHop;
    }

    /**
     * Set protocol
     *
     * @param string $protocol
     * @return SysSwRoute
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;

        return $this;
    }

    /**
     * Get protocol
     *
     * @return string 
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return SysSwRoute
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysSwRoute
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
     * @return SysSwRoute
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
     * @return SysSwRoute
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

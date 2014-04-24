<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OaSwitchPorts
 *
 * @ORM\Table(name="oa_switch_ports", indexes={@ORM\Index(name="system_id", columns={"system_id"}), @ORM\Index(name="switch_system_id", columns={"switch_system_id"})})
 * @ORM\Entity
 */
class OaSwitchPorts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="switch_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $switchId;

    /**
     * @var string
     *
     * @ORM\Column(name="switch_port", type="string", length=100, nullable=false)
     */
    private $switchPort;

    /**
     * @var string
     *
     * @ORM\Column(name="timestamp", type="string", length=200, nullable=false)
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
     *   @ORM\JoinColumn(name="switch_system_id", referencedColumnName="system_id")
     * })
     */
    private $switchSystem;

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
     * Get switchId
     *
     * @return integer 
     */
    public function getSwitchId()
    {
        return $this->switchId;
    }

    /**
     * Set switchPort
     *
     * @param string $switchPort
     * @return OaSwitchPorts
     */
    public function setSwitchPort($switchPort)
    {
        $this->switchPort = $switchPort;

        return $this;
    }

    /**
     * Get switchPort
     *
     * @return string 
     */
    public function getSwitchPort()
    {
        return $this->switchPort;
    }

    /**
     * Set timestamp
     *
     * @param string $timestamp
     * @return OaSwitchPorts
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return string 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set firstTimestamp
     *
     * @param \DateTime $firstTimestamp
     * @return OaSwitchPorts
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
     * Set switchSystem
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\System $switchSystem
     * @return OaSwitchPorts
     */
    public function setSwitchSystem(\Ehann\Bundle\OpenAwesomeBundle\Entity\System $switchSystem = null)
    {
        $this->switchSystem = $switchSystem;

        return $this;
    }

    /**
     * Get switchSystem
     *
     * @return \Ehann\Bundle\OpenAwesomeBundle\Entity\System 
     */
    public function getSwitchSystem()
    {
        return $this->switchSystem;
    }

    /**
     * Set system
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\System $system
     * @return OaSwitchPorts
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

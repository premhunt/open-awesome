<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSwDns
 *
 * @ORM\Table(name="sys_sw_dns", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysSwDns
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dns_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dnsId;

    /**
     * @var string
     *
     * @ORM\Column(name="dns_name", type="string", length=100, nullable=false)
     */
    private $dnsName;

    /**
     * @var string
     *
     * @ORM\Column(name="dns_full_name", type="string", length=200, nullable=false)
     */
    private $dnsFullName;

    /**
     * @var string
     *
     * @ORM\Column(name="dns_ip_address", type="string", length=30, nullable=false)
     */
    private $dnsIpAddress;

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
     * Get dnsId
     *
     * @return integer 
     */
    public function getDnsId()
    {
        return $this->dnsId;
    }

    /**
     * Set dnsName
     *
     * @param string $dnsName
     * @return SysSwDns
     */
    public function setDnsName($dnsName)
    {
        $this->dnsName = $dnsName;

        return $this;
    }

    /**
     * Get dnsName
     *
     * @return string 
     */
    public function getDnsName()
    {
        return $this->dnsName;
    }

    /**
     * Set dnsFullName
     *
     * @param string $dnsFullName
     * @return SysSwDns
     */
    public function setDnsFullName($dnsFullName)
    {
        $this->dnsFullName = $dnsFullName;

        return $this;
    }

    /**
     * Get dnsFullName
     *
     * @return string 
     */
    public function getDnsFullName()
    {
        return $this->dnsFullName;
    }

    /**
     * Set dnsIpAddress
     *
     * @param string $dnsIpAddress
     * @return SysSwDns
     */
    public function setDnsIpAddress($dnsIpAddress)
    {
        $this->dnsIpAddress = $dnsIpAddress;

        return $this;
    }

    /**
     * Get dnsIpAddress
     *
     * @return string 
     */
    public function getDnsIpAddress()
    {
        return $this->dnsIpAddress;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysSwDns
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
     * @return SysSwDns
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
     * @return SysSwDns
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

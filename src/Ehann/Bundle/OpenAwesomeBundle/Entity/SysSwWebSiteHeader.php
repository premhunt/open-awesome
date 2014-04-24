<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSwWebSiteHeader
 *
 * @ORM\Table(name="sys_sw_web_site_header", indexes={@ORM\Index(name="site_id", columns={"site_id"}), @ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysSwWebSiteHeader
{
    /**
     * @var integer
     *
     * @ORM\Column(name="header_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $headerId;

    /**
     * @var string
     *
     * @ORM\Column(name="header_address", type="string", length=30, nullable=false)
     */
    private $headerAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="header_port", type="string", length=100, nullable=false)
     */
    private $headerPort;

    /**
     * @var string
     *
     * @ORM\Column(name="header_hostname", type="string", length=100, nullable=false)
     */
    private $headerHostname;

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
     * @var \Ehann\Bundle\OpenAwesomeBundle\Entity\SysSwWebSite
     *
     * @ORM\ManyToOne(targetEntity="Ehann\Bundle\OpenAwesomeBundle\Entity\SysSwWebSite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="site_id", referencedColumnName="site_id")
     * })
     */
    private $site;



    /**
     * Get headerId
     *
     * @return integer 
     */
    public function getHeaderId()
    {
        return $this->headerId;
    }

    /**
     * Set headerAddress
     *
     * @param string $headerAddress
     * @return SysSwWebSiteHeader
     */
    public function setHeaderAddress($headerAddress)
    {
        $this->headerAddress = $headerAddress;

        return $this;
    }

    /**
     * Get headerAddress
     *
     * @return string 
     */
    public function getHeaderAddress()
    {
        return $this->headerAddress;
    }

    /**
     * Set headerPort
     *
     * @param string $headerPort
     * @return SysSwWebSiteHeader
     */
    public function setHeaderPort($headerPort)
    {
        $this->headerPort = $headerPort;

        return $this;
    }

    /**
     * Get headerPort
     *
     * @return string 
     */
    public function getHeaderPort()
    {
        return $this->headerPort;
    }

    /**
     * Set headerHostname
     *
     * @param string $headerHostname
     * @return SysSwWebSiteHeader
     */
    public function setHeaderHostname($headerHostname)
    {
        $this->headerHostname = $headerHostname;

        return $this;
    }

    /**
     * Get headerHostname
     *
     * @return string 
     */
    public function getHeaderHostname()
    {
        return $this->headerHostname;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysSwWebSiteHeader
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
     * @return SysSwWebSiteHeader
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
     * @return SysSwWebSiteHeader
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

    /**
     * Set site
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\SysSwWebSite $site
     * @return SysSwWebSiteHeader
     */
    public function setSite(\Ehann\Bundle\OpenAwesomeBundle\Entity\SysSwWebSite $site = null)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return \Ehann\Bundle\OpenAwesomeBundle\Entity\SysSwWebSite 
     */
    public function getSite()
    {
        return $this->site;
    }
}

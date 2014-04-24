<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSwWebSiteVirtual
 *
 * @ORM\Table(name="sys_sw_web_site_virtual", indexes={@ORM\Index(name="site_id", columns={"site_id"}), @ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysSwWebSiteVirtual
{
    /**
     * @var integer
     *
     * @ORM\Column(name="virtual_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $virtualId;

    /**
     * @var string
     *
     * @ORM\Column(name="virtual_name", type="string", length=100, nullable=false)
     */
    private $virtualName;

    /**
     * @var string
     *
     * @ORM\Column(name="virtual_path", type="string", length=100, nullable=false)
     */
    private $virtualPath;

    /**
     * @var string
     *
     * @ORM\Column(name="virtual_app_pool", type="string", length=100, nullable=false)
     */
    private $virtualAppPool;

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
     * Get virtualId
     *
     * @return integer 
     */
    public function getVirtualId()
    {
        return $this->virtualId;
    }

    /**
     * Set virtualName
     *
     * @param string $virtualName
     * @return SysSwWebSiteVirtual
     */
    public function setVirtualName($virtualName)
    {
        $this->virtualName = $virtualName;

        return $this;
    }

    /**
     * Get virtualName
     *
     * @return string 
     */
    public function getVirtualName()
    {
        return $this->virtualName;
    }

    /**
     * Set virtualPath
     *
     * @param string $virtualPath
     * @return SysSwWebSiteVirtual
     */
    public function setVirtualPath($virtualPath)
    {
        $this->virtualPath = $virtualPath;

        return $this;
    }

    /**
     * Get virtualPath
     *
     * @return string 
     */
    public function getVirtualPath()
    {
        return $this->virtualPath;
    }

    /**
     * Set virtualAppPool
     *
     * @param string $virtualAppPool
     * @return SysSwWebSiteVirtual
     */
    public function setVirtualAppPool($virtualAppPool)
    {
        $this->virtualAppPool = $virtualAppPool;

        return $this;
    }

    /**
     * Get virtualAppPool
     *
     * @return string 
     */
    public function getVirtualAppPool()
    {
        return $this->virtualAppPool;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysSwWebSiteVirtual
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
     * @return SysSwWebSiteVirtual
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
     * @return SysSwWebSiteVirtual
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
     * @return SysSwWebSiteVirtual
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

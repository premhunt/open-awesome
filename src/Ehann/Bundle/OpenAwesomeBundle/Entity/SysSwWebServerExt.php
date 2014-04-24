<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSwWebServerExt
 *
 * @ORM\Table(name="sys_sw_web_server_ext", indexes={@ORM\Index(name="webserver_id", columns={"webserver_id"}), @ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysSwWebServerExt
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ext_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $extId;

    /**
     * @var string
     *
     * @ORM\Column(name="ext_name", type="string", length=100, nullable=false)
     */
    private $extName;

    /**
     * @var string
     *
     * @ORM\Column(name="ext_path", type="string", length=100, nullable=false)
     */
    private $extPath;

    /**
     * @var string
     *
     * @ORM\Column(name="ext_access", type="string", length=100, nullable=false)
     */
    private $extAccess;

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
     * @var \Ehann\Bundle\OpenAwesomeBundle\Entity\SysSwWebServer
     *
     * @ORM\ManyToOne(targetEntity="Ehann\Bundle\OpenAwesomeBundle\Entity\SysSwWebServer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="webserver_id", referencedColumnName="webserver_id")
     * })
     */
    private $webserver;



    /**
     * Get extId
     *
     * @return integer 
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * Set extName
     *
     * @param string $extName
     * @return SysSwWebServerExt
     */
    public function setExtName($extName)
    {
        $this->extName = $extName;

        return $this;
    }

    /**
     * Get extName
     *
     * @return string 
     */
    public function getExtName()
    {
        return $this->extName;
    }

    /**
     * Set extPath
     *
     * @param string $extPath
     * @return SysSwWebServerExt
     */
    public function setExtPath($extPath)
    {
        $this->extPath = $extPath;

        return $this;
    }

    /**
     * Get extPath
     *
     * @return string 
     */
    public function getExtPath()
    {
        return $this->extPath;
    }

    /**
     * Set extAccess
     *
     * @param string $extAccess
     * @return SysSwWebServerExt
     */
    public function setExtAccess($extAccess)
    {
        $this->extAccess = $extAccess;

        return $this;
    }

    /**
     * Get extAccess
     *
     * @return string 
     */
    public function getExtAccess()
    {
        return $this->extAccess;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysSwWebServerExt
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
     * @return SysSwWebServerExt
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
     * @return SysSwWebServerExt
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
     * Set webserver
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\SysSwWebServer $webserver
     * @return SysSwWebServerExt
     */
    public function setWebserver(\Ehann\Bundle\OpenAwesomeBundle\Entity\SysSwWebServer $webserver = null)
    {
        $this->webserver = $webserver;

        return $this;
    }

    /**
     * Get webserver
     *
     * @return \Ehann\Bundle\OpenAwesomeBundle\Entity\SysSwWebServer 
     */
    public function getWebserver()
    {
        return $this->webserver;
    }
}

<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSwWebServer
 *
 * @ORM\Table(name="sys_sw_web_server", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysSwWebServer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="webserver_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $webserverId;

    /**
     * @var string
     *
     * @ORM\Column(name="webserver_type", type="string", length=100, nullable=false)
     */
    private $webserverType;

    /**
     * @var string
     *
     * @ORM\Column(name="webserver_version", type="string", length=100, nullable=false)
     */
    private $webserverVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="webserver_state", type="string", length=100, nullable=false)
     */
    private $webserverState;

    /**
     * @var string
     *
     * @ORM\Column(name="webserver_man_description", type="string", length=100, nullable=false)
     */
    private $webserverManDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="webserver_log_enabled", type="string", length=100, nullable=false)
     */
    private $webserverLogEnabled;

    /**
     * @var string
     *
     * @ORM\Column(name="webserver_log_dir", type="string", length=100, nullable=false)
     */
    private $webserverLogDir;

    /**
     * @var string
     *
     * @ORM\Column(name="webserver_log_format", type="string", length=100, nullable=false)
     */
    private $webserverLogFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="webserver_log_time_period", type="string", length=100, nullable=false)
     */
    private $webserverLogTimePeriod;

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
     * Get webserverId
     *
     * @return integer 
     */
    public function getWebserverId()
    {
        return $this->webserverId;
    }

    /**
     * Set webserverType
     *
     * @param string $webserverType
     * @return SysSwWebServer
     */
    public function setWebserverType($webserverType)
    {
        $this->webserverType = $webserverType;

        return $this;
    }

    /**
     * Get webserverType
     *
     * @return string 
     */
    public function getWebserverType()
    {
        return $this->webserverType;
    }

    /**
     * Set webserverVersion
     *
     * @param string $webserverVersion
     * @return SysSwWebServer
     */
    public function setWebserverVersion($webserverVersion)
    {
        $this->webserverVersion = $webserverVersion;

        return $this;
    }

    /**
     * Get webserverVersion
     *
     * @return string 
     */
    public function getWebserverVersion()
    {
        return $this->webserverVersion;
    }

    /**
     * Set webserverState
     *
     * @param string $webserverState
     * @return SysSwWebServer
     */
    public function setWebserverState($webserverState)
    {
        $this->webserverState = $webserverState;

        return $this;
    }

    /**
     * Get webserverState
     *
     * @return string 
     */
    public function getWebserverState()
    {
        return $this->webserverState;
    }

    /**
     * Set webserverManDescription
     *
     * @param string $webserverManDescription
     * @return SysSwWebServer
     */
    public function setWebserverManDescription($webserverManDescription)
    {
        $this->webserverManDescription = $webserverManDescription;

        return $this;
    }

    /**
     * Get webserverManDescription
     *
     * @return string 
     */
    public function getWebserverManDescription()
    {
        return $this->webserverManDescription;
    }

    /**
     * Set webserverLogEnabled
     *
     * @param string $webserverLogEnabled
     * @return SysSwWebServer
     */
    public function setWebserverLogEnabled($webserverLogEnabled)
    {
        $this->webserverLogEnabled = $webserverLogEnabled;

        return $this;
    }

    /**
     * Get webserverLogEnabled
     *
     * @return string 
     */
    public function getWebserverLogEnabled()
    {
        return $this->webserverLogEnabled;
    }

    /**
     * Set webserverLogDir
     *
     * @param string $webserverLogDir
     * @return SysSwWebServer
     */
    public function setWebserverLogDir($webserverLogDir)
    {
        $this->webserverLogDir = $webserverLogDir;

        return $this;
    }

    /**
     * Get webserverLogDir
     *
     * @return string 
     */
    public function getWebserverLogDir()
    {
        return $this->webserverLogDir;
    }

    /**
     * Set webserverLogFormat
     *
     * @param string $webserverLogFormat
     * @return SysSwWebServer
     */
    public function setWebserverLogFormat($webserverLogFormat)
    {
        $this->webserverLogFormat = $webserverLogFormat;

        return $this;
    }

    /**
     * Get webserverLogFormat
     *
     * @return string 
     */
    public function getWebserverLogFormat()
    {
        return $this->webserverLogFormat;
    }

    /**
     * Set webserverLogTimePeriod
     *
     * @param string $webserverLogTimePeriod
     * @return SysSwWebServer
     */
    public function setWebserverLogTimePeriod($webserverLogTimePeriod)
    {
        $this->webserverLogTimePeriod = $webserverLogTimePeriod;

        return $this;
    }

    /**
     * Get webserverLogTimePeriod
     *
     * @return string 
     */
    public function getWebserverLogTimePeriod()
    {
        return $this->webserverLogTimePeriod;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysSwWebServer
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
     * @return SysSwWebServer
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
     * @return SysSwWebServer
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

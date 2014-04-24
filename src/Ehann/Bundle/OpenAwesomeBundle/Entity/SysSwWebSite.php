<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSwWebSite
 *
 * @ORM\Table(name="sys_sw_web_site", indexes={@ORM\Index(name="webserver_id", columns={"webserver_id"}), @ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysSwWebSite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="site_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $siteId;

    /**
     * @var integer
     *
     * @ORM\Column(name="site_internal_id", type="integer", nullable=true)
     */
    private $siteInternalId;

    /**
     * @var string
     *
     * @ORM\Column(name="site_description", type="string", length=100, nullable=false)
     */
    private $siteDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="site_state", type="string", length=100, nullable=false)
     */
    private $siteState;

    /**
     * @var string
     *
     * @ORM\Column(name="site_logging", type="string", length=100, nullable=false)
     */
    private $siteLogging;

    /**
     * @var string
     *
     * @ORM\Column(name="site_log_format", type="string", length=100, nullable=false)
     */
    private $siteLogFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="site_log_directory", type="string", length=100, nullable=false)
     */
    private $siteLogDirectory;

    /**
     * @var string
     *
     * @ORM\Column(name="site_log_rotation", type="string", length=100, nullable=false)
     */
    private $siteLogRotation;

    /**
     * @var string
     *
     * @ORM\Column(name="site_secure_ip", type="string", length=100, nullable=false)
     */
    private $siteSecureIp;

    /**
     * @var string
     *
     * @ORM\Column(name="site_secure_port", type="string", length=100, nullable=false)
     */
    private $siteSecurePort;

    /**
     * @var string
     *
     * @ORM\Column(name="site_path", type="string", length=100, nullable=false)
     */
    private $sitePath;

    /**
     * @var string
     *
     * @ORM\Column(name="site_size", type="string", length=100, nullable=false)
     */
    private $siteSize;

    /**
     * @var string
     *
     * @ORM\Column(name="site_app_pool", type="string", length=100, nullable=false)
     */
    private $siteAppPool;

    /**
     * @var string
     *
     * @ORM\Column(name="site_directory_browsing", type="string", length=100, nullable=false)
     */
    private $siteDirectoryBrowsing;

    /**
     * @var string
     *
     * @ORM\Column(name="site_anon_user", type="string", length=100, nullable=false)
     */
    private $siteAnonUser;

    /**
     * @var string
     *
     * @ORM\Column(name="site_anon_auth", type="string", length=100, nullable=false)
     */
    private $siteAnonAuth;

    /**
     * @var string
     *
     * @ORM\Column(name="site_basic_auth", type="string", length=100, nullable=false)
     */
    private $siteBasicAuth;

    /**
     * @var string
     *
     * @ORM\Column(name="site_ntlm_auth", type="string", length=100, nullable=false)
     */
    private $siteNtlmAuth;

    /**
     * @var string
     *
     * @ORM\Column(name="site_ssl_enabled", type="string", length=100, nullable=false)
     */
    private $siteSslEnabled;

    /**
     * @var string
     *
     * @ORM\Column(name="site_ssl_128_enabled", type="string", length=100, nullable=false)
     */
    private $siteSsl128Enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="site_default_documents", type="string", length=100, nullable=false)
     */
    private $siteDefaultDocuments;

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
     * Get siteId
     *
     * @return integer 
     */
    public function getSiteId()
    {
        return $this->siteId;
    }

    /**
     * Set siteInternalId
     *
     * @param integer $siteInternalId
     * @return SysSwWebSite
     */
    public function setSiteInternalId($siteInternalId)
    {
        $this->siteInternalId = $siteInternalId;

        return $this;
    }

    /**
     * Get siteInternalId
     *
     * @return integer 
     */
    public function getSiteInternalId()
    {
        return $this->siteInternalId;
    }

    /**
     * Set siteDescription
     *
     * @param string $siteDescription
     * @return SysSwWebSite
     */
    public function setSiteDescription($siteDescription)
    {
        $this->siteDescription = $siteDescription;

        return $this;
    }

    /**
     * Get siteDescription
     *
     * @return string 
     */
    public function getSiteDescription()
    {
        return $this->siteDescription;
    }

    /**
     * Set siteState
     *
     * @param string $siteState
     * @return SysSwWebSite
     */
    public function setSiteState($siteState)
    {
        $this->siteState = $siteState;

        return $this;
    }

    /**
     * Get siteState
     *
     * @return string 
     */
    public function getSiteState()
    {
        return $this->siteState;
    }

    /**
     * Set siteLogging
     *
     * @param string $siteLogging
     * @return SysSwWebSite
     */
    public function setSiteLogging($siteLogging)
    {
        $this->siteLogging = $siteLogging;

        return $this;
    }

    /**
     * Get siteLogging
     *
     * @return string 
     */
    public function getSiteLogging()
    {
        return $this->siteLogging;
    }

    /**
     * Set siteLogFormat
     *
     * @param string $siteLogFormat
     * @return SysSwWebSite
     */
    public function setSiteLogFormat($siteLogFormat)
    {
        $this->siteLogFormat = $siteLogFormat;

        return $this;
    }

    /**
     * Get siteLogFormat
     *
     * @return string 
     */
    public function getSiteLogFormat()
    {
        return $this->siteLogFormat;
    }

    /**
     * Set siteLogDirectory
     *
     * @param string $siteLogDirectory
     * @return SysSwWebSite
     */
    public function setSiteLogDirectory($siteLogDirectory)
    {
        $this->siteLogDirectory = $siteLogDirectory;

        return $this;
    }

    /**
     * Get siteLogDirectory
     *
     * @return string 
     */
    public function getSiteLogDirectory()
    {
        return $this->siteLogDirectory;
    }

    /**
     * Set siteLogRotation
     *
     * @param string $siteLogRotation
     * @return SysSwWebSite
     */
    public function setSiteLogRotation($siteLogRotation)
    {
        $this->siteLogRotation = $siteLogRotation;

        return $this;
    }

    /**
     * Get siteLogRotation
     *
     * @return string 
     */
    public function getSiteLogRotation()
    {
        return $this->siteLogRotation;
    }

    /**
     * Set siteSecureIp
     *
     * @param string $siteSecureIp
     * @return SysSwWebSite
     */
    public function setSiteSecureIp($siteSecureIp)
    {
        $this->siteSecureIp = $siteSecureIp;

        return $this;
    }

    /**
     * Get siteSecureIp
     *
     * @return string 
     */
    public function getSiteSecureIp()
    {
        return $this->siteSecureIp;
    }

    /**
     * Set siteSecurePort
     *
     * @param string $siteSecurePort
     * @return SysSwWebSite
     */
    public function setSiteSecurePort($siteSecurePort)
    {
        $this->siteSecurePort = $siteSecurePort;

        return $this;
    }

    /**
     * Get siteSecurePort
     *
     * @return string 
     */
    public function getSiteSecurePort()
    {
        return $this->siteSecurePort;
    }

    /**
     * Set sitePath
     *
     * @param string $sitePath
     * @return SysSwWebSite
     */
    public function setSitePath($sitePath)
    {
        $this->sitePath = $sitePath;

        return $this;
    }

    /**
     * Get sitePath
     *
     * @return string 
     */
    public function getSitePath()
    {
        return $this->sitePath;
    }

    /**
     * Set siteSize
     *
     * @param string $siteSize
     * @return SysSwWebSite
     */
    public function setSiteSize($siteSize)
    {
        $this->siteSize = $siteSize;

        return $this;
    }

    /**
     * Get siteSize
     *
     * @return string 
     */
    public function getSiteSize()
    {
        return $this->siteSize;
    }

    /**
     * Set siteAppPool
     *
     * @param string $siteAppPool
     * @return SysSwWebSite
     */
    public function setSiteAppPool($siteAppPool)
    {
        $this->siteAppPool = $siteAppPool;

        return $this;
    }

    /**
     * Get siteAppPool
     *
     * @return string 
     */
    public function getSiteAppPool()
    {
        return $this->siteAppPool;
    }

    /**
     * Set siteDirectoryBrowsing
     *
     * @param string $siteDirectoryBrowsing
     * @return SysSwWebSite
     */
    public function setSiteDirectoryBrowsing($siteDirectoryBrowsing)
    {
        $this->siteDirectoryBrowsing = $siteDirectoryBrowsing;

        return $this;
    }

    /**
     * Get siteDirectoryBrowsing
     *
     * @return string 
     */
    public function getSiteDirectoryBrowsing()
    {
        return $this->siteDirectoryBrowsing;
    }

    /**
     * Set siteAnonUser
     *
     * @param string $siteAnonUser
     * @return SysSwWebSite
     */
    public function setSiteAnonUser($siteAnonUser)
    {
        $this->siteAnonUser = $siteAnonUser;

        return $this;
    }

    /**
     * Get siteAnonUser
     *
     * @return string 
     */
    public function getSiteAnonUser()
    {
        return $this->siteAnonUser;
    }

    /**
     * Set siteAnonAuth
     *
     * @param string $siteAnonAuth
     * @return SysSwWebSite
     */
    public function setSiteAnonAuth($siteAnonAuth)
    {
        $this->siteAnonAuth = $siteAnonAuth;

        return $this;
    }

    /**
     * Get siteAnonAuth
     *
     * @return string 
     */
    public function getSiteAnonAuth()
    {
        return $this->siteAnonAuth;
    }

    /**
     * Set siteBasicAuth
     *
     * @param string $siteBasicAuth
     * @return SysSwWebSite
     */
    public function setSiteBasicAuth($siteBasicAuth)
    {
        $this->siteBasicAuth = $siteBasicAuth;

        return $this;
    }

    /**
     * Get siteBasicAuth
     *
     * @return string 
     */
    public function getSiteBasicAuth()
    {
        return $this->siteBasicAuth;
    }

    /**
     * Set siteNtlmAuth
     *
     * @param string $siteNtlmAuth
     * @return SysSwWebSite
     */
    public function setSiteNtlmAuth($siteNtlmAuth)
    {
        $this->siteNtlmAuth = $siteNtlmAuth;

        return $this;
    }

    /**
     * Get siteNtlmAuth
     *
     * @return string 
     */
    public function getSiteNtlmAuth()
    {
        return $this->siteNtlmAuth;
    }

    /**
     * Set siteSslEnabled
     *
     * @param string $siteSslEnabled
     * @return SysSwWebSite
     */
    public function setSiteSslEnabled($siteSslEnabled)
    {
        $this->siteSslEnabled = $siteSslEnabled;

        return $this;
    }

    /**
     * Get siteSslEnabled
     *
     * @return string 
     */
    public function getSiteSslEnabled()
    {
        return $this->siteSslEnabled;
    }

    /**
     * Set siteSsl128Enabled
     *
     * @param string $siteSsl128Enabled
     * @return SysSwWebSite
     */
    public function setSiteSsl128Enabled($siteSsl128Enabled)
    {
        $this->siteSsl128Enabled = $siteSsl128Enabled;

        return $this;
    }

    /**
     * Get siteSsl128Enabled
     *
     * @return string 
     */
    public function getSiteSsl128Enabled()
    {
        return $this->siteSsl128Enabled;
    }

    /**
     * Set siteDefaultDocuments
     *
     * @param string $siteDefaultDocuments
     * @return SysSwWebSite
     */
    public function setSiteDefaultDocuments($siteDefaultDocuments)
    {
        $this->siteDefaultDocuments = $siteDefaultDocuments;

        return $this;
    }

    /**
     * Get siteDefaultDocuments
     *
     * @return string 
     */
    public function getSiteDefaultDocuments()
    {
        return $this->siteDefaultDocuments;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysSwWebSite
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
     * @return SysSwWebSite
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
     * @return SysSwWebSite
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
     * @return SysSwWebSite
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

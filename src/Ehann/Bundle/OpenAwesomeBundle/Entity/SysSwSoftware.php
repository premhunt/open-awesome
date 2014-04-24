<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSwSoftware
 *
 * @ORM\Table(name="sys_sw_software", indexes={@ORM\Index(name="system_id", columns={"system_id"}), @ORM\Index(name="timestamp", columns={"timestamp"}), @ORM\Index(name="first_timestamp", columns={"first_timestamp"}), @ORM\Index(name="software_name", columns={"software_name"})})
 * @ORM\Entity
 */
class SysSwSoftware
{
    /**
     * @var integer
     *
     * @ORM\Column(name="software_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $softwareId;

    /**
     * @var string
     *
     * @ORM\Column(name="software_name", type="string", length=255, nullable=false)
     */
    private $softwareName;

    /**
     * @var string
     *
     * @ORM\Column(name="software_version", type="string", length=255, nullable=false)
     */
    private $softwareVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="software_description", type="text", nullable=false)
     */
    private $softwareDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="software_location", type="string", length=255, nullable=false)
     */
    private $softwareLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="software_uninstall", type="text", nullable=false)
     */
    private $softwareUninstall;

    /**
     * @var string
     *
     * @ORM\Column(name="software_install_date", type="string", length=100, nullable=false)
     */
    private $softwareInstallDate;

    /**
     * @var string
     *
     * @ORM\Column(name="software_installed_by", type="string", length=100, nullable=false)
     */
    private $softwareInstalledBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="software_installed_on", type="datetime", nullable=false)
     */
    private $softwareInstalledOn;

    /**
     * @var string
     *
     * @ORM\Column(name="software_publisher", type="string", length=255, nullable=false)
     */
    private $softwarePublisher;

    /**
     * @var string
     *
     * @ORM\Column(name="software_install_source", type="string", length=200, nullable=false)
     */
    private $softwareInstallSource;

    /**
     * @var string
     *
     * @ORM\Column(name="software_system_component", type="string", length=2, nullable=false)
     */
    private $softwareSystemComponent;

    /**
     * @var string
     *
     * @ORM\Column(name="software_url", type="string", length=255, nullable=false)
     */
    private $softwareUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="software_email", type="string", length=255, nullable=false)
     */
    private $softwareEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="software_comment", type="string", length=200, nullable=false)
     */
    private $softwareComment;

    /**
     * @var string
     *
     * @ORM\Column(name="software_man_comment", type="string", length=200, nullable=false)
     */
    private $softwareManComment;

    /**
     * @var string
     *
     * @ORM\Column(name="software_count", type="string", length=5, nullable=false)
     */
    private $softwareCount;

    /**
     * @var string
     *
     * @ORM\Column(name="software_code_base", type="string", length=255, nullable=false)
     */
    private $softwareCodeBase;

    /**
     * @var string
     *
     * @ORM\Column(name="software_status", type="string", length=45, nullable=false)
     */
    private $softwareStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="software_key", type="string", length=45, nullable=false)
     */
    private $softwareKey;

    /**
     * @var string
     *
     * @ORM\Column(name="software_key_release", type="string", length=45, nullable=false)
     */
    private $softwareKeyRelease;

    /**
     * @var string
     *
     * @ORM\Column(name="software_key_edition", type="string", length=45, nullable=false)
     */
    private $softwareKeyEdition;

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
     * Get softwareId
     *
     * @return integer 
     */
    public function getSoftwareId()
    {
        return $this->softwareId;
    }

    /**
     * Set softwareName
     *
     * @param string $softwareName
     * @return SysSwSoftware
     */
    public function setSoftwareName($softwareName)
    {
        $this->softwareName = $softwareName;

        return $this;
    }

    /**
     * Get softwareName
     *
     * @return string 
     */
    public function getSoftwareName()
    {
        return $this->softwareName;
    }

    /**
     * Set softwareVersion
     *
     * @param string $softwareVersion
     * @return SysSwSoftware
     */
    public function setSoftwareVersion($softwareVersion)
    {
        $this->softwareVersion = $softwareVersion;

        return $this;
    }

    /**
     * Get softwareVersion
     *
     * @return string 
     */
    public function getSoftwareVersion()
    {
        return $this->softwareVersion;
    }

    /**
     * Set softwareDescription
     *
     * @param string $softwareDescription
     * @return SysSwSoftware
     */
    public function setSoftwareDescription($softwareDescription)
    {
        $this->softwareDescription = $softwareDescription;

        return $this;
    }

    /**
     * Get softwareDescription
     *
     * @return string 
     */
    public function getSoftwareDescription()
    {
        return $this->softwareDescription;
    }

    /**
     * Set softwareLocation
     *
     * @param string $softwareLocation
     * @return SysSwSoftware
     */
    public function setSoftwareLocation($softwareLocation)
    {
        $this->softwareLocation = $softwareLocation;

        return $this;
    }

    /**
     * Get softwareLocation
     *
     * @return string 
     */
    public function getSoftwareLocation()
    {
        return $this->softwareLocation;
    }

    /**
     * Set softwareUninstall
     *
     * @param string $softwareUninstall
     * @return SysSwSoftware
     */
    public function setSoftwareUninstall($softwareUninstall)
    {
        $this->softwareUninstall = $softwareUninstall;

        return $this;
    }

    /**
     * Get softwareUninstall
     *
     * @return string 
     */
    public function getSoftwareUninstall()
    {
        return $this->softwareUninstall;
    }

    /**
     * Set softwareInstallDate
     *
     * @param string $softwareInstallDate
     * @return SysSwSoftware
     */
    public function setSoftwareInstallDate($softwareInstallDate)
    {
        $this->softwareInstallDate = $softwareInstallDate;

        return $this;
    }

    /**
     * Get softwareInstallDate
     *
     * @return string 
     */
    public function getSoftwareInstallDate()
    {
        return $this->softwareInstallDate;
    }

    /**
     * Set softwareInstalledBy
     *
     * @param string $softwareInstalledBy
     * @return SysSwSoftware
     */
    public function setSoftwareInstalledBy($softwareInstalledBy)
    {
        $this->softwareInstalledBy = $softwareInstalledBy;

        return $this;
    }

    /**
     * Get softwareInstalledBy
     *
     * @return string 
     */
    public function getSoftwareInstalledBy()
    {
        return $this->softwareInstalledBy;
    }

    /**
     * Set softwareInstalledOn
     *
     * @param \DateTime $softwareInstalledOn
     * @return SysSwSoftware
     */
    public function setSoftwareInstalledOn($softwareInstalledOn)
    {
        $this->softwareInstalledOn = $softwareInstalledOn;

        return $this;
    }

    /**
     * Get softwareInstalledOn
     *
     * @return \DateTime 
     */
    public function getSoftwareInstalledOn()
    {
        return $this->softwareInstalledOn;
    }

    /**
     * Set softwarePublisher
     *
     * @param string $softwarePublisher
     * @return SysSwSoftware
     */
    public function setSoftwarePublisher($softwarePublisher)
    {
        $this->softwarePublisher = $softwarePublisher;

        return $this;
    }

    /**
     * Get softwarePublisher
     *
     * @return string 
     */
    public function getSoftwarePublisher()
    {
        return $this->softwarePublisher;
    }

    /**
     * Set softwareInstallSource
     *
     * @param string $softwareInstallSource
     * @return SysSwSoftware
     */
    public function setSoftwareInstallSource($softwareInstallSource)
    {
        $this->softwareInstallSource = $softwareInstallSource;

        return $this;
    }

    /**
     * Get softwareInstallSource
     *
     * @return string 
     */
    public function getSoftwareInstallSource()
    {
        return $this->softwareInstallSource;
    }

    /**
     * Set softwareSystemComponent
     *
     * @param string $softwareSystemComponent
     * @return SysSwSoftware
     */
    public function setSoftwareSystemComponent($softwareSystemComponent)
    {
        $this->softwareSystemComponent = $softwareSystemComponent;

        return $this;
    }

    /**
     * Get softwareSystemComponent
     *
     * @return string 
     */
    public function getSoftwareSystemComponent()
    {
        return $this->softwareSystemComponent;
    }

    /**
     * Set softwareUrl
     *
     * @param string $softwareUrl
     * @return SysSwSoftware
     */
    public function setSoftwareUrl($softwareUrl)
    {
        $this->softwareUrl = $softwareUrl;

        return $this;
    }

    /**
     * Get softwareUrl
     *
     * @return string 
     */
    public function getSoftwareUrl()
    {
        return $this->softwareUrl;
    }

    /**
     * Set softwareEmail
     *
     * @param string $softwareEmail
     * @return SysSwSoftware
     */
    public function setSoftwareEmail($softwareEmail)
    {
        $this->softwareEmail = $softwareEmail;

        return $this;
    }

    /**
     * Get softwareEmail
     *
     * @return string 
     */
    public function getSoftwareEmail()
    {
        return $this->softwareEmail;
    }

    /**
     * Set softwareComment
     *
     * @param string $softwareComment
     * @return SysSwSoftware
     */
    public function setSoftwareComment($softwareComment)
    {
        $this->softwareComment = $softwareComment;

        return $this;
    }

    /**
     * Get softwareComment
     *
     * @return string 
     */
    public function getSoftwareComment()
    {
        return $this->softwareComment;
    }

    /**
     * Set softwareManComment
     *
     * @param string $softwareManComment
     * @return SysSwSoftware
     */
    public function setSoftwareManComment($softwareManComment)
    {
        $this->softwareManComment = $softwareManComment;

        return $this;
    }

    /**
     * Get softwareManComment
     *
     * @return string 
     */
    public function getSoftwareManComment()
    {
        return $this->softwareManComment;
    }

    /**
     * Set softwareCount
     *
     * @param string $softwareCount
     * @return SysSwSoftware
     */
    public function setSoftwareCount($softwareCount)
    {
        $this->softwareCount = $softwareCount;

        return $this;
    }

    /**
     * Get softwareCount
     *
     * @return string 
     */
    public function getSoftwareCount()
    {
        return $this->softwareCount;
    }

    /**
     * Set softwareCodeBase
     *
     * @param string $softwareCodeBase
     * @return SysSwSoftware
     */
    public function setSoftwareCodeBase($softwareCodeBase)
    {
        $this->softwareCodeBase = $softwareCodeBase;

        return $this;
    }

    /**
     * Get softwareCodeBase
     *
     * @return string 
     */
    public function getSoftwareCodeBase()
    {
        return $this->softwareCodeBase;
    }

    /**
     * Set softwareStatus
     *
     * @param string $softwareStatus
     * @return SysSwSoftware
     */
    public function setSoftwareStatus($softwareStatus)
    {
        $this->softwareStatus = $softwareStatus;

        return $this;
    }

    /**
     * Get softwareStatus
     *
     * @return string 
     */
    public function getSoftwareStatus()
    {
        return $this->softwareStatus;
    }

    /**
     * Set softwareKey
     *
     * @param string $softwareKey
     * @return SysSwSoftware
     */
    public function setSoftwareKey($softwareKey)
    {
        $this->softwareKey = $softwareKey;

        return $this;
    }

    /**
     * Get softwareKey
     *
     * @return string 
     */
    public function getSoftwareKey()
    {
        return $this->softwareKey;
    }

    /**
     * Set softwareKeyRelease
     *
     * @param string $softwareKeyRelease
     * @return SysSwSoftware
     */
    public function setSoftwareKeyRelease($softwareKeyRelease)
    {
        $this->softwareKeyRelease = $softwareKeyRelease;

        return $this;
    }

    /**
     * Get softwareKeyRelease
     *
     * @return string 
     */
    public function getSoftwareKeyRelease()
    {
        return $this->softwareKeyRelease;
    }

    /**
     * Set softwareKeyEdition
     *
     * @param string $softwareKeyEdition
     * @return SysSwSoftware
     */
    public function setSoftwareKeyEdition($softwareKeyEdition)
    {
        $this->softwareKeyEdition = $softwareKeyEdition;

        return $this;
    }

    /**
     * Get softwareKeyEdition
     *
     * @return string 
     */
    public function getSoftwareKeyEdition()
    {
        return $this->softwareKeyEdition;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysSwSoftware
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
     * @return SysSwSoftware
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
     * @return SysSwSoftware
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

<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Type;

/**
 * SysSwWindows
 *
 * @ORM\Table(name="sys_sw_windows", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysSwWindows
{
    /**
     * @var integer
     *
     * @ORM\Column(name="windows_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_build_number", type="string", length=20, nullable=false)
     */
    private $buildNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_user_name", type="string", length=100, nullable=false)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_client_site_name", type="string", length=100, nullable=false)
     */
    private $clientSiteName;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_domain_short", type="string", length=100, nullable=false)
     */
    private $domainShort;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_domain_controller_address", type="string", length=100, nullable=false)
     */
    private $domainControllerAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_domain_controller_name", type="string", length=100, nullable=false)
     */
    private $domainControllerName;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_domain_role", type="string", length=40, nullable=false)
     */
    private $domainRole;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_part_of_domain", type="string", length=10, nullable=false)
     */
    private $partOfDomain;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_id_number", type="string", length=100, nullable=false)
     */
    private $idNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_time_caption", type="string", length=100, nullable=false)
     */
    private $timeCaption;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_time_daylight", type="string", length=100, nullable=false)
     */
    private $timeDaylight;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_boot_device", type="string", length=100, nullable=false)
     */
    private $bootDevice;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_country_code", type="string", length=50, nullable=false)
     */
    private $countryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_organisation", type="string", length=80, nullable=false)
     */
    private $organisation;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_language", type="string", length=50, nullable=false)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_registered_user", type="string", length=50, nullable=false)
     */
    private $registeredUser;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_service_pack", type="string", length=20, nullable=false)
     */
    private $servicePack;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_version", type="string", length=20, nullable=false)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_install_directory", type="string", length=20, nullable=false)
     */
    private $installDirectory;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_active_directory_ou", type="string", length=200, nullable=false)
     */
    private $activeDirectoryOu;

    /**
     * @var \DateTime
     *
     * @Type("DateTime<'Y-m-d G:i:s'>")
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     */
    private $timestamp;

    /**
     * @var \DateTime
     *
     * @Type("DateTime<'Y-m-d G:i:s'>")
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set buildNumber
     *
     * @param string $buildNumber
     * @return SysSwWindows
     */
    public function setBuildNumber($buildNumber)
    {
        $this->buildNumber = $buildNumber;

        return $this;
    }

    /**
     * Get buildNumber
     *
     * @return string 
     */
    public function getBuildNumber()
    {
        return $this->buildNumber;
    }

    /**
     * Set windowsUserName
     *
     * @param string $windowsUserName
     * @return SysSwWindows
     */
    public function setUserName($windowsUserName)
    {
        $this->userName = $windowsUserName;

        return $this;
    }

    /**
     * Get windowsUserName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set windowsClientSiteName
     *
     * @param string $windowsClientSiteName
     * @return SysSwWindows
     */
    public function setClientSiteName($windowsClientSiteName)
    {
        $this->clientSiteName = $windowsClientSiteName;

        return $this;
    }

    /**
     * Get windowsClientSiteName
     *
     * @return string 
     */
    public function getClientSiteName()
    {
        return $this->clientSiteName;
    }

    /**
     * Set windowsDomainShort
     *
     * @param string $windowsDomainShort
     * @return SysSwWindows
     */
    public function setDomainShort($windowsDomainShort)
    {
        $this->domainShort = $windowsDomainShort;

        return $this;
    }

    /**
     * Get windowsDomainShort
     *
     * @return string 
     */
    public function getDomainShort()
    {
        return $this->domainShort;
    }

    /**
     * Set windowsDomainControllerAddress
     *
     * @param string $windowsDomainControllerAddress
     * @return SysSwWindows
     */
    public function setDomainControllerAddress($windowsDomainControllerAddress)
    {
        $this->domainControllerAddress = $windowsDomainControllerAddress;

        return $this;
    }

    /**
     * Get windowsDomainControllerAddress
     *
     * @return string 
     */
    public function getDomainControllerAddress()
    {
        return $this->domainControllerAddress;
    }

    /**
     * Set windowsDomainControllerName
     *
     * @param string $windowsDomainControllerName
     * @return SysSwWindows
     */
    public function setDomainControllerName($windowsDomainControllerName)
    {
        $this->domainControllerName = $windowsDomainControllerName;

        return $this;
    }

    /**
     * Get windowsDomainControllerName
     *
     * @return string 
     */
    public function getDomainControllerName()
    {
        return $this->domainControllerName;
    }

    /**
     * Set windowsDomainRole
     *
     * @param string $windowsDomainRole
     * @return SysSwWindows
     */
    public function setDomainRole($windowsDomainRole)
    {
        $this->domainRole = $windowsDomainRole;

        return $this;
    }

    /**
     * Get windowsDomainRole
     *
     * @return string 
     */
    public function getDomainRole()
    {
        return $this->domainRole;
    }

    /**
     * Set windowsPartOfDomain
     *
     * @param string $windowsPartOfDomain
     * @return SysSwWindows
     */
    public function setPartOfDomain($windowsPartOfDomain)
    {
        $this->partOfDomain = $windowsPartOfDomain;

        return $this;
    }

    /**
     * Get windowsPartOfDomain
     *
     * @return string 
     */
    public function getPartOfDomain()
    {
        return $this->partOfDomain;
    }

    /**
     * Set windowsIdNumber
     *
     * @param string $windowsIdNumber
     * @return SysSwWindows
     */
    public function setIdNumber($windowsIdNumber)
    {
        $this->idNumber = $windowsIdNumber;

        return $this;
    }

    /**
     * Get windowsIdNumber
     *
     * @return string 
     */
    public function getIdNumber()
    {
        return $this->idNumber;
    }

    /**
     * Set windowsTimeCaption
     *
     * @param string $windowsTimeCaption
     * @return SysSwWindows
     */
    public function setTimeCaption($windowsTimeCaption)
    {
        $this->timeCaption = $windowsTimeCaption;

        return $this;
    }

    /**
     * Get windowsTimeCaption
     *
     * @return string 
     */
    public function getTimeCaption()
    {
        return $this->timeCaption;
    }

    /**
     * Set windowsTimeDaylight
     *
     * @param string $windowsTimeDaylight
     * @return SysSwWindows
     */
    public function setTimeDaylight($windowsTimeDaylight)
    {
        $this->timeDaylight = $windowsTimeDaylight;

        return $this;
    }

    /**
     * Get windowsTimeDaylight
     *
     * @return string 
     */
    public function getTimeDaylight()
    {
        return $this->timeDaylight;
    }

    /**
     * Set windowsBootDevice
     *
     * @param string $windowsBootDevice
     * @return SysSwWindows
     */
    public function setBootDevice($windowsBootDevice)
    {
        $this->bootDevice = $windowsBootDevice;

        return $this;
    }

    /**
     * Get windowsBootDevice
     *
     * @return string 
     */
    public function getBootDevice()
    {
        return $this->bootDevice;
    }

    /**
     * Set windowsCountryCode
     *
     * @param string $windowsCountryCode
     * @return SysSwWindows
     */
    public function setCountryCode($windowsCountryCode)
    {
        $this->countryCode = $windowsCountryCode;

        return $this;
    }

    /**
     * Get windowsCountryCode
     *
     * @return string 
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set windowsOrganisation
     *
     * @param string $windowsOrganisation
     * @return SysSwWindows
     */
    public function setOrganisation($windowsOrganisation)
    {
        $this->organisation = $windowsOrganisation;

        return $this;
    }

    /**
     * Get windowsOrganisation
     *
     * @return string 
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * Set windowsLanguage
     *
     * @param string $windowsLanguage
     * @return SysSwWindows
     */
    public function setLanguage($windowsLanguage)
    {
        $this->language = $windowsLanguage;

        return $this;
    }

    /**
     * Get windowsLanguage
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set windowsRegisteredUser
     *
     * @param string $windowsRegisteredUser
     * @return SysSwWindows
     */
    public function setRegisteredUser($windowsRegisteredUser)
    {
        $this->registeredUser = $windowsRegisteredUser;

        return $this;
    }

    /**
     * Get windowsRegisteredUser
     *
     * @return string 
     */
    public function getRegisteredUser()
    {
        return $this->registeredUser;
    }

    /**
     * Set windowsServicePack
     *
     * @param string $windowsServicePack
     * @return SysSwWindows
     */
    public function setServicePack($windowsServicePack)
    {
        $this->servicePack = $windowsServicePack;

        return $this;
    }

    /**
     * Get windowsServicePack
     *
     * @return string 
     */
    public function getServicePack()
    {
        return $this->servicePack;
    }

    /**
     * Set windowsVersion
     *
     * @param string $windowsVersion
     * @return SysSwWindows
     */
    public function setVersion($windowsVersion)
    {
        $this->version = $windowsVersion;

        return $this;
    }

    /**
     * Get windowsVersion
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set windowsInstallDirectory
     *
     * @param string $windowsInstallDirectory
     * @return SysSwWindows
     */
    public function setInstallDirectory($windowsInstallDirectory)
    {
        $this->installDirectory = $windowsInstallDirectory;

        return $this;
    }

    /**
     * Get windowsInstallDirectory
     *
     * @return string 
     */
    public function getInstallDirectory()
    {
        return $this->installDirectory;
    }

    /**
     * Set activeDirectoryOu
     *
     * @param string $activeDirectoryOu
     * @return SysSwWindows
     */
    public function setActiveDirectoryOu($activeDirectoryOu)
    {
        $this->activeDirectoryOu = $activeDirectoryOu;

        return $this;
    }

    /**
     * Get activeDirectoryOu
     *
     * @return string 
     */
    public function getActiveDirectoryOu()
    {
        return $this->activeDirectoryOu;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysSwWindows
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
     * @return SysSwWindows
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
     * @return SysSwWindows
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

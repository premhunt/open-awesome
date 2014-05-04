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
    private $windowsId;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_build_number", type="string", length=20, nullable=false)
     */
    private $windowsBuildNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_user_name", type="string", length=100, nullable=false)
     */
    private $windowsUserName;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_client_site_name", type="string", length=100, nullable=false)
     */
    private $windowsClientSiteName;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_domain_short", type="string", length=100, nullable=false)
     */
    private $windowsDomainShort;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_domain_controller_address", type="string", length=100, nullable=false)
     */
    private $windowsDomainControllerAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_domain_controller_name", type="string", length=100, nullable=false)
     */
    private $windowsDomainControllerName;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_domain_role", type="string", length=40, nullable=false)
     */
    private $windowsDomainRole;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_part_of_domain", type="string", length=10, nullable=false)
     */
    private $windowsPartOfDomain;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_id_number", type="string", length=100, nullable=false)
     */
    private $windowsIdNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_time_caption", type="string", length=100, nullable=false)
     */
    private $windowsTimeCaption;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_time_daylight", type="string", length=100, nullable=false)
     */
    private $windowsTimeDaylight;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_boot_device", type="string", length=100, nullable=false)
     */
    private $windowsBootDevice;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_country_code", type="string", length=50, nullable=false)
     */
    private $windowsCountryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_organisation", type="string", length=80, nullable=false)
     */
    private $windowsOrganisation;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_language", type="string", length=50, nullable=false)
     */
    private $windowsLanguage;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_registered_user", type="string", length=50, nullable=false)
     */
    private $windowsRegisteredUser;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_service_pack", type="string", length=20, nullable=false)
     */
    private $windowsServicePack;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_version", type="string", length=20, nullable=false)
     */
    private $windowsVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_install_directory", type="string", length=20, nullable=false)
     */
    private $windowsInstallDirectory;

    /**
     * @var string
     *
     * @ORM\Column(name="windows_active_directory_ou", type="string", length=200, nullable=false)
     */
    private $windowsActiveDirectoryOu;

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
     * Get windowsId
     *
     * @return integer 
     */
    public function getWindowsId()
    {
        return $this->windowsId;
    }

    /**
     * @param $id
     *
     * @return $this
     */
    public function setWindowsId($id)
    {
        $this->windowsId = $id;

        return $this;
    }

    /**
     * Set windowsBuildNumber
     *
     * @param string $windowsBuildNumber
     * @return SysSwWindows
     */
    public function setWindowsBuildNumber($windowsBuildNumber)
    {
        $this->windowsBuildNumber = $windowsBuildNumber;

        return $this;
    }

    /**
     * Get windowsBuildNumber
     *
     * @return string 
     */
    public function getWindowsBuildNumber()
    {
        return $this->windowsBuildNumber;
    }

    /**
     * Set windowsUserName
     *
     * @param string $windowsUserName
     * @return SysSwWindows
     */
    public function setWindowsUserName($windowsUserName)
    {
        $this->windowsUserName = $windowsUserName;

        return $this;
    }

    /**
     * Get windowsUserName
     *
     * @return string 
     */
    public function getWindowsUserName()
    {
        return $this->windowsUserName;
    }

    /**
     * Set windowsClientSiteName
     *
     * @param string $windowsClientSiteName
     * @return SysSwWindows
     */
    public function setWindowsClientSiteName($windowsClientSiteName)
    {
        $this->windowsClientSiteName = $windowsClientSiteName;

        return $this;
    }

    /**
     * Get windowsClientSiteName
     *
     * @return string 
     */
    public function getWindowsClientSiteName()
    {
        return $this->windowsClientSiteName;
    }

    /**
     * Set windowsDomainShort
     *
     * @param string $windowsDomainShort
     * @return SysSwWindows
     */
    public function setWindowsDomainShort($windowsDomainShort)
    {
        $this->windowsDomainShort = $windowsDomainShort;

        return $this;
    }

    /**
     * Get windowsDomainShort
     *
     * @return string 
     */
    public function getWindowsDomainShort()
    {
        return $this->windowsDomainShort;
    }

    /**
     * Set windowsDomainControllerAddress
     *
     * @param string $windowsDomainControllerAddress
     * @return SysSwWindows
     */
    public function setWindowsDomainControllerAddress($windowsDomainControllerAddress)
    {
        $this->windowsDomainControllerAddress = $windowsDomainControllerAddress;

        return $this;
    }

    /**
     * Get windowsDomainControllerAddress
     *
     * @return string 
     */
    public function getWindowsDomainControllerAddress()
    {
        return $this->windowsDomainControllerAddress;
    }

    /**
     * Set windowsDomainControllerName
     *
     * @param string $windowsDomainControllerName
     * @return SysSwWindows
     */
    public function setWindowsDomainControllerName($windowsDomainControllerName)
    {
        $this->windowsDomainControllerName = $windowsDomainControllerName;

        return $this;
    }

    /**
     * Get windowsDomainControllerName
     *
     * @return string 
     */
    public function getWindowsDomainControllerName()
    {
        return $this->windowsDomainControllerName;
    }

    /**
     * Set windowsDomainRole
     *
     * @param string $windowsDomainRole
     * @return SysSwWindows
     */
    public function setWindowsDomainRole($windowsDomainRole)
    {
        $this->windowsDomainRole = $windowsDomainRole;

        return $this;
    }

    /**
     * Get windowsDomainRole
     *
     * @return string 
     */
    public function getWindowsDomainRole()
    {
        return $this->windowsDomainRole;
    }

    /**
     * Set windowsPartOfDomain
     *
     * @param string $windowsPartOfDomain
     * @return SysSwWindows
     */
    public function setWindowsPartOfDomain($windowsPartOfDomain)
    {
        $this->windowsPartOfDomain = $windowsPartOfDomain;

        return $this;
    }

    /**
     * Get windowsPartOfDomain
     *
     * @return string 
     */
    public function getWindowsPartOfDomain()
    {
        return $this->windowsPartOfDomain;
    }

    /**
     * Set windowsIdNumber
     *
     * @param string $windowsIdNumber
     * @return SysSwWindows
     */
    public function setWindowsIdNumber($windowsIdNumber)
    {
        $this->windowsIdNumber = $windowsIdNumber;

        return $this;
    }

    /**
     * Get windowsIdNumber
     *
     * @return string 
     */
    public function getWindowsIdNumber()
    {
        return $this->windowsIdNumber;
    }

    /**
     * Set windowsTimeCaption
     *
     * @param string $windowsTimeCaption
     * @return SysSwWindows
     */
    public function setWindowsTimeCaption($windowsTimeCaption)
    {
        $this->windowsTimeCaption = $windowsTimeCaption;

        return $this;
    }

    /**
     * Get windowsTimeCaption
     *
     * @return string 
     */
    public function getWindowsTimeCaption()
    {
        return $this->windowsTimeCaption;
    }

    /**
     * Set windowsTimeDaylight
     *
     * @param string $windowsTimeDaylight
     * @return SysSwWindows
     */
    public function setWindowsTimeDaylight($windowsTimeDaylight)
    {
        $this->windowsTimeDaylight = $windowsTimeDaylight;

        return $this;
    }

    /**
     * Get windowsTimeDaylight
     *
     * @return string 
     */
    public function getWindowsTimeDaylight()
    {
        return $this->windowsTimeDaylight;
    }

    /**
     * Set windowsBootDevice
     *
     * @param string $windowsBootDevice
     * @return SysSwWindows
     */
    public function setWindowsBootDevice($windowsBootDevice)
    {
        $this->windowsBootDevice = $windowsBootDevice;

        return $this;
    }

    /**
     * Get windowsBootDevice
     *
     * @return string 
     */
    public function getWindowsBootDevice()
    {
        return $this->windowsBootDevice;
    }

    /**
     * Set windowsCountryCode
     *
     * @param string $windowsCountryCode
     * @return SysSwWindows
     */
    public function setWindowsCountryCode($windowsCountryCode)
    {
        $this->windowsCountryCode = $windowsCountryCode;

        return $this;
    }

    /**
     * Get windowsCountryCode
     *
     * @return string 
     */
    public function getWindowsCountryCode()
    {
        return $this->windowsCountryCode;
    }

    /**
     * Set windowsOrganisation
     *
     * @param string $windowsOrganisation
     * @return SysSwWindows
     */
    public function setWindowsOrganisation($windowsOrganisation)
    {
        $this->windowsOrganisation = $windowsOrganisation;

        return $this;
    }

    /**
     * Get windowsOrganisation
     *
     * @return string 
     */
    public function getWindowsOrganisation()
    {
        return $this->windowsOrganisation;
    }

    /**
     * Set windowsLanguage
     *
     * @param string $windowsLanguage
     * @return SysSwWindows
     */
    public function setWindowsLanguage($windowsLanguage)
    {
        $this->windowsLanguage = $windowsLanguage;

        return $this;
    }

    /**
     * Get windowsLanguage
     *
     * @return string 
     */
    public function getWindowsLanguage()
    {
        return $this->windowsLanguage;
    }

    /**
     * Set windowsRegisteredUser
     *
     * @param string $windowsRegisteredUser
     * @return SysSwWindows
     */
    public function setWindowsRegisteredUser($windowsRegisteredUser)
    {
        $this->windowsRegisteredUser = $windowsRegisteredUser;

        return $this;
    }

    /**
     * Get windowsRegisteredUser
     *
     * @return string 
     */
    public function getWindowsRegisteredUser()
    {
        return $this->windowsRegisteredUser;
    }

    /**
     * Set windowsServicePack
     *
     * @param string $windowsServicePack
     * @return SysSwWindows
     */
    public function setWindowsServicePack($windowsServicePack)
    {
        $this->windowsServicePack = $windowsServicePack;

        return $this;
    }

    /**
     * Get windowsServicePack
     *
     * @return string 
     */
    public function getWindowsServicePack()
    {
        return $this->windowsServicePack;
    }

    /**
     * Set windowsVersion
     *
     * @param string $windowsVersion
     * @return SysSwWindows
     */
    public function setWindowsVersion($windowsVersion)
    {
        $this->windowsVersion = $windowsVersion;

        return $this;
    }

    /**
     * Get windowsVersion
     *
     * @return string 
     */
    public function getWindowsVersion()
    {
        return $this->windowsVersion;
    }

    /**
     * Set windowsInstallDirectory
     *
     * @param string $windowsInstallDirectory
     * @return SysSwWindows
     */
    public function setWindowsInstallDirectory($windowsInstallDirectory)
    {
        $this->windowsInstallDirectory = $windowsInstallDirectory;

        return $this;
    }

    /**
     * Get windowsInstallDirectory
     *
     * @return string 
     */
    public function getWindowsInstallDirectory()
    {
        return $this->windowsInstallDirectory;
    }

    /**
     * Set windowsActiveDirectoryOu
     *
     * @param string $windowsActiveDirectoryOu
     * @return SysSwWindows
     */
    public function setWindowsActiveDirectoryOu($windowsActiveDirectoryOu)
    {
        $this->windowsActiveDirectoryOu = $windowsActiveDirectoryOu;

        return $this;
    }

    /**
     * Get windowsActiveDirectoryOu
     *
     * @return string 
     */
    public function getWindowsActiveDirectoryOu()
    {
        return $this->windowsActiveDirectoryOu;
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

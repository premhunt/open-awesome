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
class SysSwWindows extends SystemComponent
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
     * @var \Ehann\Bundle\OpenAwesomeBundle\Entity\System
     *
     * @ORM\ManyToOne(targetEntity="Ehann\Bundle\OpenAwesomeBundle\Entity\System")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="system_id", referencedColumnName="system_id")
     * })
     */
    private $system;

    /**
     * @param string $domainShort
     */
    public function setDomainShort($domainShort)
    {
        $this->domainShort = $domainShort;
    }

    /**
     * @return string
     */
    public function getDomainShort()
    {
        return $this->domainShort;
    }

    /**
     * @param string $activeDirectoryOu
     */
    public function setActiveDirectoryOu($activeDirectoryOu)
    {
        $this->activeDirectoryOu = $activeDirectoryOu;
    }

    /**
     * @return string
     */
    public function getActiveDirectoryOu()
    {
        return $this->activeDirectoryOu;
    }

    /**
     * @param string $bootDevice
     */
    public function setBootDevice($bootDevice)
    {
        $this->bootDevice = $bootDevice;
    }

    /**
     * @return string
     */
    public function getBootDevice()
    {
        return $this->bootDevice;
    }

    /**
     * @param string $buildNumber
     */
    public function setBuildNumber($buildNumber)
    {
        $this->buildNumber = $buildNumber;
    }

    /**
     * @return string
     */
    public function getBuildNumber()
    {
        return $this->buildNumber;
    }

    /**
     * @param string $clientSiteName
     */
    public function setClientSiteName($clientSiteName)
    {
        $this->clientSiteName = $clientSiteName;
    }

    /**
     * @return string
     */
    public function getClientSiteName()
    {
        return $this->clientSiteName;
    }

    /**
     * @param string $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string $domainControllerAddress
     */
    public function setDomainControllerAddress($domainControllerAddress)
    {
        $this->domainControllerAddress = $domainControllerAddress;
    }

    /**
     * @return string
     */
    public function getDomainControllerAddress()
    {
        return $this->domainControllerAddress;
    }

    /**
     * @param string $domainControllerName
     */
    public function setDomainControllerName($domainControllerName)
    {
        $this->domainControllerName = $domainControllerName;
    }

    /**
     * @return string
     */
    public function getDomainControllerName()
    {
        return $this->domainControllerName;
    }

    /**
     * @param string $domainRole
     */
    public function setDomainRole($domainRole)
    {
        $this->domainRole = $domainRole;
    }

    /**
     * @return string
     */
    public function getDomainRole()
    {
        return $this->domainRole;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $idNumber
     */
    public function setIdNumber($idNumber)
    {
        $this->idNumber = $idNumber;
    }

    /**
     * @return string
     */
    public function getIdNumber()
    {
        return $this->idNumber;
    }

    /**
     * @param string $installDirectory
     */
    public function setInstallDirectory($installDirectory)
    {
        $this->installDirectory = $installDirectory;
    }

    /**
     * @return string
     */
    public function getInstallDirectory()
    {
        return $this->installDirectory;
    }

    /**
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $organisation
     */
    public function setOrganisation($organisation)
    {
        $this->organisation = $organisation;
    }

    /**
     * @return string
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * @param string $partOfDomain
     */
    public function setPartOfDomain($partOfDomain)
    {
        $this->partOfDomain = $partOfDomain;
    }

    /**
     * @return string
     */
    public function getPartOfDomain()
    {
        return $this->partOfDomain;
    }

    /**
     * @param string $registeredUser
     */
    public function setRegisteredUser($registeredUser)
    {
        $this->registeredUser = $registeredUser;
    }

    /**
     * @return string
     */
    public function getRegisteredUser()
    {
        return $this->registeredUser;
    }

    /**
     * @param string $servicePack
     */
    public function setServicePack($servicePack)
    {
        $this->servicePack = $servicePack;
    }

    /**
     * @return string
     */
    public function getServicePack()
    {
        return $this->servicePack;
    }

    /**
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\System $system
     */
    public function setSystem($system)
    {
        $this->system = $system;
    }

    /**
     * @return \Ehann\Bundle\OpenAwesomeBundle\Entity\System
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * @param string $timeCaption
     */
    public function setTimeCaption($timeCaption)
    {
        $this->timeCaption = $timeCaption;
    }

    /**
     * @return string
     */
    public function getTimeCaption()
    {
        return $this->timeCaption;
    }

    /**
     * @param string $timeDaylight
     */
    public function setTimeDaylight($timeDaylight)
    {
        $this->timeDaylight = $timeDaylight;
    }

    /**
     * @return string
     */
    public function getTimeDaylight()
    {
        return $this->timeDaylight;
    }

    /**
     * @param string $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

}

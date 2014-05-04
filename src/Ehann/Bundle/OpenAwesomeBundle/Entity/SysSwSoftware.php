<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSwSoftware
 *
 * @ORM\Table(name="sys_sw_software", indexes={@ORM\Index(name="system_id", columns={"system_id"}), @ORM\Index(name="timestamp", columns={"timestamp"}), @ORM\Index(name="first_timestamp", columns={"first_timestamp"}), @ORM\Index(name="software_name", columns={"software_name"})})
 * @ORM\Entity
 */
class SysSwSoftware extends SystemComponent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="software_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="software_name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="software_version", type="string", length=255, nullable=true)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="software_description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="software_location", type="string", length=255, nullable=true)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="software_uninstall", type="text", nullable=true)
     */
    private $uninstall;

    /**
     * @var string
     *
     * @ORM\Column(name="software_install_date", type="string", length=100, nullable=true)
     */
    private $installDate;

    /**
     * @var string
     *
     * @ORM\Column(name="software_installed_by", type="string", length=100, nullable=true)
     */
    private $installedBy;

    /**
     * @var \string
     *
     * @ORM\Column(name="software_installed_on", type="string", nullable=true)
     */
    private $installedOn;

    /**
     * @var string
     *
     * @ORM\Column(name="software_publisher", type="string", length=255, nullable=true)
     */
    private $publisher;

    /**
     * @var string
     *
     * @ORM\Column(name="software_install_source", type="string", length=200, nullable=true)
     */
    private $installSource;

    /**
     * @var string
     *
     * @ORM\Column(name="software_system_component", type="string", length=2, nullable=true)
     */
    private $systemComponent;

    /**
     * @var string
     *
     * @ORM\Column(name="software_url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="software_email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="software_comment", type="string", length=200, nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="software_man_comment", type="string", length=200, nullable=true)
     */
    private $manComment;

    /**
     * @var string
     *
     * @ORM\Column(name="software_count", type="string", length=5, nullable=true)
     */
    private $count;

    /**
     * @var string
     *
     * @ORM\Column(name="software_code_base", type="string", length=255, nullable=true)
     */
    private $codeBase;

    /**
     * @var string
     *
     * @ORM\Column(name="software_status", type="string", length=45, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="software_key", type="string", length=45, nullable=true)
     */
    private $key;

    /**
     * @var string
     *
     * @ORM\Column(name="software_key_release", type="string", length=45, nullable=true)
     */
    private $keyRelease;

    /**
     * @var string
     *
     * @ORM\Column(name="software_key_edition", type="string", length=45, nullable=true)
     */
    private $keyEdition;

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
     * @param string $codeBase
     */
    public function setCodeBase($codeBase)
    {
        $this->codeBase = $codeBase;
    }

    /**
     * @return string
     */
    public function getCodeBase()
    {
        return $this->codeBase;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * @return string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
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
     * @param string $installDate
     */
    public function setInstallDate($installDate)
    {
        $this->installDate = $installDate;
    }

    /**
     * @return string
     */
    public function getInstallDate()
    {
        return $this->installDate;
    }

    /**
     * @param string $installSource
     */
    public function setInstallSource($installSource)
    {
        $this->installSource = $installSource;
    }

    /**
     * @return string
     */
    public function getInstallSource()
    {
        return $this->installSource;
    }

    /**
     * @param string $installedBy
     */
    public function setInstalledBy($installedBy)
    {
        $this->installedBy = $installedBy;
    }

    /**
     * @return string
     */
    public function getInstalledBy()
    {
        return $this->installedBy;
    }

    /**
     * @param \DateTime $installedOn
     */
    public function setInstalledOn($installedOn)
    {
        $this->installedOn = $installedOn;
    }

    /**
     * @return \DateTime
     */
    public function getInstalledOn()
    {
        return $this->installedOn;
    }

    /**
     * @param string $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $keyEdition
     */
    public function setKeyEdition($keyEdition)
    {
        $this->keyEdition = $keyEdition;
    }

    /**
     * @return string
     */
    public function getKeyEdition()
    {
        return $this->keyEdition;
    }

    /**
     * @param string $keyRelease
     */
    public function setKeyRelease($keyRelease)
    {
        $this->keyRelease = $keyRelease;
    }

    /**
     * @return string
     */
    public function getKeyRelease()
    {
        return $this->keyRelease;
    }

    /**
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string $manComment
     */
    public function setManComment($manComment)
    {
        $this->manComment = $manComment;
    }

    /**
     * @return string
     */
    public function getManComment()
    {
        return $this->manComment;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $publisher
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }

    /**
     * @return string
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
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
     * @param string $systemComponent
     */
    public function setSystemComponent($systemComponent)
    {
        $this->systemComponent = $systemComponent;
    }

    /**
     * @return string
     */
    public function getSystemComponent()
    {
        return $this->systemComponent;
    }

    /**
     * @param string $uninstall
     */
    public function setUninstall($uninstall)
    {
        $this->uninstall = $uninstall;
    }

    /**
     * @return string
     */
    public function getUninstall()
    {
        return $this->uninstall;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
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

<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSwUser
 *
 * @ORM\Table(name="sys_sw_user", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysSwUser extends SystemComponent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="user_caption", type="string", length=255, nullable=false)
     */
    private $caption;

    /**
     * @var string
     *
     * @ORM\Column(name="user_sid", type="string", length=100, nullable=false)
     */
    private $sid;

    /**
     * @var string
     *
     * @ORM\Column(name="user_domain", type="string", length=100, nullable=false)
     */
    private $domain;

    /**
     * @var string
     *
     * @ORM\Column(name="user_disabled", type="string", length=20, nullable=false)
     */
    private $disabled;

    /**
     * @var string
     *
     * @ORM\Column(name="user_full_name", type="string", length=100, nullable=false)
     */
    private $fullName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password_changeable", type="string", length=20, nullable=false)
     */
    private $passwordChangeable;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password_expires", type="string", length=20, nullable=false)
     */
    private $passwordExpires;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password_required", type="string", length=20, nullable=false)
     */
    private $passwordRequired;

    /**
     * @var string
     *
     * @ORM\Column(name="user_status", type="string", length=100, nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="user_type", type="string", nullable=false)
     */
    private $type;

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
     * @param string $caption
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
    }

    /**
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * @param string $disabled
     */
    public function setDisabled($disabled)
    {
        $this->disabled = $disabled;
    }

    /**
     * @return string
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * @param string $domain
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param string $fullName
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
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
     * @param string $passwordChangeable
     */
    public function setPasswordChangeable($passwordChangeable)
    {
        $this->passwordChangeable = $passwordChangeable;
    }

    /**
     * @return string
     */
    public function getPasswordChangeable()
    {
        return $this->passwordChangeable;
    }

    /**
     * @param string $passwordExpires
     */
    public function setPasswordExpires($passwordExpires)
    {
        $this->passwordExpires = $passwordExpires;
    }

    /**
     * @return string
     */
    public function getPasswordExpires()
    {
        return $this->passwordExpires;
    }

    /**
     * @param string $passwordRequired
     */
    public function setPasswordRequired($passwordRequired)
    {
        $this->passwordRequired = $passwordRequired;
    }

    /**
     * @return string
     */
    public function getPasswordRequired()
    {
        return $this->passwordRequired;
    }

    /**
     * @param string $sid
     */
    public function setSid($sid)
    {
        $this->sid = $sid;
    }

    /**
     * @return string
     */
    public function getSid()
    {
        return $this->sid;
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
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

}

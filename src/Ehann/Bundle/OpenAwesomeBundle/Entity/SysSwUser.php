<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSwUser
 *
 * @ORM\Table(name="sys_sw_user", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysSwUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=100, nullable=false)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_caption", type="string", length=255, nullable=false)
     */
    private $userCaption;

    /**
     * @var string
     *
     * @ORM\Column(name="user_sid", type="string", length=100, nullable=false)
     */
    private $userSid;

    /**
     * @var string
     *
     * @ORM\Column(name="user_domain", type="string", length=100, nullable=false)
     */
    private $userDomain;

    /**
     * @var string
     *
     * @ORM\Column(name="user_disabled", type="string", length=20, nullable=false)
     */
    private $userDisabled;

    /**
     * @var string
     *
     * @ORM\Column(name="user_full_name", type="string", length=100, nullable=false)
     */
    private $userFullName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password_changeable", type="string", length=20, nullable=false)
     */
    private $userPasswordChangeable;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password_expires", type="string", length=20, nullable=false)
     */
    private $userPasswordExpires;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password_required", type="string", length=20, nullable=false)
     */
    private $userPasswordRequired;

    /**
     * @var string
     *
     * @ORM\Column(name="user_status", type="string", length=100, nullable=false)
     */
    private $userStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="user_type", type="string", nullable=false)
     */
    private $userType;

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
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userName
     *
     * @param string $userName
     * @return SysSwUser
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set userCaption
     *
     * @param string $userCaption
     * @return SysSwUser
     */
    public function setUserCaption($userCaption)
    {
        $this->userCaption = $userCaption;

        return $this;
    }

    /**
     * Get userCaption
     *
     * @return string 
     */
    public function getUserCaption()
    {
        return $this->userCaption;
    }

    /**
     * Set userSid
     *
     * @param string $userSid
     * @return SysSwUser
     */
    public function setUserSid($userSid)
    {
        $this->userSid = $userSid;

        return $this;
    }

    /**
     * Get userSid
     *
     * @return string 
     */
    public function getUserSid()
    {
        return $this->userSid;
    }

    /**
     * Set userDomain
     *
     * @param string $userDomain
     * @return SysSwUser
     */
    public function setUserDomain($userDomain)
    {
        $this->userDomain = $userDomain;

        return $this;
    }

    /**
     * Get userDomain
     *
     * @return string 
     */
    public function getUserDomain()
    {
        return $this->userDomain;
    }

    /**
     * Set userDisabled
     *
     * @param string $userDisabled
     * @return SysSwUser
     */
    public function setUserDisabled($userDisabled)
    {
        $this->userDisabled = $userDisabled;

        return $this;
    }

    /**
     * Get userDisabled
     *
     * @return string 
     */
    public function getUserDisabled()
    {
        return $this->userDisabled;
    }

    /**
     * Set userFullName
     *
     * @param string $userFullName
     * @return SysSwUser
     */
    public function setUserFullName($userFullName)
    {
        $this->userFullName = $userFullName;

        return $this;
    }

    /**
     * Get userFullName
     *
     * @return string 
     */
    public function getUserFullName()
    {
        return $this->userFullName;
    }

    /**
     * Set userPasswordChangeable
     *
     * @param string $userPasswordChangeable
     * @return SysSwUser
     */
    public function setUserPasswordChangeable($userPasswordChangeable)
    {
        $this->userPasswordChangeable = $userPasswordChangeable;

        return $this;
    }

    /**
     * Get userPasswordChangeable
     *
     * @return string 
     */
    public function getUserPasswordChangeable()
    {
        return $this->userPasswordChangeable;
    }

    /**
     * Set userPasswordExpires
     *
     * @param string $userPasswordExpires
     * @return SysSwUser
     */
    public function setUserPasswordExpires($userPasswordExpires)
    {
        $this->userPasswordExpires = $userPasswordExpires;

        return $this;
    }

    /**
     * Get userPasswordExpires
     *
     * @return string 
     */
    public function getUserPasswordExpires()
    {
        return $this->userPasswordExpires;
    }

    /**
     * Set userPasswordRequired
     *
     * @param string $userPasswordRequired
     * @return SysSwUser
     */
    public function setUserPasswordRequired($userPasswordRequired)
    {
        $this->userPasswordRequired = $userPasswordRequired;

        return $this;
    }

    /**
     * Get userPasswordRequired
     *
     * @return string 
     */
    public function getUserPasswordRequired()
    {
        return $this->userPasswordRequired;
    }

    /**
     * Set userStatus
     *
     * @param string $userStatus
     * @return SysSwUser
     */
    public function setUserStatus($userStatus)
    {
        $this->userStatus = $userStatus;

        return $this;
    }

    /**
     * Get userStatus
     *
     * @return string 
     */
    public function getUserStatus()
    {
        return $this->userStatus;
    }

    /**
     * Set userType
     *
     * @param string $userType
     * @return SysSwUser
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return string 
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysSwUser
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
     * @return SysSwUser
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
     * @return SysSwUser
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

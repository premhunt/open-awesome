<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSwShare
 *
 * @ORM\Table(name="sys_sw_share", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysSwShare
{
    /**
     * @var integer
     *
     * @ORM\Column(name="share_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $shareId;

    /**
     * @var string
     *
     * @ORM\Column(name="share_caption", type="string", length=250, nullable=false)
     */
    private $shareCaption;

    /**
     * @var string
     *
     * @ORM\Column(name="share_name", type="string", length=250, nullable=false)
     */
    private $shareName;

    /**
     * @var string
     *
     * @ORM\Column(name="share_path", type="string", length=250, nullable=false)
     */
    private $sharePath;

    /**
     * @var string
     *
     * @ORM\Column(name="share_size", type="string", length=10, nullable=false)
     */
    private $shareSize;

    /**
     * @var string
     *
     * @ORM\Column(name="share_users", type="string", length=200, nullable=false)
     */
    private $shareUsers;

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
     * Get shareId
     *
     * @return integer 
     */
    public function getShareId()
    {
        return $this->shareId;
    }

    /**
     * Set shareCaption
     *
     * @param string $shareCaption
     * @return SysSwShare
     */
    public function setShareCaption($shareCaption)
    {
        $this->shareCaption = $shareCaption;

        return $this;
    }

    /**
     * Get shareCaption
     *
     * @return string 
     */
    public function getShareCaption()
    {
        return $this->shareCaption;
    }

    /**
     * Set shareName
     *
     * @param string $shareName
     * @return SysSwShare
     */
    public function setShareName($shareName)
    {
        $this->shareName = $shareName;

        return $this;
    }

    /**
     * Get shareName
     *
     * @return string 
     */
    public function getShareName()
    {
        return $this->shareName;
    }

    /**
     * Set sharePath
     *
     * @param string $sharePath
     * @return SysSwShare
     */
    public function setSharePath($sharePath)
    {
        $this->sharePath = $sharePath;

        return $this;
    }

    /**
     * Get sharePath
     *
     * @return string 
     */
    public function getSharePath()
    {
        return $this->sharePath;
    }

    /**
     * Set shareSize
     *
     * @param string $shareSize
     * @return SysSwShare
     */
    public function setShareSize($shareSize)
    {
        $this->shareSize = $shareSize;

        return $this;
    }

    /**
     * Get shareSize
     *
     * @return string 
     */
    public function getShareSize()
    {
        return $this->shareSize;
    }

    /**
     * Set shareUsers
     *
     * @param string $shareUsers
     * @return SysSwShare
     */
    public function setShareUsers($shareUsers)
    {
        $this->shareUsers = $shareUsers;

        return $this;
    }

    /**
     * Get shareUsers
     *
     * @return string 
     */
    public function getShareUsers()
    {
        return $this->shareUsers;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysSwShare
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
     * @return SysSwShare
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
     * @return SysSwShare
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

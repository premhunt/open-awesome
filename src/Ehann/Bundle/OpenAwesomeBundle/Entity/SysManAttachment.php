<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysManAttachment
 *
 * @ORM\Table(name="sys_man_attachment", indexes={@ORM\Index(name="system_id", columns={"system_id"}), @ORM\Index(name="att_user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class SysManAttachment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="att_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $attId;

    /**
     * @var string
     *
     * @ORM\Column(name="att_title", type="string", length=200, nullable=false)
     */
    private $attTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="att_filename", type="text", nullable=false)
     */
    private $attFilename;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     */
    private $timestamp;

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
     * @var \Ehann\Bundle\OpenAwesomeBundle\Entity\OaUser
     *
     * @ORM\ManyToOne(targetEntity="Ehann\Bundle\OpenAwesomeBundle\Entity\OaUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;



    /**
     * Get attId
     *
     * @return integer 
     */
    public function getAttId()
    {
        return $this->attId;
    }

    /**
     * Set attTitle
     *
     * @param string $attTitle
     * @return SysManAttachment
     */
    public function setAttTitle($attTitle)
    {
        $this->attTitle = $attTitle;

        return $this;
    }

    /**
     * Get attTitle
     *
     * @return string 
     */
    public function getAttTitle()
    {
        return $this->attTitle;
    }

    /**
     * Set attFilename
     *
     * @param string $attFilename
     * @return SysManAttachment
     */
    public function setAttFilename($attFilename)
    {
        $this->attFilename = $attFilename;

        return $this;
    }

    /**
     * Get attFilename
     *
     * @return string 
     */
    public function getAttFilename()
    {
        return $this->attFilename;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysManAttachment
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
     * Set system
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\System $system
     * @return SysManAttachment
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
     * Set user
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\OaUser $user
     * @return SysManAttachment
     */
    public function setUser(\Ehann\Bundle\OpenAwesomeBundle\Entity\OaUser $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Ehann\Bundle\OpenAwesomeBundle\Entity\OaUser 
     */
    public function getUser()
    {
        return $this->user;
    }
}

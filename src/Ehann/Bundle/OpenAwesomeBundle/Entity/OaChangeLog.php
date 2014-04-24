<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OaChangeLog
 *
 * @ORM\Table(name="oa_change_log", indexes={@ORM\Index(name="change_id", columns={"change_id"}), @ORM\Index(name="oa_change_log_user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class OaChangeLog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="change_log_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $changeLogId;

    /**
     * @var string
     *
     * @ORM\Column(name="change_log_attachment", type="string", length=200, nullable=false)
     */
    private $changeLogAttachment;

    /**
     * @var string
     *
     * @ORM\Column(name="change_log_comments", type="text", nullable=false)
     */
    private $changeLogComments;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     */
    private $timestamp;

    /**
     * @var \Ehann\Bundle\OpenAwesomeBundle\Entity\OaChange
     *
     * @ORM\ManyToOne(targetEntity="Ehann\Bundle\OpenAwesomeBundle\Entity\OaChange")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="change_id", referencedColumnName="change_id")
     * })
     */
    private $change;

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
     * Get changeLogId
     *
     * @return integer 
     */
    public function getChangeLogId()
    {
        return $this->changeLogId;
    }

    /**
     * Set changeLogAttachment
     *
     * @param string $changeLogAttachment
     * @return OaChangeLog
     */
    public function setChangeLogAttachment($changeLogAttachment)
    {
        $this->changeLogAttachment = $changeLogAttachment;

        return $this;
    }

    /**
     * Get changeLogAttachment
     *
     * @return string 
     */
    public function getChangeLogAttachment()
    {
        return $this->changeLogAttachment;
    }

    /**
     * Set changeLogComments
     *
     * @param string $changeLogComments
     * @return OaChangeLog
     */
    public function setChangeLogComments($changeLogComments)
    {
        $this->changeLogComments = $changeLogComments;

        return $this;
    }

    /**
     * Get changeLogComments
     *
     * @return string 
     */
    public function getChangeLogComments()
    {
        return $this->changeLogComments;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return OaChangeLog
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
     * Set change
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\OaChange $change
     * @return OaChangeLog
     */
    public function setChange(\Ehann\Bundle\OpenAwesomeBundle\Entity\OaChange $change = null)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * Get change
     *
     * @return \Ehann\Bundle\OpenAwesomeBundle\Entity\OaChange 
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * Set user
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\OaUser $user
     * @return OaChangeLog
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

<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysManNotes
 *
 * @ORM\Table(name="sys_man_notes", indexes={@ORM\Index(name="system_id", columns={"system_id"}), @ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class SysManNotes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="notes_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $notesId;

    /**
     * @var string
     *
     * @ORM\Column(name="notes_title", type="string", length=200, nullable=false)
     */
    private $notesTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="notes_text", type="text", nullable=false)
     */
    private $notesText;

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
     * Get notesId
     *
     * @return integer 
     */
    public function getNotesId()
    {
        return $this->notesId;
    }

    /**
     * Set notesTitle
     *
     * @param string $notesTitle
     * @return SysManNotes
     */
    public function setNotesTitle($notesTitle)
    {
        $this->notesTitle = $notesTitle;

        return $this;
    }

    /**
     * Get notesTitle
     *
     * @return string 
     */
    public function getNotesTitle()
    {
        return $this->notesTitle;
    }

    /**
     * Set notesText
     *
     * @param string $notesText
     * @return SysManNotes
     */
    public function setNotesText($notesText)
    {
        $this->notesText = $notesText;

        return $this;
    }

    /**
     * Get notesText
     *
     * @return string 
     */
    public function getNotesText()
    {
        return $this->notesText;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysManNotes
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
     * @return SysManNotes
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
     * @return SysManNotes
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

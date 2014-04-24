<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OaAlertLog
 *
 * @ORM\Table(name="oa_alert_log", indexes={@ORM\Index(name="system_id", columns={"system_id"}), @ORM\Index(name="oa_alert_log_user_id", columns={"user_id"}), @ORM\Index(name="oa_alert_change_id", columns={"change_id"})})
 * @ORM\Entity
 */
class OaAlertLog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="alert_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $alertId;

    /**
     * @var string
     *
     * @ORM\Column(name="alert_table", type="string", length=50, nullable=false)
     */
    private $alertTable;

    /**
     * @var integer
     *
     * @ORM\Column(name="alert_foreign_row", type="integer", nullable=false)
     */
    private $alertForeignRow;

    /**
     * @var string
     *
     * @ORM\Column(name="alert_details", type="string", length=200, nullable=false)
     */
    private $alertDetails;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="alert_ack_time", type="datetime", nullable=false)
     */
    private $alertAckTime;

    /**
     * @var string
     *
     * @ORM\Column(name="alert_note", type="string", length=200, nullable=false)
     */
    private $alertNote;

    /**
     * @var string
     *
     * @ORM\Column(name="external_change_id", type="string", length=200, nullable=false)
     */
    private $externalChangeId;

    /**
     * @var string
     *
     * @ORM\Column(name="external_change_link", type="string", length=200, nullable=false)
     */
    private $externalChangeLink;

    /**
     * @var string
     *
     * @ORM\Column(name="change_type", type="string", nullable=false)
     */
    private $changeType;

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
     * @var \Ehann\Bundle\OpenAwesomeBundle\Entity\OaChange
     *
     * @ORM\ManyToOne(targetEntity="Ehann\Bundle\OpenAwesomeBundle\Entity\OaChange")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="change_id", referencedColumnName="change_id")
     * })
     */
    private $change;



    /**
     * Get alertId
     *
     * @return integer 
     */
    public function getAlertId()
    {
        return $this->alertId;
    }

    /**
     * Set alertTable
     *
     * @param string $alertTable
     * @return OaAlertLog
     */
    public function setAlertTable($alertTable)
    {
        $this->alertTable = $alertTable;

        return $this;
    }

    /**
     * Get alertTable
     *
     * @return string 
     */
    public function getAlertTable()
    {
        return $this->alertTable;
    }

    /**
     * Set alertForeignRow
     *
     * @param integer $alertForeignRow
     * @return OaAlertLog
     */
    public function setAlertForeignRow($alertForeignRow)
    {
        $this->alertForeignRow = $alertForeignRow;

        return $this;
    }

    /**
     * Get alertForeignRow
     *
     * @return integer 
     */
    public function getAlertForeignRow()
    {
        return $this->alertForeignRow;
    }

    /**
     * Set alertDetails
     *
     * @param string $alertDetails
     * @return OaAlertLog
     */
    public function setAlertDetails($alertDetails)
    {
        $this->alertDetails = $alertDetails;

        return $this;
    }

    /**
     * Get alertDetails
     *
     * @return string 
     */
    public function getAlertDetails()
    {
        return $this->alertDetails;
    }

    /**
     * Set alertAckTime
     *
     * @param \DateTime $alertAckTime
     * @return OaAlertLog
     */
    public function setAlertAckTime($alertAckTime)
    {
        $this->alertAckTime = $alertAckTime;

        return $this;
    }

    /**
     * Get alertAckTime
     *
     * @return \DateTime 
     */
    public function getAlertAckTime()
    {
        return $this->alertAckTime;
    }

    /**
     * Set alertNote
     *
     * @param string $alertNote
     * @return OaAlertLog
     */
    public function setAlertNote($alertNote)
    {
        $this->alertNote = $alertNote;

        return $this;
    }

    /**
     * Get alertNote
     *
     * @return string 
     */
    public function getAlertNote()
    {
        return $this->alertNote;
    }

    /**
     * Set externalChangeId
     *
     * @param string $externalChangeId
     * @return OaAlertLog
     */
    public function setExternalChangeId($externalChangeId)
    {
        $this->externalChangeId = $externalChangeId;

        return $this;
    }

    /**
     * Get externalChangeId
     *
     * @return string 
     */
    public function getExternalChangeId()
    {
        return $this->externalChangeId;
    }

    /**
     * Set externalChangeLink
     *
     * @param string $externalChangeLink
     * @return OaAlertLog
     */
    public function setExternalChangeLink($externalChangeLink)
    {
        $this->externalChangeLink = $externalChangeLink;

        return $this;
    }

    /**
     * Get externalChangeLink
     *
     * @return string 
     */
    public function getExternalChangeLink()
    {
        return $this->externalChangeLink;
    }

    /**
     * Set changeType
     *
     * @param string $changeType
     * @return OaAlertLog
     */
    public function setChangeType($changeType)
    {
        $this->changeType = $changeType;

        return $this;
    }

    /**
     * Get changeType
     *
     * @return string 
     */
    public function getChangeType()
    {
        return $this->changeType;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return OaAlertLog
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
     * @return OaAlertLog
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
     * @return OaAlertLog
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

    /**
     * Set change
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\OaChange $change
     * @return OaAlertLog
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
}

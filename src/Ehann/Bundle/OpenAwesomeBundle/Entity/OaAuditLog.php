<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OaAuditLog
 *
 * @ORM\Table(name="oa_audit_log", indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="oa_audit_log_system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class OaAuditLog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="audit_log_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $auditLogId;

    /**
     * @var string
     *
     * @ORM\Column(name="audit_log_event_type", type="string", length=50, nullable=false)
     */
    private $auditLogEventType;

    /**
     * @var string
     *
     * @ORM\Column(name="audit_log_event_details", type="string", length=200, nullable=false)
     */
    private $auditLogEventDetails;

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
     * Get auditLogId
     *
     * @return integer 
     */
    public function getAuditLogId()
    {
        return $this->auditLogId;
    }

    /**
     * Set auditLogEventType
     *
     * @param string $auditLogEventType
     * @return OaAuditLog
     */
    public function setAuditLogEventType($auditLogEventType)
    {
        $this->auditLogEventType = $auditLogEventType;

        return $this;
    }

    /**
     * Get auditLogEventType
     *
     * @return string 
     */
    public function getAuditLogEventType()
    {
        return $this->auditLogEventType;
    }

    /**
     * Set auditLogEventDetails
     *
     * @param string $auditLogEventDetails
     * @return OaAuditLog
     */
    public function setAuditLogEventDetails($auditLogEventDetails)
    {
        $this->auditLogEventDetails = $auditLogEventDetails;

        return $this;
    }

    /**
     * Get auditLogEventDetails
     *
     * @return string 
     */
    public function getAuditLogEventDetails()
    {
        return $this->auditLogEventDetails;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return OaAuditLog
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
     * @return OaAuditLog
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
     * @return OaAuditLog
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

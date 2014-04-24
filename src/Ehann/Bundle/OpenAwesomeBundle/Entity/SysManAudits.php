<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysManAudits
 *
 * @ORM\Table(name="sys_man_audits", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysManAudits
{
    /**
     * @var integer
     *
     * @ORM\Column(name="system_audits_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $systemAuditsId;

    /**
     * @var string
     *
     * @ORM\Column(name="system_audits_username", type="string", length=45, nullable=false)
     */
    private $systemAuditsUsername;

    /**
     * @var string
     *
     * @ORM\Column(name="system_audits_type", type="string", length=45, nullable=false)
     */
    private $systemAuditsType;

    /**
     * @var string
     *
     * @ORM\Column(name="system_audits_time", type="string", length=45, nullable=false)
     */
    private $systemAuditsTime;

    /**
     * @var string
     *
     * @ORM\Column(name="system_audits_ip", type="string", length=30, nullable=false)
     */
    private $systemAuditsIp;

    /**
     * @var string
     *
     * @ORM\Column(name="audit_debug", type="text", nullable=false)
     */
    private $auditDebug;

    /**
     * @var string
     *
     * @ORM\Column(name="audit_wmi_fails", type="text", nullable=false)
     */
    private $auditWmiFails;

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
     * Get systemAuditsId
     *
     * @return integer 
     */
    public function getSystemAuditsId()
    {
        return $this->systemAuditsId;
    }

    /**
     * Set systemAuditsUsername
     *
     * @param string $systemAuditsUsername
     * @return SysManAudits
     */
    public function setSystemAuditsUsername($systemAuditsUsername)
    {
        $this->systemAuditsUsername = $systemAuditsUsername;

        return $this;
    }

    /**
     * Get systemAuditsUsername
     *
     * @return string 
     */
    public function getSystemAuditsUsername()
    {
        return $this->systemAuditsUsername;
    }

    /**
     * Set systemAuditsType
     *
     * @param string $systemAuditsType
     * @return SysManAudits
     */
    public function setSystemAuditsType($systemAuditsType)
    {
        $this->systemAuditsType = $systemAuditsType;

        return $this;
    }

    /**
     * Get systemAuditsType
     *
     * @return string 
     */
    public function getSystemAuditsType()
    {
        return $this->systemAuditsType;
    }

    /**
     * Set systemAuditsTime
     *
     * @param string $systemAuditsTime
     * @return SysManAudits
     */
    public function setSystemAuditsTime($systemAuditsTime)
    {
        $this->systemAuditsTime = $systemAuditsTime;

        return $this;
    }

    /**
     * Get systemAuditsTime
     *
     * @return string 
     */
    public function getSystemAuditsTime()
    {
        return $this->systemAuditsTime;
    }

    /**
     * Set systemAuditsIp
     *
     * @param string $systemAuditsIp
     * @return SysManAudits
     */
    public function setSystemAuditsIp($systemAuditsIp)
    {
        $this->systemAuditsIp = $systemAuditsIp;

        return $this;
    }

    /**
     * Get systemAuditsIp
     *
     * @return string 
     */
    public function getSystemAuditsIp()
    {
        return $this->systemAuditsIp;
    }

    /**
     * Set auditDebug
     *
     * @param string $auditDebug
     * @return SysManAudits
     */
    public function setAuditDebug($auditDebug)
    {
        $this->auditDebug = $auditDebug;

        return $this;
    }

    /**
     * Get auditDebug
     *
     * @return string 
     */
    public function getAuditDebug()
    {
        return $this->auditDebug;
    }

    /**
     * Set auditWmiFails
     *
     * @param string $auditWmiFails
     * @return SysManAudits
     */
    public function setAuditWmiFails($auditWmiFails)
    {
        $this->auditWmiFails = $auditWmiFails;

        return $this;
    }

    /**
     * Get auditWmiFails
     *
     * @return string 
     */
    public function getAuditWmiFails()
    {
        return $this->auditWmiFails;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysManAudits
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
     * @return SysManAudits
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

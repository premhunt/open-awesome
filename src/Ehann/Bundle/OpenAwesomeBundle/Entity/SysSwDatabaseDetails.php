<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSwDatabaseDetails
 *
 * @ORM\Table(name="sys_sw_database_details", indexes={@ORM\Index(name="system_id", columns={"db_id"})})
 * @ORM\Entity
 */
class SysSwDatabaseDetails
{
    /**
     * @var integer
     *
     * @ORM\Column(name="details_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $detailsId;

    /**
     * @var integer
     *
     * @ORM\Column(name="system_id", type="integer", nullable=true)
     */
    private $systemId;

    /**
     * @var string
     *
     * @ORM\Column(name="details_name", type="string", length=50, nullable=false)
     */
    private $detailsName;

    /**
     * @var string
     *
     * @ORM\Column(name="details_internal_id", type="string", length=50, nullable=false)
     */
    private $detailsInternalId;

    /**
     * @var string
     *
     * @ORM\Column(name="details_instance", type="string", length=50, nullable=false)
     */
    private $detailsInstance;

    /**
     * @var string
     *
     * @ORM\Column(name="details_current_size", type="string", length=50, nullable=false)
     */
    private $detailsCurrentSize;

    /**
     * @var string
     *
     * @ORM\Column(name="details_compatibility_mode", type="string", length=50, nullable=false)
     */
    private $detailsCompatibilityMode;

    /**
     * @var string
     *
     * @ORM\Column(name="details_filename", type="string", length=200, nullable=false)
     */
    private $detailsFilename;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="details_creation_date", type="datetime", nullable=false)
     */
    private $detailsCreationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="details_last_accessed_date", type="string", length=50, nullable=false)
     */
    private $detailsLastAccessedDate;

    /**
     * @var string
     *
     * @ORM\Column(name="details_last_accessed_login_name", type="string", length=50, nullable=false)
     */
    private $detailsLastAccessedLoginName;

    /**
     * @var string
     *
     * @ORM\Column(name="details_last_accessed_hostname", type="string", length=50, nullable=false)
     */
    private $detailsLastAccessedHostname;

    /**
     * @var string
     *
     * @ORM\Column(name="details_last_accessed_program", type="string", length=50, nullable=false)
     */
    private $detailsLastAccessedProgram;

    /**
     * @var string
     *
     * @ORM\Column(name="details_last_accessed_domain", type="string", length=50, nullable=false)
     */
    private $detailsLastAccessedDomain;

    /**
     * @var string
     *
     * @ORM\Column(name="details_last_accessed_username", type="string", length=50, nullable=false)
     */
    private $detailsLastAccessedUsername;

    /**
     * @var string
     *
     * @ORM\Column(name="details_last_accessed_protocol", type="string", length=50, nullable=false)
     */
    private $detailsLastAccessedProtocol;

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
     * @var \Ehann\Bundle\OpenAwesomeBundle\Entity\SysSwDatabase
     *
     * @ORM\ManyToOne(targetEntity="Ehann\Bundle\OpenAwesomeBundle\Entity\SysSwDatabase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="db_id", referencedColumnName="db_id")
     * })
     */
    private $db;



    /**
     * Get detailsId
     *
     * @return integer 
     */
    public function getDetailsId()
    {
        return $this->detailsId;
    }

    /**
     * Set systemId
     *
     * @param integer $systemId
     * @return SysSwDatabaseDetails
     */
    public function setSystemId($systemId)
    {
        $this->systemId = $systemId;

        return $this;
    }

    /**
     * Get systemId
     *
     * @return integer 
     */
    public function getSystemId()
    {
        return $this->systemId;
    }

    /**
     * Set detailsName
     *
     * @param string $detailsName
     * @return SysSwDatabaseDetails
     */
    public function setDetailsName($detailsName)
    {
        $this->detailsName = $detailsName;

        return $this;
    }

    /**
     * Get detailsName
     *
     * @return string 
     */
    public function getDetailsName()
    {
        return $this->detailsName;
    }

    /**
     * Set detailsInternalId
     *
     * @param string $detailsInternalId
     * @return SysSwDatabaseDetails
     */
    public function setDetailsInternalId($detailsInternalId)
    {
        $this->detailsInternalId = $detailsInternalId;

        return $this;
    }

    /**
     * Get detailsInternalId
     *
     * @return string 
     */
    public function getDetailsInternalId()
    {
        return $this->detailsInternalId;
    }

    /**
     * Set detailsInstance
     *
     * @param string $detailsInstance
     * @return SysSwDatabaseDetails
     */
    public function setDetailsInstance($detailsInstance)
    {
        $this->detailsInstance = $detailsInstance;

        return $this;
    }

    /**
     * Get detailsInstance
     *
     * @return string 
     */
    public function getDetailsInstance()
    {
        return $this->detailsInstance;
    }

    /**
     * Set detailsCurrentSize
     *
     * @param string $detailsCurrentSize
     * @return SysSwDatabaseDetails
     */
    public function setDetailsCurrentSize($detailsCurrentSize)
    {
        $this->detailsCurrentSize = $detailsCurrentSize;

        return $this;
    }

    /**
     * Get detailsCurrentSize
     *
     * @return string 
     */
    public function getDetailsCurrentSize()
    {
        return $this->detailsCurrentSize;
    }

    /**
     * Set detailsCompatibilityMode
     *
     * @param string $detailsCompatibilityMode
     * @return SysSwDatabaseDetails
     */
    public function setDetailsCompatibilityMode($detailsCompatibilityMode)
    {
        $this->detailsCompatibilityMode = $detailsCompatibilityMode;

        return $this;
    }

    /**
     * Get detailsCompatibilityMode
     *
     * @return string 
     */
    public function getDetailsCompatibilityMode()
    {
        return $this->detailsCompatibilityMode;
    }

    /**
     * Set detailsFilename
     *
     * @param string $detailsFilename
     * @return SysSwDatabaseDetails
     */
    public function setDetailsFilename($detailsFilename)
    {
        $this->detailsFilename = $detailsFilename;

        return $this;
    }

    /**
     * Get detailsFilename
     *
     * @return string 
     */
    public function getDetailsFilename()
    {
        return $this->detailsFilename;
    }

    /**
     * Set detailsCreationDate
     *
     * @param \DateTime $detailsCreationDate
     * @return SysSwDatabaseDetails
     */
    public function setDetailsCreationDate($detailsCreationDate)
    {
        $this->detailsCreationDate = $detailsCreationDate;

        return $this;
    }

    /**
     * Get detailsCreationDate
     *
     * @return \DateTime 
     */
    public function getDetailsCreationDate()
    {
        return $this->detailsCreationDate;
    }

    /**
     * Set detailsLastAccessedDate
     *
     * @param string $detailsLastAccessedDate
     * @return SysSwDatabaseDetails
     */
    public function setDetailsLastAccessedDate($detailsLastAccessedDate)
    {
        $this->detailsLastAccessedDate = $detailsLastAccessedDate;

        return $this;
    }

    /**
     * Get detailsLastAccessedDate
     *
     * @return string 
     */
    public function getDetailsLastAccessedDate()
    {
        return $this->detailsLastAccessedDate;
    }

    /**
     * Set detailsLastAccessedLoginName
     *
     * @param string $detailsLastAccessedLoginName
     * @return SysSwDatabaseDetails
     */
    public function setDetailsLastAccessedLoginName($detailsLastAccessedLoginName)
    {
        $this->detailsLastAccessedLoginName = $detailsLastAccessedLoginName;

        return $this;
    }

    /**
     * Get detailsLastAccessedLoginName
     *
     * @return string 
     */
    public function getDetailsLastAccessedLoginName()
    {
        return $this->detailsLastAccessedLoginName;
    }

    /**
     * Set detailsLastAccessedHostname
     *
     * @param string $detailsLastAccessedHostname
     * @return SysSwDatabaseDetails
     */
    public function setDetailsLastAccessedHostname($detailsLastAccessedHostname)
    {
        $this->detailsLastAccessedHostname = $detailsLastAccessedHostname;

        return $this;
    }

    /**
     * Get detailsLastAccessedHostname
     *
     * @return string 
     */
    public function getDetailsLastAccessedHostname()
    {
        return $this->detailsLastAccessedHostname;
    }

    /**
     * Set detailsLastAccessedProgram
     *
     * @param string $detailsLastAccessedProgram
     * @return SysSwDatabaseDetails
     */
    public function setDetailsLastAccessedProgram($detailsLastAccessedProgram)
    {
        $this->detailsLastAccessedProgram = $detailsLastAccessedProgram;

        return $this;
    }

    /**
     * Get detailsLastAccessedProgram
     *
     * @return string 
     */
    public function getDetailsLastAccessedProgram()
    {
        return $this->detailsLastAccessedProgram;
    }

    /**
     * Set detailsLastAccessedDomain
     *
     * @param string $detailsLastAccessedDomain
     * @return SysSwDatabaseDetails
     */
    public function setDetailsLastAccessedDomain($detailsLastAccessedDomain)
    {
        $this->detailsLastAccessedDomain = $detailsLastAccessedDomain;

        return $this;
    }

    /**
     * Get detailsLastAccessedDomain
     *
     * @return string 
     */
    public function getDetailsLastAccessedDomain()
    {
        return $this->detailsLastAccessedDomain;
    }

    /**
     * Set detailsLastAccessedUsername
     *
     * @param string $detailsLastAccessedUsername
     * @return SysSwDatabaseDetails
     */
    public function setDetailsLastAccessedUsername($detailsLastAccessedUsername)
    {
        $this->detailsLastAccessedUsername = $detailsLastAccessedUsername;

        return $this;
    }

    /**
     * Get detailsLastAccessedUsername
     *
     * @return string 
     */
    public function getDetailsLastAccessedUsername()
    {
        return $this->detailsLastAccessedUsername;
    }

    /**
     * Set detailsLastAccessedProtocol
     *
     * @param string $detailsLastAccessedProtocol
     * @return SysSwDatabaseDetails
     */
    public function setDetailsLastAccessedProtocol($detailsLastAccessedProtocol)
    {
        $this->detailsLastAccessedProtocol = $detailsLastAccessedProtocol;

        return $this;
    }

    /**
     * Get detailsLastAccessedProtocol
     *
     * @return string 
     */
    public function getDetailsLastAccessedProtocol()
    {
        return $this->detailsLastAccessedProtocol;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysSwDatabaseDetails
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
     * @return SysSwDatabaseDetails
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
     * Set db
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\SysSwDatabase $db
     * @return SysSwDatabaseDetails
     */
    public function setDb(\Ehann\Bundle\OpenAwesomeBundle\Entity\SysSwDatabase $db = null)
    {
        $this->db = $db;

        return $this;
    }

    /**
     * Get db
     *
     * @return \Ehann\Bundle\OpenAwesomeBundle\Entity\SysSwDatabase 
     */
    public function getDb()
    {
        return $this->db;
    }
}

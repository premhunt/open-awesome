<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSwDatabase
 *
 * @ORM\Table(name="sys_sw_database", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysSwDatabase
{
    /**
     * @var integer
     *
     * @ORM\Column(name="db_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dbId;

    /**
     * @var string
     *
     * @ORM\Column(name="db_type", type="string", length=50, nullable=false)
     */
    private $dbType;

    /**
     * @var string
     *
     * @ORM\Column(name="db_version", type="string", length=50, nullable=false)
     */
    private $dbVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="db_version_string", type="string", length=50, nullable=false)
     */
    private $dbVersionString;

    /**
     * @var string
     *
     * @ORM\Column(name="db_edition", type="string", length=50, nullable=false)
     */
    private $dbEdition;

    /**
     * @var integer
     *
     * @ORM\Column(name="db_port", type="integer", nullable=true)
     */
    private $dbPort;

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
     * Get dbId
     *
     * @return integer 
     */
    public function getDbId()
    {
        return $this->dbId;
    }

    /**
     * Set dbType
     *
     * @param string $dbType
     * @return SysSwDatabase
     */
    public function setDbType($dbType)
    {
        $this->dbType = $dbType;

        return $this;
    }

    /**
     * Get dbType
     *
     * @return string 
     */
    public function getDbType()
    {
        return $this->dbType;
    }

    /**
     * Set dbVersion
     *
     * @param string $dbVersion
     * @return SysSwDatabase
     */
    public function setDbVersion($dbVersion)
    {
        $this->dbVersion = $dbVersion;

        return $this;
    }

    /**
     * Get dbVersion
     *
     * @return string 
     */
    public function getDbVersion()
    {
        return $this->dbVersion;
    }

    /**
     * Set dbVersionString
     *
     * @param string $dbVersionString
     * @return SysSwDatabase
     */
    public function setDbVersionString($dbVersionString)
    {
        $this->dbVersionString = $dbVersionString;

        return $this;
    }

    /**
     * Get dbVersionString
     *
     * @return string 
     */
    public function getDbVersionString()
    {
        return $this->dbVersionString;
    }

    /**
     * Set dbEdition
     *
     * @param string $dbEdition
     * @return SysSwDatabase
     */
    public function setDbEdition($dbEdition)
    {
        $this->dbEdition = $dbEdition;

        return $this;
    }

    /**
     * Get dbEdition
     *
     * @return string 
     */
    public function getDbEdition()
    {
        return $this->dbEdition;
    }

    /**
     * Set dbPort
     *
     * @param integer $dbPort
     * @return SysSwDatabase
     */
    public function setDbPort($dbPort)
    {
        $this->dbPort = $dbPort;

        return $this;
    }

    /**
     * Get dbPort
     *
     * @return integer 
     */
    public function getDbPort()
    {
        return $this->dbPort;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysSwDatabase
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
     * @return SysSwDatabase
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
     * @return SysSwDatabase
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

<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSwLog
 *
 * @ORM\Table(name="sys_sw_log", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysSwLog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="log_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $logId;

    /**
     * @var string
     *
     * @ORM\Column(name="log_name", type="string", length=50, nullable=false)
     */
    private $logName;

    /**
     * @var string
     *
     * @ORM\Column(name="log_file_name", type="string", length=250, nullable=false)
     */
    private $logFileName;

    /**
     * @var integer
     *
     * @ORM\Column(name="log_file_size", type="integer", nullable=false)
     */
    private $logFileSize;

    /**
     * @var integer
     *
     * @ORM\Column(name="log_max_file_size", type="integer", nullable=false)
     */
    private $logMaxFileSize;

    /**
     * @var string
     *
     * @ORM\Column(name="log_overwrite", type="string", length=30, nullable=false)
     */
    private $logOverwrite;

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
     * Get logId
     *
     * @return integer 
     */
    public function getLogId()
    {
        return $this->logId;
    }

    /**
     * Set logName
     *
     * @param string $logName
     * @return SysSwLog
     */
    public function setLogName($logName)
    {
        $this->logName = $logName;

        return $this;
    }

    /**
     * Get logName
     *
     * @return string 
     */
    public function getLogName()
    {
        return $this->logName;
    }

    /**
     * Set logFileName
     *
     * @param string $logFileName
     * @return SysSwLog
     */
    public function setLogFileName($logFileName)
    {
        $this->logFileName = $logFileName;

        return $this;
    }

    /**
     * Get logFileName
     *
     * @return string 
     */
    public function getLogFileName()
    {
        return $this->logFileName;
    }

    /**
     * Set logFileSize
     *
     * @param integer $logFileSize
     * @return SysSwLog
     */
    public function setLogFileSize($logFileSize)
    {
        $this->logFileSize = $logFileSize;

        return $this;
    }

    /**
     * Get logFileSize
     *
     * @return integer 
     */
    public function getLogFileSize()
    {
        return $this->logFileSize;
    }

    /**
     * Set logMaxFileSize
     *
     * @param integer $logMaxFileSize
     * @return SysSwLog
     */
    public function setLogMaxFileSize($logMaxFileSize)
    {
        $this->logMaxFileSize = $logMaxFileSize;

        return $this;
    }

    /**
     * Get logMaxFileSize
     *
     * @return integer 
     */
    public function getLogMaxFileSize()
    {
        return $this->logMaxFileSize;
    }

    /**
     * Set logOverwrite
     *
     * @param string $logOverwrite
     * @return SysSwLog
     */
    public function setLogOverwrite($logOverwrite)
    {
        $this->logOverwrite = $logOverwrite;

        return $this;
    }

    /**
     * Get logOverwrite
     *
     * @return string 
     */
    public function getLogOverwrite()
    {
        return $this->logOverwrite;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysSwLog
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
     * @return SysSwLog
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
     * @return SysSwLog
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

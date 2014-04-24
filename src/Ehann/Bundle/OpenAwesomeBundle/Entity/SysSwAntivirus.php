<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSwAntivirus
 *
 * @ORM\Table(name="sys_sw_antivirus", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysSwAntivirus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="virus_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $virusId;

    /**
     * @var string
     *
     * @ORM\Column(name="virus_manufacturer", type="string", length=150, nullable=false)
     */
    private $virusManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="virus_version", type="string", length=45, nullable=false)
     */
    private $virusVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="virus_name", type="string", length=100, nullable=false)
     */
    private $virusName;

    /**
     * @var string
     *
     * @ORM\Column(name="virus_uptodate", type="string", length=45, nullable=false)
     */
    private $virusUptodate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="virus_def_date", type="date", nullable=false)
     */
    private $virusDefDate;

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
     * Get virusId
     *
     * @return integer 
     */
    public function getVirusId()
    {
        return $this->virusId;
    }

    /**
     * Set virusManufacturer
     *
     * @param string $virusManufacturer
     * @return SysSwAntivirus
     */
    public function setVirusManufacturer($virusManufacturer)
    {
        $this->virusManufacturer = $virusManufacturer;

        return $this;
    }

    /**
     * Get virusManufacturer
     *
     * @return string 
     */
    public function getVirusManufacturer()
    {
        return $this->virusManufacturer;
    }

    /**
     * Set virusVersion
     *
     * @param string $virusVersion
     * @return SysSwAntivirus
     */
    public function setVirusVersion($virusVersion)
    {
        $this->virusVersion = $virusVersion;

        return $this;
    }

    /**
     * Get virusVersion
     *
     * @return string 
     */
    public function getVirusVersion()
    {
        return $this->virusVersion;
    }

    /**
     * Set virusName
     *
     * @param string $virusName
     * @return SysSwAntivirus
     */
    public function setVirusName($virusName)
    {
        $this->virusName = $virusName;

        return $this;
    }

    /**
     * Get virusName
     *
     * @return string 
     */
    public function getVirusName()
    {
        return $this->virusName;
    }

    /**
     * Set virusUptodate
     *
     * @param string $virusUptodate
     * @return SysSwAntivirus
     */
    public function setVirusUptodate($virusUptodate)
    {
        $this->virusUptodate = $virusUptodate;

        return $this;
    }

    /**
     * Get virusUptodate
     *
     * @return string 
     */
    public function getVirusUptodate()
    {
        return $this->virusUptodate;
    }

    /**
     * Set virusDefDate
     *
     * @param \DateTime $virusDefDate
     * @return SysSwAntivirus
     */
    public function setVirusDefDate($virusDefDate)
    {
        $this->virusDefDate = $virusDefDate;

        return $this;
    }

    /**
     * Get virusDefDate
     *
     * @return \DateTime 
     */
    public function getVirusDefDate()
    {
        return $this->virusDefDate;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysSwAntivirus
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
     * @return SysSwAntivirus
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
     * @return SysSwAntivirus
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

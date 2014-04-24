<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysHwBios
 *
 * @ORM\Table(name="sys_hw_bios", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysHwBios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="bios_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $biosId;

    /**
     * @var string
     *
     * @ORM\Column(name="bios_description", type="string", length=200, nullable=false)
     */
    private $biosDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="bios_manufacturer", type="string", length=200, nullable=false)
     */
    private $biosManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="bios_serial", type="string", length=100, nullable=false)
     */
    private $biosSerial;

    /**
     * @var string
     *
     * @ORM\Column(name="bios_smversion", type="string", length=100, nullable=false)
     */
    private $biosSmversion;

    /**
     * @var string
     *
     * @ORM\Column(name="bios_version", type="string", length=100, nullable=false)
     */
    private $biosVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="bios_asset_tag", type="string", length=100, nullable=false)
     */
    private $biosAssetTag;

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
     * Get biosId
     *
     * @return integer 
     */
    public function getBiosId()
    {
        return $this->biosId;
    }

    /**
     * Set biosDescription
     *
     * @param string $biosDescription
     * @return SysHwBios
     */
    public function setBiosDescription($biosDescription)
    {
        $this->biosDescription = $biosDescription;

        return $this;
    }

    /**
     * Get biosDescription
     *
     * @return string 
     */
    public function getBiosDescription()
    {
        return $this->biosDescription;
    }

    /**
     * Set biosManufacturer
     *
     * @param string $biosManufacturer
     * @return SysHwBios
     */
    public function setBiosManufacturer($biosManufacturer)
    {
        $this->biosManufacturer = $biosManufacturer;

        return $this;
    }

    /**
     * Get biosManufacturer
     *
     * @return string 
     */
    public function getBiosManufacturer()
    {
        return $this->biosManufacturer;
    }

    /**
     * Set biosSerial
     *
     * @param string $biosSerial
     * @return SysHwBios
     */
    public function setBiosSerial($biosSerial)
    {
        $this->biosSerial = $biosSerial;

        return $this;
    }

    /**
     * Get biosSerial
     *
     * @return string 
     */
    public function getBiosSerial()
    {
        return $this->biosSerial;
    }

    /**
     * Set biosSmversion
     *
     * @param string $biosSmversion
     * @return SysHwBios
     */
    public function setBiosSmversion($biosSmversion)
    {
        $this->biosSmversion = $biosSmversion;

        return $this;
    }

    /**
     * Get biosSmversion
     *
     * @return string 
     */
    public function getBiosSmversion()
    {
        return $this->biosSmversion;
    }

    /**
     * Set biosVersion
     *
     * @param string $biosVersion
     * @return SysHwBios
     */
    public function setBiosVersion($biosVersion)
    {
        $this->biosVersion = $biosVersion;

        return $this;
    }

    /**
     * Get biosVersion
     *
     * @return string 
     */
    public function getBiosVersion()
    {
        return $this->biosVersion;
    }

    /**
     * Set biosAssetTag
     *
     * @param string $biosAssetTag
     * @return SysHwBios
     */
    public function setBiosAssetTag($biosAssetTag)
    {
        $this->biosAssetTag = $biosAssetTag;

        return $this;
    }

    /**
     * Get biosAssetTag
     *
     * @return string 
     */
    public function getBiosAssetTag()
    {
        return $this->biosAssetTag;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysHwBios
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
     * @return SysHwBios
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
     * @return SysHwBios
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

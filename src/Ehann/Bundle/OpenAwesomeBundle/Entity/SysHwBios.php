<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Type;

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
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="bios_description", type="string", length=200, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="bios_manufacturer", type="string", length=200, nullable=false)
     */
    private $manufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="bios_serial", type="string", length=100, nullable=false)
     */
    private $serial;

    /**
     * @var string
     *
     * @ORM\Column(name="bios_smversion", type="string", length=100, nullable=false)
     */
    private $smversion;

    /**
     * @var string
     *
     * @ORM\Column(name="bios_version", type="string", length=100, nullable=false)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="bios_asset_tag", type="string", length=100, nullable=false)
     */
    private $assetTag;

    /**
     * @var \DateTime
     *
     * @Type("DateTime<'Y-m-d G:i:s'>")
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     */
    private $timestamp;

    /**
     * @var \DateTime
     *
     * @Type("DateTime<'Y-m-d G:i:s'>")
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set biosDescription
     *
     * @param string $biosDescription
     * @return SysHwBios
     */
    public function setDescription($biosDescription)
    {
        $this->description = $biosDescription;

        return $this;
    }

    /**
     * Get biosDescription
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set biosManufacturer
     *
     * @param string $biosManufacturer
     * @return SysHwBios
     */
    public function setManufacturer($biosManufacturer)
    {
        $this->manufacturer = $biosManufacturer;

        return $this;
    }

    /**
     * Get biosManufacturer
     *
     * @return string 
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set biosSerial
     *
     * @param string $biosSerial
     * @return SysHwBios
     */
    public function setSerial($biosSerial)
    {
        $this->serial = $biosSerial;

        return $this;
    }

    /**
     * Get biosSerial
     *
     * @return string 
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * Set biosSmversion
     *
     * @param string $biosSmversion
     * @return SysHwBios
     */
    public function setSmversion($biosSmversion)
    {
        $this->smversion = $biosSmversion;

        return $this;
    }

    /**
     * Get biosSmversion
     *
     * @return string 
     */
    public function getSmversion()
    {
        return $this->smversion;
    }

    /**
     * Set biosVersion
     *
     * @param string $biosVersion
     * @return SysHwBios
     */
    public function setVersion($biosVersion)
    {
        $this->version = $biosVersion;

        return $this;
    }

    /**
     * Get biosVersion
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set biosAssetTag
     *
     * @param string $biosAssetTag
     * @return SysHwBios
     */
    public function setAssetTag($biosAssetTag)
    {
        $this->assetTag = $biosAssetTag;

        return $this;
    }

    /**
     * Get biosAssetTag
     *
     * @return string 
     */
    public function getAssetTag()
    {
        return $this->assetTag;
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

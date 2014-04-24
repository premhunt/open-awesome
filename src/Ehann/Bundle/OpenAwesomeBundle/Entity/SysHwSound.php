<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysHwSound
 *
 * @ORM\Table(name="sys_hw_sound", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysHwSound
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sound_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $soundId;

    /**
     * @var string
     *
     * @ORM\Column(name="sound_manufacturer", type="string", length=100, nullable=false)
     */
    private $soundManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="sound_device_id", type="string", length=100, nullable=false)
     */
    private $soundDeviceId;

    /**
     * @var string
     *
     * @ORM\Column(name="sound_name", type="string", length=100, nullable=false)
     */
    private $soundName;

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
     * Get soundId
     *
     * @return integer 
     */
    public function getSoundId()
    {
        return $this->soundId;
    }

    /**
     * Set soundManufacturer
     *
     * @param string $soundManufacturer
     * @return SysHwSound
     */
    public function setSoundManufacturer($soundManufacturer)
    {
        $this->soundManufacturer = $soundManufacturer;

        return $this;
    }

    /**
     * Get soundManufacturer
     *
     * @return string 
     */
    public function getSoundManufacturer()
    {
        return $this->soundManufacturer;
    }

    /**
     * Set soundDeviceId
     *
     * @param string $soundDeviceId
     * @return SysHwSound
     */
    public function setSoundDeviceId($soundDeviceId)
    {
        $this->soundDeviceId = $soundDeviceId;

        return $this;
    }

    /**
     * Get soundDeviceId
     *
     * @return string 
     */
    public function getSoundDeviceId()
    {
        return $this->soundDeviceId;
    }

    /**
     * Set soundName
     *
     * @param string $soundName
     * @return SysHwSound
     */
    public function setSoundName($soundName)
    {
        $this->soundName = $soundName;

        return $this;
    }

    /**
     * Get soundName
     *
     * @return string 
     */
    public function getSoundName()
    {
        return $this->soundName;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysHwSound
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
     * @return SysHwSound
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
     * @return SysHwSound
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

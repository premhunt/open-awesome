<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSwSoftwareKey
 *
 * @ORM\Table(name="sys_sw_software_key", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysSwSoftwareKey
{
    /**
     * @var integer
     *
     * @ORM\Column(name="key_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $keyId;

    /**
     * @var string
     *
     * @ORM\Column(name="key_name", type="string", length=250, nullable=false)
     */
    private $keyName;

    /**
     * @var string
     *
     * @ORM\Column(name="key_text", type="string", length=100, nullable=false)
     */
    private $keyText;

    /**
     * @var string
     *
     * @ORM\Column(name="key_release", type="string", length=100, nullable=false)
     */
    private $keyRelease;

    /**
     * @var string
     *
     * @ORM\Column(name="key_edition", type="string", length=100, nullable=false)
     */
    private $keyEdition;

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
     * Get keyId
     *
     * @return integer 
     */
    public function getKeyId()
    {
        return $this->keyId;
    }

    /**
     * Set keyName
     *
     * @param string $keyName
     * @return SysSwSoftwareKey
     */
    public function setKeyName($keyName)
    {
        $this->keyName = $keyName;

        return $this;
    }

    /**
     * Get keyName
     *
     * @return string 
     */
    public function getKeyName()
    {
        return $this->keyName;
    }

    /**
     * Set keyText
     *
     * @param string $keyText
     * @return SysSwSoftwareKey
     */
    public function setKeyText($keyText)
    {
        $this->keyText = $keyText;

        return $this;
    }

    /**
     * Get keyText
     *
     * @return string 
     */
    public function getKeyText()
    {
        return $this->keyText;
    }

    /**
     * Set keyRelease
     *
     * @param string $keyRelease
     * @return SysSwSoftwareKey
     */
    public function setKeyRelease($keyRelease)
    {
        $this->keyRelease = $keyRelease;

        return $this;
    }

    /**
     * Get keyRelease
     *
     * @return string 
     */
    public function getKeyRelease()
    {
        return $this->keyRelease;
    }

    /**
     * Set keyEdition
     *
     * @param string $keyEdition
     * @return SysSwSoftwareKey
     */
    public function setKeyEdition($keyEdition)
    {
        $this->keyEdition = $keyEdition;

        return $this;
    }

    /**
     * Get keyEdition
     *
     * @return string 
     */
    public function getKeyEdition()
    {
        return $this->keyEdition;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysSwSoftwareKey
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
     * @return SysSwSoftwareKey
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
     * @return SysSwSoftwareKey
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

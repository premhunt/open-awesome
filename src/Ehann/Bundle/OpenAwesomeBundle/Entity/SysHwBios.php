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
class SysHwBios extends SystemComponent
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
     * @var \Ehann\Bundle\OpenAwesomeBundle\Entity\System
     *
     * @ORM\ManyToOne(targetEntity="Ehann\Bundle\OpenAwesomeBundle\Entity\System")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="system_id", referencedColumnName="system_id")
     * })
     */
    private $system;

    /**
     * @param string $assetTag
     */
    public function setAssetTag($assetTag)
    {
        $this->assetTag = $assetTag;
    }

    /**
     * @return string
     */
    public function getAssetTag()
    {
        return $this->assetTag;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $manufacturer
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    /**
     * @return string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param string $serial
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;
    }

    /**
     * @return string
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * @param string $smversion
     */
    public function setSmversion($smversion)
    {
        $this->smversion = $smversion;
    }

    /**
     * @return string
     */
    public function getSmversion()
    {
        return $this->smversion;
    }

    /**
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\System $system
     */
    public function setSystem($system)
    {
        $this->system = $system;
    }

    /**
     * @return \Ehann\Bundle\OpenAwesomeBundle\Entity\System
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

}

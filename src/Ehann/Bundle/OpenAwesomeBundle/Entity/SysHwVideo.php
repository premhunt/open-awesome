<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysHwVideo
 *
 * @ORM\Table(name="sys_hw_video", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysHwVideo extends SystemComponent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="video_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="video_description", type="string", length=100, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="video_manufacturer", type="string", length=100, nullable=true)
     */
    private $manufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="video_current_horizontal_res", type="string", length=20, nullable=true)
     */
    private $currentHorizontalRes;

    /**
     * @var string
     *
     * @ORM\Column(name="video_current_vertical_res", type="string", length=20, nullable=true)
     */
    private $currentVerticalRes;

    /**
     * @var string
     *
     * @ORM\Column(name="video_memory", type="string", length=100, nullable=true)
     */
    private $memory;

    /**
     * @var string
     *
     * @ORM\Column(name="video_caption", type="string", length=100, nullable=true)
     */
    private $caption;

    /**
     * @var string
     *
     * @ORM\Column(name="video_current_number_colours", type="string", length=20, nullable=true)
     */
    private $currentNumberColours;

    /**
     * @var string
     *
     * @ORM\Column(name="video_current_refresh_rate", type="string", length=20, nullable=true)
     */
    private $currentRefreshRate;

    /**
     * @var string
     *
     * @ORM\Column(name="video_device_id", type="string", length=100, nullable=true)
     */
    private $deviceId;

    /**
     * @var string
     *
     * @ORM\Column(name="video_driver_date", type="string", length=20, nullable=true)
     */
    private $driverDate;

    /**
     * @var string
     *
     * @ORM\Column(name="video_driver_version", type="string", length=20, nullable=true)
     */
    private $driverVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="video_max_refresh_rate", type="string", length=20, nullable=true)
     */
    private $maxRefreshRate;

    /**
     * @var string
     *
     * @ORM\Column(name="video_min_refresh_rate", type="string", length=20, nullable=true)
     */
    private $minRefreshRate;

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
     * @param string $caption
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
    }

    /**
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * @param string $currentHorizontalRes
     */
    public function setCurrentHorizontalRes($currentHorizontalRes)
    {
        $this->currentHorizontalRes = $currentHorizontalRes;
    }

    /**
     * @return string
     */
    public function getCurrentHorizontalRes()
    {
        return $this->currentHorizontalRes;
    }

    /**
     * @param string $currentNumberColours
     */
    public function setCurrentNumberColours($currentNumberColours)
    {
        $this->currentNumberColours = $currentNumberColours;
    }

    /**
     * @return string
     */
    public function getCurrentNumberColours()
    {
        return $this->currentNumberColours;
    }

    /**
     * @param string $currentRefreshRate
     */
    public function setCurrentRefreshRate($currentRefreshRate)
    {
        $this->currentRefreshRate = $currentRefreshRate;
    }

    /**
     * @return string
     */
    public function getCurrentRefreshRate()
    {
        return $this->currentRefreshRate;
    }

    /**
     * @param string $currentVerticalRes
     */
    public function setCurrentVerticalRes($currentVerticalRes)
    {
        $this->currentVerticalRes = $currentVerticalRes;
    }

    /**
     * @return string
     */
    public function getCurrentVerticalRes()
    {
        return $this->currentVerticalRes;
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
     * @param string $deviceId
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;
    }

    /**
     * @return string
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * @param string $driverDate
     */
    public function setDriverDate($driverDate)
    {
        $this->driverDate = $driverDate;
    }

    /**
     * @return string
     */
    public function getDriverDate()
    {
        return $this->driverDate;
    }

    /**
     * @param string $driverVersion
     */
    public function setDriverVersion($driverVersion)
    {
        $this->driverVersion = $driverVersion;
    }

    /**
     * @return string
     */
    public function getDriverVersion()
    {
        return $this->driverVersion;
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
     * @param string $maxRefreshRate
     */
    public function setMaxRefreshRate($maxRefreshRate)
    {
        $this->maxRefreshRate = $maxRefreshRate;
    }

    /**
     * @return string
     */
    public function getMaxRefreshRate()
    {
        return $this->maxRefreshRate;
    }

    /**
     * @param string $memory
     */
    public function setMemory($memory)
    {
        $this->memory = $memory;
    }

    /**
     * @return string
     */
    public function getMemory()
    {
        return $this->memory;
    }

    /**
     * @param string $minRefreshRate
     */
    public function setMinRefreshRate($minRefreshRate)
    {
        $this->minRefreshRate = $minRefreshRate;
    }

    /**
     * @return string
     */
    public function getMinRefreshRate()
    {
        return $this->minRefreshRate;
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
}

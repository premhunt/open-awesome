<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysHwVideo
 *
 * @ORM\Table(name="sys_hw_video", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysHwVideo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="video_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $videoId;

    /**
     * @var string
     *
     * @ORM\Column(name="video_description", type="string", length=100, nullable=false)
     */
    private $videoDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="video_manufacturer", type="string", length=100, nullable=false)
     */
    private $videoManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="video_current_horizontal_res", type="string", length=20, nullable=false)
     */
    private $videoCurrentHorizontalRes;

    /**
     * @var string
     *
     * @ORM\Column(name="video_current_vertical_res", type="string", length=20, nullable=false)
     */
    private $videoCurrentVerticalRes;

    /**
     * @var string
     *
     * @ORM\Column(name="video_memory", type="string", length=100, nullable=false)
     */
    private $videoMemory;

    /**
     * @var string
     *
     * @ORM\Column(name="video_caption", type="string", length=100, nullable=false)
     */
    private $videoCaption;

    /**
     * @var string
     *
     * @ORM\Column(name="video_current_number_colours", type="string", length=20, nullable=false)
     */
    private $videoCurrentNumberColours;

    /**
     * @var string
     *
     * @ORM\Column(name="video_current_refresh_rate", type="string", length=20, nullable=false)
     */
    private $videoCurrentRefreshRate;

    /**
     * @var string
     *
     * @ORM\Column(name="video_device_id", type="string", length=100, nullable=false)
     */
    private $videoDeviceId;

    /**
     * @var string
     *
     * @ORM\Column(name="video_driver_date", type="string", length=20, nullable=false)
     */
    private $videoDriverDate;

    /**
     * @var string
     *
     * @ORM\Column(name="video_driver_version", type="string", length=20, nullable=false)
     */
    private $videoDriverVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="video_max_refresh_rate", type="string", length=20, nullable=false)
     */
    private $videoMaxRefreshRate;

    /**
     * @var string
     *
     * @ORM\Column(name="video_min_refresh_rate", type="string", length=20, nullable=false)
     */
    private $videoMinRefreshRate;

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
     * Get videoId
     *
     * @return integer 
     */
    public function getVideoId()
    {
        return $this->videoId;
    }

    /**
     * Set videoDescription
     *
     * @param string $videoDescription
     * @return SysHwVideo
     */
    public function setVideoDescription($videoDescription)
    {
        $this->videoDescription = $videoDescription;

        return $this;
    }

    /**
     * Get videoDescription
     *
     * @return string 
     */
    public function getVideoDescription()
    {
        return $this->videoDescription;
    }

    /**
     * Set videoManufacturer
     *
     * @param string $videoManufacturer
     * @return SysHwVideo
     */
    public function setVideoManufacturer($videoManufacturer)
    {
        $this->videoManufacturer = $videoManufacturer;

        return $this;
    }

    /**
     * Get videoManufacturer
     *
     * @return string 
     */
    public function getVideoManufacturer()
    {
        return $this->videoManufacturer;
    }

    /**
     * Set videoCurrentHorizontalRes
     *
     * @param string $videoCurrentHorizontalRes
     * @return SysHwVideo
     */
    public function setVideoCurrentHorizontalRes($videoCurrentHorizontalRes)
    {
        $this->videoCurrentHorizontalRes = $videoCurrentHorizontalRes;

        return $this;
    }

    /**
     * Get videoCurrentHorizontalRes
     *
     * @return string 
     */
    public function getVideoCurrentHorizontalRes()
    {
        return $this->videoCurrentHorizontalRes;
    }

    /**
     * Set videoCurrentVerticalRes
     *
     * @param string $videoCurrentVerticalRes
     * @return SysHwVideo
     */
    public function setVideoCurrentVerticalRes($videoCurrentVerticalRes)
    {
        $this->videoCurrentVerticalRes = $videoCurrentVerticalRes;

        return $this;
    }

    /**
     * Get videoCurrentVerticalRes
     *
     * @return string 
     */
    public function getVideoCurrentVerticalRes()
    {
        return $this->videoCurrentVerticalRes;
    }

    /**
     * Set videoMemory
     *
     * @param string $videoMemory
     * @return SysHwVideo
     */
    public function setVideoMemory($videoMemory)
    {
        $this->videoMemory = $videoMemory;

        return $this;
    }

    /**
     * Get videoMemory
     *
     * @return string 
     */
    public function getVideoMemory()
    {
        return $this->videoMemory;
    }

    /**
     * Set videoCaption
     *
     * @param string $videoCaption
     * @return SysHwVideo
     */
    public function setVideoCaption($videoCaption)
    {
        $this->videoCaption = $videoCaption;

        return $this;
    }

    /**
     * Get videoCaption
     *
     * @return string 
     */
    public function getVideoCaption()
    {
        return $this->videoCaption;
    }

    /**
     * Set videoCurrentNumberColours
     *
     * @param string $videoCurrentNumberColours
     * @return SysHwVideo
     */
    public function setVideoCurrentNumberColours($videoCurrentNumberColours)
    {
        $this->videoCurrentNumberColours = $videoCurrentNumberColours;

        return $this;
    }

    /**
     * Get videoCurrentNumberColours
     *
     * @return string 
     */
    public function getVideoCurrentNumberColours()
    {
        return $this->videoCurrentNumberColours;
    }

    /**
     * Set videoCurrentRefreshRate
     *
     * @param string $videoCurrentRefreshRate
     * @return SysHwVideo
     */
    public function setVideoCurrentRefreshRate($videoCurrentRefreshRate)
    {
        $this->videoCurrentRefreshRate = $videoCurrentRefreshRate;

        return $this;
    }

    /**
     * Get videoCurrentRefreshRate
     *
     * @return string 
     */
    public function getVideoCurrentRefreshRate()
    {
        return $this->videoCurrentRefreshRate;
    }

    /**
     * Set videoDeviceId
     *
     * @param string $videoDeviceId
     * @return SysHwVideo
     */
    public function setVideoDeviceId($videoDeviceId)
    {
        $this->videoDeviceId = $videoDeviceId;

        return $this;
    }

    /**
     * Get videoDeviceId
     *
     * @return string 
     */
    public function getVideoDeviceId()
    {
        return $this->videoDeviceId;
    }

    /**
     * Set videoDriverDate
     *
     * @param string $videoDriverDate
     * @return SysHwVideo
     */
    public function setVideoDriverDate($videoDriverDate)
    {
        $this->videoDriverDate = $videoDriverDate;

        return $this;
    }

    /**
     * Get videoDriverDate
     *
     * @return string 
     */
    public function getVideoDriverDate()
    {
        return $this->videoDriverDate;
    }

    /**
     * Set videoDriverVersion
     *
     * @param string $videoDriverVersion
     * @return SysHwVideo
     */
    public function setVideoDriverVersion($videoDriverVersion)
    {
        $this->videoDriverVersion = $videoDriverVersion;

        return $this;
    }

    /**
     * Get videoDriverVersion
     *
     * @return string 
     */
    public function getVideoDriverVersion()
    {
        return $this->videoDriverVersion;
    }

    /**
     * Set videoMaxRefreshRate
     *
     * @param string $videoMaxRefreshRate
     * @return SysHwVideo
     */
    public function setVideoMaxRefreshRate($videoMaxRefreshRate)
    {
        $this->videoMaxRefreshRate = $videoMaxRefreshRate;

        return $this;
    }

    /**
     * Get videoMaxRefreshRate
     *
     * @return string 
     */
    public function getVideoMaxRefreshRate()
    {
        return $this->videoMaxRefreshRate;
    }

    /**
     * Set videoMinRefreshRate
     *
     * @param string $videoMinRefreshRate
     * @return SysHwVideo
     */
    public function setVideoMinRefreshRate($videoMinRefreshRate)
    {
        $this->videoMinRefreshRate = $videoMinRefreshRate;

        return $this;
    }

    /**
     * Get videoMinRefreshRate
     *
     * @return string 
     */
    public function getVideoMinRefreshRate()
    {
        return $this->videoMinRefreshRate;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysHwVideo
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
     * @return SysHwVideo
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
     * @return SysHwVideo
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

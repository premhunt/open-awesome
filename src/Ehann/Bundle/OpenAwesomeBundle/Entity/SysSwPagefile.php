<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSwPagefile
 *
 * @ORM\Table(name="sys_sw_pagefile", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysSwPagefile
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pagefile_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pagefileId;

    /**
     * @var string
     *
     * @ORM\Column(name="pagefile_name", type="string", length=100, nullable=false)
     */
    private $pagefileName;

    /**
     * @var string
     *
     * @ORM\Column(name="pagefile_initial_size", type="string", length=10, nullable=false)
     */
    private $pagefileInitialSize;

    /**
     * @var string
     *
     * @ORM\Column(name="pagefile_max_size", type="string", length=10, nullable=false)
     */
    private $pagefileMaxSize;

    /**
     * @var string
     *
     * @ORM\Column(name="pagefile_size", type="string", length=10, nullable=false)
     */
    private $pagefileSize;

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
     * Get pagefileId
     *
     * @return integer 
     */
    public function getPagefileId()
    {
        return $this->pagefileId;
    }

    /**
     * Set pagefileName
     *
     * @param string $pagefileName
     * @return SysSwPagefile
     */
    public function setPagefileName($pagefileName)
    {
        $this->pagefileName = $pagefileName;

        return $this;
    }

    /**
     * Get pagefileName
     *
     * @return string 
     */
    public function getPagefileName()
    {
        return $this->pagefileName;
    }

    /**
     * Set pagefileInitialSize
     *
     * @param string $pagefileInitialSize
     * @return SysSwPagefile
     */
    public function setPagefileInitialSize($pagefileInitialSize)
    {
        $this->pagefileInitialSize = $pagefileInitialSize;

        return $this;
    }

    /**
     * Get pagefileInitialSize
     *
     * @return string 
     */
    public function getPagefileInitialSize()
    {
        return $this->pagefileInitialSize;
    }

    /**
     * Set pagefileMaxSize
     *
     * @param string $pagefileMaxSize
     * @return SysSwPagefile
     */
    public function setPagefileMaxSize($pagefileMaxSize)
    {
        $this->pagefileMaxSize = $pagefileMaxSize;

        return $this;
    }

    /**
     * Get pagefileMaxSize
     *
     * @return string 
     */
    public function getPagefileMaxSize()
    {
        return $this->pagefileMaxSize;
    }

    /**
     * Set pagefileSize
     *
     * @param string $pagefileSize
     * @return SysSwPagefile
     */
    public function setPagefileSize($pagefileSize)
    {
        $this->pagefileSize = $pagefileSize;

        return $this;
    }

    /**
     * Get pagefileSize
     *
     * @return string 
     */
    public function getPagefileSize()
    {
        return $this->pagefileSize;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysSwPagefile
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
     * @return SysSwPagefile
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
     * @return SysSwPagefile
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

<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSwPagefile
 *
 * @ORM\Table(name="sys_sw_pagefile", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysSwPagefile extends SystemComponent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pagefile_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="pagefile_name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="pagefile_initial_size", type="string", length=10, nullable=true)
     */
    private $initialSize;

    /**
     * @var string
     *
     * @ORM\Column(name="pagefile_max_size", type="string", length=10, nullable=true)
     */
    private $maxSize;

    /**
     * @var string
     *
     * @ORM\Column(name="pagefile_size", type="string", length=10, nullable=true)
     */
    private $size;

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
     * @param string $initialSize
     */
    public function setInitialSize($initialSize)
    {
        $this->initialSize = $initialSize;
    }

    /**
     * @return string
     */
    public function getInitialSize()
    {
        return $this->initialSize;
    }

    /**
     * @param string $maxSize
     */
    public function setMaxSize($maxSize)
    {
        $this->maxSize = $maxSize;
    }

    /**
     * @return string
     */
    public function getMaxSize()
    {
        return $this->maxSize;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getSize()
    {
        return $this->size;
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

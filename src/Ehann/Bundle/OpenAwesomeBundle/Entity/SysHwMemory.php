<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysHwMemory
 *
 * @ORM\Table(name="sys_hw_memory", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysHwMemory extends SystemComponent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="memory_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="memory_bank", type="string", length=100, nullable=false)
     */
    private $bank;

    /**
     * @var string
     *
     * @ORM\Column(name="memory_type", type="string", length=100, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="memory_form_factor", type="string", length=100, nullable=false)
     */
    private $formFactor;

    /**
     * @var string
     *
     * @ORM\Column(name="memory_detail", type="string", length=100, nullable=false)
     */
    private $detail;

    /**
     * @var integer
     *
     * @ORM\Column(name="memory_capacity", type="integer", nullable=false)
     */
    private $capacity;

    /**
     * @var integer
     *
     * @ORM\Column(name="memory_speed", type="integer", nullable=false)
     */
    private $speed;

    /**
     * @var string
     *
     * @ORM\Column(name="memory_tag", type="string", length=100, nullable=false)
     */
    private $tag;

    /**
     * @var string
     *
     * @ORM\Column(name="memory_serial", type="string", length=100, nullable=false)
     */
    private $serial;

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
     * @param string $bank
     */
    public function setBank($bank)
    {
        $this->bank = $bank;
    }

    /**
     * @return string
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * @param int $capacity
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

    /**
     * @return int
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * @param string $detail
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
    }

    /**
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @param string $formFactor
     */
    public function setFormFactor($formFactor)
    {
        $this->formFactor = $formFactor;
    }

    /**
     * @return string
     */
    public function getFormFactor()
    {
        return $this->formFactor;
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
     * @param int $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
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
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    }

    /**
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

}

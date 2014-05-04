<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSwService
 *
 * @ORM\Table(name="sys_sw_service", indexes={@ORM\Index(name="system_id", columns={"system_id"}), @ORM\Index(name="timestamp", columns={"timestamp"}), @ORM\Index(name="first_timestamp", columns={"first_timestamp"}), @ORM\Index(name="service_name", columns={"service_name"}), @ORM\Index(name="service_display_name", columns={"service_display_name"})})
 * @ORM\Entity
 */
class SysSwService extends SystemComponent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="service_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="service_display_name", type="string", length=100, nullable=false)
     */
    private $displayName;

    /**
     * @var string
     *
     * @ORM\Column(name="service_name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="service_path_name", type="text", nullable=false)
     */
    private $pathName;

    /**
     * @var string
     *
     * @ORM\Column(name="service_started", type="string", length=10, nullable=false)
     */
    private $started;

    /**
     * @var string
     *
     * @ORM\Column(name="service_start_name", type="string", length=100, nullable=false)
     */
    private $startName;

    /**
     * @var string
     *
     * @ORM\Column(name="service_start_mode", type="string", length=10, nullable=false)
     */
    private $startMode;

    /**
     * @var string
     *
     * @ORM\Column(name="service_state", type="string", length=20, nullable=false)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="service_count", type="string", length=5, nullable=false)
     */
    private $count;

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
     * @param string $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * @return string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param string $displayName
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
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
     * @param string $pathName
     */
    public function setPathName($pathName)
    {
        $this->pathName = $pathName;
    }

    /**
     * @return string
     */
    public function getPathName()
    {
        return $this->pathName;
    }

    /**
     * @param string $startMode
     */
    public function setStartMode($startMode)
    {
        $this->startMode = $startMode;
    }

    /**
     * @return string
     */
    public function getStartMode()
    {
        return $this->startMode;
    }

    /**
     * @param string $startName
     */
    public function setStartName($startName)
    {
        $this->startName = $startName;
    }

    /**
     * @return string
     */
    public function getStartName()
    {
        return $this->startName;
    }

    /**
     * @param string $started
     */
    public function setStarted($started)
    {
        $this->started = $started;
    }

    /**
     * @return string
     */
    public function getStarted()
    {
        return $this->started;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
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
     * @param int $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }
}

<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSwShare
 *
 * @ORM\Table(name="sys_sw_share", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysSwShare extends SystemComponent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="share_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $Id;

    /**
     * @var string
     *
     * @ORM\Column(name="share_caption", type="string", length=250, nullable=false)
     */
    private $caption;

    /**
     * @var string
     *
     * @ORM\Column(name="share_name", type="string", length=250, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="share_path", type="string", length=250, nullable=false)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="share_size", type="string", length=10, nullable=false)
     */
    private $size;

    /**
     * @var string
     *
     * @ORM\Column(name="share_users", type="string", length=200, nullable=true)
     */
    private $users;

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
     * @param int $Id
     */
    public function setId($Id)
    {
        $this->Id = $Id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

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
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
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

    /**
     * @param string $users
     */
    public function setUsers($users)
    {
        $this->users = $users;
    }

    /**
     * @return string
     */
    public function getUsers()
    {
        return $this->users;
    }

}

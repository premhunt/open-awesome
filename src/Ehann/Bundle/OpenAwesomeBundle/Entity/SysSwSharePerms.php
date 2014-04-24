<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSwSharePerms
 *
 * @ORM\Table(name="sys_sw_share_perms", indexes={@ORM\Index(name="system_id", columns={"system_id"}), @ORM\Index(name="sys_sw_share_perm_share_id", columns={"share_id"})})
 * @ORM\Entity
 */
class SysSwSharePerms
{
    /**
     * @var integer
     *
     * @ORM\Column(name="perm_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $permId;

    /**
     * @var string
     *
     * @ORM\Column(name="perm_prefix", type="string", length=100, nullable=false)
     */
    private $permPrefix;

    /**
     * @var string
     *
     * @ORM\Column(name="perm_name", type="string", length=100, nullable=false)
     */
    private $permName;

    /**
     * @var string
     *
     * @ORM\Column(name="perm_type", type="string", nullable=false)
     */
    private $permType;

    /**
     * @var string
     *
     * @ORM\Column(name="perm_access", type="string", length=100, nullable=false)
     */
    private $permAccess;

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
     * @var \Ehann\Bundle\OpenAwesomeBundle\Entity\SysSwShare
     *
     * @ORM\ManyToOne(targetEntity="Ehann\Bundle\OpenAwesomeBundle\Entity\SysSwShare")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="share_id", referencedColumnName="share_id")
     * })
     */
    private $share;



    /**
     * Get permId
     *
     * @return integer 
     */
    public function getPermId()
    {
        return $this->permId;
    }

    /**
     * Set permPrefix
     *
     * @param string $permPrefix
     * @return SysSwSharePerms
     */
    public function setPermPrefix($permPrefix)
    {
        $this->permPrefix = $permPrefix;

        return $this;
    }

    /**
     * Get permPrefix
     *
     * @return string 
     */
    public function getPermPrefix()
    {
        return $this->permPrefix;
    }

    /**
     * Set permName
     *
     * @param string $permName
     * @return SysSwSharePerms
     */
    public function setPermName($permName)
    {
        $this->permName = $permName;

        return $this;
    }

    /**
     * Get permName
     *
     * @return string 
     */
    public function getPermName()
    {
        return $this->permName;
    }

    /**
     * Set permType
     *
     * @param string $permType
     * @return SysSwSharePerms
     */
    public function setPermType($permType)
    {
        $this->permType = $permType;

        return $this;
    }

    /**
     * Get permType
     *
     * @return string 
     */
    public function getPermType()
    {
        return $this->permType;
    }

    /**
     * Set permAccess
     *
     * @param string $permAccess
     * @return SysSwSharePerms
     */
    public function setPermAccess($permAccess)
    {
        $this->permAccess = $permAccess;

        return $this;
    }

    /**
     * Get permAccess
     *
     * @return string 
     */
    public function getPermAccess()
    {
        return $this->permAccess;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysSwSharePerms
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
     * @return SysSwSharePerms
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
     * @return SysSwSharePerms
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

    /**
     * Set share
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\SysSwShare $share
     * @return SysSwSharePerms
     */
    public function setShare(\Ehann\Bundle\OpenAwesomeBundle\Entity\SysSwShare $share = null)
    {
        $this->share = $share;

        return $this;
    }

    /**
     * Get share
     *
     * @return \Ehann\Bundle\OpenAwesomeBundle\Entity\SysSwShare 
     */
    public function getShare()
    {
        return $this->share;
    }
}

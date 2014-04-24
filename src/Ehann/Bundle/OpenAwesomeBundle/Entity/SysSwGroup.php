<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSwGroup
 *
 * @ORM\Table(name="sys_sw_group", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysSwGroup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupId;

    /**
     * @var string
     *
     * @ORM\Column(name="group_name", type="string", length=100, nullable=false)
     */
    private $groupName;

    /**
     * @var string
     *
     * @ORM\Column(name="group_description", type="string", length=200, nullable=false)
     */
    private $groupDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="group_sid", type="string", length=100, nullable=false)
     */
    private $groupSid;

    /**
     * @var string
     *
     * @ORM\Column(name="group_members", type="text", nullable=false)
     */
    private $groupMembers;

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
     * Get groupId
     *
     * @return integer 
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set groupName
     *
     * @param string $groupName
     * @return SysSwGroup
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * Get groupName
     *
     * @return string 
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Set groupDescription
     *
     * @param string $groupDescription
     * @return SysSwGroup
     */
    public function setGroupDescription($groupDescription)
    {
        $this->groupDescription = $groupDescription;

        return $this;
    }

    /**
     * Get groupDescription
     *
     * @return string 
     */
    public function getGroupDescription()
    {
        return $this->groupDescription;
    }

    /**
     * Set groupSid
     *
     * @param string $groupSid
     * @return SysSwGroup
     */
    public function setGroupSid($groupSid)
    {
        $this->groupSid = $groupSid;

        return $this;
    }

    /**
     * Get groupSid
     *
     * @return string 
     */
    public function getGroupSid()
    {
        return $this->groupSid;
    }

    /**
     * Set groupMembers
     *
     * @param string $groupMembers
     * @return SysSwGroup
     */
    public function setGroupMembers($groupMembers)
    {
        $this->groupMembers = $groupMembers;

        return $this;
    }

    /**
     * Get groupMembers
     *
     * @return string 
     */
    public function getGroupMembers()
    {
        return $this->groupMembers;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysSwGroup
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
     * @return SysSwGroup
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
     * @return SysSwGroup
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

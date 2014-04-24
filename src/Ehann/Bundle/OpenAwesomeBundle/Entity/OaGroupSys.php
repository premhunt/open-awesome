<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OaGroupSys
 *
 * @ORM\Table(name="oa_group_sys", indexes={@ORM\Index(name="system_id", columns={"system_id"}), @ORM\Index(name="group_id", columns={"group_id"})})
 * @ORM\Entity
 */
class OaGroupSys
{
    /**
     * @var integer
     *
     * @ORM\Column(name="group_sys_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupSysId;

    /**
     * @var string
     *
     * @ORM\Column(name="group_sys_type", type="string", length=20, nullable=false)
     */
    private $groupSysType;

    /**
     * @var \Ehann\Bundle\OpenAwesomeBundle\Entity\OaGroup
     *
     * @ORM\ManyToOne(targetEntity="Ehann\Bundle\OpenAwesomeBundle\Entity\OaGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="group_id")
     * })
     */
    private $group;

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
     * Get groupSysId
     *
     * @return integer 
     */
    public function getGroupSysId()
    {
        return $this->groupSysId;
    }

    /**
     * Set groupSysType
     *
     * @param string $groupSysType
     * @return OaGroupSys
     */
    public function setGroupSysType($groupSysType)
    {
        $this->groupSysType = $groupSysType;

        return $this;
    }

    /**
     * Get groupSysType
     *
     * @return string 
     */
    public function getGroupSysType()
    {
        return $this->groupSysType;
    }

    /**
     * Set group
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\OaGroup $group
     * @return OaGroupSys
     */
    public function setGroup(\Ehann\Bundle\OpenAwesomeBundle\Entity\OaGroup $group = null)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \Ehann\Bundle\OpenAwesomeBundle\Entity\OaGroup 
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set system
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\System $system
     * @return OaGroupSys
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

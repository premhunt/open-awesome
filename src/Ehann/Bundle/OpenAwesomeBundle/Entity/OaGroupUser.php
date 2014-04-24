<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OaGroupUser
 *
 * @ORM\Table(name="oa_group_user", indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="group_id", columns={"group_id"})})
 * @ORM\Entity
 */
class OaGroupUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="group_user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_user_access_level", type="integer", nullable=false)
     */
    private $groupUserAccessLevel;

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
     * @var \Ehann\Bundle\OpenAwesomeBundle\Entity\OaUser
     *
     * @ORM\ManyToOne(targetEntity="Ehann\Bundle\OpenAwesomeBundle\Entity\OaUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;



    /**
     * Get groupUserId
     *
     * @return integer 
     */
    public function getGroupUserId()
    {
        return $this->groupUserId;
    }

    /**
     * Set groupUserAccessLevel
     *
     * @param integer $groupUserAccessLevel
     * @return OaGroupUser
     */
    public function setGroupUserAccessLevel($groupUserAccessLevel)
    {
        $this->groupUserAccessLevel = $groupUserAccessLevel;

        return $this;
    }

    /**
     * Get groupUserAccessLevel
     *
     * @return integer 
     */
    public function getGroupUserAccessLevel()
    {
        return $this->groupUserAccessLevel;
    }

    /**
     * Set group
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\OaGroup $group
     * @return OaGroupUser
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
     * Set user
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\OaUser $user
     * @return OaGroupUser
     */
    public function setUser(\Ehann\Bundle\OpenAwesomeBundle\Entity\OaUser $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Ehann\Bundle\OpenAwesomeBundle\Entity\OaUser 
     */
    public function getUser()
    {
        return $this->user;
    }
}

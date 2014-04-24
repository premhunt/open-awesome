<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OaGroup
 *
 * @ORM\Table(name="oa_group")
 * @ORM\Entity
 */
class OaGroup
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
     * @ORM\Column(name="group_padded_name", type="string", length=100, nullable=false)
     */
    private $groupPaddedName;

    /**
     * @var string
     *
     * @ORM\Column(name="group_dynamic_select", type="text", nullable=false)
     */
    private $groupDynamicSelect;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_parent", type="integer", nullable=false)
     */
    private $groupParent;

    /**
     * @var string
     *
     * @ORM\Column(name="group_description", type="string", length=255, nullable=false)
     */
    private $groupDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="group_category", type="string", nullable=false)
     */
    private $groupCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="group_display_sql", type="text", nullable=false)
     */
    private $groupDisplaySql;

    /**
     * @var string
     *
     * @ORM\Column(name="group_icon", type="string", length=50, nullable=false)
     */
    private $groupIcon;



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
     * @return OaGroup
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
     * Set groupPaddedName
     *
     * @param string $groupPaddedName
     * @return OaGroup
     */
    public function setGroupPaddedName($groupPaddedName)
    {
        $this->groupPaddedName = $groupPaddedName;

        return $this;
    }

    /**
     * Get groupPaddedName
     *
     * @return string 
     */
    public function getGroupPaddedName()
    {
        return $this->groupPaddedName;
    }

    /**
     * Set groupDynamicSelect
     *
     * @param string $groupDynamicSelect
     * @return OaGroup
     */
    public function setGroupDynamicSelect($groupDynamicSelect)
    {
        $this->groupDynamicSelect = $groupDynamicSelect;

        return $this;
    }

    /**
     * Get groupDynamicSelect
     *
     * @return string 
     */
    public function getGroupDynamicSelect()
    {
        return $this->groupDynamicSelect;
    }

    /**
     * Set groupParent
     *
     * @param integer $groupParent
     * @return OaGroup
     */
    public function setGroupParent($groupParent)
    {
        $this->groupParent = $groupParent;

        return $this;
    }

    /**
     * Get groupParent
     *
     * @return integer 
     */
    public function getGroupParent()
    {
        return $this->groupParent;
    }

    /**
     * Set groupDescription
     *
     * @param string $groupDescription
     * @return OaGroup
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
     * Set groupCategory
     *
     * @param string $groupCategory
     * @return OaGroup
     */
    public function setGroupCategory($groupCategory)
    {
        $this->groupCategory = $groupCategory;

        return $this;
    }

    /**
     * Get groupCategory
     *
     * @return string 
     */
    public function getGroupCategory()
    {
        return $this->groupCategory;
    }

    /**
     * Set groupDisplaySql
     *
     * @param string $groupDisplaySql
     * @return OaGroup
     */
    public function setGroupDisplaySql($groupDisplaySql)
    {
        $this->groupDisplaySql = $groupDisplaySql;

        return $this;
    }

    /**
     * Get groupDisplaySql
     *
     * @return string 
     */
    public function getGroupDisplaySql()
    {
        return $this->groupDisplaySql;
    }

    /**
     * Set groupIcon
     *
     * @param string $groupIcon
     * @return OaGroup
     */
    public function setGroupIcon($groupIcon)
    {
        $this->groupIcon = $groupIcon;

        return $this;
    }

    /**
     * Get groupIcon
     *
     * @return string 
     */
    public function getGroupIcon()
    {
        return $this->groupIcon;
    }
}

<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OaAssetSelect
 *
 * @ORM\Table(name="oa_asset_select")
 * @ORM\Entity
 */
class OaAssetSelect
{
    /**
     * @var integer
     *
     * @ORM\Column(name="select_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $selectId;

    /**
     * @var string
     *
     * @ORM\Column(name="select_name", type="string", length=50, nullable=false)
     */
    private $selectName;

    /**
     * @var string
     *
     * @ORM\Column(name="select_type", type="string", nullable=false)
     */
    private $selectType;

    /**
     * @var string
     *
     * @ORM\Column(name="select_sql", type="string", length=250, nullable=false)
     */
    private $selectSql;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer", nullable=true)
     */
    private $groupId;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_amount", type="integer", nullable=true)
     */
    private $groupAmount;



    /**
     * Get selectId
     *
     * @return integer 
     */
    public function getSelectId()
    {
        return $this->selectId;
    }

    /**
     * Set selectName
     *
     * @param string $selectName
     * @return OaAssetSelect
     */
    public function setSelectName($selectName)
    {
        $this->selectName = $selectName;

        return $this;
    }

    /**
     * Get selectName
     *
     * @return string 
     */
    public function getSelectName()
    {
        return $this->selectName;
    }

    /**
     * Set selectType
     *
     * @param string $selectType
     * @return OaAssetSelect
     */
    public function setSelectType($selectType)
    {
        $this->selectType = $selectType;

        return $this;
    }

    /**
     * Get selectType
     *
     * @return string 
     */
    public function getSelectType()
    {
        return $this->selectType;
    }

    /**
     * Set selectSql
     *
     * @param string $selectSql
     * @return OaAssetSelect
     */
    public function setSelectSql($selectSql)
    {
        $this->selectSql = $selectSql;

        return $this;
    }

    /**
     * Get selectSql
     *
     * @return string 
     */
    public function getSelectSql()
    {
        return $this->selectSql;
    }

    /**
     * Set groupId
     *
     * @param integer $groupId
     * @return OaAssetSelect
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;

        return $this;
    }

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
     * Set groupAmount
     *
     * @param integer $groupAmount
     * @return OaAssetSelect
     */
    public function setGroupAmount($groupAmount)
    {
        $this->groupAmount = $groupAmount;

        return $this;
    }

    /**
     * Get groupAmount
     *
     * @return integer 
     */
    public function getGroupAmount()
    {
        return $this->groupAmount;
    }
}

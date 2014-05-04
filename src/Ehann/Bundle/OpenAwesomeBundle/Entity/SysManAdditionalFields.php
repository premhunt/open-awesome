<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysManAdditionalFields
 *
 * @ORM\Table(name="sys_man_additional_fields", indexes={@ORM\Index(name="sys_man_additional_fields_group", columns={"group_id"})})
 * @ORM\Entity
 */
class SysManAdditionalFields
{
    /**
     * @var integer
     *
     * @ORM\Column(name="field_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="field_name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="field_type", type="string", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="field_values", type="string", length=100, nullable=false)
     */
    private $values;

    /**
     * @var string
     *
     * @ORM\Column(name="field_sys_type", type="string", length=100, nullable=false)
     */
    private $sysType;

    /**
     * @var string
     *
     * @ORM\Column(name="field_derived_type", type="string", length=100, nullable=false)
     */
    private $derivedType;

    /**
     * @var string
     *
     * @ORM\Column(name="field_derived_sql", type="string", length=100, nullable=false)
     */
    private $derivedSql;

    /**
     * @var string
     *
     * @ORM\Column(name="field_placement", type="string", length=100, nullable=false)
     */
    private $placement;

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
     * @param string $derivedSql
     */
    public function setDerivedSql($derivedSql)
    {
        $this->derivedSql = $derivedSql;
    }

    /**
     * @return string
     */
    public function getDerivedSql()
    {
        return $this->derivedSql;
    }

    /**
     * @param string $derivedType
     */
    public function setDerivedType($derivedType)
    {
        $this->derivedType = $derivedType;
    }

    /**
     * @return string
     */
    public function getDerivedType()
    {
        return $this->derivedType;
    }

    /**
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\OaGroup $group
     */
    public function setGroup($group)
    {
        $this->group = $group;
    }

    /**
     * @return \Ehann\Bundle\OpenAwesomeBundle\Entity\OaGroup
     */
    public function getGroup()
    {
        return $this->group;
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
     * @param string $placement
     */
    public function setPlacement($placement)
    {
        $this->placement = $placement;
    }

    /**
     * @return string
     */
    public function getPlacement()
    {
        return $this->placement;
    }

    /**
     * @param string $sysType
     */
    public function setSysType($sysType)
    {
        $this->sysType = $sysType;
    }

    /**
     * @return string
     */
    public function getSysType()
    {
        return $this->sysType;
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

    /**
     * @param string $values
     */
    public function setValues($values)
    {
        $this->values = $values;
    }

    /**
     * @return string
     */
    public function getValues()
    {
        return $this->values;
    }
}

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
    private $fieldId;

    /**
     * @var string
     *
     * @ORM\Column(name="field_name", type="string", length=100, nullable=false)
     */
    private $fieldName;

    /**
     * @var string
     *
     * @ORM\Column(name="field_type", type="string", nullable=false)
     */
    private $fieldType;

    /**
     * @var string
     *
     * @ORM\Column(name="field_values", type="string", length=100, nullable=false)
     */
    private $fieldValues;

    /**
     * @var string
     *
     * @ORM\Column(name="field_sys_type", type="string", length=100, nullable=false)
     */
    private $fieldSysType;

    /**
     * @var string
     *
     * @ORM\Column(name="field_derived_type", type="string", length=100, nullable=false)
     */
    private $fieldDerivedType;

    /**
     * @var string
     *
     * @ORM\Column(name="field_derived_sql", type="string", length=100, nullable=false)
     */
    private $fieldDerivedSql;

    /**
     * @var string
     *
     * @ORM\Column(name="field_placement", type="string", length=100, nullable=false)
     */
    private $fieldPlacement;

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
     * Get fieldId
     *
     * @return integer 
     */
    public function getFieldId()
    {
        return $this->fieldId;
    }

    /**
     * Set fieldName
     *
     * @param string $fieldName
     * @return SysManAdditionalFields
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    /**
     * Get fieldName
     *
     * @return string 
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * Set fieldType
     *
     * @param string $fieldType
     * @return SysManAdditionalFields
     */
    public function setFieldType($fieldType)
    {
        $this->fieldType = $fieldType;

        return $this;
    }

    /**
     * Get fieldType
     *
     * @return string 
     */
    public function getFieldType()
    {
        return $this->fieldType;
    }

    /**
     * Set fieldValues
     *
     * @param string $fieldValues
     * @return SysManAdditionalFields
     */
    public function setFieldValues($fieldValues)
    {
        $this->fieldValues = $fieldValues;

        return $this;
    }

    /**
     * Get fieldValues
     *
     * @return string 
     */
    public function getFieldValues()
    {
        return $this->fieldValues;
    }

    /**
     * Set fieldSysType
     *
     * @param string $fieldSysType
     * @return SysManAdditionalFields
     */
    public function setFieldSysType($fieldSysType)
    {
        $this->fieldSysType = $fieldSysType;

        return $this;
    }

    /**
     * Get fieldSysType
     *
     * @return string 
     */
    public function getFieldSysType()
    {
        return $this->fieldSysType;
    }

    /**
     * Set fieldDerivedType
     *
     * @param string $fieldDerivedType
     * @return SysManAdditionalFields
     */
    public function setFieldDerivedType($fieldDerivedType)
    {
        $this->fieldDerivedType = $fieldDerivedType;

        return $this;
    }

    /**
     * Get fieldDerivedType
     *
     * @return string 
     */
    public function getFieldDerivedType()
    {
        return $this->fieldDerivedType;
    }

    /**
     * Set fieldDerivedSql
     *
     * @param string $fieldDerivedSql
     * @return SysManAdditionalFields
     */
    public function setFieldDerivedSql($fieldDerivedSql)
    {
        $this->fieldDerivedSql = $fieldDerivedSql;

        return $this;
    }

    /**
     * Get fieldDerivedSql
     *
     * @return string 
     */
    public function getFieldDerivedSql()
    {
        return $this->fieldDerivedSql;
    }

    /**
     * Set fieldPlacement
     *
     * @param string $fieldPlacement
     * @return SysManAdditionalFields
     */
    public function setFieldPlacement($fieldPlacement)
    {
        $this->fieldPlacement = $fieldPlacement;

        return $this;
    }

    /**
     * Get fieldPlacement
     *
     * @return string 
     */
    public function getFieldPlacement()
    {
        return $this->fieldPlacement;
    }

    /**
     * Set group
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\OaGroup $group
     * @return SysManAdditionalFields
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
}

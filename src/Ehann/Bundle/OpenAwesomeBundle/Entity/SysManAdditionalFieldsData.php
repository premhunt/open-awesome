<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysManAdditionalFieldsData
 *
 * @ORM\Table(name="sys_man_additional_fields_data", indexes={@ORM\Index(name="system_id", columns={"system_id"}), @ORM\Index(name="sys_man_additional_fields_data_field_id", columns={"field_id"})})
 * @ORM\Entity
 */
class SysManAdditionalFieldsData
{
    /**
     * @var integer
     *
     * @ORM\Column(name="field_details_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fieldDetailsId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="field_datetime", type="datetime", nullable=false)
     */
    private $fieldDatetime;

    /**
     * @var string
     *
     * @ORM\Column(name="field_varchar", type="string", length=255, nullable=false)
     */
    private $fieldVarchar;

    /**
     * @var integer
     *
     * @ORM\Column(name="field_int", type="integer", nullable=false)
     */
    private $fieldInt;

    /**
     * @var string
     *
     * @ORM\Column(name="field_memo", type="text", nullable=false)
     */
    private $fieldMemo;

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
     * @var \Ehann\Bundle\OpenAwesomeBundle\Entity\SysManAdditionalFields
     *
     * @ORM\ManyToOne(targetEntity="Ehann\Bundle\OpenAwesomeBundle\Entity\SysManAdditionalFields")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="field_id", referencedColumnName="field_id")
     * })
     */
    private $field;



    /**
     * Get fieldDetailsId
     *
     * @return integer 
     */
    public function getFieldDetailsId()
    {
        return $this->fieldDetailsId;
    }

    /**
     * Set fieldDatetime
     *
     * @param \DateTime $fieldDatetime
     * @return SysManAdditionalFieldsData
     */
    public function setFieldDatetime($fieldDatetime)
    {
        $this->fieldDatetime = $fieldDatetime;

        return $this;
    }

    /**
     * Get fieldDatetime
     *
     * @return \DateTime 
     */
    public function getFieldDatetime()
    {
        return $this->fieldDatetime;
    }

    /**
     * Set fieldVarchar
     *
     * @param string $fieldVarchar
     * @return SysManAdditionalFieldsData
     */
    public function setFieldVarchar($fieldVarchar)
    {
        $this->fieldVarchar = $fieldVarchar;

        return $this;
    }

    /**
     * Get fieldVarchar
     *
     * @return string 
     */
    public function getFieldVarchar()
    {
        return $this->fieldVarchar;
    }

    /**
     * Set fieldInt
     *
     * @param integer $fieldInt
     * @return SysManAdditionalFieldsData
     */
    public function setFieldInt($fieldInt)
    {
        $this->fieldInt = $fieldInt;

        return $this;
    }

    /**
     * Get fieldInt
     *
     * @return integer 
     */
    public function getFieldInt()
    {
        return $this->fieldInt;
    }

    /**
     * Set fieldMemo
     *
     * @param string $fieldMemo
     * @return SysManAdditionalFieldsData
     */
    public function setFieldMemo($fieldMemo)
    {
        $this->fieldMemo = $fieldMemo;

        return $this;
    }

    /**
     * Get fieldMemo
     *
     * @return string 
     */
    public function getFieldMemo()
    {
        return $this->fieldMemo;
    }

    /**
     * Set system
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\System $system
     * @return SysManAdditionalFieldsData
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
     * Set field
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\SysManAdditionalFields $field
     * @return SysManAdditionalFieldsData
     */
    public function setField(\Ehann\Bundle\OpenAwesomeBundle\Entity\SysManAdditionalFields $field = null)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * Get field
     *
     * @return \Ehann\Bundle\OpenAwesomeBundle\Entity\SysManAdditionalFields 
     */
    public function getField()
    {
        return $this->field;
    }
}

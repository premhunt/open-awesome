<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OaGroupColumn
 *
 * @ORM\Table(name="oa_group_column", indexes={@ORM\Index(name="group_id", columns={"group_id"})})
 * @ORM\Entity
 */
class OaGroupColumn
{
    /**
     * @var integer
     *
     * @ORM\Column(name="column_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $columnId;

    /**
     * @var integer
     *
     * @ORM\Column(name="column_order", type="integer", nullable=false)
     */
    private $columnOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="column_name", type="string", length=100, nullable=false)
     */
    private $columnName;

    /**
     * @var string
     *
     * @ORM\Column(name="column_variable", type="string", length=100, nullable=false)
     */
    private $columnVariable;

    /**
     * @var string
     *
     * @ORM\Column(name="column_type", type="string", nullable=false)
     */
    private $columnType;

    /**
     * @var string
     *
     * @ORM\Column(name="column_link", type="string", length=100, nullable=false)
     */
    private $columnLink;

    /**
     * @var string
     *
     * @ORM\Column(name="column_secondary", type="string", length=100, nullable=false)
     */
    private $columnSecondary;

    /**
     * @var string
     *
     * @ORM\Column(name="column_ternary", type="string", length=100, nullable=false)
     */
    private $columnTernary;

    /**
     * @var string
     *
     * @ORM\Column(name="column_align", type="string", length=6, nullable=false)
     */
    private $columnAlign;

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
     * Get columnId
     *
     * @return integer 
     */
    public function getColumnId()
    {
        return $this->columnId;
    }

    /**
     * Set columnOrder
     *
     * @param integer $columnOrder
     * @return OaGroupColumn
     */
    public function setColumnOrder($columnOrder)
    {
        $this->columnOrder = $columnOrder;

        return $this;
    }

    /**
     * Get columnOrder
     *
     * @return integer 
     */
    public function getColumnOrder()
    {
        return $this->columnOrder;
    }

    /**
     * Set columnName
     *
     * @param string $columnName
     * @return OaGroupColumn
     */
    public function setColumnName($columnName)
    {
        $this->columnName = $columnName;

        return $this;
    }

    /**
     * Get columnName
     *
     * @return string 
     */
    public function getColumnName()
    {
        return $this->columnName;
    }

    /**
     * Set columnVariable
     *
     * @param string $columnVariable
     * @return OaGroupColumn
     */
    public function setColumnVariable($columnVariable)
    {
        $this->columnVariable = $columnVariable;

        return $this;
    }

    /**
     * Get columnVariable
     *
     * @return string 
     */
    public function getColumnVariable()
    {
        return $this->columnVariable;
    }

    /**
     * Set columnType
     *
     * @param string $columnType
     * @return OaGroupColumn
     */
    public function setColumnType($columnType)
    {
        $this->columnType = $columnType;

        return $this;
    }

    /**
     * Get columnType
     *
     * @return string 
     */
    public function getColumnType()
    {
        return $this->columnType;
    }

    /**
     * Set columnLink
     *
     * @param string $columnLink
     * @return OaGroupColumn
     */
    public function setColumnLink($columnLink)
    {
        $this->columnLink = $columnLink;

        return $this;
    }

    /**
     * Get columnLink
     *
     * @return string 
     */
    public function getColumnLink()
    {
        return $this->columnLink;
    }

    /**
     * Set columnSecondary
     *
     * @param string $columnSecondary
     * @return OaGroupColumn
     */
    public function setColumnSecondary($columnSecondary)
    {
        $this->columnSecondary = $columnSecondary;

        return $this;
    }

    /**
     * Get columnSecondary
     *
     * @return string 
     */
    public function getColumnSecondary()
    {
        return $this->columnSecondary;
    }

    /**
     * Set columnTernary
     *
     * @param string $columnTernary
     * @return OaGroupColumn
     */
    public function setColumnTernary($columnTernary)
    {
        $this->columnTernary = $columnTernary;

        return $this;
    }

    /**
     * Get columnTernary
     *
     * @return string 
     */
    public function getColumnTernary()
    {
        return $this->columnTernary;
    }

    /**
     * Set columnAlign
     *
     * @param string $columnAlign
     * @return OaGroupColumn
     */
    public function setColumnAlign($columnAlign)
    {
        $this->columnAlign = $columnAlign;

        return $this;
    }

    /**
     * Get columnAlign
     *
     * @return string 
     */
    public function getColumnAlign()
    {
        return $this->columnAlign;
    }

    /**
     * Set group
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\OaGroup $group
     * @return OaGroupColumn
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

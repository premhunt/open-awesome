<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OaReportColumn
 *
 * @ORM\Table(name="oa_report_column", indexes={@ORM\Index(name="report_id", columns={"report_id"})})
 * @ORM\Entity
 */
class OaReportColumn
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
     * @var \Ehann\Bundle\OpenAwesomeBundle\Entity\OaReport
     *
     * @ORM\ManyToOne(targetEntity="Ehann\Bundle\OpenAwesomeBundle\Entity\OaReport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="report_id", referencedColumnName="report_id")
     * })
     */
    private $report;



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
     * @return OaReportColumn
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
     * @return OaReportColumn
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
     * @return OaReportColumn
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
     * @return OaReportColumn
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
     * @return OaReportColumn
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
     * @return OaReportColumn
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
     * @return OaReportColumn
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
     * @return OaReportColumn
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
     * Set report
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\OaReport $report
     * @return OaReportColumn
     */
    public function setReport(\Ehann\Bundle\OpenAwesomeBundle\Entity\OaReport $report = null)
    {
        $this->report = $report;

        return $this;
    }

    /**
     * Get report
     *
     * @return \Ehann\Bundle\OpenAwesomeBundle\Entity\OaReport 
     */
    public function getReport()
    {
        return $this->report;
    }
}

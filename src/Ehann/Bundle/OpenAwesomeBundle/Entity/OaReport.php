<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OaReport
 *
 * @ORM\Table(name="oa_report")
 * @ORM\Entity
 */
class OaReport
{
    /**
     * @var integer
     *
     * @ORM\Column(name="report_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reportId;

    /**
     * @var string
     *
     * @ORM\Column(name="report_name", type="string", length=100, nullable=false)
     */
    private $reportName;

    /**
     * @var string
     *
     * @ORM\Column(name="report_description", type="text", nullable=false)
     */
    private $reportDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="report_display_in_menu", type="string", nullable=false)
     */
    private $reportDisplayInMenu;

    /**
     * @var string
     *
     * @ORM\Column(name="report_sql", type="text", nullable=false)
     */
    private $reportSql;

    /**
     * @var string
     *
     * @ORM\Column(name="report_display_sql", type="text", nullable=false)
     */
    private $reportDisplaySql;

    /**
     * @var string
     *
     * @ORM\Column(name="report_view_file", type="string", length=100, nullable=false)
     */
    private $reportViewFile;

    /**
     * @var string
     *
     * @ORM\Column(name="report_view_contents", type="text", nullable=false)
     */
    private $reportViewContents;

    /**
     * @var string
     *
     * @ORM\Column(name="report_processing", type="text", nullable=false)
     */
    private $reportProcessing;

    /**
     * @var integer
     *
     * @ORM\Column(name="report_sort_column", type="integer", nullable=false)
     */
    private $reportSortColumn;



    /**
     * Get reportId
     *
     * @return integer 
     */
    public function getReportId()
    {
        return $this->reportId;
    }

    /**
     * Set reportName
     *
     * @param string $reportName
     * @return OaReport
     */
    public function setReportName($reportName)
    {
        $this->reportName = $reportName;

        return $this;
    }

    /**
     * Get reportName
     *
     * @return string 
     */
    public function getReportName()
    {
        return $this->reportName;
    }

    /**
     * Set reportDescription
     *
     * @param string $reportDescription
     * @return OaReport
     */
    public function setReportDescription($reportDescription)
    {
        $this->reportDescription = $reportDescription;

        return $this;
    }

    /**
     * Get reportDescription
     *
     * @return string 
     */
    public function getReportDescription()
    {
        return $this->reportDescription;
    }

    /**
     * Set reportDisplayInMenu
     *
     * @param string $reportDisplayInMenu
     * @return OaReport
     */
    public function setReportDisplayInMenu($reportDisplayInMenu)
    {
        $this->reportDisplayInMenu = $reportDisplayInMenu;

        return $this;
    }

    /**
     * Get reportDisplayInMenu
     *
     * @return string 
     */
    public function getReportDisplayInMenu()
    {
        return $this->reportDisplayInMenu;
    }

    /**
     * Set reportSql
     *
     * @param string $reportSql
     * @return OaReport
     */
    public function setReportSql($reportSql)
    {
        $this->reportSql = $reportSql;

        return $this;
    }

    /**
     * Get reportSql
     *
     * @return string 
     */
    public function getReportSql()
    {
        return $this->reportSql;
    }

    /**
     * Set reportDisplaySql
     *
     * @param string $reportDisplaySql
     * @return OaReport
     */
    public function setReportDisplaySql($reportDisplaySql)
    {
        $this->reportDisplaySql = $reportDisplaySql;

        return $this;
    }

    /**
     * Get reportDisplaySql
     *
     * @return string 
     */
    public function getReportDisplaySql()
    {
        return $this->reportDisplaySql;
    }

    /**
     * Set reportViewFile
     *
     * @param string $reportViewFile
     * @return OaReport
     */
    public function setReportViewFile($reportViewFile)
    {
        $this->reportViewFile = $reportViewFile;

        return $this;
    }

    /**
     * Get reportViewFile
     *
     * @return string 
     */
    public function getReportViewFile()
    {
        return $this->reportViewFile;
    }

    /**
     * Set reportViewContents
     *
     * @param string $reportViewContents
     * @return OaReport
     */
    public function setReportViewContents($reportViewContents)
    {
        $this->reportViewContents = $reportViewContents;

        return $this;
    }

    /**
     * Get reportViewContents
     *
     * @return string 
     */
    public function getReportViewContents()
    {
        return $this->reportViewContents;
    }

    /**
     * Set reportProcessing
     *
     * @param string $reportProcessing
     * @return OaReport
     */
    public function setReportProcessing($reportProcessing)
    {
        $this->reportProcessing = $reportProcessing;

        return $this;
    }

    /**
     * Get reportProcessing
     *
     * @return string 
     */
    public function getReportProcessing()
    {
        return $this->reportProcessing;
    }

    /**
     * Set reportSortColumn
     *
     * @param integer $reportSortColumn
     * @return OaReport
     */
    public function setReportSortColumn($reportSortColumn)
    {
        $this->reportSortColumn = $reportSortColumn;

        return $this;
    }

    /**
     * Get reportSortColumn
     *
     * @return integer 
     */
    public function getReportSortColumn()
    {
        return $this->reportSortColumn;
    }
}

<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OaDeviceCol
 *
 * @ORM\Table(name="oa_device_col", indexes={@ORM\Index(name="dev_id", columns={"dev_id"})})
 * @ORM\Entity
 */
class OaDeviceCol
{
    /**
     * @var integer
     *
     * @ORM\Column(name="col_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $colId;

    /**
     * @var string
     *
     * @ORM\Column(name="col_table", type="string", length=100, nullable=false)
     */
    private $colTable;

    /**
     * @var string
     *
     * @ORM\Column(name="col_column", type="string", length=100, nullable=false)
     */
    private $colColumn;

    /**
     * @var string
     *
     * @ORM\Column(name="col_type", type="string", length=100, nullable=false)
     */
    private $colType;

    /**
     * @var integer
     *
     * @ORM\Column(name="col_order", type="integer", nullable=true)
     */
    private $colOrder;

    /**
     * @var \Ehann\Bundle\OpenAwesomeBundle\Entity\OaDevice
     *
     * @ORM\ManyToOne(targetEntity="Ehann\Bundle\OpenAwesomeBundle\Entity\OaDevice")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dev_id", referencedColumnName="dev_id")
     * })
     */
    private $dev;



    /**
     * Get colId
     *
     * @return integer 
     */
    public function getColId()
    {
        return $this->colId;
    }

    /**
     * Set colTable
     *
     * @param string $colTable
     * @return OaDeviceCol
     */
    public function setColTable($colTable)
    {
        $this->colTable = $colTable;

        return $this;
    }

    /**
     * Get colTable
     *
     * @return string 
     */
    public function getColTable()
    {
        return $this->colTable;
    }

    /**
     * Set colColumn
     *
     * @param string $colColumn
     * @return OaDeviceCol
     */
    public function setColColumn($colColumn)
    {
        $this->colColumn = $colColumn;

        return $this;
    }

    /**
     * Get colColumn
     *
     * @return string 
     */
    public function getColColumn()
    {
        return $this->colColumn;
    }

    /**
     * Set colType
     *
     * @param string $colType
     * @return OaDeviceCol
     */
    public function setColType($colType)
    {
        $this->colType = $colType;

        return $this;
    }

    /**
     * Get colType
     *
     * @return string 
     */
    public function getColType()
    {
        return $this->colType;
    }

    /**
     * Set colOrder
     *
     * @param integer $colOrder
     * @return OaDeviceCol
     */
    public function setColOrder($colOrder)
    {
        $this->colOrder = $colOrder;

        return $this;
    }

    /**
     * Get colOrder
     *
     * @return integer 
     */
    public function getColOrder()
    {
        return $this->colOrder;
    }

    /**
     * Set dev
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\OaDevice $dev
     * @return OaDeviceCol
     */
    public function setDev(\Ehann\Bundle\OpenAwesomeBundle\Entity\OaDevice $dev = null)
    {
        $this->dev = $dev;

        return $this;
    }

    /**
     * Get dev
     *
     * @return \Ehann\Bundle\OpenAwesomeBundle\Entity\OaDevice 
     */
    public function getDev()
    {
        return $this->dev;
    }
}

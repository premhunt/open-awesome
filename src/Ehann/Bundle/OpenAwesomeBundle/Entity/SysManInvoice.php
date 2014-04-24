<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysManInvoice
 *
 * @ORM\Table(name="sys_man_invoice")
 * @ORM\Entity
 */
class SysManInvoice
{
    /**
     * @var integer
     *
     * @ORM\Column(name="invoice_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $invoiceId;

    /**
     * @var integer
     *
     * @ORM\Column(name="org_id", type="integer", nullable=true)
     */
    private $orgId;

    /**
     * @var string
     *
     * @ORM\Column(name="purchase_order", type="string", length=100, nullable=false)
     */
    private $purchaseOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="cost_center", type="string", length=100, nullable=false)
     */
    private $costCenter;

    /**
     * @var string
     *
     * @ORM\Column(name="date_received", type="string", length=100, nullable=false)
     */
    private $dateReceived;

    /**
     * @var string
     *
     * @ORM\Column(name="date_paid", type="string", length=100, nullable=false)
     */
    private $datePaid;

    /**
     * @var string
     *
     * @ORM\Column(name="supplier", type="string", length=100, nullable=false)
     */
    private $supplier;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=100, nullable=false)
     */
    private $filename;



    /**
     * Get invoiceId
     *
     * @return integer 
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * Set orgId
     *
     * @param integer $orgId
     * @return SysManInvoice
     */
    public function setOrgId($orgId)
    {
        $this->orgId = $orgId;

        return $this;
    }

    /**
     * Get orgId
     *
     * @return integer 
     */
    public function getOrgId()
    {
        return $this->orgId;
    }

    /**
     * Set purchaseOrder
     *
     * @param string $purchaseOrder
     * @return SysManInvoice
     */
    public function setPurchaseOrder($purchaseOrder)
    {
        $this->purchaseOrder = $purchaseOrder;

        return $this;
    }

    /**
     * Get purchaseOrder
     *
     * @return string 
     */
    public function getPurchaseOrder()
    {
        return $this->purchaseOrder;
    }

    /**
     * Set costCenter
     *
     * @param string $costCenter
     * @return SysManInvoice
     */
    public function setCostCenter($costCenter)
    {
        $this->costCenter = $costCenter;

        return $this;
    }

    /**
     * Get costCenter
     *
     * @return string 
     */
    public function getCostCenter()
    {
        return $this->costCenter;
    }

    /**
     * Set dateReceived
     *
     * @param string $dateReceived
     * @return SysManInvoice
     */
    public function setDateReceived($dateReceived)
    {
        $this->dateReceived = $dateReceived;

        return $this;
    }

    /**
     * Get dateReceived
     *
     * @return string 
     */
    public function getDateReceived()
    {
        return $this->dateReceived;
    }

    /**
     * Set datePaid
     *
     * @param string $datePaid
     * @return SysManInvoice
     */
    public function setDatePaid($datePaid)
    {
        $this->datePaid = $datePaid;

        return $this;
    }

    /**
     * Get datePaid
     *
     * @return string 
     */
    public function getDatePaid()
    {
        return $this->datePaid;
    }

    /**
     * Set supplier
     *
     * @param string $supplier
     * @return SysManInvoice
     */
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * Get supplier
     *
     * @return string 
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return SysManInvoice
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }
}

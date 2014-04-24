<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysManInvoiceLine
 *
 * @ORM\Table(name="sys_man_invoice_line")
 * @ORM\Entity
 */
class SysManInvoiceLine
{
    /**
     * @var integer
     *
     * @ORM\Column(name="line_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lineId;

    /**
     * @var integer
     *
     * @ORM\Column(name="invoice_id", type="integer", nullable=true)
     */
    private $invoiceId;

    /**
     * @var string
     *
     * @ORM\Column(name="line_text", type="string", length=200, nullable=false)
     */
    private $lineText;

    /**
     * @var integer
     *
     * @ORM\Column(name="system_id", type="integer", nullable=true)
     */
    private $systemId;

    /**
     * @var string
     *
     * @ORM\Column(name="man_serial", type="string", length=200, nullable=false)
     */
    private $manSerial;

    /**
     * @var string
     *
     * @ORM\Column(name="man_asset_number", type="string", length=200, nullable=false)
     */
    private $manAssetNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="line_amount", type="string", length=200, nullable=false)
     */
    private $lineAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", length=200, nullable=false)
     */
    private $notes;



    /**
     * Get lineId
     *
     * @return integer 
     */
    public function getLineId()
    {
        return $this->lineId;
    }

    /**
     * Set invoiceId
     *
     * @param integer $invoiceId
     * @return SysManInvoiceLine
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;

        return $this;
    }

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
     * Set lineText
     *
     * @param string $lineText
     * @return SysManInvoiceLine
     */
    public function setLineText($lineText)
    {
        $this->lineText = $lineText;

        return $this;
    }

    /**
     * Get lineText
     *
     * @return string 
     */
    public function getLineText()
    {
        return $this->lineText;
    }

    /**
     * Set systemId
     *
     * @param integer $systemId
     * @return SysManInvoiceLine
     */
    public function setSystemId($systemId)
    {
        $this->systemId = $systemId;

        return $this;
    }

    /**
     * Get systemId
     *
     * @return integer 
     */
    public function getSystemId()
    {
        return $this->systemId;
    }

    /**
     * Set manSerial
     *
     * @param string $manSerial
     * @return SysManInvoiceLine
     */
    public function setManSerial($manSerial)
    {
        $this->manSerial = $manSerial;

        return $this;
    }

    /**
     * Get manSerial
     *
     * @return string 
     */
    public function getManSerial()
    {
        return $this->manSerial;
    }

    /**
     * Set manAssetNumber
     *
     * @param string $manAssetNumber
     * @return SysManInvoiceLine
     */
    public function setManAssetNumber($manAssetNumber)
    {
        $this->manAssetNumber = $manAssetNumber;

        return $this;
    }

    /**
     * Get manAssetNumber
     *
     * @return string 
     */
    public function getManAssetNumber()
    {
        return $this->manAssetNumber;
    }

    /**
     * Set lineAmount
     *
     * @param string $lineAmount
     * @return SysManInvoiceLine
     */
    public function setLineAmount($lineAmount)
    {
        $this->lineAmount = $lineAmount;

        return $this;
    }

    /**
     * Get lineAmount
     *
     * @return string 
     */
    public function getLineAmount()
    {
        return $this->lineAmount;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return SysManInvoiceLine
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }
}

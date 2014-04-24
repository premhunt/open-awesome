<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OaAssetLine
 *
 * @ORM\Table(name="oa_asset_line")
 * @ORM\Entity
 */
class OaAssetLine
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
     * @ORM\Column(name="order_id", type="integer", nullable=true)
     */
    private $orderId;

    /**
     * @var integer
     *
     * @ORM\Column(name="org_id", type="integer", nullable=true)
     */
    private $orgId;

    /**
     * @var integer
     *
     * @ORM\Column(name="select_id", type="integer", nullable=true)
     */
    private $selectId;

    /**
     * @var integer
     *
     * @ORM\Column(name="line_amount", type="integer", nullable=true)
     */
    private $lineAmount;

    /**
     * @var integer
     *
     * @ORM\Column(name="line_cost_each", type="integer", nullable=true)
     */
    private $lineCostEach;

    /**
     * @var integer
     *
     * @ORM\Column(name="line_tax_each", type="integer", nullable=true)
     */
    private $lineTaxEach;

    /**
     * @var string
     *
     * @ORM\Column(name="line_asset_number", type="string", length=50, nullable=false)
     */
    private $lineAssetNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="line_gl", type="string", length=50, nullable=false)
     */
    private $lineGl;

    /**
     * @var string
     *
     * @ORM\Column(name="line_type", type="string", nullable=false)
     */
    private $lineType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="line_sw_license_expires_date", type="datetime", nullable=false)
     */
    private $lineSwLicenseExpiresDate;

    /**
     * @var string
     *
     * @ORM\Column(name="line_sw_license_key", type="string", length=50, nullable=false)
     */
    private $lineSwLicenseKey;

    /**
     * @var string
     *
     * @ORM\Column(name="line_sw_license_number", type="string", length=50, nullable=false)
     */
    private $lineSwLicenseNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="line_sw_license_agreement", type="string", length=50, nullable=false)
     */
    private $lineSwLicenseAgreement;

    /**
     * @var string
     *
     * @ORM\Column(name="line_sw_license_type", type="string", nullable=false)
     */
    private $lineSwLicenseType;

    /**
     * @var string
     *
     * @ORM\Column(name="line_vendor_producit_id", type="string", length=50, nullable=false)
     */
    private $lineVendorProducitId;

    /**
     * @var string
     *
     * @ORM\Column(name="line_vendor_part_id", type="string", length=50, nullable=false)
     */
    private $lineVendorPartId;

    /**
     * @var string
     *
     * @ORM\Column(name="line_maintenance_included", type="string", length=50, nullable=false)
     */
    private $lineMaintenanceIncluded;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="line_maintenance_date_expires", type="datetime", nullable=false)
     */
    private $lineMaintenanceDateExpires;

    /**
     * @var string
     *
     * @ORM\Column(name="allocate_type", type="string", nullable=false)
     */
    private $allocateType;

    /**
     * @var string
     *
     * @ORM\Column(name="allocate_text", type="string", length=50, nullable=false)
     */
    private $allocateText;



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
     * Set orderId
     *
     * @param integer $orderId
     * @return OaAssetLine
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return integer 
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set orgId
     *
     * @param integer $orgId
     * @return OaAssetLine
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
     * Set selectId
     *
     * @param integer $selectId
     * @return OaAssetLine
     */
    public function setSelectId($selectId)
    {
        $this->selectId = $selectId;

        return $this;
    }

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
     * Set lineAmount
     *
     * @param integer $lineAmount
     * @return OaAssetLine
     */
    public function setLineAmount($lineAmount)
    {
        $this->lineAmount = $lineAmount;

        return $this;
    }

    /**
     * Get lineAmount
     *
     * @return integer 
     */
    public function getLineAmount()
    {
        return $this->lineAmount;
    }

    /**
     * Set lineCostEach
     *
     * @param integer $lineCostEach
     * @return OaAssetLine
     */
    public function setLineCostEach($lineCostEach)
    {
        $this->lineCostEach = $lineCostEach;

        return $this;
    }

    /**
     * Get lineCostEach
     *
     * @return integer 
     */
    public function getLineCostEach()
    {
        return $this->lineCostEach;
    }

    /**
     * Set lineTaxEach
     *
     * @param integer $lineTaxEach
     * @return OaAssetLine
     */
    public function setLineTaxEach($lineTaxEach)
    {
        $this->lineTaxEach = $lineTaxEach;

        return $this;
    }

    /**
     * Get lineTaxEach
     *
     * @return integer 
     */
    public function getLineTaxEach()
    {
        return $this->lineTaxEach;
    }

    /**
     * Set lineAssetNumber
     *
     * @param string $lineAssetNumber
     * @return OaAssetLine
     */
    public function setLineAssetNumber($lineAssetNumber)
    {
        $this->lineAssetNumber = $lineAssetNumber;

        return $this;
    }

    /**
     * Get lineAssetNumber
     *
     * @return string 
     */
    public function getLineAssetNumber()
    {
        return $this->lineAssetNumber;
    }

    /**
     * Set lineGl
     *
     * @param string $lineGl
     * @return OaAssetLine
     */
    public function setLineGl($lineGl)
    {
        $this->lineGl = $lineGl;

        return $this;
    }

    /**
     * Get lineGl
     *
     * @return string 
     */
    public function getLineGl()
    {
        return $this->lineGl;
    }

    /**
     * Set lineType
     *
     * @param string $lineType
     * @return OaAssetLine
     */
    public function setLineType($lineType)
    {
        $this->lineType = $lineType;

        return $this;
    }

    /**
     * Get lineType
     *
     * @return string 
     */
    public function getLineType()
    {
        return $this->lineType;
    }

    /**
     * Set lineSwLicenseExpiresDate
     *
     * @param \DateTime $lineSwLicenseExpiresDate
     * @return OaAssetLine
     */
    public function setLineSwLicenseExpiresDate($lineSwLicenseExpiresDate)
    {
        $this->lineSwLicenseExpiresDate = $lineSwLicenseExpiresDate;

        return $this;
    }

    /**
     * Get lineSwLicenseExpiresDate
     *
     * @return \DateTime 
     */
    public function getLineSwLicenseExpiresDate()
    {
        return $this->lineSwLicenseExpiresDate;
    }

    /**
     * Set lineSwLicenseKey
     *
     * @param string $lineSwLicenseKey
     * @return OaAssetLine
     */
    public function setLineSwLicenseKey($lineSwLicenseKey)
    {
        $this->lineSwLicenseKey = $lineSwLicenseKey;

        return $this;
    }

    /**
     * Get lineSwLicenseKey
     *
     * @return string 
     */
    public function getLineSwLicenseKey()
    {
        return $this->lineSwLicenseKey;
    }

    /**
     * Set lineSwLicenseNumber
     *
     * @param string $lineSwLicenseNumber
     * @return OaAssetLine
     */
    public function setLineSwLicenseNumber($lineSwLicenseNumber)
    {
        $this->lineSwLicenseNumber = $lineSwLicenseNumber;

        return $this;
    }

    /**
     * Get lineSwLicenseNumber
     *
     * @return string 
     */
    public function getLineSwLicenseNumber()
    {
        return $this->lineSwLicenseNumber;
    }

    /**
     * Set lineSwLicenseAgreement
     *
     * @param string $lineSwLicenseAgreement
     * @return OaAssetLine
     */
    public function setLineSwLicenseAgreement($lineSwLicenseAgreement)
    {
        $this->lineSwLicenseAgreement = $lineSwLicenseAgreement;

        return $this;
    }

    /**
     * Get lineSwLicenseAgreement
     *
     * @return string 
     */
    public function getLineSwLicenseAgreement()
    {
        return $this->lineSwLicenseAgreement;
    }

    /**
     * Set lineSwLicenseType
     *
     * @param string $lineSwLicenseType
     * @return OaAssetLine
     */
    public function setLineSwLicenseType($lineSwLicenseType)
    {
        $this->lineSwLicenseType = $lineSwLicenseType;

        return $this;
    }

    /**
     * Get lineSwLicenseType
     *
     * @return string 
     */
    public function getLineSwLicenseType()
    {
        return $this->lineSwLicenseType;
    }

    /**
     * Set lineVendorProducitId
     *
     * @param string $lineVendorProducitId
     * @return OaAssetLine
     */
    public function setLineVendorProducitId($lineVendorProducitId)
    {
        $this->lineVendorProducitId = $lineVendorProducitId;

        return $this;
    }

    /**
     * Get lineVendorProducitId
     *
     * @return string 
     */
    public function getLineVendorProducitId()
    {
        return $this->lineVendorProducitId;
    }

    /**
     * Set lineVendorPartId
     *
     * @param string $lineVendorPartId
     * @return OaAssetLine
     */
    public function setLineVendorPartId($lineVendorPartId)
    {
        $this->lineVendorPartId = $lineVendorPartId;

        return $this;
    }

    /**
     * Get lineVendorPartId
     *
     * @return string 
     */
    public function getLineVendorPartId()
    {
        return $this->lineVendorPartId;
    }

    /**
     * Set lineMaintenanceIncluded
     *
     * @param string $lineMaintenanceIncluded
     * @return OaAssetLine
     */
    public function setLineMaintenanceIncluded($lineMaintenanceIncluded)
    {
        $this->lineMaintenanceIncluded = $lineMaintenanceIncluded;

        return $this;
    }

    /**
     * Get lineMaintenanceIncluded
     *
     * @return string 
     */
    public function getLineMaintenanceIncluded()
    {
        return $this->lineMaintenanceIncluded;
    }

    /**
     * Set lineMaintenanceDateExpires
     *
     * @param \DateTime $lineMaintenanceDateExpires
     * @return OaAssetLine
     */
    public function setLineMaintenanceDateExpires($lineMaintenanceDateExpires)
    {
        $this->lineMaintenanceDateExpires = $lineMaintenanceDateExpires;

        return $this;
    }

    /**
     * Get lineMaintenanceDateExpires
     *
     * @return \DateTime 
     */
    public function getLineMaintenanceDateExpires()
    {
        return $this->lineMaintenanceDateExpires;
    }

    /**
     * Set allocateType
     *
     * @param string $allocateType
     * @return OaAssetLine
     */
    public function setAllocateType($allocateType)
    {
        $this->allocateType = $allocateType;

        return $this;
    }

    /**
     * Get allocateType
     *
     * @return string 
     */
    public function getAllocateType()
    {
        return $this->allocateType;
    }

    /**
     * Set allocateText
     *
     * @param string $allocateText
     * @return OaAssetLine
     */
    public function setAllocateText($allocateText)
    {
        $this->allocateText = $allocateText;

        return $this;
    }

    /**
     * Get allocateText
     *
     * @return string 
     */
    public function getAllocateText()
    {
        return $this->allocateText;
    }
}

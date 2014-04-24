<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OaAssetOrder
 *
 * @ORM\Table(name="oa_asset_order")
 * @ORM\Entity
 */
class OaAssetOrder
{
    /**
     * @var integer
     *
     * @ORM\Column(name="order_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="order_date", type="datetime", nullable=false)
     */
    private $orderDate;

    /**
     * @var string
     *
     * @ORM\Column(name="order_po", type="string", length=50, nullable=false)
     */
    private $orderPo;

    /**
     * @var string
     *
     * @ORM\Column(name="order_vn", type="string", length=50, nullable=false)
     */
    private $orderVn;

    /**
     * @var string
     *
     * @ORM\Column(name="order_in", type="string", length=50, nullable=false)
     */
    private $orderIn;

    /**
     * @var string
     *
     * @ORM\Column(name="order_vendor", type="string", length=50, nullable=false)
     */
    private $orderVendor;

    /**
     * @var string
     *
     * @ORM\Column(name="order_auth_officer", type="string", length=100, nullable=false)
     */
    private $orderAuthOfficer;

    /**
     * @var string
     *
     * @ORM\Column(name="order_cost_code", type="string", length=50, nullable=false)
     */
    private $orderCostCode;

    /**
     * @var string
     *
     * @ORM\Column(name="order_notes", type="text", nullable=false)
     */
    private $orderNotes;



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
     * Set orderDate
     *
     * @param \DateTime $orderDate
     * @return OaAssetOrder
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    /**
     * Get orderDate
     *
     * @return \DateTime 
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Set orderPo
     *
     * @param string $orderPo
     * @return OaAssetOrder
     */
    public function setOrderPo($orderPo)
    {
        $this->orderPo = $orderPo;

        return $this;
    }

    /**
     * Get orderPo
     *
     * @return string 
     */
    public function getOrderPo()
    {
        return $this->orderPo;
    }

    /**
     * Set orderVn
     *
     * @param string $orderVn
     * @return OaAssetOrder
     */
    public function setOrderVn($orderVn)
    {
        $this->orderVn = $orderVn;

        return $this;
    }

    /**
     * Get orderVn
     *
     * @return string 
     */
    public function getOrderVn()
    {
        return $this->orderVn;
    }

    /**
     * Set orderIn
     *
     * @param string $orderIn
     * @return OaAssetOrder
     */
    public function setOrderIn($orderIn)
    {
        $this->orderIn = $orderIn;

        return $this;
    }

    /**
     * Get orderIn
     *
     * @return string 
     */
    public function getOrderIn()
    {
        return $this->orderIn;
    }

    /**
     * Set orderVendor
     *
     * @param string $orderVendor
     * @return OaAssetOrder
     */
    public function setOrderVendor($orderVendor)
    {
        $this->orderVendor = $orderVendor;

        return $this;
    }

    /**
     * Get orderVendor
     *
     * @return string 
     */
    public function getOrderVendor()
    {
        return $this->orderVendor;
    }

    /**
     * Set orderAuthOfficer
     *
     * @param string $orderAuthOfficer
     * @return OaAssetOrder
     */
    public function setOrderAuthOfficer($orderAuthOfficer)
    {
        $this->orderAuthOfficer = $orderAuthOfficer;

        return $this;
    }

    /**
     * Get orderAuthOfficer
     *
     * @return string 
     */
    public function getOrderAuthOfficer()
    {
        return $this->orderAuthOfficer;
    }

    /**
     * Set orderCostCode
     *
     * @param string $orderCostCode
     * @return OaAssetOrder
     */
    public function setOrderCostCode($orderCostCode)
    {
        $this->orderCostCode = $orderCostCode;

        return $this;
    }

    /**
     * Get orderCostCode
     *
     * @return string 
     */
    public function getOrderCostCode()
    {
        return $this->orderCostCode;
    }

    /**
     * Set orderNotes
     *
     * @param string $orderNotes
     * @return OaAssetOrder
     */
    public function setOrderNotes($orderNotes)
    {
        $this->orderNotes = $orderNotes;

        return $this;
    }

    /**
     * Get orderNotes
     *
     * @return string 
     */
    public function getOrderNotes()
    {
        return $this->orderNotes;
    }
}

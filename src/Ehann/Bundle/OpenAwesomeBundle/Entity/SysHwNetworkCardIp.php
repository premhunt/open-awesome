<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysHwNetworkCardIp
 *
 * @ORM\Table(name="sys_hw_network_card_ip", indexes={@ORM\Index(name="id", columns={"net_mac_address"}), @ORM\Index(name="sys_hw_network_card_ip_system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysHwNetworkCardIp
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ip_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ipId;

    /**
     * @var string
     *
     * @ORM\Column(name="net_mac_address", type="string", length=17, nullable=false)
     */
    private $netMacAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address_v4", type="string", length=30, nullable=false)
     */
    private $ipAddressV4;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address_v6", type="string", length=30, nullable=false)
     */
    private $ipAddressV6;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_subnet", type="string", length=30, nullable=false)
     */
    private $ipSubnet;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address_version", type="string", length=10, nullable=false)
     */
    private $ipAddressVersion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     */
    private $timestamp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="first_timestamp", type="datetime", nullable=false)
     */
    private $firstTimestamp;

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
     * Get ipId
     *
     * @return integer 
     */
    public function getIpId()
    {
        return $this->ipId;
    }

    /**
     * Set netMacAddress
     *
     * @param string $netMacAddress
     * @return SysHwNetworkCardIp
     */
    public function setNetMacAddress($netMacAddress)
    {
        $this->netMacAddress = $netMacAddress;

        return $this;
    }

    /**
     * Get netMacAddress
     *
     * @return string 
     */
    public function getNetMacAddress()
    {
        return $this->netMacAddress;
    }

    /**
     * Set ipAddressV4
     *
     * @param string $ipAddressV4
     * @return SysHwNetworkCardIp
     */
    public function setIpAddressV4($ipAddressV4)
    {
        $this->ipAddressV4 = $ipAddressV4;

        return $this;
    }

    /**
     * Get ipAddressV4
     *
     * @return string 
     */
    public function getIpAddressV4()
    {
        return $this->ipAddressV4;
    }

    /**
     * Set ipAddressV6
     *
     * @param string $ipAddressV6
     * @return SysHwNetworkCardIp
     */
    public function setIpAddressV6($ipAddressV6)
    {
        $this->ipAddressV6 = $ipAddressV6;

        return $this;
    }

    /**
     * Get ipAddressV6
     *
     * @return string 
     */
    public function getIpAddressV6()
    {
        return $this->ipAddressV6;
    }

    /**
     * Set ipSubnet
     *
     * @param string $ipSubnet
     * @return SysHwNetworkCardIp
     */
    public function setIpSubnet($ipSubnet)
    {
        $this->ipSubnet = $ipSubnet;

        return $this;
    }

    /**
     * Get ipSubnet
     *
     * @return string 
     */
    public function getIpSubnet()
    {
        return $this->ipSubnet;
    }

    /**
     * Set ipAddressVersion
     *
     * @param string $ipAddressVersion
     * @return SysHwNetworkCardIp
     */
    public function setIpAddressVersion($ipAddressVersion)
    {
        $this->ipAddressVersion = $ipAddressVersion;

        return $this;
    }

    /**
     * Get ipAddressVersion
     *
     * @return string 
     */
    public function getIpAddressVersion()
    {
        return $this->ipAddressVersion;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysHwNetworkCardIp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set firstTimestamp
     *
     * @param \DateTime $firstTimestamp
     * @return SysHwNetworkCardIp
     */
    public function setFirstTimestamp($firstTimestamp)
    {
        $this->firstTimestamp = $firstTimestamp;

        return $this;
    }

    /**
     * Get firstTimestamp
     *
     * @return \DateTime 
     */
    public function getFirstTimestamp()
    {
        return $this->firstTimestamp;
    }

    /**
     * Set system
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\System $system
     * @return SysHwNetworkCardIp
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
}

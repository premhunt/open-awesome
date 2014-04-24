<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysHwNetworkCard
 *
 * @ORM\Table(name="sys_hw_network_card", indexes={@ORM\Index(name="net_mac_address", columns={"net_mac_address"}), @ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysHwNetworkCard
{
    /**
     * @var integer
     *
     * @ORM\Column(name="net_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $netId;

    /**
     * @var string
     *
     * @ORM\Column(name="net_mac_address", type="string", length=17, nullable=false)
     */
    private $netMacAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="net_manufacturer", type="string", length=100, nullable=false)
     */
    private $netManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="net_model", type="string", length=100, nullable=false)
     */
    private $netModel;

    /**
     * @var string
     *
     * @ORM\Column(name="net_description", type="string", length=255, nullable=false)
     */
    private $netDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="net_ip_enabled", type="string", length=10, nullable=false)
     */
    private $netIpEnabled;

    /**
     * @var string
     *
     * @ORM\Column(name="net_index", type="string", length=10, nullable=false)
     */
    private $netIndex;

    /**
     * @var string
     *
     * @ORM\Column(name="net_dhcp_enabled", type="string", length=100, nullable=false)
     */
    private $netDhcpEnabled;

    /**
     * @var string
     *
     * @ORM\Column(name="net_dhcp_server", type="string", length=30, nullable=false)
     */
    private $netDhcpServer;

    /**
     * @var string
     *
     * @ORM\Column(name="net_dhcp_lease_obtained", type="string", length=14, nullable=false)
     */
    private $netDhcpLeaseObtained;

    /**
     * @var string
     *
     * @ORM\Column(name="net_dhcp_lease_expires", type="string", length=14, nullable=false)
     */
    private $netDhcpLeaseExpires;

    /**
     * @var string
     *
     * @ORM\Column(name="net_dns_host_name", type="string", length=100, nullable=false)
     */
    private $netDnsHostName;

    /**
     * @var string
     *
     * @ORM\Column(name="net_dns_server", type="string", length=100, nullable=false)
     */
    private $netDnsServer;

    /**
     * @var string
     *
     * @ORM\Column(name="net_dns_domain", type="string", length=100, nullable=false)
     */
    private $netDnsDomain;

    /**
     * @var string
     *
     * @ORM\Column(name="net_dns_domain_suffix", type="string", length=100, nullable=false)
     */
    private $netDnsDomainSuffix;

    /**
     * @var string
     *
     * @ORM\Column(name="net_dns_domain_reg_enabled", type="string", length=10, nullable=false)
     */
    private $netDnsDomainRegEnabled;

    /**
     * @var string
     *
     * @ORM\Column(name="net_wins_primary", type="string", length=30, nullable=false)
     */
    private $netWinsPrimary;

    /**
     * @var string
     *
     * @ORM\Column(name="net_wins_secondary", type="string", length=30, nullable=false)
     */
    private $netWinsSecondary;

    /**
     * @var string
     *
     * @ORM\Column(name="net_wins_lmhosts_enabled", type="string", length=10, nullable=false)
     */
    private $netWinsLmhostsEnabled;

    /**
     * @var string
     *
     * @ORM\Column(name="net_adapter_type", type="string", length=100, nullable=false)
     */
    private $netAdapterType;

    /**
     * @var string
     *
     * @ORM\Column(name="net_connection_id", type="string", length=255, nullable=false)
     */
    private $netConnectionId;

    /**
     * @var string
     *
     * @ORM\Column(name="net_connection_status", type="string", length=30, nullable=false)
     */
    private $netConnectionStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="net_speed", type="string", length=10, nullable=false)
     */
    private $netSpeed;

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
     * Get netId
     *
     * @return integer 
     */
    public function getNetId()
    {
        return $this->netId;
    }

    /**
     * Set netMacAddress
     *
     * @param string $netMacAddress
     * @return SysHwNetworkCard
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
     * Set netManufacturer
     *
     * @param string $netManufacturer
     * @return SysHwNetworkCard
     */
    public function setNetManufacturer($netManufacturer)
    {
        $this->netManufacturer = $netManufacturer;

        return $this;
    }

    /**
     * Get netManufacturer
     *
     * @return string 
     */
    public function getNetManufacturer()
    {
        return $this->netManufacturer;
    }

    /**
     * Set netModel
     *
     * @param string $netModel
     * @return SysHwNetworkCard
     */
    public function setNetModel($netModel)
    {
        $this->netModel = $netModel;

        return $this;
    }

    /**
     * Get netModel
     *
     * @return string 
     */
    public function getNetModel()
    {
        return $this->netModel;
    }

    /**
     * Set netDescription
     *
     * @param string $netDescription
     * @return SysHwNetworkCard
     */
    public function setNetDescription($netDescription)
    {
        $this->netDescription = $netDescription;

        return $this;
    }

    /**
     * Get netDescription
     *
     * @return string 
     */
    public function getNetDescription()
    {
        return $this->netDescription;
    }

    /**
     * Set netIpEnabled
     *
     * @param string $netIpEnabled
     * @return SysHwNetworkCard
     */
    public function setNetIpEnabled($netIpEnabled)
    {
        $this->netIpEnabled = $netIpEnabled;

        return $this;
    }

    /**
     * Get netIpEnabled
     *
     * @return string 
     */
    public function getNetIpEnabled()
    {
        return $this->netIpEnabled;
    }

    /**
     * Set netIndex
     *
     * @param string $netIndex
     * @return SysHwNetworkCard
     */
    public function setNetIndex($netIndex)
    {
        $this->netIndex = $netIndex;

        return $this;
    }

    /**
     * Get netIndex
     *
     * @return string 
     */
    public function getNetIndex()
    {
        return $this->netIndex;
    }

    /**
     * Set netDhcpEnabled
     *
     * @param string $netDhcpEnabled
     * @return SysHwNetworkCard
     */
    public function setNetDhcpEnabled($netDhcpEnabled)
    {
        $this->netDhcpEnabled = $netDhcpEnabled;

        return $this;
    }

    /**
     * Get netDhcpEnabled
     *
     * @return string 
     */
    public function getNetDhcpEnabled()
    {
        return $this->netDhcpEnabled;
    }

    /**
     * Set netDhcpServer
     *
     * @param string $netDhcpServer
     * @return SysHwNetworkCard
     */
    public function setNetDhcpServer($netDhcpServer)
    {
        $this->netDhcpServer = $netDhcpServer;

        return $this;
    }

    /**
     * Get netDhcpServer
     *
     * @return string 
     */
    public function getNetDhcpServer()
    {
        return $this->netDhcpServer;
    }

    /**
     * Set netDhcpLeaseObtained
     *
     * @param string $netDhcpLeaseObtained
     * @return SysHwNetworkCard
     */
    public function setNetDhcpLeaseObtained($netDhcpLeaseObtained)
    {
        $this->netDhcpLeaseObtained = $netDhcpLeaseObtained;

        return $this;
    }

    /**
     * Get netDhcpLeaseObtained
     *
     * @return string 
     */
    public function getNetDhcpLeaseObtained()
    {
        return $this->netDhcpLeaseObtained;
    }

    /**
     * Set netDhcpLeaseExpires
     *
     * @param string $netDhcpLeaseExpires
     * @return SysHwNetworkCard
     */
    public function setNetDhcpLeaseExpires($netDhcpLeaseExpires)
    {
        $this->netDhcpLeaseExpires = $netDhcpLeaseExpires;

        return $this;
    }

    /**
     * Get netDhcpLeaseExpires
     *
     * @return string 
     */
    public function getNetDhcpLeaseExpires()
    {
        return $this->netDhcpLeaseExpires;
    }

    /**
     * Set netDnsHostName
     *
     * @param string $netDnsHostName
     * @return SysHwNetworkCard
     */
    public function setNetDnsHostName($netDnsHostName)
    {
        $this->netDnsHostName = $netDnsHostName;

        return $this;
    }

    /**
     * Get netDnsHostName
     *
     * @return string 
     */
    public function getNetDnsHostName()
    {
        return $this->netDnsHostName;
    }

    /**
     * Set netDnsServer
     *
     * @param string $netDnsServer
     * @return SysHwNetworkCard
     */
    public function setNetDnsServer($netDnsServer)
    {
        $this->netDnsServer = $netDnsServer;

        return $this;
    }

    /**
     * Get netDnsServer
     *
     * @return string 
     */
    public function getNetDnsServer()
    {
        return $this->netDnsServer;
    }

    /**
     * Set netDnsDomain
     *
     * @param string $netDnsDomain
     * @return SysHwNetworkCard
     */
    public function setNetDnsDomain($netDnsDomain)
    {
        $this->netDnsDomain = $netDnsDomain;

        return $this;
    }

    /**
     * Get netDnsDomain
     *
     * @return string 
     */
    public function getNetDnsDomain()
    {
        return $this->netDnsDomain;
    }

    /**
     * Set netDnsDomainSuffix
     *
     * @param string $netDnsDomainSuffix
     * @return SysHwNetworkCard
     */
    public function setNetDnsDomainSuffix($netDnsDomainSuffix)
    {
        $this->netDnsDomainSuffix = $netDnsDomainSuffix;

        return $this;
    }

    /**
     * Get netDnsDomainSuffix
     *
     * @return string 
     */
    public function getNetDnsDomainSuffix()
    {
        return $this->netDnsDomainSuffix;
    }

    /**
     * Set netDnsDomainRegEnabled
     *
     * @param string $netDnsDomainRegEnabled
     * @return SysHwNetworkCard
     */
    public function setNetDnsDomainRegEnabled($netDnsDomainRegEnabled)
    {
        $this->netDnsDomainRegEnabled = $netDnsDomainRegEnabled;

        return $this;
    }

    /**
     * Get netDnsDomainRegEnabled
     *
     * @return string 
     */
    public function getNetDnsDomainRegEnabled()
    {
        return $this->netDnsDomainRegEnabled;
    }

    /**
     * Set netWinsPrimary
     *
     * @param string $netWinsPrimary
     * @return SysHwNetworkCard
     */
    public function setNetWinsPrimary($netWinsPrimary)
    {
        $this->netWinsPrimary = $netWinsPrimary;

        return $this;
    }

    /**
     * Get netWinsPrimary
     *
     * @return string 
     */
    public function getNetWinsPrimary()
    {
        return $this->netWinsPrimary;
    }

    /**
     * Set netWinsSecondary
     *
     * @param string $netWinsSecondary
     * @return SysHwNetworkCard
     */
    public function setNetWinsSecondary($netWinsSecondary)
    {
        $this->netWinsSecondary = $netWinsSecondary;

        return $this;
    }

    /**
     * Get netWinsSecondary
     *
     * @return string 
     */
    public function getNetWinsSecondary()
    {
        return $this->netWinsSecondary;
    }

    /**
     * Set netWinsLmhostsEnabled
     *
     * @param string $netWinsLmhostsEnabled
     * @return SysHwNetworkCard
     */
    public function setNetWinsLmhostsEnabled($netWinsLmhostsEnabled)
    {
        $this->netWinsLmhostsEnabled = $netWinsLmhostsEnabled;

        return $this;
    }

    /**
     * Get netWinsLmhostsEnabled
     *
     * @return string 
     */
    public function getNetWinsLmhostsEnabled()
    {
        return $this->netWinsLmhostsEnabled;
    }

    /**
     * Set netAdapterType
     *
     * @param string $netAdapterType
     * @return SysHwNetworkCard
     */
    public function setNetAdapterType($netAdapterType)
    {
        $this->netAdapterType = $netAdapterType;

        return $this;
    }

    /**
     * Get netAdapterType
     *
     * @return string 
     */
    public function getNetAdapterType()
    {
        return $this->netAdapterType;
    }

    /**
     * Set netConnectionId
     *
     * @param string $netConnectionId
     * @return SysHwNetworkCard
     */
    public function setNetConnectionId($netConnectionId)
    {
        $this->netConnectionId = $netConnectionId;

        return $this;
    }

    /**
     * Get netConnectionId
     *
     * @return string 
     */
    public function getNetConnectionId()
    {
        return $this->netConnectionId;
    }

    /**
     * Set netConnectionStatus
     *
     * @param string $netConnectionStatus
     * @return SysHwNetworkCard
     */
    public function setNetConnectionStatus($netConnectionStatus)
    {
        $this->netConnectionStatus = $netConnectionStatus;

        return $this;
    }

    /**
     * Get netConnectionStatus
     *
     * @return string 
     */
    public function getNetConnectionStatus()
    {
        return $this->netConnectionStatus;
    }

    /**
     * Set netSpeed
     *
     * @param string $netSpeed
     * @return SysHwNetworkCard
     */
    public function setNetSpeed($netSpeed)
    {
        $this->netSpeed = $netSpeed;

        return $this;
    }

    /**
     * Get netSpeed
     *
     * @return string 
     */
    public function getNetSpeed()
    {
        return $this->netSpeed;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysHwNetworkCard
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
     * @return SysHwNetworkCard
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
     * @return SysHwNetworkCard
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

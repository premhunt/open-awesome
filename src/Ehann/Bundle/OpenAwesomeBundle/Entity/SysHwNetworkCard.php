<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysHwNetworkCard
 *
 * @ORM\Table(name="sys_hw_network_card", indexes={@ORM\Index(name="net_mac_address", columns={"net_mac_address"}), @ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysHwNetworkCard extends SystemComponent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="net_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="net_mac_address", type="string", length=17, nullable=false)
     */
    private $macAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="net_manufacturer", type="string", length=100, nullable=false)
     */
    private $manufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="net_model", type="string", length=100, nullable=false)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="net_description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="net_ip_enabled", type="string", length=10, nullable=false)
     */
    private $ipEnabled;

    /**
     * @var string
     *
     * @ORM\Column(name="net_index", type="string", length=10, nullable=false)
     */
    private $index;

    /**
     * @var string
     *
     * @ORM\Column(name="net_dhcp_enabled", type="string", length=100, nullable=false)
     */
    private $dhcpEnabled;

    /**
     * @var string
     *
     * @ORM\Column(name="net_dhcp_server", type="string", length=30, nullable=false)
     */
    private $dhcpServer;

    /**
     * @var string
     *
     * @ORM\Column(name="net_dhcp_lease_obtained", type="string", length=14, nullable=false)
     */
    private $dhcpLeaseObtained;

    /**
     * @var string
     *
     * @ORM\Column(name="net_dhcp_lease_expires", type="string", length=14, nullable=false)
     */
    private $dhcpLeaseExpires;

    /**
     * @var string
     *
     * @ORM\Column(name="net_dns_host_name", type="string", length=100, nullable=false)
     */
    private $dnsHostName;

    /**
     * @var string
     *
     * @ORM\Column(name="net_dns_server", type="string", length=100, nullable=false)
     */
    private $dnsServer;

    /**
     * @var string
     *
     * @ORM\Column(name="net_dns_domain", type="string", length=100, nullable=false)
     */
    private $dnsDomain;

    /**
     * @var string
     *
     * @ORM\Column(name="net_dns_domain_suffix", type="string", length=100, nullable=false)
     */
    private $dnsDomainSuffix;

    /**
     * @var string
     *
     * @ORM\Column(name="net_dns_domain_reg_enabled", type="string", length=10, nullable=false)
     */
    private $dnsDomainRegEnabled;

    /**
     * @var string
     *
     * @ORM\Column(name="net_wins_primary", type="string", length=30, nullable=false)
     */
    private $winsPrimary;

    /**
     * @var string
     *
     * @ORM\Column(name="net_wins_secondary", type="string", length=30, nullable=false)
     */
    private $winsSecondary;

    /**
     * @var string
     *
     * @ORM\Column(name="net_wins_lmhosts_enabled", type="string", length=10, nullable=false)
     */
    private $winsLmhostsEnabled;

    /**
     * @var string
     *
     * @ORM\Column(name="net_adapter_type", type="string", length=100, nullable=false)
     */
    private $adapterType;

    /**
     * @var string
     *
     * @ORM\Column(name="net_connection_id", type="string", length=255, nullable=false)
     */
    private $connectionId;

    /**
     * @var string
     *
     * @ORM\Column(name="net_connection_status", type="string", length=30, nullable=false)
     */
    private $connectionStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="net_speed", type="string", length=10, nullable=false)
     */
    private $speed;

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
     * @param string $adapterType
     */
    public function setAdapterType($adapterType)
    {
        $this->adapterType = $adapterType;
    }

    /**
     * @return string
     */
    public function getAdapterType()
    {
        return $this->adapterType;
    }

    /**
     * @param string $connectionId
     */
    public function setConnectionId($connectionId)
    {
        $this->connectionId = $connectionId;
    }

    /**
     * @return string
     */
    public function getConnectionId()
    {
        return $this->connectionId;
    }

    /**
     * @param string $connectionStatus
     */
    public function setConnectionStatus($connectionStatus)
    {
        $this->connectionStatus = $connectionStatus;
    }

    /**
     * @return string
     */
    public function getConnectionStatus()
    {
        return $this->connectionStatus;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $dhcpEnabled
     */
    public function setDhcpEnabled($dhcpEnabled)
    {
        $this->dhcpEnabled = $dhcpEnabled;
    }

    /**
     * @return string
     */
    public function getDhcpEnabled()
    {
        return $this->dhcpEnabled;
    }

    /**
     * @param string $dhcpLeaseExpires
     */
    public function setDhcpLeaseExpires($dhcpLeaseExpires)
    {
        $this->dhcpLeaseExpires = $dhcpLeaseExpires;
    }

    /**
     * @return string
     */
    public function getDhcpLeaseExpires()
    {
        return $this->dhcpLeaseExpires;
    }

    /**
     * @param string $dhcpLeaseObtained
     */
    public function setDhcpLeaseObtained($dhcpLeaseObtained)
    {
        $this->dhcpLeaseObtained = $dhcpLeaseObtained;
    }

    /**
     * @return string
     */
    public function getDhcpLeaseObtained()
    {
        return $this->dhcpLeaseObtained;
    }

    /**
     * @param string $dhcpServer
     */
    public function setDhcpServer($dhcpServer)
    {
        $this->dhcpServer = $dhcpServer;
    }

    /**
     * @return string
     */
    public function getDhcpServer()
    {
        return $this->dhcpServer;
    }

    /**
     * @param string $dnsDomain
     */
    public function setDnsDomain($dnsDomain)
    {
        $this->dnsDomain = $dnsDomain;
    }

    /**
     * @return string
     */
    public function getDnsDomain()
    {
        return $this->dnsDomain;
    }

    /**
     * @param string $dnsDomainRegEnabled
     */
    public function setDnsDomainRegEnabled($dnsDomainRegEnabled)
    {
        $this->dnsDomainRegEnabled = $dnsDomainRegEnabled;
    }

    /**
     * @return string
     */
    public function getDnsDomainRegEnabled()
    {
        return $this->dnsDomainRegEnabled;
    }

    /**
     * @param string $dnsDomainSuffix
     */
    public function setDnsDomainSuffix($dnsDomainSuffix)
    {
        $this->dnsDomainSuffix = $dnsDomainSuffix;
    }

    /**
     * @return string
     */
    public function getDnsDomainSuffix()
    {
        return $this->dnsDomainSuffix;
    }

    /**
     * @param string $dnsHostName
     */
    public function setDnsHostName($dnsHostName)
    {
        $this->dnsHostName = $dnsHostName;
    }

    /**
     * @return string
     */
    public function getDnsHostName()
    {
        return $this->dnsHostName;
    }

    /**
     * @param string $dnsServer
     */
    public function setDnsServer($dnsServer)
    {
        $this->dnsServer = $dnsServer;
    }

    /**
     * @return string
     */
    public function getDnsServer()
    {
        return $this->dnsServer;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $index
     */
    public function setIndex($index)
    {
        $this->index = $index;
    }

    /**
     * @return string
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param string $ipEnabled
     */
    public function setIpEnabled($ipEnabled)
    {
        $this->ipEnabled = $ipEnabled;
    }

    /**
     * @return string
     */
    public function getIpEnabled()
    {
        return $this->ipEnabled;
    }

    /**
     * @param string $macAddress
     */
    public function setMacAddress($macAddress)
    {
        $this->macAddress = $macAddress;
    }

    /**
     * @return string
     */
    public function getMacAddress()
    {
        return $this->macAddress;
    }

    /**
     * @param string $manufacturer
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    /**
     * @return string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param string $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param string $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return string
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\System $system
     */
    public function setSystem($system)
    {
        $this->system = $system;
    }

    /**
     * @return \Ehann\Bundle\OpenAwesomeBundle\Entity\System
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * @param string $winsLmhostsEnabled
     */
    public function setWinsLmhostsEnabled($winsLmhostsEnabled)
    {
        $this->winsLmhostsEnabled = $winsLmhostsEnabled;
    }

    /**
     * @return string
     */
    public function getWinsLmhostsEnabled()
    {
        return $this->winsLmhostsEnabled;
    }

    /**
     * @param string $winsPrimary
     */
    public function setWinsPrimary($winsPrimary)
    {
        $this->winsPrimary = $winsPrimary;
    }

    /**
     * @return string
     */
    public function getWinsPrimary()
    {
        return $this->winsPrimary;
    }

    /**
     * @param string $winsSecondary
     */
    public function setWinsSecondary($winsSecondary)
    {
        $this->winsSecondary = $winsSecondary;
    }

    /**
     * @return string
     */
    public function getWinsSecondary()
    {
        return $this->winsSecondary;
    }

}

<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysHwNetworkCardIp
 *
 * @ORM\Table(name="sys_hw_network_card_ip", indexes={@ORM\Index(name="id", columns={"net_mac_address"}), @ORM\Index(name="sys_hw_network_card_ip_system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysHwNetworkCardIp extends SystemComponent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ip_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="net_mac_address", type="string", length=17, nullable=true)
     */
    private $netMacAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address_v4", type="string", length=30, nullable=true)
     */
    private $addressV4;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address_v6", type="string", length=30, nullable=true)
     */
    private $addressV6;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_subnet", type="string", length=30, nullable=true)
     */
    private $subnet;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address_version", type="string", length=10, nullable=true)
     */
    private $addressVersion;

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
     * @param string $addressV4
     */
    public function setAddressV4($addressV4)
    {
        $this->addressV4 = $addressV4;
    }

    /**
     * @return string
     */
    public function getAddressV4()
    {
        return $this->addressV4;
    }

    /**
     * @param string $addressV6
     */
    public function setAddressV6($addressV6)
    {
        $this->addressV6 = $addressV6;
    }

    /**
     * @return string
     */
    public function getAddressV6()
    {
        return $this->addressV6;
    }

    /**
     * @param string $addressVersion
     */
    public function setAddressVersion($addressVersion)
    {
        $this->addressVersion = $addressVersion;
    }

    /**
     * @return string
     */
    public function getAddressVersion()
    {
        return $this->addressVersion;
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
     * @param string $netMacAddress
     */
    public function setNetMacAddress($netMacAddress)
    {
        $this->netMacAddress = $netMacAddress;
    }

    /**
     * @return string
     */
    public function getNetMacAddress()
    {
        return $this->netMacAddress;
    }

    /**
     * @param string $subnet
     */
    public function setSubnet($subnet)
    {
        $this->subnet = $subnet;
    }

    /**
     * @return string
     */
    public function getSubnet()
    {
        return $this->subnet;
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


}

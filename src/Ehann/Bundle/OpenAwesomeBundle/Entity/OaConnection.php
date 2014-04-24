<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OaConnection
 *
 * @ORM\Table(name="oa_connection")
 * @ORM\Entity
 */
class OaConnection
{
    /**
     * @var integer
     *
     * @ORM\Column(name="connection_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $connectionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="org_id", type="integer", nullable=false)
     */
    private $orgId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="provider", type="string", length=100, nullable=false)
     */
    private $provider;

    /**
     * @var string
     *
     * @ORM\Column(name="service_type", type="string", length=100, nullable=false)
     */
    private $serviceType;

    /**
     * @var string
     *
     * @ORM\Column(name="product_name", type="string", length=100, nullable=false)
     */
    private $productName;

    /**
     * @var string
     *
     * @ORM\Column(name="service_identifier", type="string", length=100, nullable=false)
     */
    private $serviceIdentifier;

    /**
     * @var float
     *
     * @ORM\Column(name="speed", type="float", precision=7, scale=3, nullable=false)
     */
    private $speed;

    /**
     * @var integer
     *
     * @ORM\Column(name="location_id_a", type="integer", nullable=false)
     */
    private $locationIdA;

    /**
     * @var integer
     *
     * @ORM\Column(name="location_id_b", type="integer", nullable=false)
     */
    private $locationIdB;

    /**
     * @var integer
     *
     * @ORM\Column(name="system_id_a", type="integer", nullable=true)
     */
    private $systemIdA;

    /**
     * @var integer
     *
     * @ORM\Column(name="system_id_b", type="integer", nullable=true)
     */
    private $systemIdB;

    /**
     * @var string
     *
     * @ORM\Column(name="line_number_a", type="string", length=100, nullable=false)
     */
    private $lineNumberA;

    /**
     * @var string
     *
     * @ORM\Column(name="line_number_b", type="string", length=100, nullable=false)
     */
    private $lineNumberB;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address_external_a", type="string", length=30, nullable=false)
     */
    private $ipAddressExternalA;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address_external_b", type="string", length=30, nullable=false)
     */
    private $ipAddressExternalB;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address_internal_a", type="string", length=30, nullable=false)
     */
    private $ipAddressInternalA;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address_internal_b", type="string", length=30, nullable=false)
     */
    private $ipAddressInternalB;



    /**
     * Get connectionId
     *
     * @return integer 
     */
    public function getConnectionId()
    {
        return $this->connectionId;
    }

    /**
     * Set orgId
     *
     * @param integer $orgId
     * @return OaConnection
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
     * Set name
     *
     * @param string $name
     * @return OaConnection
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set provider
     *
     * @param string $provider
     * @return OaConnection
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Get provider
     *
     * @return string 
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Set serviceType
     *
     * @param string $serviceType
     * @return OaConnection
     */
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;

        return $this;
    }

    /**
     * Get serviceType
     *
     * @return string 
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * Set productName
     *
     * @param string $productName
     * @return OaConnection
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get productName
     *
     * @return string 
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set serviceIdentifier
     *
     * @param string $serviceIdentifier
     * @return OaConnection
     */
    public function setServiceIdentifier($serviceIdentifier)
    {
        $this->serviceIdentifier = $serviceIdentifier;

        return $this;
    }

    /**
     * Get serviceIdentifier
     *
     * @return string 
     */
    public function getServiceIdentifier()
    {
        return $this->serviceIdentifier;
    }

    /**
     * Set speed
     *
     * @param float $speed
     * @return OaConnection
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get speed
     *
     * @return float 
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set locationIdA
     *
     * @param integer $locationIdA
     * @return OaConnection
     */
    public function setLocationIdA($locationIdA)
    {
        $this->locationIdA = $locationIdA;

        return $this;
    }

    /**
     * Get locationIdA
     *
     * @return integer 
     */
    public function getLocationIdA()
    {
        return $this->locationIdA;
    }

    /**
     * Set locationIdB
     *
     * @param integer $locationIdB
     * @return OaConnection
     */
    public function setLocationIdB($locationIdB)
    {
        $this->locationIdB = $locationIdB;

        return $this;
    }

    /**
     * Get locationIdB
     *
     * @return integer 
     */
    public function getLocationIdB()
    {
        return $this->locationIdB;
    }

    /**
     * Set systemIdA
     *
     * @param integer $systemIdA
     * @return OaConnection
     */
    public function setSystemIdA($systemIdA)
    {
        $this->systemIdA = $systemIdA;

        return $this;
    }

    /**
     * Get systemIdA
     *
     * @return integer 
     */
    public function getSystemIdA()
    {
        return $this->systemIdA;
    }

    /**
     * Set systemIdB
     *
     * @param integer $systemIdB
     * @return OaConnection
     */
    public function setSystemIdB($systemIdB)
    {
        $this->systemIdB = $systemIdB;

        return $this;
    }

    /**
     * Get systemIdB
     *
     * @return integer 
     */
    public function getSystemIdB()
    {
        return $this->systemIdB;
    }

    /**
     * Set lineNumberA
     *
     * @param string $lineNumberA
     * @return OaConnection
     */
    public function setLineNumberA($lineNumberA)
    {
        $this->lineNumberA = $lineNumberA;

        return $this;
    }

    /**
     * Get lineNumberA
     *
     * @return string 
     */
    public function getLineNumberA()
    {
        return $this->lineNumberA;
    }

    /**
     * Set lineNumberB
     *
     * @param string $lineNumberB
     * @return OaConnection
     */
    public function setLineNumberB($lineNumberB)
    {
        $this->lineNumberB = $lineNumberB;

        return $this;
    }

    /**
     * Get lineNumberB
     *
     * @return string 
     */
    public function getLineNumberB()
    {
        return $this->lineNumberB;
    }

    /**
     * Set ipAddressExternalA
     *
     * @param string $ipAddressExternalA
     * @return OaConnection
     */
    public function setIpAddressExternalA($ipAddressExternalA)
    {
        $this->ipAddressExternalA = $ipAddressExternalA;

        return $this;
    }

    /**
     * Get ipAddressExternalA
     *
     * @return string 
     */
    public function getIpAddressExternalA()
    {
        return $this->ipAddressExternalA;
    }

    /**
     * Set ipAddressExternalB
     *
     * @param string $ipAddressExternalB
     * @return OaConnection
     */
    public function setIpAddressExternalB($ipAddressExternalB)
    {
        $this->ipAddressExternalB = $ipAddressExternalB;

        return $this;
    }

    /**
     * Get ipAddressExternalB
     *
     * @return string 
     */
    public function getIpAddressExternalB()
    {
        return $this->ipAddressExternalB;
    }

    /**
     * Set ipAddressInternalA
     *
     * @param string $ipAddressInternalA
     * @return OaConnection
     */
    public function setIpAddressInternalA($ipAddressInternalA)
    {
        $this->ipAddressInternalA = $ipAddressInternalA;

        return $this;
    }

    /**
     * Get ipAddressInternalA
     *
     * @return string 
     */
    public function getIpAddressInternalA()
    {
        return $this->ipAddressInternalA;
    }

    /**
     * Set ipAddressInternalB
     *
     * @param string $ipAddressInternalB
     * @return OaConnection
     */
    public function setIpAddressInternalB($ipAddressInternalB)
    {
        $this->ipAddressInternalB = $ipAddressInternalB;

        return $this;
    }

    /**
     * Get ipAddressInternalB
     *
     * @return string 
     */
    public function getIpAddressInternalB()
    {
        return $this->ipAddressInternalB;
    }
}

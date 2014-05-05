<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Type;

/**
 * System
 *
 * @ORM\Table(name="system")
 * @ORM\Entity
 */
class System extends SystemComponent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="system_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="uuid", type="string", length=100, nullable=false)
     */
    private $uuid;

    /**
     * @var string
     *
     * @ORM\Column(name="hostname", type="string", length=100, nullable=true)
     */
    private $hostname;

    /**
     * @var string
     *
     * @ORM\Column(name="domain", type="string", length=100, nullable=true)
     */
    private $domain;

    /**
     * @var string
     *
     * @ORM\Column(name="fqdn", type="text", nullable=true)
     */
    private $fqdn;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=250, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=50, nullable=true)
     */
    private $icon;

    /**
     * @var string
     *
     * @ORM\Column(name="os_group", type="string", length=50, nullable=true)
     */
    private $osGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="os_family", type="string", length=50, nullable=true)
     */
    private $osFamily;

    /**
     * @var string
     *
     * @ORM\Column(name="os_name", type="string", length=100, nullable=true)
     */
    private $osName;

    /**
     * @var string
     *
     * @ORM\Column(name="os_version", type="string", length=50, nullable=true)
     */
    private $osVersion;

    /**
     * @var integer
     *
     * @ORM\Column(name="linked_sys", type="integer", nullable=true)
     */
    private $linkedSys;

    /**
     * @var string
     *
     * @ORM\Column(name="serial", type="string", length=200, nullable=true)
     */
    private $serial;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=200, nullable=true)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="manufacturer", type="string", length=50, nullable=true)
     */
    private $manufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="uptime", type="string", length=50, nullable=true)
     */
    private $uptime;

    /**
     * @var string
     *
     * @ORM\Column(name="form_factor", type="string", length=50, nullable=true)
     */
    private $formFactor;

    /**
     * @var string
     *
     * @ORM\Column(name="pc_os_bit", type="string", length=3, nullable=true)
     */
    private $pcOsBit;

    /**
     * @var integer
     *
     * @ORM\Column(name="pc_memory", type="integer", nullable=true)
     */
    private $pcMemory;

    /**
     * @var integer
     *
     * @ORM\Column(name="pc_num_processor", type="integer", nullable=true)
     */
    private $pcNumProcessor;

    /**
     * @var \DateTime
     *
     * @Type("DateTime<'Y-m-d'>")
     * @ORM\Column(name="pc_date_os_installation", type="date", nullable=true)
     */
    private $pcDateOsInstallation;

    /**
     * @var string
     *
     * @ORM\Column(name="printer_port_name", type="string", length=50, nullable=true)
     */
    private $printerPortName;

    /**
     * @var string
     *
     * @ORM\Column(name="printer_shared", type="string", length=50, nullable=true)
     */
    private $printerShared;

    /**
     * @var string
     *
     * @ORM\Column(name="printer_shared_name", type="string", length=50, nullable=true)
     */
    private $printerSharedName;

    /**
     * @var string
     *
     * @ORM\Column(name="printer_color", type="string", length=5, nullable=true)
     */
    private $printerColor;

    /**
     * @var string
     *
     * @ORM\Column(name="printer_duplex", type="string", length=5, nullable=true)
     */
    private $printerDuplex;

    /**
     * @var string
     *
     * @ORM\Column(name="man_os_group", type="string", length=50, nullable=true)
     */
    private $manOsGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="man_os_family", type="string", length=50, nullable=true)
     */
    private $manOsFamily;

    /**
     * @var string
     *
     * @ORM\Column(name="man_os_name", type="string", length=100, nullable=true)
     */
    private $manOsName;

    /**
     * @var string
     *
     * @ORM\Column(name="man_domain", type="string", length=100, nullable=true)
     */
    private $manDomain;

    /**
     * @var string
     *
     * @ORM\Column(name="man_status", type="string", nullable=true)
     */
    private $manStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="man_environment", type="string", nullable=true)
     */
    private $manEnvironment;

    /**
     * @var string
     *
     * @ORM\Column(name="man_criticality", type="string", nullable=true)
     */
    private $manCriticality;

    /**
     * @var string
     *
     * @ORM\Column(name="man_class", type="string", nullable=true)
     */
    private $manClass;

    /**
     * @var string
     *
     * @ORM\Column(name="man_description", type="string", length=250, nullable=true)
     */
    private $manDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="man_function", type="string", length=100, nullable=true)
     */
    private $manFunction;

    /**
     * @var string
     *
     * @ORM\Column(name="man_type", type="string", length=100, nullable=true)
     */
    private $manType;

    /**
     * @var string
     *
     * @ORM\Column(name="man_ip_address", type="string", length=30, nullable=true)
     */
    private $manIpAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="man_owner", type="string", length=100, nullable=true)
     */
    private $manOwner;

    /**
     * @var integer
     *
     * @ORM\Column(name="man_org_id", type="integer", nullable=true)
     */
    private $manOrgId;

    /**
     * @var integer
     *
     * @ORM\Column(name="man_location_id", type="integer", nullable=true)
     */
    private $manLocationId;

    /**
     * @var string
     *
     * @ORM\Column(name="man_location_level", type="string", length=100, nullable=true)
     */
    private $manLocationLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="man_location_suite", type="string", length=100, nullable=true)
     */
    private $manLocationSuite;

    /**
     * @var string
     *
     * @ORM\Column(name="man_location_room", type="string", length=100, nullable=true)
     */
    private $manLocationRoom;

    /**
     * @var string
     *
     * @ORM\Column(name="man_location_rack", type="string", length=100, nullable=true)
     */
    private $manLocationRack;

    /**
     * @var string
     *
     * @ORM\Column(name="man_location_rack_position", type="string", length=100, nullable=true)
     */
    private $manLocationRackPosition;

    /**
     * @var integer
     *
     * @ORM\Column(name="man_location_rack_size", type="integer", nullable=true)
     */
    private $manLocationRackSize;

    /**
     * @var string
     *
     * @ORM\Column(name="man_serial", type="string", length=200, nullable=true)
     */
    private $manSerial;

    /**
     * @var string
     *
     * @ORM\Column(name="man_asset_number", type="string", length=50, nullable=true)
     */
    private $manAssetNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="man_model", type="string", length=50, nullable=true)
     */
    private $manModel;

    /**
     * @var string
     *
     * @ORM\Column(name="man_manufacturer", type="string", length=50, nullable=true)
     */
    private $manManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="man_form_factor", type="string", length=50, nullable=true)
     */
    private $manFormFactor;

    /**
     * @var string
     *
     * @ORM\Column(name="man_icon", type="string", length=50, nullable=true)
     */
    private $manIcon;

    /**
     * @var string
     *
     * @ORM\Column(name="man_vm_server_name", type="string", length=150, nullable=true)
     */
    private $manVmServerName;

    /**
     * @var string
     *
     * @ORM\Column(name="man_vm_system_id", type="string", length=150, nullable=true)
     */
    private $manVmSystemId;

    /**
     * @var string
     *
     * @ORM\Column(name="man_vm_group", type="string", length=150, nullable=true)
     */
    private $manVmGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="man_cluster_name", type="string", length=150, nullable=true)
     */
    private $manClusterName;

    /**
     * @var integer
     *
     * @ORM\Column(name="invoice_id", type="integer", nullable=true)
     */
    private $invoiceId;

    /**
     * @var string
     *
     * @ORM\Column(name="man_purchase_invoice", type="string", length=50, nullable=true)
     */
    private $manPurchaseInvoice;

    /**
     * @var string
     *
     * @ORM\Column(name="man_purchase_order_number", type="string", length=50, nullable=true)
     */
    private $manPurchaseOrderNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="man_purchase_cost_center", type="string", length=50, nullable=true)
     */
    private $manPurchaseCostCenter;

    /**
     * @var string
     *
     * @ORM\Column(name="man_purchase_vendor", type="string", length=100, nullable=true)
     */
    private $manPurchaseVendor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="man_purchase_date", type="date", nullable=true)
     */
    private $manPurchaseDate;

    /**
     * @var string
     *
     * @ORM\Column(name="man_purchase_amount", type="string", length=50, nullable=true)
     */
    private $manPurchaseAmount;

    /**
     * @var integer
     *
     * @ORM\Column(name="man_warranty_duration", type="integer", nullable=true)
     */
    private $manWarrantyDuration;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="man_warranty_expires", type="date", nullable=true)
     */
    private $manWarrantyExpires;

    /**
     * @var string
     *
     * @ORM\Column(name="man_warranty_type", type="string", nullable=true)
     */
    private $manWarrantyType;

    /**
     * @var integer
     *
     * @ORM\Column(name="man_terminal_number", type="integer", nullable=true)
     */
    private $manTerminalNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="man_switch_id", type="string", length=100, nullable=true)
     */
    private $manSwitchId;

    /**
     * @var string
     *
     * @ORM\Column(name="man_switch_port", type="string", length=100, nullable=true)
     */
    private $manSwitchPort;

    /**
     * @var string
     *
     * @ORM\Column(name="man_patch_panel", type="string", length=45, nullable=true)
     */
    private $manPatchPanel;

    /**
     * @var string
     *
     * @ORM\Column(name="man_patch_panel_port", type="string", length=45, nullable=true)
     */
    private $manPatchPanelPort;

    /**
     * @var string
     *
     * @ORM\Column(name="man_wall_port", type="string", length=100, nullable=true)
     */
    private $manWallPort;

    /**
     * @var string
     *
     * @ORM\Column(name="man_picture", type="string", length=100, nullable=true)
     */
    private $manPicture;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_name", type="string", length=50, nullable=true)
     */
    private $contactName;

    /**
     * @var integer
     *
     * @ORM\Column(name="contact_id", type="integer", nullable=true)
     */
    private $contactId;

    /**
     * @var string
     *
     * @ORM\Column(name="man_service_number", type="string", length=100, nullable=true)
     */
    private $manServiceNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="man_service_provider", type="string", length=100, nullable=true)
     */
    private $manServiceProvider;

    /**
     * @var string
     *
     * @ORM\Column(name="man_service_type", type="string", length=100, nullable=true)
     */
    private $manServiceType;

    /**
     * @var string
     *
     * @ORM\Column(name="man_service_plan", type="string", length=100, nullable=true)
     */
    private $manServicePlan;

    /**
     * @var string
     *
     * @ORM\Column(name="man_service_network", type="string", length=100, nullable=true)
     */
    private $manServiceNetwork;

    /**
     * @var string
     *
     * @ORM\Column(name="man_unlock_pin", type="string", length=100, nullable=true)
     */
    private $manUnlockPin;

    /**
     * @var string
     *
     * @ORM\Column(name="man_serial_imei", type="string", length=100, nullable=true)
     */
    private $manSerialImei;

    /**
     * @var string
     *
     * @ORM\Column(name="man_serial_sim", type="string", length=100, nullable=true)
     */
    private $manSerialSim;

    /**
     * @var string
     *
     * @ORM\Column(name="nmap_type", type="string", length=50, nullable=true)
     */
    private $nmapType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_seen", type="datetime", nullable=false)
     */
    private $lastSeen;

    /**
     * @var string
     *
     * @ORM\Column(name="last_seen_by", type="string", length=150, nullable=false)
     */
    private $lastSeenBy;

    /**
     * @var string
     *
     * @ORM\Column(name="last_user", type="string", length=150, nullable=true)
     */
    private $lastUser;

    /**
     * @var string
     *
     * @ORM\Column(name="access_details", type="text", nullable=true)
     */
    private $accessDetails;

    /**
     * @var string
     *
     * @ORM\Column(name="snmp_oid", type="text", nullable=true)
     */
    private $snmpOid;

    /**
     * @var string
     *
     * @ORM\Column(name="nmis_group", type="string", length=50, nullable=true)
     */
    private $nmisGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="nmis_name", type="string", length=50, nullable=true)
     */
    private $nmisName;

    /**
     * @var string
     *
     * @ORM\Column(name="nmis_role", type="string", length=50, nullable=true)
     */
    private $nmisRole;

    /**
     * Get systemId
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $systemId
     *
     * @return $this
     */
    public function setId($systemId)
    {
        $this->id = $systemId;

        return $this;
    }

    /**
     * Set uuid
     *
     * @param string $uuid
     * @return System
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;

        return $this;
    }

    /**
     * Get uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Set hostname
     *
     * @param string $hostname
     * @return System
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;

        return $this;
    }

    /**
     * Get hostname
     *
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Set domain
     *
     * @param string $domain
     * @return System
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Get domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set fqdn
     *
     * @param string $fqdn
     * @return System
     */
    public function setFqdn($fqdn)
    {
        $this->fqdn = $fqdn;

        return $this;
    }

    /**
     * Get fqdn
     *
     * @return string
     */
    public function getFqdn()
    {
        return $this->fqdn;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return System
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return System
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set icon
     *
     * @param string $icon
     * @return System
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set osGroup
     *
     * @param string $osGroup
     * @return System
     */
    public function setOsGroup($osGroup)
    {
        $this->osGroup = $osGroup;

        return $this;
    }

    /**
     * Get osGroup
     *
     * @return string
     */
    public function getOsGroup()
    {
        return $this->osGroup;
    }

    /**
     * Set osFamily
     *
     * @param string $osFamily
     * @return System
     */
    public function setOsFamily($osFamily)
    {
        $this->osFamily = $osFamily;

        return $this;
    }

    /**
     * Get osFamily
     *
     * @return string
     */
    public function getOsFamily()
    {
        return $this->osFamily;
    }

    /**
     * Set osName
     *
     * @param string $osName
     * @return System
     */
    public function setOsName($osName)
    {
        $this->osName = $osName;

        return $this;
    }

    /**
     * Get osName
     *
     * @return string
     */
    public function getOsName()
    {
        return $this->osName;
    }

    /**
     * Set osVersion
     *
     * @param string $osVersion
     * @return System
     */
    public function setOsVersion($osVersion)
    {
        $this->osVersion = $osVersion;

        return $this;
    }

    /**
     * Get osVersion
     *
     * @return string
     */
    public function getOsVersion()
    {
        return $this->osVersion;
    }

    /**
     * Set linkedSys
     *
     * @param integer $linkedSys
     * @return System
     */
    public function setLinkedSys($linkedSys)
    {
        $this->linkedSys = $linkedSys;

        return $this;
    }

    /**
     * Get linkedSys
     *
     * @return integer
     */
    public function getLinkedSys()
    {
        return $this->linkedSys;
    }

    /**
     * Set serial
     *
     * @param string $serial
     * @return System
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;

        return $this;
    }

    /**
     * Get serial
     *
     * @return string
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * Set model
     *
     * @param string $model
     * @return System
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set manufacturer
     *
     * @param string $manufacturer
     * @return System
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * Get manufacturer
     *
     * @return string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set uptime
     *
     * @param string $uptime
     * @return System
     */
    public function setUptime($uptime)
    {
        $this->uptime = $uptime;

        return $this;
    }

    /**
     * Get uptime
     *
     * @return string
     */
    public function getUptime()
    {
        return $this->uptime;
    }

    /**
     * Set formFactor
     *
     * @param string $formFactor
     * @return System
     */
    public function setFormFactor($formFactor)
    {
        $this->formFactor = $formFactor;

        return $this;
    }

    /**
     * Get formFactor
     *
     * @return string
     */
    public function getFormFactor()
    {
        return $this->formFactor;
    }

    /**
     * Set pcOsBit
     *
     * @param string $pcOsBit
     * @return System
     */
    public function setPcOsBit($pcOsBit)
    {
        $this->pcOsBit = $pcOsBit;

        return $this;
    }

    /**
     * Get pcOsBit
     *
     * @return string
     */
    public function getPcOsBit()
    {
        return $this->pcOsBit;
    }

    /**
     * Set pcMemory
     *
     * @param integer $pcMemory
     * @return System
     */
    public function setPcMemory($pcMemory)
    {
        $this->pcMemory = $pcMemory;

        return $this;
    }

    /**
     * Get pcMemory
     *
     * @return integer
     */
    public function getPcMemory()
    {
        return $this->pcMemory;
    }

    /**
     * Set pcNumProcessor
     *
     * @param integer $pcNumProcessor
     * @return System
     */
    public function setPcNumProcessor($pcNumProcessor)
    {
        $this->pcNumProcessor = $pcNumProcessor;

        return $this;
    }

    /**
     * Get pcNumProcessor
     *
     * @return integer
     */
    public function getPcNumProcessor()
    {
        return $this->pcNumProcessor;
    }

    /**
     * Set pcDateOsInstallation
     *
     * @param \DateTime $pcDateOsInstallation
     * @return System
     */
    public function setPcDateOsInstallation($pcDateOsInstallation)
    {
        $this->pcDateOsInstallation = $pcDateOsInstallation;

        return $this;
    }

    /**
     * Get pcDateOsInstallation
     *
     * @return \DateTime
     */
    public function getPcDateOsInstallation()
    {
        return $this->pcDateOsInstallation;
    }

    /**
     * Set printerPortName
     *
     * @param string $printerPortName
     * @return System
     */
    public function setPrinterPortName($printerPortName)
    {
        $this->printerPortName = $printerPortName;

        return $this;
    }

    /**
     * Get printerPortName
     *
     * @return string
     */
    public function getPrinterPortName()
    {
        return $this->printerPortName;
    }

    /**
     * Set printerShared
     *
     * @param string $printerShared
     * @return System
     */
    public function setPrinterShared($printerShared)
    {
        $this->printerShared = $printerShared;

        return $this;
    }

    /**
     * Get printerShared
     *
     * @return string
     */
    public function getPrinterShared()
    {
        return $this->printerShared;
    }

    /**
     * Set printerSharedName
     *
     * @param string $printerSharedName
     * @return System
     */
    public function setPrinterSharedName($printerSharedName)
    {
        $this->printerSharedName = $printerSharedName;

        return $this;
    }

    /**
     * Get printerSharedName
     *
     * @return string
     */
    public function getPrinterSharedName()
    {
        return $this->printerSharedName;
    }

    /**
     * Set printerColor
     *
     * @param string $printerColor
     * @return System
     */
    public function setPrinterColor($printerColor)
    {
        $this->printerColor = $printerColor;

        return $this;
    }

    /**
     * Get printerColor
     *
     * @return string
     */
    public function getPrinterColor()
    {
        return $this->printerColor;
    }

    /**
     * Set printerDuplex
     *
     * @param string $printerDuplex
     * @return System
     */
    public function setPrinterDuplex($printerDuplex)
    {
        $this->printerDuplex = $printerDuplex;

        return $this;
    }

    /**
     * Get printerDuplex
     *
     * @return string
     */
    public function getPrinterDuplex()
    {
        return $this->printerDuplex;
    }

    /**
     * Set manOsGroup
     *
     * @param string $manOsGroup
     * @return System
     */
    public function setManOsGroup($manOsGroup)
    {
        $this->manOsGroup = $manOsGroup;

        return $this;
    }

    /**
     * Get manOsGroup
     *
     * @return string
     */
    public function getManOsGroup()
    {
        return $this->manOsGroup;
    }

    /**
     * Set manOsFamily
     *
     * @param string $manOsFamily
     * @return System
     */
    public function setManOsFamily($manOsFamily)
    {
        $this->manOsFamily = $manOsFamily;

        return $this;
    }

    /**
     * Get manOsFamily
     *
     * @return string
     */
    public function getManOsFamily()
    {
        return $this->manOsFamily;
    }

    /**
     * Set manOsName
     *
     * @param string $manOsName
     * @return System
     */
    public function setManOsName($manOsName)
    {
        $this->manOsName = $manOsName;

        return $this;
    }

    /**
     * Get manOsName
     *
     * @return string
     */
    public function getManOsName()
    {
        return $this->manOsName;
    }

    /**
     * Set manDomain
     *
     * @param string $manDomain
     * @return System
     */
    public function setManDomain($manDomain)
    {
        $this->manDomain = $manDomain;

        return $this;
    }

    /**
     * Get manDomain
     *
     * @return string
     */
    public function getManDomain()
    {
        return $this->manDomain;
    }

    /**
     * Set manStatus
     *
     * @param string $manStatus
     * @return System
     */
    public function setManStatus($manStatus)
    {
        $this->manStatus = $manStatus;

        return $this;
    }

    /**
     * Get manStatus
     *
     * @return string
     */
    public function getManStatus()
    {
        return $this->manStatus;
    }

    /**
     * Set manEnvironment
     *
     * @param string $manEnvironment
     * @return System
     */
    public function setManEnvironment($manEnvironment)
    {
        $this->manEnvironment = $manEnvironment;

        return $this;
    }

    /**
     * Get manEnvironment
     *
     * @return string
     */
    public function getManEnvironment()
    {
        return $this->manEnvironment;
    }

    /**
     * Set manCriticality
     *
     * @param string $manCriticality
     * @return System
     */
    public function setManCriticality($manCriticality)
    {
        $this->manCriticality = $manCriticality;

        return $this;
    }

    /**
     * Get manCriticality
     *
     * @return string
     */
    public function getManCriticality()
    {
        return $this->manCriticality;
    }

    /**
     * Set manClass
     *
     * @param string $manClass
     * @return System
     */
    public function setManClass($manClass)
    {
        $this->manClass = $manClass;

        return $this;
    }

    /**
     * Get manClass
     *
     * @return string
     */
    public function getManClass()
    {
        return $this->manClass;
    }

    /**
     * Set manDescription
     *
     * @param string $manDescription
     * @return System
     */
    public function setManDescription($manDescription)
    {
        $this->manDescription = $manDescription;

        return $this;
    }

    /**
     * Get manDescription
     *
     * @return string
     */
    public function getManDescription()
    {
        return $this->manDescription;
    }

    /**
     * Set manFunction
     *
     * @param string $manFunction
     * @return System
     */
    public function setManFunction($manFunction)
    {
        $this->manFunction = $manFunction;

        return $this;
    }

    /**
     * Get manFunction
     *
     * @return string
     */
    public function getManFunction()
    {
        return $this->manFunction;
    }

    /**
     * Set manType
     *
     * @param string $manType
     * @return System
     */
    public function setManType($manType)
    {
        $this->manType = $manType;

        return $this;
    }

    /**
     * Get manType
     *
     * @return string
     */
    public function getManType()
    {
        return $this->manType;
    }

    /**
     * Set manIpAddress
     *
     * @param string $manIpAddress
     * @return System
     */
    public function setManIpAddress($manIpAddress)
    {
        $this->manIpAddress = $manIpAddress;

        return $this;
    }

    /**
     * Get manIpAddress
     *
     * @return string
     */
    public function getManIpAddress()
    {
        return $this->manIpAddress;
    }

    /**
     * Set manOwner
     *
     * @param string $manOwner
     * @return System
     */
    public function setManOwner($manOwner)
    {
        $this->manOwner = $manOwner;

        return $this;
    }

    /**
     * Get manOwner
     *
     * @return string
     */
    public function getManOwner()
    {
        return $this->manOwner;
    }

    /**
     * Set manOrgId
     *
     * @param integer $manOrgId
     * @return System
     */
    public function setManOrgId($manOrgId)
    {
        $this->manOrgId = $manOrgId;

        return $this;
    }

    /**
     * Get manOrgId
     *
     * @return integer
     */
    public function getManOrgId()
    {
        return $this->manOrgId;
    }

    /**
     * Set manLocationId
     *
     * @param integer $manLocationId
     * @return System
     */
    public function setManLocationId($manLocationId)
    {
        $this->manLocationId = $manLocationId;

        return $this;
    }

    /**
     * Get manLocationId
     *
     * @return integer
     */
    public function getManLocationId()
    {
        return $this->manLocationId;
    }

    /**
     * Set manLocationLevel
     *
     * @param string $manLocationLevel
     * @return System
     */
    public function setManLocationLevel($manLocationLevel)
    {
        $this->manLocationLevel = $manLocationLevel;

        return $this;
    }

    /**
     * Get manLocationLevel
     *
     * @return string
     */
    public function getManLocationLevel()
    {
        return $this->manLocationLevel;
    }

    /**
     * Set manLocationSuite
     *
     * @param string $manLocationSuite
     * @return System
     */
    public function setManLocationSuite($manLocationSuite)
    {
        $this->manLocationSuite = $manLocationSuite;

        return $this;
    }

    /**
     * Get manLocationSuite
     *
     * @return string
     */
    public function getManLocationSuite()
    {
        return $this->manLocationSuite;
    }

    /**
     * Set manLocationRoom
     *
     * @param string $manLocationRoom
     * @return System
     */
    public function setManLocationRoom($manLocationRoom)
    {
        $this->manLocationRoom = $manLocationRoom;

        return $this;
    }

    /**
     * Get manLocationRoom
     *
     * @return string
     */
    public function getManLocationRoom()
    {
        return $this->manLocationRoom;
    }

    /**
     * Set manLocationRack
     *
     * @param string $manLocationRack
     * @return System
     */
    public function setManLocationRack($manLocationRack)
    {
        $this->manLocationRack = $manLocationRack;

        return $this;
    }

    /**
     * Get manLocationRack
     *
     * @return string
     */
    public function getManLocationRack()
    {
        return $this->manLocationRack;
    }

    /**
     * Set manLocationRackPosition
     *
     * @param string $manLocationRackPosition
     * @return System
     */
    public function setManLocationRackPosition($manLocationRackPosition)
    {
        $this->manLocationRackPosition = $manLocationRackPosition;

        return $this;
    }

    /**
     * Get manLocationRackPosition
     *
     * @return string
     */
    public function getManLocationRackPosition()
    {
        return $this->manLocationRackPosition;
    }

    /**
     * Set manLocationRackSize
     *
     * @param integer $manLocationRackSize
     * @return System
     */
    public function setManLocationRackSize($manLocationRackSize)
    {
        $this->manLocationRackSize = $manLocationRackSize;

        return $this;
    }

    /**
     * Get manLocationRackSize
     *
     * @return integer
     */
    public function getManLocationRackSize()
    {
        return $this->manLocationRackSize;
    }

    /**
     * Set manSerial
     *
     * @param string $manSerial
     * @return System
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
     * @return System
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
     * Set manModel
     *
     * @param string $manModel
     * @return System
     */
    public function setManModel($manModel)
    {
        $this->manModel = $manModel;

        return $this;
    }

    /**
     * Get manModel
     *
     * @return string
     */
    public function getManModel()
    {
        return $this->manModel;
    }

    /**
     * Set manManufacturer
     *
     * @param string $manManufacturer
     * @return System
     */
    public function setManManufacturer($manManufacturer)
    {
        $this->manManufacturer = $manManufacturer;

        return $this;
    }

    /**
     * Get manManufacturer
     *
     * @return string
     */
    public function getManManufacturer()
    {
        return $this->manManufacturer;
    }

    /**
     * Set manFormFactor
     *
     * @param string $manFormFactor
     * @return System
     */
    public function setManFormFactor($manFormFactor)
    {
        $this->manFormFactor = $manFormFactor;

        return $this;
    }

    /**
     * Get manFormFactor
     *
     * @return string
     */
    public function getManFormFactor()
    {
        return $this->manFormFactor;
    }

    /**
     * Set manIcon
     *
     * @param string $manIcon
     * @return System
     */
    public function setManIcon($manIcon)
    {
        $this->manIcon = $manIcon;

        return $this;
    }

    /**
     * Get manIcon
     *
     * @return string
     */
    public function getManIcon()
    {
        return $this->manIcon;
    }

    /**
     * Set manVmServerName
     *
     * @param string $manVmServerName
     * @return System
     */
    public function setManVmServerName($manVmServerName)
    {
        $this->manVmServerName = $manVmServerName;

        return $this;
    }

    /**
     * Get manVmServerName
     *
     * @return string
     */
    public function getManVmServerName()
    {
        return $this->manVmServerName;
    }

    /**
     * Set manVmSystemId
     *
     * @param string $manVmSystemId
     * @return System
     */
    public function setManVmSystemId($manVmSystemId)
    {
        $this->manVmSystemId = $manVmSystemId;

        return $this;
    }

    /**
     * Get manVmSystemId
     *
     * @return string
     */
    public function getManVmSystemId()
    {
        return $this->manVmSystemId;
    }

    /**
     * Set manVmGroup
     *
     * @param string $manVmGroup
     * @return System
     */
    public function setManVmGroup($manVmGroup)
    {
        $this->manVmGroup = $manVmGroup;

        return $this;
    }

    /**
     * Get manVmGroup
     *
     * @return string
     */
    public function getManVmGroup()
    {
        return $this->manVmGroup;
    }

    /**
     * Set manClusterName
     *
     * @param string $manClusterName
     * @return System
     */
    public function setManClusterName($manClusterName)
    {
        $this->manClusterName = $manClusterName;

        return $this;
    }

    /**
     * Get manClusterName
     *
     * @return string
     */
    public function getManClusterName()
    {
        return $this->manClusterName;
    }

    /**
     * Set invoiceId
     *
     * @param integer $invoiceId
     * @return System
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
     * Set manPurchaseInvoice
     *
     * @param string $manPurchaseInvoice
     * @return System
     */
    public function setManPurchaseInvoice($manPurchaseInvoice)
    {
        $this->manPurchaseInvoice = $manPurchaseInvoice;

        return $this;
    }

    /**
     * Get manPurchaseInvoice
     *
     * @return string
     */
    public function getManPurchaseInvoice()
    {
        return $this->manPurchaseInvoice;
    }

    /**
     * Set manPurchaseOrderNumber
     *
     * @param string $manPurchaseOrderNumber
     * @return System
     */
    public function setManPurchaseOrderNumber($manPurchaseOrderNumber)
    {
        $this->manPurchaseOrderNumber = $manPurchaseOrderNumber;

        return $this;
    }

    /**
     * Get manPurchaseOrderNumber
     *
     * @return string
     */
    public function getManPurchaseOrderNumber()
    {
        return $this->manPurchaseOrderNumber;
    }

    /**
     * Set manPurchaseCostCenter
     *
     * @param string $manPurchaseCostCenter
     * @return System
     */
    public function setManPurchaseCostCenter($manPurchaseCostCenter)
    {
        $this->manPurchaseCostCenter = $manPurchaseCostCenter;

        return $this;
    }

    /**
     * Get manPurchaseCostCenter
     *
     * @return string
     */
    public function getManPurchaseCostCenter()
    {
        return $this->manPurchaseCostCenter;
    }

    /**
     * Set manPurchaseVendor
     *
     * @param string $manPurchaseVendor
     * @return System
     */
    public function setManPurchaseVendor($manPurchaseVendor)
    {
        $this->manPurchaseVendor = $manPurchaseVendor;

        return $this;
    }

    /**
     * Get manPurchaseVendor
     *
     * @return string
     */
    public function getManPurchaseVendor()
    {
        return $this->manPurchaseVendor;
    }

    /**
     * Set manPurchaseDate
     *
     * @param \DateTime $manPurchaseDate
     * @return System
     */
    public function setManPurchaseDate($manPurchaseDate)
    {
        $this->manPurchaseDate = $manPurchaseDate;

        return $this;
    }

    /**
     * Get manPurchaseDate
     *
     * @return \DateTime
     */
    public function getManPurchaseDate()
    {
        return $this->manPurchaseDate;
    }

    /**
     * Set manPurchaseAmount
     *
     * @param string $manPurchaseAmount
     * @return System
     */
    public function setManPurchaseAmount($manPurchaseAmount)
    {
        $this->manPurchaseAmount = $manPurchaseAmount;

        return $this;
    }

    /**
     * Get manPurchaseAmount
     *
     * @return string
     */
    public function getManPurchaseAmount()
    {
        return $this->manPurchaseAmount;
    }

    /**
     * Set manWarrantyDuration
     *
     * @param integer $manWarrantyDuration
     * @return System
     */
    public function setManWarrantyDuration($manWarrantyDuration)
    {
        $this->manWarrantyDuration = $manWarrantyDuration;

        return $this;
    }

    /**
     * Get manWarrantyDuration
     *
     * @return integer
     */
    public function getManWarrantyDuration()
    {
        return $this->manWarrantyDuration;
    }

    /**
     * Set manWarrantyExpires
     *
     * @param \DateTime $manWarrantyExpires
     * @return System
     */
    public function setManWarrantyExpires($manWarrantyExpires)
    {
        $this->manWarrantyExpires = $manWarrantyExpires;

        return $this;
    }

    /**
     * Get manWarrantyExpires
     *
     * @return \DateTime
     */
    public function getManWarrantyExpires()
    {
        return $this->manWarrantyExpires;
    }

    /**
     * Set manWarrantyType
     *
     * @param string $manWarrantyType
     * @return System
     */
    public function setManWarrantyType($manWarrantyType)
    {
        $this->manWarrantyType = $manWarrantyType;

        return $this;
    }

    /**
     * Get manWarrantyType
     *
     * @return string
     */
    public function getManWarrantyType()
    {
        return $this->manWarrantyType;
    }

    /**
     * Set manTerminalNumber
     *
     * @param integer $manTerminalNumber
     * @return System
     */
    public function setManTerminalNumber($manTerminalNumber)
    {
        $this->manTerminalNumber = $manTerminalNumber;

        return $this;
    }

    /**
     * Get manTerminalNumber
     *
     * @return integer
     */
    public function getManTerminalNumber()
    {
        return $this->manTerminalNumber;
    }

    /**
     * Set manSwitchId
     *
     * @param string $manSwitchId
     * @return System
     */
    public function setManSwitchId($manSwitchId)
    {
        $this->manSwitchId = $manSwitchId;

        return $this;
    }

    /**
     * Get manSwitchId
     *
     * @return string
     */
    public function getManSwitchId()
    {
        return $this->manSwitchId;
    }

    /**
     * Set manSwitchPort
     *
     * @param string $manSwitchPort
     * @return System
     */
    public function setManSwitchPort($manSwitchPort)
    {
        $this->manSwitchPort = $manSwitchPort;

        return $this;
    }

    /**
     * Get manSwitchPort
     *
     * @return string
     */
    public function getManSwitchPort()
    {
        return $this->manSwitchPort;
    }

    /**
     * Set manPatchPanel
     *
     * @param string $manPatchPanel
     * @return System
     */
    public function setManPatchPanel($manPatchPanel)
    {
        $this->manPatchPanel = $manPatchPanel;

        return $this;
    }

    /**
     * Get manPatchPanel
     *
     * @return string
     */
    public function getManPatchPanel()
    {
        return $this->manPatchPanel;
    }

    /**
     * Set manPatchPanelPort
     *
     * @param string $manPatchPanelPort
     * @return System
     */
    public function setManPatchPanelPort($manPatchPanelPort)
    {
        $this->manPatchPanelPort = $manPatchPanelPort;

        return $this;
    }

    /**
     * Get manPatchPanelPort
     *
     * @return string
     */
    public function getManPatchPanelPort()
    {
        return $this->manPatchPanelPort;
    }

    /**
     * Set manWallPort
     *
     * @param string $manWallPort
     * @return System
     */
    public function setManWallPort($manWallPort)
    {
        $this->manWallPort = $manWallPort;

        return $this;
    }

    /**
     * Get manWallPort
     *
     * @return string
     */
    public function getManWallPort()
    {
        return $this->manWallPort;
    }

    /**
     * Set manPicture
     *
     * @param string $manPicture
     * @return System
     */
    public function setManPicture($manPicture)
    {
        $this->manPicture = $manPicture;

        return $this;
    }

    /**
     * Get manPicture
     *
     * @return string
     */
    public function getManPicture()
    {
        return $this->manPicture;
    }

    /**
     * Set contactName
     *
     * @param string $contactName
     * @return System
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Get contactName
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Set contactId
     *
     * @param integer $contactId
     * @return System
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;

        return $this;
    }

    /**
     * Get contactId
     *
     * @return integer
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * Set manServiceNumber
     *
     * @param string $manServiceNumber
     * @return System
     */
    public function setManServiceNumber($manServiceNumber)
    {
        $this->manServiceNumber = $manServiceNumber;

        return $this;
    }

    /**
     * Get manServiceNumber
     *
     * @return string
     */
    public function getManServiceNumber()
    {
        return $this->manServiceNumber;
    }

    /**
     * Set manServiceProvider
     *
     * @param string $manServiceProvider
     * @return System
     */
    public function setManServiceProvider($manServiceProvider)
    {
        $this->manServiceProvider = $manServiceProvider;

        return $this;
    }

    /**
     * Get manServiceProvider
     *
     * @return string
     */
    public function getManServiceProvider()
    {
        return $this->manServiceProvider;
    }

    /**
     * Set manServiceType
     *
     * @param string $manServiceType
     * @return System
     */
    public function setManServiceType($manServiceType)
    {
        $this->manServiceType = $manServiceType;

        return $this;
    }

    /**
     * Get manServiceType
     *
     * @return string
     */
    public function getManServiceType()
    {
        return $this->manServiceType;
    }

    /**
     * Set manServicePlan
     *
     * @param string $manServicePlan
     * @return System
     */
    public function setManServicePlan($manServicePlan)
    {
        $this->manServicePlan = $manServicePlan;

        return $this;
    }

    /**
     * Get manServicePlan
     *
     * @return string
     */
    public function getManServicePlan()
    {
        return $this->manServicePlan;
    }

    /**
     * Set manServiceNetwork
     *
     * @param string $manServiceNetwork
     * @return System
     */
    public function setManServiceNetwork($manServiceNetwork)
    {
        $this->manServiceNetwork = $manServiceNetwork;

        return $this;
    }

    /**
     * Get manServiceNetwork
     *
     * @return string
     */
    public function getManServiceNetwork()
    {
        return $this->manServiceNetwork;
    }

    /**
     * Set manUnlockPin
     *
     * @param string $manUnlockPin
     * @return System
     */
    public function setManUnlockPin($manUnlockPin)
    {
        $this->manUnlockPin = $manUnlockPin;

        return $this;
    }

    /**
     * Get manUnlockPin
     *
     * @return string
     */
    public function getManUnlockPin()
    {
        return $this->manUnlockPin;
    }

    /**
     * Set manSerialImei
     *
     * @param string $manSerialImei
     * @return System
     */
    public function setManSerialImei($manSerialImei)
    {
        $this->manSerialImei = $manSerialImei;

        return $this;
    }

    /**
     * Get manSerialImei
     *
     * @return string
     */
    public function getManSerialImei()
    {
        return $this->manSerialImei;
    }

    /**
     * Set manSerialSim
     *
     * @param string $manSerialSim
     * @return System
     */
    public function setManSerialSim($manSerialSim)
    {
        $this->manSerialSim = $manSerialSim;

        return $this;
    }

    /**
     * Get manSerialSim
     *
     * @return string
     */
    public function getManSerialSim()
    {
        return $this->manSerialSim;
    }

    /**
     * Set nmapType
     *
     * @param string $nmapType
     * @return System
     */
    public function setNmapType($nmapType)
    {
        $this->nmapType = $nmapType;

        return $this;
    }

    /**
     * Get nmapType
     *
     * @return string
     */
    public function getNmapType()
    {
        return $this->nmapType;
    }

    /**
     * Set lastSeen
     *
     * @param \DateTime $lastSeen
     * @return System
     */
    public function setLastSeen($lastSeen)
    {
        $this->lastSeen = $lastSeen;

        return $this;
    }

    /**
     * Get lastSeen
     *
     * @return \DateTime
     */
    public function getLastSeen()
    {
        return $this->lastSeen;
    }

    /**
     * Set lastSeenBy
     *
     * @param string $lastSeenBy
     * @return System
     */
    public function setLastSeenBy($lastSeenBy)
    {
        $this->lastSeenBy = $lastSeenBy;

        return $this;
    }

    /**
     * Get lastSeenBy
     *
     * @return string
     */
    public function getLastSeenBy()
    {
        return $this->lastSeenBy;
    }

    /**
     * Set lastUser
     *
     * @param string $lastUser
     * @return System
     */
    public function setLastUser($lastUser)
    {
        $this->lastUser = $lastUser;

        return $this;
    }

    /**
     * Get lastUser
     *
     * @return string
     */
    public function getLastUser()
    {
        return $this->lastUser;
    }

    /**
     * Set accessDetails
     *
     * @param string $accessDetails
     * @return System
     */
    public function setAccessDetails($accessDetails)
    {
        $this->accessDetails = $accessDetails;

        return $this;
    }

    /**
     * Get accessDetails
     *
     * @return string
     */
    public function getAccessDetails()
    {
        return $this->accessDetails;
    }

    /**
     * Set snmpOid
     *
     * @param string $snmpOid
     * @return System
     */
    public function setSnmpOid($snmpOid)
    {
        $this->snmpOid = $snmpOid;

        return $this;
    }

    /**
     * Get snmpOid
     *
     * @return string
     */
    public function getSnmpOid()
    {
        return $this->snmpOid;
    }

    /**
     * Set nmisGroup
     *
     * @param string $nmisGroup
     * @return System
     */
    public function setNmisGroup($nmisGroup)
    {
        $this->nmisGroup = $nmisGroup;

        return $this;
    }

    /**
     * Get nmisGroup
     *
     * @return string
     */
    public function getNmisGroup()
    {
        return $this->nmisGroup;
    }

    /**
     * Set nmisName
     *
     * @param string $nmisName
     * @return System
     */
    public function setNmisName($nmisName)
    {
        $this->nmisName = $nmisName;

        return $this;
    }

    /**
     * Get nmisName
     *
     * @return string
     */
    public function getNmisName()
    {
        return $this->nmisName;
    }

    /**
     * Set nmisRole
     *
     * @param string $nmisRole
     * @return System
     */
    public function setNmisRole($nmisRole)
    {
        $this->nmisRole = $nmisRole;

        return $this;
    }

    /**
     * Get nmisRole
     *
     * @return string
     */
    public function getNmisRole()
    {
        return $this->nmisRole;
    }
}

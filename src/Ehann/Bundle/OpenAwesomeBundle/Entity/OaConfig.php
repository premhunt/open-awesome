<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OaConfig
 *
 * @ORM\Table(name="oa_config")
 * @ORM\Entity
 */
class OaConfig
{
    /**
     * @var string
     *
     * @ORM\Column(name="config_name", type="string", length=45)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $configName;

    /**
     * @var string
     *
     * @ORM\Column(name="config_value", type="string", length=250, nullable=false)
     */
    private $configValue;

    /**
     * @var string
     *
     * @ORM\Column(name="config_editable", type="string", length=1, nullable=false)
     */
    private $configEditable;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="config_edited_date", type="datetime", nullable=false)
     */
    private $configEditedDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="config_edited_by", type="integer", nullable=false)
     */
    private $configEditedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="config_description", type="string", length=200, nullable=false)
     */
    private $configDescription;



    /**
     * Get configName
     *
     * @return string 
     */
    public function getConfigName()
    {
        return $this->configName;
    }

    /**
     * Set configValue
     *
     * @param string $configValue
     * @return OaConfig
     */
    public function setConfigValue($configValue)
    {
        $this->configValue = $configValue;

        return $this;
    }

    /**
     * Get configValue
     *
     * @return string 
     */
    public function getConfigValue()
    {
        return $this->configValue;
    }

    /**
     * Set configEditable
     *
     * @param string $configEditable
     * @return OaConfig
     */
    public function setConfigEditable($configEditable)
    {
        $this->configEditable = $configEditable;

        return $this;
    }

    /**
     * Get configEditable
     *
     * @return string 
     */
    public function getConfigEditable()
    {
        return $this->configEditable;
    }

    /**
     * Set configEditedDate
     *
     * @param \DateTime $configEditedDate
     * @return OaConfig
     */
    public function setConfigEditedDate($configEditedDate)
    {
        $this->configEditedDate = $configEditedDate;

        return $this;
    }

    /**
     * Get configEditedDate
     *
     * @return \DateTime 
     */
    public function getConfigEditedDate()
    {
        return $this->configEditedDate;
    }

    /**
     * Set configEditedBy
     *
     * @param integer $configEditedBy
     * @return OaConfig
     */
    public function setConfigEditedBy($configEditedBy)
    {
        $this->configEditedBy = $configEditedBy;

        return $this;
    }

    /**
     * Get configEditedBy
     *
     * @return integer 
     */
    public function getConfigEditedBy()
    {
        return $this->configEditedBy;
    }

    /**
     * Set configDescription
     *
     * @param string $configDescription
     * @return OaConfig
     */
    public function setConfigDescription($configDescription)
    {
        $this->configDescription = $configDescription;

        return $this;
    }

    /**
     * Get configDescription
     *
     * @return string 
     */
    public function getConfigDescription()
    {
        return $this->configDescription;
    }
}

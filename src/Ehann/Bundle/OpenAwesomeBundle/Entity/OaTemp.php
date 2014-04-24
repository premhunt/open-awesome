<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OaTemp
 *
 * @ORM\Table(name="oa_temp")
 * @ORM\Entity
 */
class OaTemp
{
    /**
     * @var integer
     *
     * @ORM\Column(name="temp_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tempId;

    /**
     * @var string
     *
     * @ORM\Column(name="temp_name", type="text", nullable=false)
     */
    private $tempName;

    /**
     * @var string
     *
     * @ORM\Column(name="temp_value", type="text", nullable=false)
     */
    private $tempValue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="temp_timestamp", type="datetime", nullable=false)
     */
    private $tempTimestamp;



    /**
     * Get tempId
     *
     * @return integer 
     */
    public function getTempId()
    {
        return $this->tempId;
    }

    /**
     * Set tempName
     *
     * @param string $tempName
     * @return OaTemp
     */
    public function setTempName($tempName)
    {
        $this->tempName = $tempName;

        return $this;
    }

    /**
     * Get tempName
     *
     * @return string 
     */
    public function getTempName()
    {
        return $this->tempName;
    }

    /**
     * Set tempValue
     *
     * @param string $tempValue
     * @return OaTemp
     */
    public function setTempValue($tempValue)
    {
        $this->tempValue = $tempValue;

        return $this;
    }

    /**
     * Get tempValue
     *
     * @return string 
     */
    public function getTempValue()
    {
        return $this->tempValue;
    }

    /**
     * Set tempTimestamp
     *
     * @param \DateTime $tempTimestamp
     * @return OaTemp
     */
    public function setTempTimestamp($tempTimestamp)
    {
        $this->tempTimestamp = $tempTimestamp;

        return $this;
    }

    /**
     * Get tempTimestamp
     *
     * @return \DateTime 
     */
    public function getTempTimestamp()
    {
        return $this->tempTimestamp;
    }
}

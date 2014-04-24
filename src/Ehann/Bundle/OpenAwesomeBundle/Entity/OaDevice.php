<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OaDevice
 *
 * @ORM\Table(name="oa_device")
 * @ORM\Entity
 */
class OaDevice
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dev_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $devId;

    /**
     * @var string
     *
     * @ORM\Column(name="dev_name", type="string", length=100, nullable=false)
     */
    private $devName;

    /**
     * @var integer
     *
     * @ORM\Column(name="dev_group_id", type="integer", nullable=false)
     */
    private $devGroupId;



    /**
     * Get devId
     *
     * @return integer 
     */
    public function getDevId()
    {
        return $this->devId;
    }

    /**
     * Set devName
     *
     * @param string $devName
     * @return OaDevice
     */
    public function setDevName($devName)
    {
        $this->devName = $devName;

        return $this;
    }

    /**
     * Get devName
     *
     * @return string 
     */
    public function getDevName()
    {
        return $this->devName;
    }

    /**
     * Set devGroupId
     *
     * @param integer $devGroupId
     * @return OaDevice
     */
    public function setDevGroupId($devGroupId)
    {
        $this->devGroupId = $devGroupId;

        return $this;
    }

    /**
     * Get devGroupId
     *
     * @return integer 
     */
    public function getDevGroupId()
    {
        return $this->devGroupId;
    }
}

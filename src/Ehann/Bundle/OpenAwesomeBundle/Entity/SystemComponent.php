<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Type;

class SystemComponent
{
    /**
     * @var string
     *
     * @ORM\Column(name="hash", type="string", length=255, nullable=false)
     */
    protected $componentKey;

    /**
     * @var \DateTime
     *
     * @Type("DateTime<'Y-m-d G:i:s'>")
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     */
    protected $timestamp;

    /**
     * @var \DateTime
     *
     * @Type("DateTime<'Y-m-d G:i:s'>")
     * @ORM\Column(name="first_timestamp", type="datetime", nullable=false)
     */
    protected $firstTimestamp;

    /**
     * @param string $componentKey
     */
    public function setComponentKey($componentKey)
    {
        $this->componentKey = md5($componentKey);
    }

    /**
     * @return string
     */
    public function getComponentKey()
    {
        return $this->componentKey;
    }

    /**
     * @param \DateTime $firstTimestamp
     */
    public function setFirstTimestamp($firstTimestamp)
    {
        $this->firstTimestamp = $firstTimestamp;
    }

    /**
     * @return \DateTime
     */
    public function getFirstTimestamp()
    {
        return $this->firstTimestamp;
    }

    /**
     * @param \DateTime $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

} 
<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSwVariable
 *
 * @ORM\Table(name="sys_sw_variable", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysSwVariable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="variable_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $variableId;

    /**
     * @var string
     *
     * @ORM\Column(name="variable_name", type="string", length=100, nullable=false)
     */
    private $variableName;

    /**
     * @var string
     *
     * @ORM\Column(name="variable_value", type="text", nullable=false)
     */
    private $variableValue;

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
     * Get variableId
     *
     * @return integer 
     */
    public function getVariableId()
    {
        return $this->variableId;
    }

    /**
     * Set variableName
     *
     * @param string $variableName
     * @return SysSwVariable
     */
    public function setVariableName($variableName)
    {
        $this->variableName = $variableName;

        return $this;
    }

    /**
     * Get variableName
     *
     * @return string 
     */
    public function getVariableName()
    {
        return $this->variableName;
    }

    /**
     * Set variableValue
     *
     * @param string $variableValue
     * @return SysSwVariable
     */
    public function setVariableValue($variableValue)
    {
        $this->variableValue = $variableValue;

        return $this;
    }

    /**
     * Get variableValue
     *
     * @return string 
     */
    public function getVariableValue()
    {
        return $this->variableValue;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysSwVariable
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
     * @return SysSwVariable
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
     * @return SysSwVariable
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

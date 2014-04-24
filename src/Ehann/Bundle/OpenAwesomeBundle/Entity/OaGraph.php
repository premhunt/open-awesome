<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OaGraph
 *
 * @ORM\Table(name="oa_graph", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class OaGraph
{
    /**
     * @var integer
     *
     * @ORM\Column(name="graph_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $graphId;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="foreign_id", type="integer", nullable=true)
     */
    private $foreignId;

    /**
     * @var string
     *
     * @ORM\Column(name="foreign_description", type="string", length=100, nullable=false)
     */
    private $foreignDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="path_to", type="string", length=200, nullable=false)
     */
    private $pathTo;

    /**
     * @var integer
     *
     * @ORM\Column(name="used", type="integer", nullable=false)
     */
    private $used;

    /**
     * @var integer
     *
     * @ORM\Column(name="free", type="integer", nullable=false)
     */
    private $free;

    /**
     * @var integer
     *
     * @ORM\Column(name="total", type="integer", nullable=false)
     */
    private $total;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     */
    private $timestamp;

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
     * Get graphId
     *
     * @return integer 
     */
    public function getGraphId()
    {
        return $this->graphId;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return OaGraph
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
     * Set foreignId
     *
     * @param integer $foreignId
     * @return OaGraph
     */
    public function setForeignId($foreignId)
    {
        $this->foreignId = $foreignId;

        return $this;
    }

    /**
     * Get foreignId
     *
     * @return integer 
     */
    public function getForeignId()
    {
        return $this->foreignId;
    }

    /**
     * Set foreignDescription
     *
     * @param string $foreignDescription
     * @return OaGraph
     */
    public function setForeignDescription($foreignDescription)
    {
        $this->foreignDescription = $foreignDescription;

        return $this;
    }

    /**
     * Get foreignDescription
     *
     * @return string 
     */
    public function getForeignDescription()
    {
        return $this->foreignDescription;
    }

    /**
     * Set pathTo
     *
     * @param string $pathTo
     * @return OaGraph
     */
    public function setPathTo($pathTo)
    {
        $this->pathTo = $pathTo;

        return $this;
    }

    /**
     * Get pathTo
     *
     * @return string 
     */
    public function getPathTo()
    {
        return $this->pathTo;
    }

    /**
     * Set used
     *
     * @param integer $used
     * @return OaGraph
     */
    public function setUsed($used)
    {
        $this->used = $used;

        return $this;
    }

    /**
     * Get used
     *
     * @return integer 
     */
    public function getUsed()
    {
        return $this->used;
    }

    /**
     * Set free
     *
     * @param integer $free
     * @return OaGraph
     */
    public function setFree($free)
    {
        $this->free = $free;

        return $this;
    }

    /**
     * Get free
     *
     * @return integer 
     */
    public function getFree()
    {
        return $this->free;
    }

    /**
     * Set total
     *
     * @param integer $total
     * @return OaGraph
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return integer 
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return OaGraph
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
     * Set system
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\System $system
     * @return OaGraph
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

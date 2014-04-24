<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysHwGraphsDisk
 *
 * @ORM\Table(name="sys_hw_graphs_disk", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysHwGraphsDisk
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
     * @var integer
     *
     * @ORM\Column(name="disk_id", type="integer", nullable=true)
     */
    private $diskId;

    /**
     * @var integer
     *
     * @ORM\Column(name="partition_id", type="integer", nullable=true)
     */
    private $partitionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="directory_id", type="integer", nullable=true)
     */
    private $directoryId;

    /**
     * @var integer
     *
     * @ORM\Column(name="database_id", type="integer", nullable=true)
     */
    private $databaseId;

    /**
     * @var string
     *
     * @ORM\Column(name="graph_type", type="string", nullable=false)
     */
    private $graphType;

    /**
     * @var string
     *
     * @ORM\Column(name="partition_mount_point", type="string", length=100, nullable=false)
     */
    private $partitionMountPoint;

    /**
     * @var string
     *
     * @ORM\Column(name="dir_description", type="string", length=100, nullable=false)
     */
    private $dirDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="dir_path", type="string", length=100, nullable=false)
     */
    private $dirPath;

    /**
     * @var integer
     *
     * @ORM\Column(name="used_percent", type="integer", nullable=false)
     */
    private $usedPercent;

    /**
     * @var integer
     *
     * @ORM\Column(name="free_percent", type="integer", nullable=false)
     */
    private $freePercent;

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
     * Set diskId
     *
     * @param integer $diskId
     * @return SysHwGraphsDisk
     */
    public function setDiskId($diskId)
    {
        $this->diskId = $diskId;

        return $this;
    }

    /**
     * Get diskId
     *
     * @return integer 
     */
    public function getDiskId()
    {
        return $this->diskId;
    }

    /**
     * Set partitionId
     *
     * @param integer $partitionId
     * @return SysHwGraphsDisk
     */
    public function setPartitionId($partitionId)
    {
        $this->partitionId = $partitionId;

        return $this;
    }

    /**
     * Get partitionId
     *
     * @return integer 
     */
    public function getPartitionId()
    {
        return $this->partitionId;
    }

    /**
     * Set directoryId
     *
     * @param integer $directoryId
     * @return SysHwGraphsDisk
     */
    public function setDirectoryId($directoryId)
    {
        $this->directoryId = $directoryId;

        return $this;
    }

    /**
     * Get directoryId
     *
     * @return integer 
     */
    public function getDirectoryId()
    {
        return $this->directoryId;
    }

    /**
     * Set databaseId
     *
     * @param integer $databaseId
     * @return SysHwGraphsDisk
     */
    public function setDatabaseId($databaseId)
    {
        $this->databaseId = $databaseId;

        return $this;
    }

    /**
     * Get databaseId
     *
     * @return integer 
     */
    public function getDatabaseId()
    {
        return $this->databaseId;
    }

    /**
     * Set graphType
     *
     * @param string $graphType
     * @return SysHwGraphsDisk
     */
    public function setGraphType($graphType)
    {
        $this->graphType = $graphType;

        return $this;
    }

    /**
     * Get graphType
     *
     * @return string 
     */
    public function getGraphType()
    {
        return $this->graphType;
    }

    /**
     * Set partitionMountPoint
     *
     * @param string $partitionMountPoint
     * @return SysHwGraphsDisk
     */
    public function setPartitionMountPoint($partitionMountPoint)
    {
        $this->partitionMountPoint = $partitionMountPoint;

        return $this;
    }

    /**
     * Get partitionMountPoint
     *
     * @return string 
     */
    public function getPartitionMountPoint()
    {
        return $this->partitionMountPoint;
    }

    /**
     * Set dirDescription
     *
     * @param string $dirDescription
     * @return SysHwGraphsDisk
     */
    public function setDirDescription($dirDescription)
    {
        $this->dirDescription = $dirDescription;

        return $this;
    }

    /**
     * Get dirDescription
     *
     * @return string 
     */
    public function getDirDescription()
    {
        return $this->dirDescription;
    }

    /**
     * Set dirPath
     *
     * @param string $dirPath
     * @return SysHwGraphsDisk
     */
    public function setDirPath($dirPath)
    {
        $this->dirPath = $dirPath;

        return $this;
    }

    /**
     * Get dirPath
     *
     * @return string 
     */
    public function getDirPath()
    {
        return $this->dirPath;
    }

    /**
     * Set usedPercent
     *
     * @param integer $usedPercent
     * @return SysHwGraphsDisk
     */
    public function setUsedPercent($usedPercent)
    {
        $this->usedPercent = $usedPercent;

        return $this;
    }

    /**
     * Get usedPercent
     *
     * @return integer 
     */
    public function getUsedPercent()
    {
        return $this->usedPercent;
    }

    /**
     * Set freePercent
     *
     * @param integer $freePercent
     * @return SysHwGraphsDisk
     */
    public function setFreePercent($freePercent)
    {
        $this->freePercent = $freePercent;

        return $this;
    }

    /**
     * Get freePercent
     *
     * @return integer 
     */
    public function getFreePercent()
    {
        return $this->freePercent;
    }

    /**
     * Set used
     *
     * @param integer $used
     * @return SysHwGraphsDisk
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
     * @return SysHwGraphsDisk
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
     * @return SysHwGraphsDisk
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
     * @return SysHwGraphsDisk
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
     * @return SysHwGraphsDisk
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

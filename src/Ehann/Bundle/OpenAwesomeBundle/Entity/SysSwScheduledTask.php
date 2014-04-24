<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSwScheduledTask
 *
 * @ORM\Table(name="sys_sw_scheduled_task", indexes={@ORM\Index(name="system_id", columns={"system_id"})})
 * @ORM\Entity
 */
class SysSwScheduledTask
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sched_task_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $schedTaskId;

    /**
     * @var string
     *
     * @ORM\Column(name="sched_task_name", type="string", length=100, nullable=false)
     */
    private $schedTaskName;

    /**
     * @var string
     *
     * @ORM\Column(name="sched_task_next_run", type="string", length=50, nullable=false)
     */
    private $schedTaskNextRun;

    /**
     * @var string
     *
     * @ORM\Column(name="sched_task_status", type="string", length=50, nullable=false)
     */
    private $schedTaskStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="sched_task_last_run", type="string", length=50, nullable=false)
     */
    private $schedTaskLastRun;

    /**
     * @var string
     *
     * @ORM\Column(name="sched_task_last_result", type="string", length=50, nullable=false)
     */
    private $schedTaskLastResult;

    /**
     * @var string
     *
     * @ORM\Column(name="sched_task_creator", type="string", length=50, nullable=false)
     */
    private $schedTaskCreator;

    /**
     * @var string
     *
     * @ORM\Column(name="sched_task_schedule", type="string", length=100, nullable=false)
     */
    private $schedTaskSchedule;

    /**
     * @var string
     *
     * @ORM\Column(name="sched_task_task", type="string", length=100, nullable=false)
     */
    private $schedTaskTask;

    /**
     * @var string
     *
     * @ORM\Column(name="sched_task_state", type="string", length=10, nullable=false)
     */
    private $schedTaskState;

    /**
     * @var string
     *
     * @ORM\Column(name="sched_task_runas", type="string", length=50, nullable=false)
     */
    private $schedTaskRunas;

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
     * Get schedTaskId
     *
     * @return integer 
     */
    public function getSchedTaskId()
    {
        return $this->schedTaskId;
    }

    /**
     * Set schedTaskName
     *
     * @param string $schedTaskName
     * @return SysSwScheduledTask
     */
    public function setSchedTaskName($schedTaskName)
    {
        $this->schedTaskName = $schedTaskName;

        return $this;
    }

    /**
     * Get schedTaskName
     *
     * @return string 
     */
    public function getSchedTaskName()
    {
        return $this->schedTaskName;
    }

    /**
     * Set schedTaskNextRun
     *
     * @param string $schedTaskNextRun
     * @return SysSwScheduledTask
     */
    public function setSchedTaskNextRun($schedTaskNextRun)
    {
        $this->schedTaskNextRun = $schedTaskNextRun;

        return $this;
    }

    /**
     * Get schedTaskNextRun
     *
     * @return string 
     */
    public function getSchedTaskNextRun()
    {
        return $this->schedTaskNextRun;
    }

    /**
     * Set schedTaskStatus
     *
     * @param string $schedTaskStatus
     * @return SysSwScheduledTask
     */
    public function setSchedTaskStatus($schedTaskStatus)
    {
        $this->schedTaskStatus = $schedTaskStatus;

        return $this;
    }

    /**
     * Get schedTaskStatus
     *
     * @return string 
     */
    public function getSchedTaskStatus()
    {
        return $this->schedTaskStatus;
    }

    /**
     * Set schedTaskLastRun
     *
     * @param string $schedTaskLastRun
     * @return SysSwScheduledTask
     */
    public function setSchedTaskLastRun($schedTaskLastRun)
    {
        $this->schedTaskLastRun = $schedTaskLastRun;

        return $this;
    }

    /**
     * Get schedTaskLastRun
     *
     * @return string 
     */
    public function getSchedTaskLastRun()
    {
        return $this->schedTaskLastRun;
    }

    /**
     * Set schedTaskLastResult
     *
     * @param string $schedTaskLastResult
     * @return SysSwScheduledTask
     */
    public function setSchedTaskLastResult($schedTaskLastResult)
    {
        $this->schedTaskLastResult = $schedTaskLastResult;

        return $this;
    }

    /**
     * Get schedTaskLastResult
     *
     * @return string 
     */
    public function getSchedTaskLastResult()
    {
        return $this->schedTaskLastResult;
    }

    /**
     * Set schedTaskCreator
     *
     * @param string $schedTaskCreator
     * @return SysSwScheduledTask
     */
    public function setSchedTaskCreator($schedTaskCreator)
    {
        $this->schedTaskCreator = $schedTaskCreator;

        return $this;
    }

    /**
     * Get schedTaskCreator
     *
     * @return string 
     */
    public function getSchedTaskCreator()
    {
        return $this->schedTaskCreator;
    }

    /**
     * Set schedTaskSchedule
     *
     * @param string $schedTaskSchedule
     * @return SysSwScheduledTask
     */
    public function setSchedTaskSchedule($schedTaskSchedule)
    {
        $this->schedTaskSchedule = $schedTaskSchedule;

        return $this;
    }

    /**
     * Get schedTaskSchedule
     *
     * @return string 
     */
    public function getSchedTaskSchedule()
    {
        return $this->schedTaskSchedule;
    }

    /**
     * Set schedTaskTask
     *
     * @param string $schedTaskTask
     * @return SysSwScheduledTask
     */
    public function setSchedTaskTask($schedTaskTask)
    {
        $this->schedTaskTask = $schedTaskTask;

        return $this;
    }

    /**
     * Get schedTaskTask
     *
     * @return string 
     */
    public function getSchedTaskTask()
    {
        return $this->schedTaskTask;
    }

    /**
     * Set schedTaskState
     *
     * @param string $schedTaskState
     * @return SysSwScheduledTask
     */
    public function setSchedTaskState($schedTaskState)
    {
        $this->schedTaskState = $schedTaskState;

        return $this;
    }

    /**
     * Get schedTaskState
     *
     * @return string 
     */
    public function getSchedTaskState()
    {
        return $this->schedTaskState;
    }

    /**
     * Set schedTaskRunas
     *
     * @param string $schedTaskRunas
     * @return SysSwScheduledTask
     */
    public function setSchedTaskRunas($schedTaskRunas)
    {
        $this->schedTaskRunas = $schedTaskRunas;

        return $this;
    }

    /**
     * Get schedTaskRunas
     *
     * @return string 
     */
    public function getSchedTaskRunas()
    {
        return $this->schedTaskRunas;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return SysSwScheduledTask
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
     * @return SysSwScheduledTask
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
     * @return SysSwScheduledTask
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

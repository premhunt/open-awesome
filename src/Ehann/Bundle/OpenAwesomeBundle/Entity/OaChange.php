<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OaChange
 *
 * @ORM\Table(name="oa_change", indexes={@ORM\Index(name="oa_change_user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class OaChange
{
    /**
     * @var integer
     *
     * @ORM\Column(name="change_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $changeId;

    /**
     * @var string
     *
     * @ORM\Column(name="change_short_desc", type="string", length=200, nullable=false)
     */
    private $changeShortDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="change_reason", type="text", nullable=false)
     */
    private $changeReason;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="change_planned_date", type="datetime", nullable=false)
     */
    private $changePlannedDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="change_implemented_date", type="datetime", nullable=false)
     */
    private $changeImplementedDate;

    /**
     * @var string
     *
     * @ORM\Column(name="change_external_id", type="string", length=200, nullable=false)
     */
    private $changeExternalId;

    /**
     * @var string
     *
     * @ORM\Column(name="change_external_link", type="string", length=200, nullable=false)
     */
    private $changeExternalLink;

    /**
     * @var string
     *
     * @ORM\Column(name="change_authorising_person", type="string", length=100, nullable=false)
     */
    private $changeAuthorisingPerson;

    /**
     * @var string
     *
     * @ORM\Column(name="change_performing_person", type="string", length=100, nullable=false)
     */
    private $changePerformingPerson;

    /**
     * @var string
     *
     * @ORM\Column(name="change_detailed_desc", type="text", nullable=false)
     */
    private $changeDetailedDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="change_potential_issues", type="text", nullable=false)
     */
    private $changePotentialIssues;

    /**
     * @var string
     *
     * @ORM\Column(name="change_backout_plan", type="text", nullable=false)
     */
    private $changeBackoutPlan;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     */
    private $timestamp;

    /**
     * @var \Ehann\Bundle\OpenAwesomeBundle\Entity\OaUser
     *
     * @ORM\ManyToOne(targetEntity="Ehann\Bundle\OpenAwesomeBundle\Entity\OaUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;



    /**
     * Get changeId
     *
     * @return integer 
     */
    public function getChangeId()
    {
        return $this->changeId;
    }

    /**
     * Set changeShortDesc
     *
     * @param string $changeShortDesc
     * @return OaChange
     */
    public function setChangeShortDesc($changeShortDesc)
    {
        $this->changeShortDesc = $changeShortDesc;

        return $this;
    }

    /**
     * Get changeShortDesc
     *
     * @return string 
     */
    public function getChangeShortDesc()
    {
        return $this->changeShortDesc;
    }

    /**
     * Set changeReason
     *
     * @param string $changeReason
     * @return OaChange
     */
    public function setChangeReason($changeReason)
    {
        $this->changeReason = $changeReason;

        return $this;
    }

    /**
     * Get changeReason
     *
     * @return string 
     */
    public function getChangeReason()
    {
        return $this->changeReason;
    }

    /**
     * Set changePlannedDate
     *
     * @param \DateTime $changePlannedDate
     * @return OaChange
     */
    public function setChangePlannedDate($changePlannedDate)
    {
        $this->changePlannedDate = $changePlannedDate;

        return $this;
    }

    /**
     * Get changePlannedDate
     *
     * @return \DateTime 
     */
    public function getChangePlannedDate()
    {
        return $this->changePlannedDate;
    }

    /**
     * Set changeImplementedDate
     *
     * @param \DateTime $changeImplementedDate
     * @return OaChange
     */
    public function setChangeImplementedDate($changeImplementedDate)
    {
        $this->changeImplementedDate = $changeImplementedDate;

        return $this;
    }

    /**
     * Get changeImplementedDate
     *
     * @return \DateTime 
     */
    public function getChangeImplementedDate()
    {
        return $this->changeImplementedDate;
    }

    /**
     * Set changeExternalId
     *
     * @param string $changeExternalId
     * @return OaChange
     */
    public function setChangeExternalId($changeExternalId)
    {
        $this->changeExternalId = $changeExternalId;

        return $this;
    }

    /**
     * Get changeExternalId
     *
     * @return string 
     */
    public function getChangeExternalId()
    {
        return $this->changeExternalId;
    }

    /**
     * Set changeExternalLink
     *
     * @param string $changeExternalLink
     * @return OaChange
     */
    public function setChangeExternalLink($changeExternalLink)
    {
        $this->changeExternalLink = $changeExternalLink;

        return $this;
    }

    /**
     * Get changeExternalLink
     *
     * @return string 
     */
    public function getChangeExternalLink()
    {
        return $this->changeExternalLink;
    }

    /**
     * Set changeAuthorisingPerson
     *
     * @param string $changeAuthorisingPerson
     * @return OaChange
     */
    public function setChangeAuthorisingPerson($changeAuthorisingPerson)
    {
        $this->changeAuthorisingPerson = $changeAuthorisingPerson;

        return $this;
    }

    /**
     * Get changeAuthorisingPerson
     *
     * @return string 
     */
    public function getChangeAuthorisingPerson()
    {
        return $this->changeAuthorisingPerson;
    }

    /**
     * Set changePerformingPerson
     *
     * @param string $changePerformingPerson
     * @return OaChange
     */
    public function setChangePerformingPerson($changePerformingPerson)
    {
        $this->changePerformingPerson = $changePerformingPerson;

        return $this;
    }

    /**
     * Get changePerformingPerson
     *
     * @return string 
     */
    public function getChangePerformingPerson()
    {
        return $this->changePerformingPerson;
    }

    /**
     * Set changeDetailedDesc
     *
     * @param string $changeDetailedDesc
     * @return OaChange
     */
    public function setChangeDetailedDesc($changeDetailedDesc)
    {
        $this->changeDetailedDesc = $changeDetailedDesc;

        return $this;
    }

    /**
     * Get changeDetailedDesc
     *
     * @return string 
     */
    public function getChangeDetailedDesc()
    {
        return $this->changeDetailedDesc;
    }

    /**
     * Set changePotentialIssues
     *
     * @param string $changePotentialIssues
     * @return OaChange
     */
    public function setChangePotentialIssues($changePotentialIssues)
    {
        $this->changePotentialIssues = $changePotentialIssues;

        return $this;
    }

    /**
     * Get changePotentialIssues
     *
     * @return string 
     */
    public function getChangePotentialIssues()
    {
        return $this->changePotentialIssues;
    }

    /**
     * Set changeBackoutPlan
     *
     * @param string $changeBackoutPlan
     * @return OaChange
     */
    public function setChangeBackoutPlan($changeBackoutPlan)
    {
        $this->changeBackoutPlan = $changeBackoutPlan;

        return $this;
    }

    /**
     * Get changeBackoutPlan
     *
     * @return string 
     */
    public function getChangeBackoutPlan()
    {
        return $this->changeBackoutPlan;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return OaChange
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
     * Set user
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\OaUser $user
     * @return OaChange
     */
    public function setUser(\Ehann\Bundle\OpenAwesomeBundle\Entity\OaUser $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Ehann\Bundle\OpenAwesomeBundle\Entity\OaUser 
     */
    public function getUser()
    {
        return $this->user;
    }
}

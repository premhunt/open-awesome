<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OaLocationOrg
 *
 * @ORM\Table(name="oa_location_org", indexes={@ORM\Index(name="id2", columns={"location_id"}), @ORM\Index(name="id3", columns={"org_id"})})
 * @ORM\Entity
 */
class OaLocationOrg
{
    /**
     * @var integer
     *
     * @ORM\Column(name="loc_org_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $locOrgId;

    /**
     * @var string
     *
     * @ORM\Column(name="location_name", type="string", length=100, nullable=false)
     */
    private $locationName;

    /**
     * @var \Ehann\Bundle\OpenAwesomeBundle\Entity\OaLocation
     *
     * @ORM\ManyToOne(targetEntity="Ehann\Bundle\OpenAwesomeBundle\Entity\OaLocation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location_id", referencedColumnName="location_id")
     * })
     */
    private $location;

    /**
     * @var \Ehann\Bundle\OpenAwesomeBundle\Entity\OaOrg
     *
     * @ORM\ManyToOne(targetEntity="Ehann\Bundle\OpenAwesomeBundle\Entity\OaOrg")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="org_id", referencedColumnName="org_id")
     * })
     */
    private $org;



    /**
     * Get locOrgId
     *
     * @return integer 
     */
    public function getLocOrgId()
    {
        return $this->locOrgId;
    }

    /**
     * Set locationName
     *
     * @param string $locationName
     * @return OaLocationOrg
     */
    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;

        return $this;
    }

    /**
     * Get locationName
     *
     * @return string 
     */
    public function getLocationName()
    {
        return $this->locationName;
    }

    /**
     * Set location
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\OaLocation $location
     * @return OaLocationOrg
     */
    public function setLocation(\Ehann\Bundle\OpenAwesomeBundle\Entity\OaLocation $location = null)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return \Ehann\Bundle\OpenAwesomeBundle\Entity\OaLocation 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set org
     *
     * @param \Ehann\Bundle\OpenAwesomeBundle\Entity\OaOrg $org
     * @return OaLocationOrg
     */
    public function setOrg(\Ehann\Bundle\OpenAwesomeBundle\Entity\OaOrg $org = null)
    {
        $this->org = $org;

        return $this;
    }

    /**
     * Get org
     *
     * @return \Ehann\Bundle\OpenAwesomeBundle\Entity\OaOrg 
     */
    public function getOrg()
    {
        return $this->org;
    }
}

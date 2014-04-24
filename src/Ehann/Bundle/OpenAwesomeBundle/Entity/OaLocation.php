<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OaLocation
 *
 * @ORM\Table(name="oa_location")
 * @ORM\Entity
 */
class OaLocation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="location_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $locationId;

    /**
     * @var string
     *
     * @ORM\Column(name="location_name", type="string", length=100, nullable=false)
     */
    private $locationName;

    /**
     * @var string
     *
     * @ORM\Column(name="location_type", type="string", length=100, nullable=false)
     */
    private $locationType;

    /**
     * @var string
     *
     * @ORM\Column(name="location_room", type="string", length=100, nullable=false)
     */
    private $locationRoom;

    /**
     * @var string
     *
     * @ORM\Column(name="location_suite", type="string", length=100, nullable=false)
     */
    private $locationSuite;

    /**
     * @var string
     *
     * @ORM\Column(name="location_level", type="string", length=100, nullable=false)
     */
    private $locationLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="location_address", type="string", length=100, nullable=false)
     */
    private $locationAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="location_suburb", type="string", length=100, nullable=false)
     */
    private $locationSuburb;

    /**
     * @var string
     *
     * @ORM\Column(name="location_city", type="string", length=100, nullable=false)
     */
    private $locationCity;

    /**
     * @var string
     *
     * @ORM\Column(name="location_district", type="string", length=100, nullable=false)
     */
    private $locationDistrict;

    /**
     * @var string
     *
     * @ORM\Column(name="location_region", type="string", length=100, nullable=false)
     */
    private $locationRegion;

    /**
     * @var string
     *
     * @ORM\Column(name="location_area", type="string", length=100, nullable=false)
     */
    private $locationArea;

    /**
     * @var string
     *
     * @ORM\Column(name="location_state", type="string", length=100, nullable=false)
     */
    private $locationState;

    /**
     * @var string
     *
     * @ORM\Column(name="location_postcode", type="string", length=10, nullable=false)
     */
    private $locationPostcode;

    /**
     * @var string
     *
     * @ORM\Column(name="location_country", type="string", length=100, nullable=false)
     */
    private $locationCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="location_tags", type="string", length=250, nullable=false)
     */
    private $locationTags;

    /**
     * @var string
     *
     * @ORM\Column(name="location_phone", type="string", length=20, nullable=false)
     */
    private $locationPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="location_picture", type="string", length=100, nullable=false)
     */
    private $locationPicture;

    /**
     * @var float
     *
     * @ORM\Column(name="location_latitude", type="float", precision=10, scale=6, nullable=false)
     */
    private $locationLatitude;

    /**
     * @var float
     *
     * @ORM\Column(name="location_longitude", type="float", precision=10, scale=6, nullable=false)
     */
    private $locationLongitude;

    /**
     * @var string
     *
     * @ORM\Column(name="location_geo", type="string", length=200, nullable=false)
     */
    private $locationGeo;

    /**
     * @var string
     *
     * @ORM\Column(name="location_comments", type="string", length=100, nullable=false)
     */
    private $locationComments;

    /**
     * @var string
     *
     * @ORM\Column(name="location_icon", type="string", length=100, nullable=false)
     */
    private $locationIcon;

    /**
     * @var integer
     *
     * @ORM\Column(name="location_group_id", type="integer", nullable=false)
     */
    private $locationGroupId;



    /**
     * Get locationId
     *
     * @return integer 
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * Set locationName
     *
     * @param string $locationName
     * @return OaLocation
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
     * Set locationType
     *
     * @param string $locationType
     * @return OaLocation
     */
    public function setLocationType($locationType)
    {
        $this->locationType = $locationType;

        return $this;
    }

    /**
     * Get locationType
     *
     * @return string 
     */
    public function getLocationType()
    {
        return $this->locationType;
    }

    /**
     * Set locationRoom
     *
     * @param string $locationRoom
     * @return OaLocation
     */
    public function setLocationRoom($locationRoom)
    {
        $this->locationRoom = $locationRoom;

        return $this;
    }

    /**
     * Get locationRoom
     *
     * @return string 
     */
    public function getLocationRoom()
    {
        return $this->locationRoom;
    }

    /**
     * Set locationSuite
     *
     * @param string $locationSuite
     * @return OaLocation
     */
    public function setLocationSuite($locationSuite)
    {
        $this->locationSuite = $locationSuite;

        return $this;
    }

    /**
     * Get locationSuite
     *
     * @return string 
     */
    public function getLocationSuite()
    {
        return $this->locationSuite;
    }

    /**
     * Set locationLevel
     *
     * @param string $locationLevel
     * @return OaLocation
     */
    public function setLocationLevel($locationLevel)
    {
        $this->locationLevel = $locationLevel;

        return $this;
    }

    /**
     * Get locationLevel
     *
     * @return string 
     */
    public function getLocationLevel()
    {
        return $this->locationLevel;
    }

    /**
     * Set locationAddress
     *
     * @param string $locationAddress
     * @return OaLocation
     */
    public function setLocationAddress($locationAddress)
    {
        $this->locationAddress = $locationAddress;

        return $this;
    }

    /**
     * Get locationAddress
     *
     * @return string 
     */
    public function getLocationAddress()
    {
        return $this->locationAddress;
    }

    /**
     * Set locationSuburb
     *
     * @param string $locationSuburb
     * @return OaLocation
     */
    public function setLocationSuburb($locationSuburb)
    {
        $this->locationSuburb = $locationSuburb;

        return $this;
    }

    /**
     * Get locationSuburb
     *
     * @return string 
     */
    public function getLocationSuburb()
    {
        return $this->locationSuburb;
    }

    /**
     * Set locationCity
     *
     * @param string $locationCity
     * @return OaLocation
     */
    public function setLocationCity($locationCity)
    {
        $this->locationCity = $locationCity;

        return $this;
    }

    /**
     * Get locationCity
     *
     * @return string 
     */
    public function getLocationCity()
    {
        return $this->locationCity;
    }

    /**
     * Set locationDistrict
     *
     * @param string $locationDistrict
     * @return OaLocation
     */
    public function setLocationDistrict($locationDistrict)
    {
        $this->locationDistrict = $locationDistrict;

        return $this;
    }

    /**
     * Get locationDistrict
     *
     * @return string 
     */
    public function getLocationDistrict()
    {
        return $this->locationDistrict;
    }

    /**
     * Set locationRegion
     *
     * @param string $locationRegion
     * @return OaLocation
     */
    public function setLocationRegion($locationRegion)
    {
        $this->locationRegion = $locationRegion;

        return $this;
    }

    /**
     * Get locationRegion
     *
     * @return string 
     */
    public function getLocationRegion()
    {
        return $this->locationRegion;
    }

    /**
     * Set locationArea
     *
     * @param string $locationArea
     * @return OaLocation
     */
    public function setLocationArea($locationArea)
    {
        $this->locationArea = $locationArea;

        return $this;
    }

    /**
     * Get locationArea
     *
     * @return string 
     */
    public function getLocationArea()
    {
        return $this->locationArea;
    }

    /**
     * Set locationState
     *
     * @param string $locationState
     * @return OaLocation
     */
    public function setLocationState($locationState)
    {
        $this->locationState = $locationState;

        return $this;
    }

    /**
     * Get locationState
     *
     * @return string 
     */
    public function getLocationState()
    {
        return $this->locationState;
    }

    /**
     * Set locationPostcode
     *
     * @param string $locationPostcode
     * @return OaLocation
     */
    public function setLocationPostcode($locationPostcode)
    {
        $this->locationPostcode = $locationPostcode;

        return $this;
    }

    /**
     * Get locationPostcode
     *
     * @return string 
     */
    public function getLocationPostcode()
    {
        return $this->locationPostcode;
    }

    /**
     * Set locationCountry
     *
     * @param string $locationCountry
     * @return OaLocation
     */
    public function setLocationCountry($locationCountry)
    {
        $this->locationCountry = $locationCountry;

        return $this;
    }

    /**
     * Get locationCountry
     *
     * @return string 
     */
    public function getLocationCountry()
    {
        return $this->locationCountry;
    }

    /**
     * Set locationTags
     *
     * @param string $locationTags
     * @return OaLocation
     */
    public function setLocationTags($locationTags)
    {
        $this->locationTags = $locationTags;

        return $this;
    }

    /**
     * Get locationTags
     *
     * @return string 
     */
    public function getLocationTags()
    {
        return $this->locationTags;
    }

    /**
     * Set locationPhone
     *
     * @param string $locationPhone
     * @return OaLocation
     */
    public function setLocationPhone($locationPhone)
    {
        $this->locationPhone = $locationPhone;

        return $this;
    }

    /**
     * Get locationPhone
     *
     * @return string 
     */
    public function getLocationPhone()
    {
        return $this->locationPhone;
    }

    /**
     * Set locationPicture
     *
     * @param string $locationPicture
     * @return OaLocation
     */
    public function setLocationPicture($locationPicture)
    {
        $this->locationPicture = $locationPicture;

        return $this;
    }

    /**
     * Get locationPicture
     *
     * @return string 
     */
    public function getLocationPicture()
    {
        return $this->locationPicture;
    }

    /**
     * Set locationLatitude
     *
     * @param float $locationLatitude
     * @return OaLocation
     */
    public function setLocationLatitude($locationLatitude)
    {
        $this->locationLatitude = $locationLatitude;

        return $this;
    }

    /**
     * Get locationLatitude
     *
     * @return float 
     */
    public function getLocationLatitude()
    {
        return $this->locationLatitude;
    }

    /**
     * Set locationLongitude
     *
     * @param float $locationLongitude
     * @return OaLocation
     */
    public function setLocationLongitude($locationLongitude)
    {
        $this->locationLongitude = $locationLongitude;

        return $this;
    }

    /**
     * Get locationLongitude
     *
     * @return float 
     */
    public function getLocationLongitude()
    {
        return $this->locationLongitude;
    }

    /**
     * Set locationGeo
     *
     * @param string $locationGeo
     * @return OaLocation
     */
    public function setLocationGeo($locationGeo)
    {
        $this->locationGeo = $locationGeo;

        return $this;
    }

    /**
     * Get locationGeo
     *
     * @return string 
     */
    public function getLocationGeo()
    {
        return $this->locationGeo;
    }

    /**
     * Set locationComments
     *
     * @param string $locationComments
     * @return OaLocation
     */
    public function setLocationComments($locationComments)
    {
        $this->locationComments = $locationComments;

        return $this;
    }

    /**
     * Get locationComments
     *
     * @return string 
     */
    public function getLocationComments()
    {
        return $this->locationComments;
    }

    /**
     * Set locationIcon
     *
     * @param string $locationIcon
     * @return OaLocation
     */
    public function setLocationIcon($locationIcon)
    {
        $this->locationIcon = $locationIcon;

        return $this;
    }

    /**
     * Get locationIcon
     *
     * @return string 
     */
    public function getLocationIcon()
    {
        return $this->locationIcon;
    }

    /**
     * Set locationGroupId
     *
     * @param integer $locationGroupId
     * @return OaLocation
     */
    public function setLocationGroupId($locationGroupId)
    {
        $this->locationGroupId = $locationGroupId;

        return $this;
    }

    /**
     * Get locationGroupId
     *
     * @return integer 
     */
    public function getLocationGroupId()
    {
        return $this->locationGroupId;
    }
}

<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OaOrg
 *
 * @ORM\Table(name="oa_org")
 * @ORM\Entity
 */
class OaOrg
{
    /**
     * @var integer
     *
     * @ORM\Column(name="org_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orgId;

    /**
     * @var string
     *
     * @ORM\Column(name="org_name", type="string", length=100, nullable=false)
     */
    private $orgName;

    /**
     * @var integer
     *
     * @ORM\Column(name="org_parent_id", type="integer", nullable=false)
     */
    private $orgParentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="org_group_id", type="integer", nullable=false)
     */
    private $orgGroupId;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_id", type="string", length=100, nullable=false)
     */
    private $contactId;

    /**
     * @var string
     *
     * @ORM\Column(name="org_picture", type="string", length=100, nullable=false)
     */
    private $orgPicture;

    /**
     * @var string
     *
     * @ORM\Column(name="org_comments", type="string", length=100, nullable=false)
     */
    private $orgComments;



    /**
     * Get orgId
     *
     * @return integer 
     */
    public function getOrgId()
    {
        return $this->orgId;
    }

    /**
     * Set orgName
     *
     * @param string $orgName
     * @return OaOrg
     */
    public function setOrgName($orgName)
    {
        $this->orgName = $orgName;

        return $this;
    }

    /**
     * Get orgName
     *
     * @return string 
     */
    public function getOrgName()
    {
        return $this->orgName;
    }

    /**
     * Set orgParentId
     *
     * @param integer $orgParentId
     * @return OaOrg
     */
    public function setOrgParentId($orgParentId)
    {
        $this->orgParentId = $orgParentId;

        return $this;
    }

    /**
     * Get orgParentId
     *
     * @return integer 
     */
    public function getOrgParentId()
    {
        return $this->orgParentId;
    }

    /**
     * Set orgGroupId
     *
     * @param integer $orgGroupId
     * @return OaOrg
     */
    public function setOrgGroupId($orgGroupId)
    {
        $this->orgGroupId = $orgGroupId;

        return $this;
    }

    /**
     * Get orgGroupId
     *
     * @return integer 
     */
    public function getOrgGroupId()
    {
        return $this->orgGroupId;
    }

    /**
     * Set contactId
     *
     * @param string $contactId
     * @return OaOrg
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;

        return $this;
    }

    /**
     * Get contactId
     *
     * @return string 
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * Set orgPicture
     *
     * @param string $orgPicture
     * @return OaOrg
     */
    public function setOrgPicture($orgPicture)
    {
        $this->orgPicture = $orgPicture;

        return $this;
    }

    /**
     * Get orgPicture
     *
     * @return string 
     */
    public function getOrgPicture()
    {
        return $this->orgPicture;
    }

    /**
     * Set orgComments
     *
     * @param string $orgComments
     * @return OaOrg
     */
    public function setOrgComments($orgComments)
    {
        $this->orgComments = $orgComments;

        return $this;
    }

    /**
     * Get orgComments
     *
     * @return string 
     */
    public function getOrgComments()
    {
        return $this->orgComments;
    }
}

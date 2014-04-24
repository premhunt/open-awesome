<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OaUser
 *
 * @ORM\Table(name="oa_user")
 * @ORM\Entity
 */
class OaUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=100, nullable=false)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password", type="string", length=250, nullable=false)
     */
    private $userPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="user_full_name", type="string", length=100, nullable=false)
     */
    private $userFullName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="string", length=100, nullable=false)
     */
    private $userEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="user_lang", type="string", length=100, nullable=false)
     */
    private $userLang;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_display_number", type="smallint", nullable=false)
     */
    private $userDisplayNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="user_theme", type="string", length=100, nullable=false)
     */
    private $userTheme;

    /**
     * @var string
     *
     * @ORM\Column(name="user_admin", type="string", length=1, nullable=false)
     */
    private $userAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="user_active", type="string", length=1, nullable=false)
     */
    private $userActive;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_change", type="integer", nullable=false)
     */
    private $userChange;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_sam", type="integer", nullable=false)
     */
    private $userSam;



    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userName
     *
     * @param string $userName
     * @return OaUser
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set userPassword
     *
     * @param string $userPassword
     * @return OaUser
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    /**
     * Get userPassword
     *
     * @return string 
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * Set userFullName
     *
     * @param string $userFullName
     * @return OaUser
     */
    public function setUserFullName($userFullName)
    {
        $this->userFullName = $userFullName;

        return $this;
    }

    /**
     * Get userFullName
     *
     * @return string 
     */
    public function getUserFullName()
    {
        return $this->userFullName;
    }

    /**
     * Set userEmail
     *
     * @param string $userEmail
     * @return OaUser
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Get userEmail
     *
     * @return string 
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Set userLang
     *
     * @param string $userLang
     * @return OaUser
     */
    public function setUserLang($userLang)
    {
        $this->userLang = $userLang;

        return $this;
    }

    /**
     * Get userLang
     *
     * @return string 
     */
    public function getUserLang()
    {
        return $this->userLang;
    }

    /**
     * Set userDisplayNumber
     *
     * @param integer $userDisplayNumber
     * @return OaUser
     */
    public function setUserDisplayNumber($userDisplayNumber)
    {
        $this->userDisplayNumber = $userDisplayNumber;

        return $this;
    }

    /**
     * Get userDisplayNumber
     *
     * @return integer 
     */
    public function getUserDisplayNumber()
    {
        return $this->userDisplayNumber;
    }

    /**
     * Set userTheme
     *
     * @param string $userTheme
     * @return OaUser
     */
    public function setUserTheme($userTheme)
    {
        $this->userTheme = $userTheme;

        return $this;
    }

    /**
     * Get userTheme
     *
     * @return string 
     */
    public function getUserTheme()
    {
        return $this->userTheme;
    }

    /**
     * Set userAdmin
     *
     * @param string $userAdmin
     * @return OaUser
     */
    public function setUserAdmin($userAdmin)
    {
        $this->userAdmin = $userAdmin;

        return $this;
    }

    /**
     * Get userAdmin
     *
     * @return string 
     */
    public function getUserAdmin()
    {
        return $this->userAdmin;
    }

    /**
     * Set userActive
     *
     * @param string $userActive
     * @return OaUser
     */
    public function setUserActive($userActive)
    {
        $this->userActive = $userActive;

        return $this;
    }

    /**
     * Get userActive
     *
     * @return string 
     */
    public function getUserActive()
    {
        return $this->userActive;
    }

    /**
     * Set userChange
     *
     * @param integer $userChange
     * @return OaUser
     */
    public function setUserChange($userChange)
    {
        $this->userChange = $userChange;

        return $this;
    }

    /**
     * Get userChange
     *
     * @return integer 
     */
    public function getUserChange()
    {
        return $this->userChange;
    }

    /**
     * Set userSam
     *
     * @param integer $userSam
     * @return OaUser
     */
    public function setUserSam($userSam)
    {
        $this->userSam = $userSam;

        return $this;
    }

    /**
     * Get userSam
     *
     * @return integer 
     */
    public function getUserSam()
    {
        return $this->userSam;
    }
}

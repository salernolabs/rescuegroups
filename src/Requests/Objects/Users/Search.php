<?php
/**
 * Users Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\Users;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $userID = null;

    /**
     * Login
     * @var string
     */
    private $userLogin = null;

    /**
     * Salutation
     * @var string
     */
    private $userSalutation = null;

    /**
     * Name
     * @var string
     */
    private $userName = null;

    /**
     * First name
     * @var string
     */
    private $userFirstname = null;

    /**
     * Last name
     * @var string
     */
    private $userLastname = null;

    /**
     * Street address
     * @var string
     */
    private $userAddress = null;

    /**
     * City
     * @var string
     */
    private $userCity = null;

    /**
     * State/Province
     * @var province
     */
    private $userState = null;

    /**
     * Postal Code
     * @var string
     */
    private $userPostalcode = null;

    /**
     * Zip code plus 4
     * @var string
     */
    private $userPlus4 = null;

    /**
     * Country
     * @var integer
     */
    private $userCountry = null;

    /**
     * Home phone number
     * @var phone
     */
    private $userPhoneHome = null;

    /**
     * Work phone number
     * @var phone
     */
    private $userPhoneWork = null;

    /**
     * Work phone extension
     * @var string
     */
    private $userPhoneWorkExt = null;

    /**
     * Cell phone number
     * @var phone
     */
    private $userPhoneCell = null;

    /**
     * Fax number
     * @var phone
     */
    private $userFax = null;

    /**
     * Email address
     * @var email
     */
    private $userEmail = null;

    /**
     * Alternate email address
     * @var email
     */
    private $userEmailAlt = null;

    /**
     * Pager email address
     * @var email
     */
    private $userEmailPager = null;

    /**
     * User Contact
     * @var integer
     */
    private $userContactID = null;

    /**
     * Registration date
     * @var \DateTime
     */
    private $userRegisteredDate = null;

    /**
     * Last password reset date
     * @var \DateTime
     */
    private $userLastPasswordResetDate = null;

    /**
     * Password reset count
     * @var int
     */
    private $userPasswordResetCount = null;

    /**
     * Status
     * @var string
     */
    private $userStatus = null;


    /**
     * @return bool
     */
    public function loginRequired()
    {
        return false;
    }

    /**
     * Return the object type
     *
     * @return string
     */
    public function getObjectType()
    {
        return 'users';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'search';
    }

    /**
     * Set ID
     *
     * @param integer $userID
     * @return $this
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;

        return $this;
    }

    /**
     * Set Login
     *
     * @param string $userLogin
     * @return $this
     */
    public function setUserLogin($userLogin)
    {
        $this->userLogin = $userLogin;

        return $this;
    }

    /**
     * Set Salutation
     *
     * @param string $userSalutation
     * @return $this
     */
    public function setUserSalutation($userSalutation)
    {
        $this->userSalutation = $userSalutation;

        return $this;
    }

    /**
     * Set Name
     *
     * @param string $userName
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Set First name
     *
     * @param string $userFirstname
     * @return $this
     */
    public function setUserFirstname($userFirstname)
    {
        $this->userFirstname = $userFirstname;

        return $this;
    }

    /**
     * Set Last name
     *
     * @param string $userLastname
     * @return $this
     */
    public function setUserLastname($userLastname)
    {
        $this->userLastname = $userLastname;

        return $this;
    }

    /**
     * Set Street address
     *
     * @param string $userAddress
     * @return $this
     */
    public function setUserAddress($userAddress)
    {
        $this->userAddress = $userAddress;

        return $this;
    }

    /**
     * Set City
     *
     * @param string $userCity
     * @return $this
     */
    public function setUserCity($userCity)
    {
        $this->userCity = $userCity;

        return $this;
    }

    /**
     * Set State/Province
     *
     * @param province $userState
     * @return $this
     */
    public function setUserState($userState)
    {
        $this->userState = $userState;

        return $this;
    }

    /**
     * Set Postal Code
     *
     * @param string $userPostalcode
     * @return $this
     */
    public function setUserPostalcode($userPostalcode)
    {
        $this->userPostalcode = $userPostalcode;

        return $this;
    }

    /**
     * Set Zip code plus 4
     *
     * @param string $userPlus4
     * @return $this
     */
    public function setUserPlus4($userPlus4)
    {
        $this->userPlus4 = $userPlus4;

        return $this;
    }

    /**
     * Set Country
     *
     * @param integer $userCountry
     * @return $this
     */
    public function setUserCountry($userCountry)
    {
        $this->userCountry = $userCountry;

        return $this;
    }

    /**
     * Set Home phone number
     *
     * @param phone $userPhoneHome
     * @return $this
     */
    public function setUserPhoneHome($userPhoneHome)
    {
        $this->userPhoneHome = $userPhoneHome;

        return $this;
    }

    /**
     * Set Work phone number
     *
     * @param phone $userPhoneWork
     * @return $this
     */
    public function setUserPhoneWork($userPhoneWork)
    {
        $this->userPhoneWork = $userPhoneWork;

        return $this;
    }

    /**
     * Set Work phone extension
     *
     * @param string $userPhoneWorkExt
     * @return $this
     */
    public function setUserPhoneWorkExt($userPhoneWorkExt)
    {
        $this->userPhoneWorkExt = $userPhoneWorkExt;

        return $this;
    }

    /**
     * Set Cell phone number
     *
     * @param phone $userPhoneCell
     * @return $this
     */
    public function setUserPhoneCell($userPhoneCell)
    {
        $this->userPhoneCell = $userPhoneCell;

        return $this;
    }

    /**
     * Set Fax number
     *
     * @param phone $userFax
     * @return $this
     */
    public function setUserFax($userFax)
    {
        $this->userFax = $userFax;

        return $this;
    }

    /**
     * Set Email address
     *
     * @param email $userEmail
     * @return $this
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Set Alternate email address
     *
     * @param email $userEmailAlt
     * @return $this
     */
    public function setUserEmailAlt($userEmailAlt)
    {
        $this->userEmailAlt = $userEmailAlt;

        return $this;
    }

    /**
     * Set Pager email address
     *
     * @param email $userEmailPager
     * @return $this
     */
    public function setUserEmailPager($userEmailPager)
    {
        $this->userEmailPager = $userEmailPager;

        return $this;
    }

    /**
     * Set User Contact
     *
     * @param integer $userContactID
     * @return $this
     */
    public function setUserContactID($userContactID)
    {
        $this->userContactID = $userContactID;

        return $this;
    }

    /**
     * Set Registration date
     *
     * @param \DateTime $userRegisteredDate
     * @return $this
     */
    public function setUserRegisteredDate($userRegisteredDate)
    {
        $this->userRegisteredDate = $userRegisteredDate;

        return $this;
    }

    /**
     * Set Last password reset date
     *
     * @param \DateTime $userLastPasswordResetDate
     * @return $this
     */
    public function setUserLastPasswordResetDate($userLastPasswordResetDate)
    {
        $this->userLastPasswordResetDate = $userLastPasswordResetDate;

        return $this;
    }

    /**
     * Set Password reset count
     *
     * @param int $userPasswordResetCount
     * @return $this
     */
    public function setUserPasswordResetCount($userPasswordResetCount)
    {
        $this->userPasswordResetCount = $userPasswordResetCount;

        return $this;
    }

    /**
     * Set Status
     *
     * @param string $userStatus
     * @return $this
     */
    public function setUserStatus($userStatus)
    {
        $this->userStatus = $userStatus;

        return $this;
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->userID !== null) $parameterArray['userID'] = $this->userID;
        if ($this->userLogin !== null) $parameterArray['userLogin'] = $this->userLogin;
        if ($this->userSalutation !== null) $parameterArray['userSalutation'] = $this->userSalutation;
        if ($this->userName !== null) $parameterArray['userName'] = $this->userName;
        if ($this->userFirstname !== null) $parameterArray['userFirstname'] = $this->userFirstname;
        if ($this->userLastname !== null) $parameterArray['userLastname'] = $this->userLastname;
        if ($this->userAddress !== null) $parameterArray['userAddress'] = $this->userAddress;
        if ($this->userCity !== null) $parameterArray['userCity'] = $this->userCity;
        if ($this->userState !== null) $parameterArray['userState'] = $this->userState;
        if ($this->userPostalcode !== null) $parameterArray['userPostalcode'] = $this->userPostalcode;
        if ($this->userPlus4 !== null) $parameterArray['userPlus4'] = $this->userPlus4;
        if ($this->userCountry !== null) $parameterArray['userCountry'] = $this->userCountry;
        if ($this->userPhoneHome !== null) $parameterArray['userPhoneHome'] = $this->userPhoneHome;
        if ($this->userPhoneWork !== null) $parameterArray['userPhoneWork'] = $this->userPhoneWork;
        if ($this->userPhoneWorkExt !== null) $parameterArray['userPhoneWorkExt'] = $this->userPhoneWorkExt;
        if ($this->userPhoneCell !== null) $parameterArray['userPhoneCell'] = $this->userPhoneCell;
        if ($this->userFax !== null) $parameterArray['userFax'] = $this->userFax;
        if ($this->userEmail !== null) $parameterArray['userEmail'] = $this->userEmail;
        if ($this->userEmailAlt !== null) $parameterArray['userEmailAlt'] = $this->userEmailAlt;
        if ($this->userEmailPager !== null) $parameterArray['userEmailPager'] = $this->userEmailPager;
        if ($this->userContactID !== null) $parameterArray['userContactID'] = $this->userContactID;
        if ($this->userRegisteredDate !== null) $parameterArray['userRegisteredDate'] = $this->userRegisteredDate;
        if ($this->userLastPasswordResetDate !== null) $parameterArray['userLastPasswordResetDate'] = $this->userLastPasswordResetDate;
        if ($this->userPasswordResetCount !== null) $parameterArray['userPasswordResetCount'] = $this->userPasswordResetCount;
        if ($this->userStatus !== null) $parameterArray['userStatus'] = $this->userStatus;

        $this->addSearchParameters($parameterArray);

    }
}
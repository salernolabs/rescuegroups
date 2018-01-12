<?php
/**
 * User Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class User
{
    /**
     * ID
     * @var integer
     */
    public $userID;

    /**
     * Login
     * @var string
     */
    public $userLogin;

    /**
     * Password
     * @var string
     */
    public $userPassword;

    /**
     * Salutation
     * @var string
     */
    public $userSalutation;

    /**
     * First name
     * @var string
     */
    public $userFirstname;

    /**
     * Last name
     * @var string
     */
    public $userLastname;

    /**
     * Street address
     * @var string
     */
    public $userAddress;

    /**
     * City
     * @var string
     */
    public $userCity;

    /**
     * State/Province
     * @var string
     */
    public $userState;

    /**
     * Postal Code
     * @var string
     */
    public $userPostalcode;

    /**
     * Zip code plus 4
     * @var string
     */
    public $userPlus4;

    /**
     * Country
     * @var integer
     */
    public $userCountry;

    /**
     * Home phone number
     * @var string
     */
    public $userPhoneHome;

    /**
     * Work phone number
     * @var string
     */
    public $userPhoneWork;

    /**
     * Work phone extension
     * @var string
     */
    public $userPhoneWorkExt;

    /**
     * Cell phone number
     * @var string
     */
    public $userPhoneCell;

    /**
     * Fax number
     * @var string
     */
    public $userFax;

    /**
     * Email address
     * @var string
     */
    public $userEmail;

    /**
     * Alternate email address
     * @var string
     */
    public $userEmailAlt;

    /**
     * Pager email address
     * @var string
     */
    public $userEmailPager;

    /**
     * User Contact
     * @var integer
     */
    public $userContactID;

    /**
     * Status
     * @var string
     */
    public $userStatus;



    /**
     * Users Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->userID)) $this->userID = $inputData->userID;
        if (!empty($inputData->userLogin)) $this->userLogin = $inputData->userLogin;
        if (!empty($inputData->userPassword)) $this->userPassword = $inputData->userPassword;
        if (!empty($inputData->userSalutation)) $this->userSalutation = $inputData->userSalutation;
        if (!empty($inputData->userFirstname)) $this->userFirstname = $inputData->userFirstname;
        if (!empty($inputData->userLastname)) $this->userLastname = $inputData->userLastname;
        if (!empty($inputData->userAddress)) $this->userAddress = $inputData->userAddress;
        if (!empty($inputData->userCity)) $this->userCity = $inputData->userCity;
        if (!empty($inputData->userState)) $this->userState = $inputData->userState;
        if (!empty($inputData->userPostalcode)) $this->userPostalcode = $inputData->userPostalcode;
        if (!empty($inputData->userPlus4)) $this->userPlus4 = $inputData->userPlus4;
        if (!empty($inputData->userCountry)) $this->userCountry = $inputData->userCountry;
        if (!empty($inputData->userPhoneHome)) $this->userPhoneHome = $inputData->userPhoneHome;
        if (!empty($inputData->userPhoneWork)) $this->userPhoneWork = $inputData->userPhoneWork;
        if (!empty($inputData->userPhoneWorkExt)) $this->userPhoneWorkExt = $inputData->userPhoneWorkExt;
        if (!empty($inputData->userPhoneCell)) $this->userPhoneCell = $inputData->userPhoneCell;
        if (!empty($inputData->userFax)) $this->userFax = $inputData->userFax;
        if (!empty($inputData->userEmail)) $this->userEmail = $inputData->userEmail;
        if (!empty($inputData->userEmailAlt)) $this->userEmailAlt = $inputData->userEmailAlt;
        if (!empty($inputData->userEmailPager)) $this->userEmailPager = $inputData->userEmailPager;
        if (!empty($inputData->userContactID)) $this->userContactID = $inputData->userContactID;
        if (!empty($inputData->userStatus)) $this->userStatus = $inputData->userStatus;

    }
}
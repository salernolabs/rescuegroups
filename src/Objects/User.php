<?php
/**
 * User Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class User implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $userID = null;

    /**
     * Login
     *
     * @var string
     */
    public $userLogin = null;

    /**
     * Password
     *
     * @var string
     */
    public $userPassword = null;

    /**
     * Salutation
     *
     * @var string
     */
    public $alutation = null;

    /**
     * First name
     *
     * @var string
     */
    public $userFirstname = null;

    /**
     * Last name
     *
     * @var string
     */
    public $userLastname = null;

    /**
     * Street address
     *
     * @var string
     */
    public $userAddress = null;

    /**
     * City
     *
     * @var string
     */
    public $userCity = null;

    /**
     * State/Province
     *
     * @var string
     */
    public $tate = null;

    /**
     * Postal Code
     *
     * @var string
     */
    public $userPostalcode = null;

    /**
     * Zip code plus 4
     *
     * @var string
     */
    public $userPlus4 = null;

    /**
     * Country
     *
     * @var integer
     */
    public $userCountry = null;

    /**
     * Home phone number
     *
     * @var string
     */
    public $userPhoneHome = null;

    /**
     * Work phone number
     *
     * @var string
     */
    public $userPhoneWork = null;

    /**
     * Work phone extension
     *
     * @var string
     */
    public $userPhoneWorkExt = null;

    /**
     * Cell phone number
     *
     * @var string
     */
    public $userPhoneCell = null;

    /**
     * Fax number
     *
     * @var string
     */
    public $userFax = null;

    /**
     * Email address
     *
     * @var string
     */
    public $userEmail = null;

    /**
     * Alternate email address
     *
     * @var string
     */
    public $userEmailAlt = null;

    /**
     * Pager email address
     *
     * @var string
     */
    public $userEmailPager = null;

    /**
     * User Contact
     *
     * @var integer
     */
    public $userContactID = null;

    /**
     * Status
     *
     * @var string
     */
    public $tatus = null;


    /**
     * User Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->userID)) $this->userID = $inputData->userID;
        if (!empty($inputData->userLogin)) $this->userLogin = $inputData->userLogin;
        if (!empty($inputData->userPassword)) $this->userPassword = $inputData->userPassword;
        if (!empty($inputData->userSalutation)) $this->alutation = $inputData->userSalutation;
        if (!empty($inputData->userFirstname)) $this->userFirstname = $inputData->userFirstname;
        if (!empty($inputData->userLastname)) $this->userLastname = $inputData->userLastname;
        if (!empty($inputData->userAddress)) $this->userAddress = $inputData->userAddress;
        if (!empty($inputData->userCity)) $this->userCity = $inputData->userCity;
        if (!empty($inputData->userState)) $this->tate = $inputData->userState;
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
        if (!empty($inputData->userStatus)) $this->tatus = $inputData->userStatus;
    }

    /**
     * Get array mapping for API functions
     *
     * @param bool $includeId
     * @return array
     */
    public function getArray($includeId = true)
    {
        $output = [];
        if ($includeId && $this->userID !== null) $output['userID'] = $this->userID;
        if ($this->userLogin !== null) $output['userLogin'] = $this->userLogin;
        if ($this->userPassword !== null) $output['userPassword'] = $this->userPassword;
        if ($this->alutation !== null) $output['userSalutation'] = $this->alutation;
        if ($this->userFirstname !== null) $output['userFirstname'] = $this->userFirstname;
        if ($this->userLastname !== null) $output['userLastname'] = $this->userLastname;
        if ($this->userAddress !== null) $output['userAddress'] = $this->userAddress;
        if ($this->userCity !== null) $output['userCity'] = $this->userCity;
        if ($this->tate !== null) $output['userState'] = $this->tate;
        if ($this->userPostalcode !== null) $output['userPostalcode'] = $this->userPostalcode;
        if ($this->userPlus4 !== null) $output['userPlus4'] = $this->userPlus4;
        if ($this->userCountry !== null) $output['userCountry'] = $this->userCountry;
        if ($this->userPhoneHome !== null) $output['userPhoneHome'] = $this->userPhoneHome;
        if ($this->userPhoneWork !== null) $output['userPhoneWork'] = $this->userPhoneWork;
        if ($this->userPhoneWorkExt !== null) $output['userPhoneWorkExt'] = $this->userPhoneWorkExt;
        if ($this->userPhoneCell !== null) $output['userPhoneCell'] = $this->userPhoneCell;
        if ($this->userFax !== null) $output['userFax'] = $this->userFax;
        if ($this->userEmail !== null) $output['userEmail'] = $this->userEmail;
        if ($this->userEmailAlt !== null) $output['userEmailAlt'] = $this->userEmailAlt;
        if ($this->userEmailPager !== null) $output['userEmailPager'] = $this->userEmailPager;
        if ($this->userContactID !== null) $output['userContactID'] = $this->userContactID;
        if ($this->tatus !== null) $output['userStatus'] = $this->tatus;

        return $output;
    }
}
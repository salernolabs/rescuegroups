<?php
/**
 * User Creation Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Create;

class User implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * Login
     *
     * @var string
     */
    public $login = null;

    /**
     * Password
     *
     * @var string
     */
    public $password = null;

    /**
     * Salutation
     *
     * @var string
     */
    public $salutation = null;

    /**
     * First name
     *
     * @var string
     */
    public $firstname = null;

    /**
     * Last name
     *
     * @var string
     */
    public $lastname = null;

    /**
     * Street address
     *
     * @var string
     */
    public $address = null;

    /**
     * City
     *
     * @var string
     */
    public $city = null;

    /**
     * State/Province
     *
     * @var string
     */
    public $state = null;

    /**
     * Postal Code
     *
     * @var string
     */
    public $postalcode = null;

    /**
     * Zip code plus 4
     *
     * @var string
     */
    public $plus4 = null;

    /**
     * Country, Primary Key
     *
     * @var integer
     */
    public $country = null;

    /**
     * Home phone number
     *
     * @var string
     */
    public $phoneHome = null;

    /**
     * Work phone number
     *
     * @var string
     */
    public $phoneWork = null;

    /**
     * Work phone extension
     *
     * @var string
     */
    public $phoneWorkExt = null;

    /**
     * Cell phone number
     *
     * @var string
     */
    public $phoneCell = null;

    /**
     * Fax number
     *
     * @var string
     */
    public $fax = null;

    /**
     * Email address
     *
     * @var string
     */
    public $email = null;

    /**
     * Alternate email address
     *
     * @var string
     */
    public $emailAlt = null;

    /**
     * Pager email address
     *
     * @var string
     */
    public $emailPager = null;

    /**
     * User Contact
     *
     * @var integer
     */
    public $contactId = null;

    /**
     * Type
     *
     * @var string
     */
    public $type = null;

    /**
     * Status
     *
     * @var string
     */
    public $status = null;


    /**
     * User Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->userLogin)) $this->login = $inputData->userLogin;
        if (!empty($inputData->userPassword)) $this->password = $inputData->userPassword;
        if (!empty($inputData->userSalutation)) $this->salutation = $inputData->userSalutation;
        if (!empty($inputData->userFirstname)) $this->firstname = $inputData->userFirstname;
        if (!empty($inputData->userLastname)) $this->lastname = $inputData->userLastname;
        if (!empty($inputData->userAddress)) $this->address = $inputData->userAddress;
        if (!empty($inputData->userCity)) $this->city = $inputData->userCity;
        if (!empty($inputData->userState)) $this->state = $inputData->userState;
        if (!empty($inputData->userPostalcode)) $this->postalcode = $inputData->userPostalcode;
        if (!empty($inputData->userPlus4)) $this->plus4 = $inputData->userPlus4;
        if (!empty($inputData->userCountry)) $this->country = $inputData->userCountry;
        if (!empty($inputData->userPhoneHome)) $this->phoneHome = $inputData->userPhoneHome;
        if (!empty($inputData->userPhoneWork)) $this->phoneWork = $inputData->userPhoneWork;
        if (!empty($inputData->userPhoneWorkExt)) $this->phoneWorkExt = $inputData->userPhoneWorkExt;
        if (!empty($inputData->userPhoneCell)) $this->phoneCell = $inputData->userPhoneCell;
        if (!empty($inputData->userFax)) $this->fax = $inputData->userFax;
        if (!empty($inputData->userEmail)) $this->email = $inputData->userEmail;
        if (!empty($inputData->userEmailAlt)) $this->emailAlt = $inputData->userEmailAlt;
        if (!empty($inputData->userEmailPager)) $this->emailPager = $inputData->userEmailPager;
        if (!empty($inputData->userContactID)) $this->contactId = $inputData->userContactID;
        if (!empty($inputData->userType)) $this->type = $inputData->userType;
        if (!empty($inputData->userStatus)) $this->status = $inputData->userStatus;
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
        if ($this->login !== null) $output['userLogin'] = $this->login;
        if ($this->password !== null) $output['userPassword'] = $this->password;
        if ($this->salutation !== null) $output['userSalutation'] = $this->salutation;
        if ($this->firstname !== null) $output['userFirstname'] = $this->firstname;
        if ($this->lastname !== null) $output['userLastname'] = $this->lastname;
        if ($this->address !== null) $output['userAddress'] = $this->address;
        if ($this->city !== null) $output['userCity'] = $this->city;
        if ($this->state !== null) $output['userState'] = $this->state;
        if ($this->postalcode !== null) $output['userPostalcode'] = $this->postalcode;
        if ($this->plus4 !== null) $output['userPlus4'] = $this->plus4;
        if ($includeId && $this->country !== null) $output['userCountry'] = $this->country;
        if ($this->phoneHome !== null) $output['userPhoneHome'] = $this->phoneHome;
        if ($this->phoneWork !== null) $output['userPhoneWork'] = $this->phoneWork;
        if ($this->phoneWorkExt !== null) $output['userPhoneWorkExt'] = $this->phoneWorkExt;
        if ($this->phoneCell !== null) $output['userPhoneCell'] = $this->phoneCell;
        if ($this->fax !== null) $output['userFax'] = $this->fax;
        if ($this->email !== null) $output['userEmail'] = $this->email;
        if ($this->emailAlt !== null) $output['userEmailAlt'] = $this->emailAlt;
        if ($this->emailPager !== null) $output['userEmailPager'] = $this->emailPager;
        if ($this->contactId !== null) $output['userContactID'] = $this->contactId;
        if ($this->type !== null) $output['userType'] = $this->type;
        if ($this->status !== null) $output['userStatus'] = $this->status;

        return $output;
    }
}
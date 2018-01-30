<?php
/**
 * User Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class User implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $id = null;

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
     * Country
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
     * Status
     *
     * @var string
     */
    public $status = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'userID' => 'id',
            'userLogin' => 'login',
            'userPassword' => 'password',
            'userSalutation' => 'salutation',
            'userFirstname' => 'firstname',
            'userLastname' => 'lastname',
            'userAddress' => 'address',
            'userCity' => 'city',
            'userState' => 'state',
            'userPostalcode' => 'postalcode',
            'userPlus4' => 'plus4',
            'userCountry' => 'country',
            'userPhoneHome' => 'phoneHome',
            'userPhoneWork' => 'phoneWork',
            'userPhoneWorkExt' => 'phoneWorkExt',
            'userPhoneCell' => 'phoneCell',
            'userFax' => 'fax',
            'userEmail' => 'email',
            'userEmailAlt' => 'emailAlt',
            'userEmailPager' => 'emailPager',
            'userContactID' => 'contactId',
            'userStatus' => 'status',
        ],
        'output' => [
            'id' => 'userID',
            'login' => 'userLogin',
            'password' => 'userPassword',
            'salutation' => 'userSalutation',
            'firstname' => 'userFirstname',
            'lastname' => 'userLastname',
            'address' => 'userAddress',
            'city' => 'userCity',
            'state' => 'userState',
            'postalcode' => 'userPostalcode',
            'plus4' => 'userPlus4',
            'country' => 'userCountry',
            'phoneHome' => 'userPhoneHome',
            'phoneWork' => 'userPhoneWork',
            'phoneWorkExt' => 'userPhoneWorkExt',
            'phoneCell' => 'userPhoneCell',
            'fax' => 'userFax',
            'email' => 'userEmail',
            'emailAlt' => 'userEmailAlt',
            'emailPager' => 'userEmailPager',
            'contactId' => 'userContactID',
            'status' => 'userStatus',
        ]
    ];

    /**
     * User Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        $this->mapFromAPI($inputData);
    }

    /**
     * Get array mapping for API functions
     *
     * @param bool $includeId
     * @return array
     */
    public function getArray($includeId = true)
    {
        return $this->mapToAPI($includeId);
    }
}
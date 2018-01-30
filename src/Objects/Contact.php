<?php
/**
 * Contact Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class Contact implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $id = null;

    /**
     * Class
     *
     * @var string
     */
    public $class = null;

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
     * Title
     *
     * @var string
     */
    public $title = null;

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
     * County
     *
     * @var string
     */
    public $county = null;

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
     * Company
     *
     * @var string
     */
    public $company = null;

    /**
     * Referred by
     *
     * @var string
     */
    public $referredBy = null;

    /**
     * Carrier
     *
     * @var string
     */
    public $carrier = null;

    /**
     * Send mail
     *
     * @var string
     */
    public $sendMail = null;

    /**
     * Active
     *
     * @var string
     */
    public $active = null;

    /**
     * Comment
     *
     * @var string
     */
    public $comment = null;

    /**
     * Coalition member
     *
     * @var string
     */
    public $coalitionMember = null;

    /**
     * Transportation
     *
     * @var string
     */
    public $transportation = null;

    /**
     * Availability
     *
     * @var string
     */
    public $availability = null;

    /**
     * Caretaker public
     *
     * @var string
     */
    public $caretakerPublic = null;

    /**
     * Groups
     *
     * @var integer
     */
    public $groups = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'contactID' => 'id',
            'contactClass' => 'class',
            'contactSalutation' => 'salutation',
            'contactFirstname' => 'firstname',
            'contactLastname' => 'lastname',
            'contactTitle' => 'title',
            'contactAddress' => 'address',
            'contactCity' => 'city',
            'contactState' => 'state',
            'contactPostalcode' => 'postalcode',
            'contactPlus4' => 'plus4',
            'contactCounty' => 'county',
            'contactCountry' => 'country',
            'contactPhoneHome' => 'phoneHome',
            'contactPhoneWork' => 'phoneWork',
            'contactPhoneWorkExt' => 'phoneWorkExt',
            'contactPhoneCell' => 'phoneCell',
            'contactFax' => 'fax',
            'contactEmail' => 'email',
            'contactEmailAlt' => 'emailAlt',
            'contactEmailPager' => 'emailPager',
            'contactCompany' => 'company',
            'contactReferredBy' => 'referredBy',
            'contactCarrier' => 'carrier',
            'contactSendMail' => 'sendMail',
            'contactActive' => 'active',
            'contactComment' => 'comment',
            'contactCoalitionMember' => 'coalitionMember',
            'contactTransportation' => 'transportation',
            'contactAvailability' => 'availability',
            'contactCaretakerPublic' => 'caretakerPublic',
            'contactGroups' => 'groups',
        ],
        'output' => [
            'id' => 'contactID',
            'class' => 'contactClass',
            'salutation' => 'contactSalutation',
            'firstname' => 'contactFirstname',
            'lastname' => 'contactLastname',
            'title' => 'contactTitle',
            'address' => 'contactAddress',
            'city' => 'contactCity',
            'state' => 'contactState',
            'postalcode' => 'contactPostalcode',
            'plus4' => 'contactPlus4',
            'county' => 'contactCounty',
            'country' => 'contactCountry',
            'phoneHome' => 'contactPhoneHome',
            'phoneWork' => 'contactPhoneWork',
            'phoneWorkExt' => 'contactPhoneWorkExt',
            'phoneCell' => 'contactPhoneCell',
            'fax' => 'contactFax',
            'email' => 'contactEmail',
            'emailAlt' => 'contactEmailAlt',
            'emailPager' => 'contactEmailPager',
            'company' => 'contactCompany',
            'referredBy' => 'contactReferredBy',
            'carrier' => 'contactCarrier',
            'sendMail' => 'contactSendMail',
            'active' => 'contactActive',
            'comment' => 'contactComment',
            'coalitionMember' => 'contactCoalitionMember',
            'transportation' => 'contactTransportation',
            'availability' => 'contactAvailability',
            'caretakerPublic' => 'contactCaretakerPublic',
            'groups' => 'contactGroups',
        ]
    ];

    /**
     * Contact Constructor
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
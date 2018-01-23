<?php
/**
 * Contact Creation Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Create;

class Contact implements \RescueGroups\Objects\APIEncodableInterface
{
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
     * Send website invitation
     *
     * @var string
     */
    public $sendInvite = null;

    /**
     * Groups
     *
     * @var integer
     */
    public $groups = null;


    /**
     * Contact Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->contactClass)) $this->class = $inputData->contactClass;
        if (!empty($inputData->contactSalutation)) $this->salutation = $inputData->contactSalutation;
        if (!empty($inputData->contactFirstname)) $this->firstname = $inputData->contactFirstname;
        if (!empty($inputData->contactLastname)) $this->lastname = $inputData->contactLastname;
        if (!empty($inputData->contactTitle)) $this->title = $inputData->contactTitle;
        if (!empty($inputData->contactAddress)) $this->address = $inputData->contactAddress;
        if (!empty($inputData->contactCity)) $this->city = $inputData->contactCity;
        if (!empty($inputData->contactState)) $this->state = $inputData->contactState;
        if (!empty($inputData->contactPostalcode)) $this->postalcode = $inputData->contactPostalcode;
        if (!empty($inputData->contactPlus4)) $this->plus4 = $inputData->contactPlus4;
        if (!empty($inputData->contactCounty)) $this->county = $inputData->contactCounty;
        if (!empty($inputData->contactCountry)) $this->country = $inputData->contactCountry;
        if (!empty($inputData->contactPhoneHome)) $this->phoneHome = $inputData->contactPhoneHome;
        if (!empty($inputData->contactPhoneWork)) $this->phoneWork = $inputData->contactPhoneWork;
        if (!empty($inputData->contactPhoneWorkExt)) $this->phoneWorkExt = $inputData->contactPhoneWorkExt;
        if (!empty($inputData->contactPhoneCell)) $this->phoneCell = $inputData->contactPhoneCell;
        if (!empty($inputData->contactFax)) $this->fax = $inputData->contactFax;
        if (!empty($inputData->contactEmail)) $this->email = $inputData->contactEmail;
        if (!empty($inputData->contactEmailAlt)) $this->emailAlt = $inputData->contactEmailAlt;
        if (!empty($inputData->contactEmailPager)) $this->emailPager = $inputData->contactEmailPager;
        if (!empty($inputData->contactCompany)) $this->company = $inputData->contactCompany;
        if (!empty($inputData->contactReferredBy)) $this->referredBy = $inputData->contactReferredBy;
        if (!empty($inputData->contactCarrier)) $this->carrier = $inputData->contactCarrier;
        if (!empty($inputData->contactSendMail)) $this->sendMail = $inputData->contactSendMail;
        if (!empty($inputData->contactActive)) $this->active = $inputData->contactActive;
        if (!empty($inputData->contactComment)) $this->comment = $inputData->contactComment;
        if (!empty($inputData->contactCoalitionMember)) $this->coalitionMember = $inputData->contactCoalitionMember;
        if (!empty($inputData->contactTransportation)) $this->transportation = $inputData->contactTransportation;
        if (!empty($inputData->contactAvailability)) $this->availability = $inputData->contactAvailability;
        if (!empty($inputData->contactCaretakerPublic)) $this->caretakerPublic = $inputData->contactCaretakerPublic;
        if (!empty($inputData->contactSendInvite)) $this->sendInvite = $inputData->contactSendInvite;
        if (!empty($inputData->contactGroups)) $this->groups = $inputData->contactGroups;
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
        if ($this->class !== null) $output['contactClass'] = $this->class;
        if ($this->salutation !== null) $output['contactSalutation'] = $this->salutation;
        if ($this->firstname !== null) $output['contactFirstname'] = $this->firstname;
        if ($this->lastname !== null) $output['contactLastname'] = $this->lastname;
        if ($this->title !== null) $output['contactTitle'] = $this->title;
        if ($this->address !== null) $output['contactAddress'] = $this->address;
        if ($this->city !== null) $output['contactCity'] = $this->city;
        if ($this->state !== null) $output['contactState'] = $this->state;
        if ($this->postalcode !== null) $output['contactPostalcode'] = $this->postalcode;
        if ($this->plus4 !== null) $output['contactPlus4'] = $this->plus4;
        if ($this->county !== null) $output['contactCounty'] = $this->county;
        if ($includeId && $this->country !== null) $output['contactCountry'] = $this->country;
        if ($this->phoneHome !== null) $output['contactPhoneHome'] = $this->phoneHome;
        if ($this->phoneWork !== null) $output['contactPhoneWork'] = $this->phoneWork;
        if ($this->phoneWorkExt !== null) $output['contactPhoneWorkExt'] = $this->phoneWorkExt;
        if ($this->phoneCell !== null) $output['contactPhoneCell'] = $this->phoneCell;
        if ($this->fax !== null) $output['contactFax'] = $this->fax;
        if ($this->email !== null) $output['contactEmail'] = $this->email;
        if ($this->emailAlt !== null) $output['contactEmailAlt'] = $this->emailAlt;
        if ($this->emailPager !== null) $output['contactEmailPager'] = $this->emailPager;
        if ($this->company !== null) $output['contactCompany'] = $this->company;
        if ($this->referredBy !== null) $output['contactReferredBy'] = $this->referredBy;
        if ($this->carrier !== null) $output['contactCarrier'] = $this->carrier;
        if ($this->sendMail !== null) $output['contactSendMail'] = $this->sendMail;
        if ($this->active !== null) $output['contactActive'] = $this->active;
        if ($this->comment !== null) $output['contactComment'] = $this->comment;
        if ($this->coalitionMember !== null) $output['contactCoalitionMember'] = $this->coalitionMember;
        if ($this->transportation !== null) $output['contactTransportation'] = $this->transportation;
        if ($this->availability !== null) $output['contactAvailability'] = $this->availability;
        if ($this->caretakerPublic !== null) $output['contactCaretakerPublic'] = $this->caretakerPublic;
        if ($this->sendInvite !== null) $output['contactSendInvite'] = $this->sendInvite;
        if ($this->groups !== null) $output['contactGroups'] = $this->groups;

        return $output;
    }
}
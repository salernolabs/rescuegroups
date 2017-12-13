<?php
/**
 * Contact Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class Contact
{
    /**
     * Class
     * @var string
     */
    public $contactClass;

    /**
     * Salutation
     * @var string
     */
    public $contactSalutation;

    /**
     * First name
     * @var string
     */
    public $contactFirstname;

    /**
     * Last name
     * @var string
     */
    public $contactLastname;

    /**
     * Title
     * @var string
     */
    public $contactTitle;

    /**
     * Street address
     * @var string
     */
    public $contactAddress;

    /**
     * City
     * @var string
     */
    public $contactCity;

    /**
     * State/Province
     * @var string
     */
    public $contactState;

    /**
     * Postal Code
     * @var string
     */
    public $contactPostalcode;

    /**
     * Zip code plus 4
     * @var string
     */
    public $contactPlus4;

    /**
     * County
     * @var string
     */
    public $contactCounty;

    /**
     * Country
     * @var integer
     */
    public $contactCountry;

    /**
     * Home phone number
     * @var string
     */
    public $contactPhoneHome;

    /**
     * Work phone number
     * @var string
     */
    public $contactPhoneWork;

    /**
     * Work phone extension
     * @var string
     */
    public $contactPhoneWorkExt;

    /**
     * Cell phone number
     * @var string
     */
    public $contactPhoneCell;

    /**
     * Fax number
     * @var string
     */
    public $contactFax;

    /**
     * Email address
     * @var string
     */
    public $contactEmail;

    /**
     * Alternate email address
     * @var string
     */
    public $contactEmailAlt;

    /**
     * Pager email address
     * @var string
     */
    public $contactEmailPager;

    /**
     * Company
     * @var string
     */
    public $contactCompany;

    /**
     * Referred by
     * @var string
     */
    public $contactReferredBy;

    /**
     * Carrier
     * @var string
     */
    public $contactCarrier;

    /**
     * Send mail
     * @var string
     */
    public $contactSendMail;

    /**
     * Active
     * @var string
     */
    public $contactActive;

    /**
     * Comment
     * @var string
     */
    public $contactComment;

    /**
     * Coalition member
     * @var string
     */
    public $contactCoalitionMember;

    /**
     * Transportation
     * @var string
     */
    public $contactTransportation;

    /**
     * Availability
     * @var string
     */
    public $contactAvailability;

    /**
     * Caretaker public
     * @var string
     */
    public $contactCaretakerPublic;

    /**
     * Send website invitation
     * @var string
     */
    public $contactSendInvite;

    /**
     * Groups
     * @var integer
     */
    public $contactGroups;



    /**
     * Contacts Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->contactClass)) $this->contactClass = $inputData->contactClass;
        if (!empty($inputData->contactSalutation)) $this->contactSalutation = $inputData->contactSalutation;
        if (!empty($inputData->contactFirstname)) $this->contactFirstname = $inputData->contactFirstname;
        if (!empty($inputData->contactLastname)) $this->contactLastname = $inputData->contactLastname;
        if (!empty($inputData->contactTitle)) $this->contactTitle = $inputData->contactTitle;
        if (!empty($inputData->contactAddress)) $this->contactAddress = $inputData->contactAddress;
        if (!empty($inputData->contactCity)) $this->contactCity = $inputData->contactCity;
        if (!empty($inputData->contactState)) $this->contactState = $inputData->contactState;
        if (!empty($inputData->contactPostalcode)) $this->contactPostalcode = $inputData->contactPostalcode;
        if (!empty($inputData->contactPlus4)) $this->contactPlus4 = $inputData->contactPlus4;
        if (!empty($inputData->contactCounty)) $this->contactCounty = $inputData->contactCounty;
        if (!empty($inputData->contactCountry)) $this->contactCountry = $inputData->contactCountry;
        if (!empty($inputData->contactPhoneHome)) $this->contactPhoneHome = $inputData->contactPhoneHome;
        if (!empty($inputData->contactPhoneWork)) $this->contactPhoneWork = $inputData->contactPhoneWork;
        if (!empty($inputData->contactPhoneWorkExt)) $this->contactPhoneWorkExt = $inputData->contactPhoneWorkExt;
        if (!empty($inputData->contactPhoneCell)) $this->contactPhoneCell = $inputData->contactPhoneCell;
        if (!empty($inputData->contactFax)) $this->contactFax = $inputData->contactFax;
        if (!empty($inputData->contactEmail)) $this->contactEmail = $inputData->contactEmail;
        if (!empty($inputData->contactEmailAlt)) $this->contactEmailAlt = $inputData->contactEmailAlt;
        if (!empty($inputData->contactEmailPager)) $this->contactEmailPager = $inputData->contactEmailPager;
        if (!empty($inputData->contactCompany)) $this->contactCompany = $inputData->contactCompany;
        if (!empty($inputData->contactReferredBy)) $this->contactReferredBy = $inputData->contactReferredBy;
        if (!empty($inputData->contactCarrier)) $this->contactCarrier = $inputData->contactCarrier;
        if (!empty($inputData->contactSendMail)) $this->contactSendMail = $inputData->contactSendMail;
        if (!empty($inputData->contactActive)) $this->contactActive = $inputData->contactActive;
        if (!empty($inputData->contactComment)) $this->contactComment = $inputData->contactComment;
        if (!empty($inputData->contactCoalitionMember)) $this->contactCoalitionMember = $inputData->contactCoalitionMember;
        if (!empty($inputData->contactTransportation)) $this->contactTransportation = $inputData->contactTransportation;
        if (!empty($inputData->contactAvailability)) $this->contactAvailability = $inputData->contactAvailability;
        if (!empty($inputData->contactCaretakerPublic)) $this->contactCaretakerPublic = $inputData->contactCaretakerPublic;
        if (!empty($inputData->contactSendInvite)) $this->contactSendInvite = $inputData->contactSendInvite;
        if (!empty($inputData->contactGroups)) $this->contactGroups = $inputData->contactGroups;

    }
}
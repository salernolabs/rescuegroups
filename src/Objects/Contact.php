<?php
/**
 * Contact Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class Contact implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * ID
     *
     * @var integer
     */
    public $contactID = null;

    /**
     * Class
     *
     * @var string
     */
    public $contactClass = null;

    /**
     * Salutation
     *
     * @var string
     */
    public $contactSalutation = null;

    /**
     * First name
     *
     * @var string
     */
    public $contactFirstname = null;

    /**
     * Last name
     *
     * @var string
     */
    public $contactLastname = null;

    /**
     * Title
     *
     * @var string
     */
    public $contactTitle = null;

    /**
     * Street address
     *
     * @var string
     */
    public $contactAddress = null;

    /**
     * City
     *
     * @var string
     */
    public $contactCity = null;

    /**
     * State/Province
     *
     * @var string
     */
    public $contactState = null;

    /**
     * Postal Code
     *
     * @var string
     */
    public $contactPostalcode = null;

    /**
     * Zip code plus 4
     *
     * @var string
     */
    public $contactPlus4 = null;

    /**
     * County
     *
     * @var string
     */
    public $contactCounty = null;

    /**
     * Country
     *
     * @var integer
     */
    public $contactCountry = null;

    /**
     * Home phone number
     *
     * @var string
     */
    public $contactPhoneHome = null;

    /**
     * Work phone number
     *
     * @var string
     */
    public $contactPhoneWork = null;

    /**
     * Work phone extension
     *
     * @var string
     */
    public $contactPhoneWorkExt = null;

    /**
     * Cell phone number
     *
     * @var string
     */
    public $contactPhoneCell = null;

    /**
     * Fax number
     *
     * @var string
     */
    public $contactFax = null;

    /**
     * Email address
     *
     * @var string
     */
    public $contactEmail = null;

    /**
     * Alternate email address
     *
     * @var string
     */
    public $contactEmailAlt = null;

    /**
     * Pager email address
     *
     * @var string
     */
    public $contactEmailPager = null;

    /**
     * Company
     *
     * @var string
     */
    public $contactCompany = null;

    /**
     * Referred by
     *
     * @var string
     */
    public $contactReferredBy = null;

    /**
     * Carrier
     *
     * @var string
     */
    public $contactCarrier = null;

    /**
     * Send mail
     *
     * @var string
     */
    public $contactSendMail = null;

    /**
     * Active
     *
     * @var string
     */
    public $contactActive = null;

    /**
     * Comment
     *
     * @var string
     */
    public $contactComment = null;

    /**
     * Coalition member
     *
     * @var string
     */
    public $contactCoalitionMember = null;

    /**
     * Transportation
     *
     * @var string
     */
    public $contactTransportation = null;

    /**
     * Availability
     *
     * @var string
     */
    public $contactAvailability = null;

    /**
     * Caretaker public
     *
     * @var string
     */
    public $contactCaretakerPublic = null;

    /**
     * Groups
     *
     * @var integer
     */
    public $contactGroups = null;


    /**
     * Contact Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->contactID)) $this->contactID = $inputData->contactID;
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
        if (!empty($inputData->contactGroups)) $this->contactGroups = $inputData->contactGroups;
    }

    /**
     * Get array mapping for API functions
     *
     * @return array
     */
    public function getArray()
    {
        $output = [];
        if ($this->contactID !== null) $output['contactID'] = $this->contactID;
        if ($this->contactClass !== null) $output['contactClass'] = $this->contactClass;
        if ($this->contactSalutation !== null) $output['contactSalutation'] = $this->contactSalutation;
        if ($this->contactFirstname !== null) $output['contactFirstname'] = $this->contactFirstname;
        if ($this->contactLastname !== null) $output['contactLastname'] = $this->contactLastname;
        if ($this->contactTitle !== null) $output['contactTitle'] = $this->contactTitle;
        if ($this->contactAddress !== null) $output['contactAddress'] = $this->contactAddress;
        if ($this->contactCity !== null) $output['contactCity'] = $this->contactCity;
        if ($this->contactState !== null) $output['contactState'] = $this->contactState;
        if ($this->contactPostalcode !== null) $output['contactPostalcode'] = $this->contactPostalcode;
        if ($this->contactPlus4 !== null) $output['contactPlus4'] = $this->contactPlus4;
        if ($this->contactCounty !== null) $output['contactCounty'] = $this->contactCounty;
        if ($this->contactCountry !== null) $output['contactCountry'] = $this->contactCountry;
        if ($this->contactPhoneHome !== null) $output['contactPhoneHome'] = $this->contactPhoneHome;
        if ($this->contactPhoneWork !== null) $output['contactPhoneWork'] = $this->contactPhoneWork;
        if ($this->contactPhoneWorkExt !== null) $output['contactPhoneWorkExt'] = $this->contactPhoneWorkExt;
        if ($this->contactPhoneCell !== null) $output['contactPhoneCell'] = $this->contactPhoneCell;
        if ($this->contactFax !== null) $output['contactFax'] = $this->contactFax;
        if ($this->contactEmail !== null) $output['contactEmail'] = $this->contactEmail;
        if ($this->contactEmailAlt !== null) $output['contactEmailAlt'] = $this->contactEmailAlt;
        if ($this->contactEmailPager !== null) $output['contactEmailPager'] = $this->contactEmailPager;
        if ($this->contactCompany !== null) $output['contactCompany'] = $this->contactCompany;
        if ($this->contactReferredBy !== null) $output['contactReferredBy'] = $this->contactReferredBy;
        if ($this->contactCarrier !== null) $output['contactCarrier'] = $this->contactCarrier;
        if ($this->contactSendMail !== null) $output['contactSendMail'] = $this->contactSendMail;
        if ($this->contactActive !== null) $output['contactActive'] = $this->contactActive;
        if ($this->contactComment !== null) $output['contactComment'] = $this->contactComment;
        if ($this->contactCoalitionMember !== null) $output['contactCoalitionMember'] = $this->contactCoalitionMember;
        if ($this->contactTransportation !== null) $output['contactTransportation'] = $this->contactTransportation;
        if ($this->contactAvailability !== null) $output['contactAvailability'] = $this->contactAvailability;
        if ($this->contactCaretakerPublic !== null) $output['contactCaretakerPublic'] = $this->contactCaretakerPublic;
        if ($this->contactGroups !== null) $output['contactGroups'] = $this->contactGroups;

        return $output;
    }
}
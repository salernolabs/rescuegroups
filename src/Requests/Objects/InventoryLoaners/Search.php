<?php
/**
 * InventoryLoaners Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:42
 */
namespace RescueGroups\Requests\Objects\InventoryLoaners;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $inventoryLoanerID = null;

    /**
     * Contact
     * @var integer
     */
    private $inventoryLoanerContactID = null;

    /**
     * Item
     * @var integer
     */
    private $inventoryLoanerItemID = null;

    /**
     * Loan Date
     * @var \DateTime
     */
    private $inventoryLoanerLoanDate = null;

    /**
     * Loan Condition
     * @var string
     */
    private $inventoryLoanerLoanCondition = null;

    /**
     * Loan Condition
     * @var integer
     */
    private $inventoryLoanerLoanConditionID = null;

    /**
     * Due Date
     * @var \DateTime
     */
    private $inventoryLoanerDueDate = null;

    /**
     * Return Date
     * @var \DateTime
     */
    private $inventoryLoanerReturnDate = null;

    /**
     * Return Condition
     * @var string
     */
    private $inventoryLoanerReturnCondition = null;

    /**
     * Return Condition
     * @var integer
     */
    private $inventoryLoanerReturnConditionID = null;

    /**
     * Notes
     * @var string
     */
    private $inventoryLoanerNotes = null;

    /**
     * Due Reminder Date
     * @var \DateTime
     */
    private $inventoryLoanerLastDueReminderDate = null;

    /**
     * Item Name
     * @var string
     */
    private $inventoryitemName = null;

    /**
     * Description
     * @var string
     */
    private $inventoryitemDescription = null;

    /**
     * Received Date
     * @var \DateTime
     */
    private $inventoryitemReceivedDate = null;

    /**
     * Source
     * @var string
     */
    private $inventoryitemSource = null;

    /**
     * Cost
     * @var float
     */
    private $inventoryitemCost = null;

    /**
     * Condition
     * @var integer
     */
    private $inventoryitemConditionID = null;

    /**
     * Condition
     * @var string
     */
    private $inventoryitemCondition = null;

    /**
     * Category
     * @var string
     */
    private $inventoryitemCategory = null;

    /**
     * Disposed Date
     * @var \DateTime
     */
    private $inventoryitemDisposedDate = null;

    /**
     * Disposed Destination
     * @var string
     */
    private $inventoryitemDisposedDestination = null;

    /**
     * Storage Location
     * @var string
     */
    private $inventoryitemStorageLocation = null;

    /**
     * Class
     * @var string
     */
    private $contactClass = null;

    /**
     * Salutation
     * @var string
     */
    private $contactSalutation = null;

    /**
     * Name
     * @var string
     */
    private $contactName = null;

    /**
     * First name
     * @var string
     */
    private $contactFirstname = null;

    /**
     * Last name
     * @var string
     */
    private $contactLastname = null;

    /**
     * Title
     * @var string
     */
    private $contactTitle = null;

    /**
     * Street address
     * @var string
     */
    private $contactAddress = null;

    /**
     * City
     * @var string
     */
    private $contactCity = null;

    /**
     * State/Province
     * @var province
     */
    private $contactState = null;

    /**
     * Postal Code
     * @var string
     */
    private $contactPostalcode = null;

    /**
     * Zip code plus 4
     * @var string
     */
    private $contactPlus4 = null;

    /**
     * County
     * @var string
     */
    private $contactCounty = null;

    /**
     * Country
     * @var integer
     */
    private $contactCountry = null;

    /**
     * Home phone number
     * @var phone
     */
    private $contactPhoneHome = null;

    /**
     * Work phone number
     * @var phone
     */
    private $contactPhoneWork = null;

    /**
     * Work phone extension
     * @var string
     */
    private $contactPhoneWorkExt = null;

    /**
     * Cell phone number
     * @var phone
     */
    private $contactPhoneCell = null;

    /**
     * Fax number
     * @var phone
     */
    private $contactFax = null;

    /**
     * Email address
     * @var email
     */
    private $contactEmail = null;

    /**
     * Alternate email address
     * @var email
     */
    private $contactEmailAlt = null;

    /**
     * Pager email address
     * @var email
     */
    private $contactEmailPager = null;

    /**
     * Company
     * @var string
     */
    private $contactCompany = null;

    /**
     * Referred by
     * @var string
     */
    private $contactReferredBy = null;

    /**
     * Carrier
     * @var string
     */
    private $contactCarrier = null;

    /**
     * Number of bounced email messages
     * @var int
     */
    private $contactBounces = null;

    /**
     * Send mail
     * @var string
     */
    private $contactSendMail = null;

    /**
     * Active
     * @var string
     */
    private $contactActive = null;

    /**
     * Comment
     * @var string
     */
    private $contactComment = null;

    /**
     * Transportation
     * @var string
     */
    private $contactTransportation = null;

    /**
     * Availability
     * @var string
     */
    private $contactAvailability = null;

    /**
     * Caretaker public
     * @var string
     */
    private $contactCaretakerPublic = null;

    /**
     * Coalition member
     * @var string
     */
    private $contactCoalitionMember = null;

    /**
     * Groups
     * @var integer
     */
    private $contactGroups = null;

    /**
     * Contact Added
     * @var string
     */
    private $contactAdded = null;


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
        return 'inventoryLoaners';
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
     * @param integer $inventoryLoanerID
     * @return $this
     */
    public function setInventoryLoanerID($inventoryLoanerID)
    {
        $this->inventoryLoanerID = $inventoryLoanerID;

        return $this;
    }

    /**
     * Set Contact
     *
     * @param integer $inventoryLoanerContactID
     * @return $this
     */
    public function setInventoryLoanerContactID($inventoryLoanerContactID)
    {
        $this->inventoryLoanerContactID = $inventoryLoanerContactID;

        return $this;
    }

    /**
     * Set Item
     *
     * @param integer $inventoryLoanerItemID
     * @return $this
     */
    public function setInventoryLoanerItemID($inventoryLoanerItemID)
    {
        $this->inventoryLoanerItemID = $inventoryLoanerItemID;

        return $this;
    }

    /**
     * Set Loan Date
     *
     * @param \DateTime $inventoryLoanerLoanDate
     * @return $this
     */
    public function setInventoryLoanerLoanDate($inventoryLoanerLoanDate)
    {
        $this->inventoryLoanerLoanDate = $inventoryLoanerLoanDate;

        return $this;
    }

    /**
     * Set Loan Condition
     *
     * @param string $inventoryLoanerLoanCondition
     * @return $this
     */
    public function setInventoryLoanerLoanCondition($inventoryLoanerLoanCondition)
    {
        $this->inventoryLoanerLoanCondition = $inventoryLoanerLoanCondition;

        return $this;
    }

    /**
     * Set Loan Condition
     *
     * @param integer $inventoryLoanerLoanConditionID
     * @return $this
     */
    public function setInventoryLoanerLoanConditionID($inventoryLoanerLoanConditionID)
    {
        $this->inventoryLoanerLoanConditionID = $inventoryLoanerLoanConditionID;

        return $this;
    }

    /**
     * Set Due Date
     *
     * @param \DateTime $inventoryLoanerDueDate
     * @return $this
     */
    public function setInventoryLoanerDueDate($inventoryLoanerDueDate)
    {
        $this->inventoryLoanerDueDate = $inventoryLoanerDueDate;

        return $this;
    }

    /**
     * Set Return Date
     *
     * @param \DateTime $inventoryLoanerReturnDate
     * @return $this
     */
    public function setInventoryLoanerReturnDate($inventoryLoanerReturnDate)
    {
        $this->inventoryLoanerReturnDate = $inventoryLoanerReturnDate;

        return $this;
    }

    /**
     * Set Return Condition
     *
     * @param string $inventoryLoanerReturnCondition
     * @return $this
     */
    public function setInventoryLoanerReturnCondition($inventoryLoanerReturnCondition)
    {
        $this->inventoryLoanerReturnCondition = $inventoryLoanerReturnCondition;

        return $this;
    }

    /**
     * Set Return Condition
     *
     * @param integer $inventoryLoanerReturnConditionID
     * @return $this
     */
    public function setInventoryLoanerReturnConditionID($inventoryLoanerReturnConditionID)
    {
        $this->inventoryLoanerReturnConditionID = $inventoryLoanerReturnConditionID;

        return $this;
    }

    /**
     * Set Notes
     *
     * @param string $inventoryLoanerNotes
     * @return $this
     */
    public function setInventoryLoanerNotes($inventoryLoanerNotes)
    {
        $this->inventoryLoanerNotes = $inventoryLoanerNotes;

        return $this;
    }

    /**
     * Set Due Reminder Date
     *
     * @param \DateTime $inventoryLoanerLastDueReminderDate
     * @return $this
     */
    public function setInventoryLoanerLastDueReminderDate($inventoryLoanerLastDueReminderDate)
    {
        $this->inventoryLoanerLastDueReminderDate = $inventoryLoanerLastDueReminderDate;

        return $this;
    }

    /**
     * Set Item Name
     *
     * @param string $inventoryitemName
     * @return $this
     */
    public function setInventoryitemName($inventoryitemName)
    {
        $this->inventoryitemName = $inventoryitemName;

        return $this;
    }

    /**
     * Set Description
     *
     * @param string $inventoryitemDescription
     * @return $this
     */
    public function setInventoryitemDescription($inventoryitemDescription)
    {
        $this->inventoryitemDescription = $inventoryitemDescription;

        return $this;
    }

    /**
     * Set Received Date
     *
     * @param \DateTime $inventoryitemReceivedDate
     * @return $this
     */
    public function setInventoryitemReceivedDate($inventoryitemReceivedDate)
    {
        $this->inventoryitemReceivedDate = $inventoryitemReceivedDate;

        return $this;
    }

    /**
     * Set Source
     *
     * @param string $inventoryitemSource
     * @return $this
     */
    public function setInventoryitemSource($inventoryitemSource)
    {
        $this->inventoryitemSource = $inventoryitemSource;

        return $this;
    }

    /**
     * Set Cost
     *
     * @param float $inventoryitemCost
     * @return $this
     */
    public function setInventoryitemCost($inventoryitemCost)
    {
        $this->inventoryitemCost = $inventoryitemCost;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param integer $inventoryitemConditionID
     * @return $this
     */
    public function setInventoryitemConditionID($inventoryitemConditionID)
    {
        $this->inventoryitemConditionID = $inventoryitemConditionID;

        return $this;
    }

    /**
     * Set Condition
     *
     * @param string $inventoryitemCondition
     * @return $this
     */
    public function setInventoryitemCondition($inventoryitemCondition)
    {
        $this->inventoryitemCondition = $inventoryitemCondition;

        return $this;
    }

    /**
     * Set Category
     *
     * @param string $inventoryitemCategory
     * @return $this
     */
    public function setInventoryitemCategory($inventoryitemCategory)
    {
        $this->inventoryitemCategory = $inventoryitemCategory;

        return $this;
    }

    /**
     * Set Disposed Date
     *
     * @param \DateTime $inventoryitemDisposedDate
     * @return $this
     */
    public function setInventoryitemDisposedDate($inventoryitemDisposedDate)
    {
        $this->inventoryitemDisposedDate = $inventoryitemDisposedDate;

        return $this;
    }

    /**
     * Set Disposed Destination
     *
     * @param string $inventoryitemDisposedDestination
     * @return $this
     */
    public function setInventoryitemDisposedDestination($inventoryitemDisposedDestination)
    {
        $this->inventoryitemDisposedDestination = $inventoryitemDisposedDestination;

        return $this;
    }

    /**
     * Set Storage Location
     *
     * @param string $inventoryitemStorageLocation
     * @return $this
     */
    public function setInventoryitemStorageLocation($inventoryitemStorageLocation)
    {
        $this->inventoryitemStorageLocation = $inventoryitemStorageLocation;

        return $this;
    }

    /**
     * Set Class
     *
     * @param string $contactClass
     * @return $this
     */
    public function setContactClass($contactClass)
    {
        $this->contactClass = $contactClass;

        return $this;
    }

    /**
     * Set Salutation
     *
     * @param string $contactSalutation
     * @return $this
     */
    public function setContactSalutation($contactSalutation)
    {
        $this->contactSalutation = $contactSalutation;

        return $this;
    }

    /**
     * Set Name
     *
     * @param string $contactName
     * @return $this
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Set First name
     *
     * @param string $contactFirstname
     * @return $this
     */
    public function setContactFirstname($contactFirstname)
    {
        $this->contactFirstname = $contactFirstname;

        return $this;
    }

    /**
     * Set Last name
     *
     * @param string $contactLastname
     * @return $this
     */
    public function setContactLastname($contactLastname)
    {
        $this->contactLastname = $contactLastname;

        return $this;
    }

    /**
     * Set Title
     *
     * @param string $contactTitle
     * @return $this
     */
    public function setContactTitle($contactTitle)
    {
        $this->contactTitle = $contactTitle;

        return $this;
    }

    /**
     * Set Street address
     *
     * @param string $contactAddress
     * @return $this
     */
    public function setContactAddress($contactAddress)
    {
        $this->contactAddress = $contactAddress;

        return $this;
    }

    /**
     * Set City
     *
     * @param string $contactCity
     * @return $this
     */
    public function setContactCity($contactCity)
    {
        $this->contactCity = $contactCity;

        return $this;
    }

    /**
     * Set State/Province
     *
     * @param province $contactState
     * @return $this
     */
    public function setContactState($contactState)
    {
        $this->contactState = $contactState;

        return $this;
    }

    /**
     * Set Postal Code
     *
     * @param string $contactPostalcode
     * @return $this
     */
    public function setContactPostalcode($contactPostalcode)
    {
        $this->contactPostalcode = $contactPostalcode;

        return $this;
    }

    /**
     * Set Zip code plus 4
     *
     * @param string $contactPlus4
     * @return $this
     */
    public function setContactPlus4($contactPlus4)
    {
        $this->contactPlus4 = $contactPlus4;

        return $this;
    }

    /**
     * Set County
     *
     * @param string $contactCounty
     * @return $this
     */
    public function setContactCounty($contactCounty)
    {
        $this->contactCounty = $contactCounty;

        return $this;
    }

    /**
     * Set Country
     *
     * @param integer $contactCountry
     * @return $this
     */
    public function setContactCountry($contactCountry)
    {
        $this->contactCountry = $contactCountry;

        return $this;
    }

    /**
     * Set Home phone number
     *
     * @param phone $contactPhoneHome
     * @return $this
     */
    public function setContactPhoneHome($contactPhoneHome)
    {
        $this->contactPhoneHome = $contactPhoneHome;

        return $this;
    }

    /**
     * Set Work phone number
     *
     * @param phone $contactPhoneWork
     * @return $this
     */
    public function setContactPhoneWork($contactPhoneWork)
    {
        $this->contactPhoneWork = $contactPhoneWork;

        return $this;
    }

    /**
     * Set Work phone extension
     *
     * @param string $contactPhoneWorkExt
     * @return $this
     */
    public function setContactPhoneWorkExt($contactPhoneWorkExt)
    {
        $this->contactPhoneWorkExt = $contactPhoneWorkExt;

        return $this;
    }

    /**
     * Set Cell phone number
     *
     * @param phone $contactPhoneCell
     * @return $this
     */
    public function setContactPhoneCell($contactPhoneCell)
    {
        $this->contactPhoneCell = $contactPhoneCell;

        return $this;
    }

    /**
     * Set Fax number
     *
     * @param phone $contactFax
     * @return $this
     */
    public function setContactFax($contactFax)
    {
        $this->contactFax = $contactFax;

        return $this;
    }

    /**
     * Set Email address
     *
     * @param email $contactEmail
     * @return $this
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }

    /**
     * Set Alternate email address
     *
     * @param email $contactEmailAlt
     * @return $this
     */
    public function setContactEmailAlt($contactEmailAlt)
    {
        $this->contactEmailAlt = $contactEmailAlt;

        return $this;
    }

    /**
     * Set Pager email address
     *
     * @param email $contactEmailPager
     * @return $this
     */
    public function setContactEmailPager($contactEmailPager)
    {
        $this->contactEmailPager = $contactEmailPager;

        return $this;
    }

    /**
     * Set Company
     *
     * @param string $contactCompany
     * @return $this
     */
    public function setContactCompany($contactCompany)
    {
        $this->contactCompany = $contactCompany;

        return $this;
    }

    /**
     * Set Referred by
     *
     * @param string $contactReferredBy
     * @return $this
     */
    public function setContactReferredBy($contactReferredBy)
    {
        $this->contactReferredBy = $contactReferredBy;

        return $this;
    }

    /**
     * Set Carrier
     *
     * @param string $contactCarrier
     * @return $this
     */
    public function setContactCarrier($contactCarrier)
    {
        $this->contactCarrier = $contactCarrier;

        return $this;
    }

    /**
     * Set Number of bounced email messages
     *
     * @param int $contactBounces
     * @return $this
     */
    public function setContactBounces($contactBounces)
    {
        $this->contactBounces = $contactBounces;

        return $this;
    }

    /**
     * Set Send mail
     *
     * @param string $contactSendMail
     * @return $this
     */
    public function setContactSendMail($contactSendMail)
    {
        $this->contactSendMail = $contactSendMail;

        return $this;
    }

    /**
     * Set Active
     *
     * @param string $contactActive
     * @return $this
     */
    public function setContactActive($contactActive)
    {
        $this->contactActive = $contactActive;

        return $this;
    }

    /**
     * Set Comment
     *
     * @param string $contactComment
     * @return $this
     */
    public function setContactComment($contactComment)
    {
        $this->contactComment = $contactComment;

        return $this;
    }

    /**
     * Set Transportation
     *
     * @param string $contactTransportation
     * @return $this
     */
    public function setContactTransportation($contactTransportation)
    {
        $this->contactTransportation = $contactTransportation;

        return $this;
    }

    /**
     * Set Availability
     *
     * @param string $contactAvailability
     * @return $this
     */
    public function setContactAvailability($contactAvailability)
    {
        $this->contactAvailability = $contactAvailability;

        return $this;
    }

    /**
     * Set Caretaker public
     *
     * @param string $contactCaretakerPublic
     * @return $this
     */
    public function setContactCaretakerPublic($contactCaretakerPublic)
    {
        $this->contactCaretakerPublic = $contactCaretakerPublic;

        return $this;
    }

    /**
     * Set Coalition member
     *
     * @param string $contactCoalitionMember
     * @return $this
     */
    public function setContactCoalitionMember($contactCoalitionMember)
    {
        $this->contactCoalitionMember = $contactCoalitionMember;

        return $this;
    }

    /**
     * Set Groups
     *
     * @param integer $contactGroups
     * @return $this
     */
    public function setContactGroups($contactGroups)
    {
        $this->contactGroups = $contactGroups;

        return $this;
    }

    /**
     * Set Contact Added
     *
     * @param string $contactAdded
     * @return $this
     */
    public function setContactAdded($contactAdded)
    {
        $this->contactAdded = $contactAdded;

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
        if ($this->inventoryLoanerID !== null) $parameterArray['inventoryLoanerID'] = $this->inventoryLoanerID;
        if ($this->inventoryLoanerContactID !== null) $parameterArray['inventoryLoanerContactID'] = $this->inventoryLoanerContactID;
        if ($this->inventoryLoanerItemID !== null) $parameterArray['inventoryLoanerItemID'] = $this->inventoryLoanerItemID;
        if ($this->inventoryLoanerLoanDate !== null) $parameterArray['inventoryLoanerLoanDate'] = $this->inventoryLoanerLoanDate;
        if ($this->inventoryLoanerLoanCondition !== null) $parameterArray['inventoryLoanerLoanCondition'] = $this->inventoryLoanerLoanCondition;
        if ($this->inventoryLoanerLoanConditionID !== null) $parameterArray['inventoryLoanerLoanConditionID'] = $this->inventoryLoanerLoanConditionID;
        if ($this->inventoryLoanerDueDate !== null) $parameterArray['inventoryLoanerDueDate'] = $this->inventoryLoanerDueDate;
        if ($this->inventoryLoanerReturnDate !== null) $parameterArray['inventoryLoanerReturnDate'] = $this->inventoryLoanerReturnDate;
        if ($this->inventoryLoanerReturnCondition !== null) $parameterArray['inventoryLoanerReturnCondition'] = $this->inventoryLoanerReturnCondition;
        if ($this->inventoryLoanerReturnConditionID !== null) $parameterArray['inventoryLoanerReturnConditionID'] = $this->inventoryLoanerReturnConditionID;
        if ($this->inventoryLoanerNotes !== null) $parameterArray['inventoryLoanerNotes'] = $this->inventoryLoanerNotes;
        if ($this->inventoryLoanerLastDueReminderDate !== null) $parameterArray['inventoryLoanerLastDueReminderDate'] = $this->inventoryLoanerLastDueReminderDate;
        if ($this->inventoryitemName !== null) $parameterArray['inventoryitemName'] = $this->inventoryitemName;
        if ($this->inventoryitemDescription !== null) $parameterArray['inventoryitemDescription'] = $this->inventoryitemDescription;
        if ($this->inventoryitemReceivedDate !== null) $parameterArray['inventoryitemReceivedDate'] = $this->inventoryitemReceivedDate;
        if ($this->inventoryitemSource !== null) $parameterArray['inventoryitemSource'] = $this->inventoryitemSource;
        if ($this->inventoryitemCost !== null) $parameterArray['inventoryitemCost'] = $this->inventoryitemCost;
        if ($this->inventoryitemConditionID !== null) $parameterArray['inventoryitemConditionID'] = $this->inventoryitemConditionID;
        if ($this->inventoryitemCondition !== null) $parameterArray['inventoryitemCondition'] = $this->inventoryitemCondition;
        if ($this->inventoryitemCategory !== null) $parameterArray['inventoryitemCategory'] = $this->inventoryitemCategory;
        if ($this->inventoryitemDisposedDate !== null) $parameterArray['inventoryitemDisposedDate'] = $this->inventoryitemDisposedDate;
        if ($this->inventoryitemDisposedDestination !== null) $parameterArray['inventoryitemDisposedDestination'] = $this->inventoryitemDisposedDestination;
        if ($this->inventoryitemStorageLocation !== null) $parameterArray['inventoryitemStorageLocation'] = $this->inventoryitemStorageLocation;
        if ($this->contactClass !== null) $parameterArray['contactClass'] = $this->contactClass;
        if ($this->contactSalutation !== null) $parameterArray['contactSalutation'] = $this->contactSalutation;
        if ($this->contactName !== null) $parameterArray['contactName'] = $this->contactName;
        if ($this->contactFirstname !== null) $parameterArray['contactFirstname'] = $this->contactFirstname;
        if ($this->contactLastname !== null) $parameterArray['contactLastname'] = $this->contactLastname;
        if ($this->contactTitle !== null) $parameterArray['contactTitle'] = $this->contactTitle;
        if ($this->contactAddress !== null) $parameterArray['contactAddress'] = $this->contactAddress;
        if ($this->contactCity !== null) $parameterArray['contactCity'] = $this->contactCity;
        if ($this->contactState !== null) $parameterArray['contactState'] = $this->contactState;
        if ($this->contactPostalcode !== null) $parameterArray['contactPostalcode'] = $this->contactPostalcode;
        if ($this->contactPlus4 !== null) $parameterArray['contactPlus4'] = $this->contactPlus4;
        if ($this->contactCounty !== null) $parameterArray['contactCounty'] = $this->contactCounty;
        if ($this->contactCountry !== null) $parameterArray['contactCountry'] = $this->contactCountry;
        if ($this->contactPhoneHome !== null) $parameterArray['contactPhoneHome'] = $this->contactPhoneHome;
        if ($this->contactPhoneWork !== null) $parameterArray['contactPhoneWork'] = $this->contactPhoneWork;
        if ($this->contactPhoneWorkExt !== null) $parameterArray['contactPhoneWorkExt'] = $this->contactPhoneWorkExt;
        if ($this->contactPhoneCell !== null) $parameterArray['contactPhoneCell'] = $this->contactPhoneCell;
        if ($this->contactFax !== null) $parameterArray['contactFax'] = $this->contactFax;
        if ($this->contactEmail !== null) $parameterArray['contactEmail'] = $this->contactEmail;
        if ($this->contactEmailAlt !== null) $parameterArray['contactEmailAlt'] = $this->contactEmailAlt;
        if ($this->contactEmailPager !== null) $parameterArray['contactEmailPager'] = $this->contactEmailPager;
        if ($this->contactCompany !== null) $parameterArray['contactCompany'] = $this->contactCompany;
        if ($this->contactReferredBy !== null) $parameterArray['contactReferredBy'] = $this->contactReferredBy;
        if ($this->contactCarrier !== null) $parameterArray['contactCarrier'] = $this->contactCarrier;
        if ($this->contactBounces !== null) $parameterArray['contactBounces'] = $this->contactBounces;
        if ($this->contactSendMail !== null) $parameterArray['contactSendMail'] = $this->contactSendMail;
        if ($this->contactActive !== null) $parameterArray['contactActive'] = $this->contactActive;
        if ($this->contactComment !== null) $parameterArray['contactComment'] = $this->contactComment;
        if ($this->contactTransportation !== null) $parameterArray['contactTransportation'] = $this->contactTransportation;
        if ($this->contactAvailability !== null) $parameterArray['contactAvailability'] = $this->contactAvailability;
        if ($this->contactCaretakerPublic !== null) $parameterArray['contactCaretakerPublic'] = $this->contactCaretakerPublic;
        if ($this->contactCoalitionMember !== null) $parameterArray['contactCoalitionMember'] = $this->contactCoalitionMember;
        if ($this->contactGroups !== null) $parameterArray['contactGroups'] = $this->contactGroups;
        if ($this->contactAdded !== null) $parameterArray['contactAdded'] = $this->contactAdded;

        $this->addSearchParameters($parameterArray);

    }
}
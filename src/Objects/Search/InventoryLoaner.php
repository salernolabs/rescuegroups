<?php
/**
 * InventoryLoaner Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class InventoryLoaner extends \RescueGroups\Objects\InventoryLoaner implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Contact
     *
     * @var integer
     */
    public $contactId = null;

    /**
     * Loan Condition
     *
     * @var string
     */
    public $loanCondition = null;

    /**
     * Return Condition
     *
     * @var string
     */
    public $returnCondition = null;

    /**
     * Due Reminder Date
     *
     * @var \DateTime
     */
    public $lastDueReminderDate = null;

    /**
     * Item Name
     *
     * @var string
     */
    public $inventoryitemName = null;

    /**
     * Description
     *
     * @var string
     */
    public $inventoryitemDescription = null;

    /**
     * Received Date
     *
     * @var \DateTime
     */
    public $inventoryitemReceivedDate = null;

    /**
     * Source
     *
     * @var string
     */
    public $inventoryitemSource = null;

    /**
     * Cost
     *
     * @var float
     */
    public $inventoryitemCost = null;

    /**
     * Condition
     *
     * @var integer
     */
    public $inventoryitemConditionId = null;

    /**
     * Condition
     *
     * @var string
     */
    public $inventoryitemCondition = null;

    /**
     * Category
     *
     * @var string
     */
    public $inventoryitemCategory = null;

    /**
     * Disposed Date
     *
     * @var \DateTime
     */
    public $inventoryitemDisposedDate = null;

    /**
     * Disposed Destination
     *
     * @var string
     */
    public $inventoryitemDisposedDestination = null;

    /**
     * Storage Location
     *
     * @var string
     */
    public $inventoryitemStorageLocation = null;

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
     * Name
     *
     * @var string
     */
    public $contactName = null;

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
     * Number of bounced email messages
     *
     * @var string
     */
    public $contactBounces = null;

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
     * Coalition member
     *
     * @var string
     */
    public $contactCoalitionMember = null;

    /**
     * Groups
     *
     * @var integer
     */
    public $contactGroups = null;

    /**
     * Contact Added
     *
     * @var string
     */
    public $contactAdded = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'inventoryLoanerID' => 'id',
            'inventoryLoanerContactID' => 'contactId',
            'inventoryLoanerItemID' => 'itemId',
            'inventoryLoanerLoanDate' => 'loanDate',
            'inventoryLoanerLoanCondition' => 'loanCondition',
            'inventoryLoanerLoanConditionID' => 'loanConditionId',
            'inventoryLoanerDueDate' => 'dueDate',
            'inventoryLoanerReturnDate' => 'returnDate',
            'inventoryLoanerReturnCondition' => 'returnCondition',
            'inventoryLoanerReturnConditionID' => 'returnConditionId',
            'inventoryLoanerNotes' => 'notes',
            'inventoryLoanerLastDueReminderDate' => 'lastDueReminderDate',
            'inventoryitemName' => 'inventoryitemName',
            'inventoryitemDescription' => 'inventoryitemDescription',
            'inventoryitemReceivedDate' => 'inventoryitemReceivedDate',
            'inventoryitemSource' => 'inventoryitemSource',
            'inventoryitemCost' => 'inventoryitemCost',
            'inventoryitemConditionID' => 'inventoryitemConditionId',
            'inventoryitemCondition' => 'inventoryitemCondition',
            'inventoryitemCategory' => 'inventoryitemCategory',
            'inventoryitemDisposedDate' => 'inventoryitemDisposedDate',
            'inventoryitemDisposedDestination' => 'inventoryitemDisposedDestination',
            'inventoryitemStorageLocation' => 'inventoryitemStorageLocation',
            'contactClass' => 'contactClass',
            'contactSalutation' => 'contactSalutation',
            'contactName' => 'contactName',
            'contactFirstname' => 'contactFirstname',
            'contactLastname' => 'contactLastname',
            'contactTitle' => 'contactTitle',
            'contactAddress' => 'contactAddress',
            'contactCity' => 'contactCity',
            'contactState' => 'contactState',
            'contactPostalcode' => 'contactPostalcode',
            'contactPlus4' => 'contactPlus4',
            'contactCounty' => 'contactCounty',
            'contactCountry' => 'contactCountry',
            'contactPhoneHome' => 'contactPhoneHome',
            'contactPhoneWork' => 'contactPhoneWork',
            'contactPhoneWorkExt' => 'contactPhoneWorkExt',
            'contactPhoneCell' => 'contactPhoneCell',
            'contactFax' => 'contactFax',
            'contactEmail' => 'contactEmail',
            'contactEmailAlt' => 'contactEmailAlt',
            'contactEmailPager' => 'contactEmailPager',
            'contactCompany' => 'contactCompany',
            'contactReferredBy' => 'contactReferredBy',
            'contactCarrier' => 'contactCarrier',
            'contactBounces' => 'contactBounces',
            'contactSendMail' => 'contactSendMail',
            'contactActive' => 'contactActive',
            'contactComment' => 'contactComment',
            'contactTransportation' => 'contactTransportation',
            'contactAvailability' => 'contactAvailability',
            'contactCaretakerPublic' => 'contactCaretakerPublic',
            'contactCoalitionMember' => 'contactCoalitionMember',
            'contactGroups' => 'contactGroups',
            'contactAdded' => 'contactAdded',
        ],
        'output' => [
            'id' => 'inventoryLoanerID',
            'contactId' => 'inventoryLoanerContactID',
            'itemId' => 'inventoryLoanerItemID',
            'loanDate' => 'inventoryLoanerLoanDate',
            'loanCondition' => 'inventoryLoanerLoanCondition',
            'loanConditionId' => 'inventoryLoanerLoanConditionID',
            'dueDate' => 'inventoryLoanerDueDate',
            'returnDate' => 'inventoryLoanerReturnDate',
            'returnCondition' => 'inventoryLoanerReturnCondition',
            'returnConditionId' => 'inventoryLoanerReturnConditionID',
            'notes' => 'inventoryLoanerNotes',
            'lastDueReminderDate' => 'inventoryLoanerLastDueReminderDate',
            'inventoryitemName' => 'inventoryitemName',
            'inventoryitemDescription' => 'inventoryitemDescription',
            'inventoryitemReceivedDate' => 'inventoryitemReceivedDate',
            'inventoryitemSource' => 'inventoryitemSource',
            'inventoryitemCost' => 'inventoryitemCost',
            'inventoryitemConditionId' => 'inventoryitemConditionID',
            'inventoryitemCondition' => 'inventoryitemCondition',
            'inventoryitemCategory' => 'inventoryitemCategory',
            'inventoryitemDisposedDate' => 'inventoryitemDisposedDate',
            'inventoryitemDisposedDestination' => 'inventoryitemDisposedDestination',
            'inventoryitemStorageLocation' => 'inventoryitemStorageLocation',
            'contactClass' => 'contactClass',
            'contactSalutation' => 'contactSalutation',
            'contactName' => 'contactName',
            'contactFirstname' => 'contactFirstname',
            'contactLastname' => 'contactLastname',
            'contactTitle' => 'contactTitle',
            'contactAddress' => 'contactAddress',
            'contactCity' => 'contactCity',
            'contactState' => 'contactState',
            'contactPostalcode' => 'contactPostalcode',
            'contactPlus4' => 'contactPlus4',
            'contactCounty' => 'contactCounty',
            'contactCountry' => 'contactCountry',
            'contactPhoneHome' => 'contactPhoneHome',
            'contactPhoneWork' => 'contactPhoneWork',
            'contactPhoneWorkExt' => 'contactPhoneWorkExt',
            'contactPhoneCell' => 'contactPhoneCell',
            'contactFax' => 'contactFax',
            'contactEmail' => 'contactEmail',
            'contactEmailAlt' => 'contactEmailAlt',
            'contactEmailPager' => 'contactEmailPager',
            'contactCompany' => 'contactCompany',
            'contactReferredBy' => 'contactReferredBy',
            'contactCarrier' => 'contactCarrier',
            'contactBounces' => 'contactBounces',
            'contactSendMail' => 'contactSendMail',
            'contactActive' => 'contactActive',
            'contactComment' => 'contactComment',
            'contactTransportation' => 'contactTransportation',
            'contactAvailability' => 'contactAvailability',
            'contactCaretakerPublic' => 'contactCaretakerPublic',
            'contactCoalitionMember' => 'contactCoalitionMember',
            'contactGroups' => 'contactGroups',
            'contactAdded' => 'contactAdded',
        ]
    ];

}
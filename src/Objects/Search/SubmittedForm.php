<?php
/**
 * SubmittedForm Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class SubmittedForm extends \RescueGroups\Objects\SubmittedForm implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Form
     *
     * @var integer
     */
    public $formId = null;

    /**
     * Assigned To
     *
     * @var string
     */
    public $assignedTo = null;

    /**
     * Assigned To
     *
     * @var integer
     */
    public $assignedToId = null;

    /**
     * Comments Count
     *
     * @var string
     */
    public $commentsCount = null;

    /**
     * Comments
     *
     * @var string
     */
    public $commentsInline = null;

    /**
     * Completed Date
     *
     * @var \DateTime
     */
    public $completed = null;

    /**
     * Updated Date
     *
     * @var \DateTime
     */
    public $updated = null;

    /**
     * Form Name
     *
     * @var string
     */
    public $formName = null;

    /**
     * Pending
     *
     * @var string
     */
    public $pending = null;

    /**
     * Status
     *
     * @var string
     */
    public $status = null;

    /**
     * Answers
     *
     * @var string
     */
    public $answers = null;

    /**
     * ID
     *
     * @var integer
     */
    public $submitterId = null;

    /**
     * Class
     *
     * @var string
     */
    public $submitterClass = null;

    /**
     * Salutation
     *
     * @var string
     */
    public $submitterSalutation = null;

    /**
     * Name
     *
     * @var string
     */
    public $submitterName = null;

    /**
     * First name
     *
     * @var string
     */
    public $submitterFirstname = null;

    /**
     * Last name
     *
     * @var string
     */
    public $submitterLastname = null;

    /**
     * Title
     *
     * @var string
     */
    public $submitterTitle = null;

    /**
     * Street address
     *
     * @var string
     */
    public $submitterAddress = null;

    /**
     * City
     *
     * @var string
     */
    public $submitterCity = null;

    /**
     * State/Province
     *
     * @var string
     */
    public $submitterState = null;

    /**
     * Postal Code
     *
     * @var string
     */
    public $submitterPostalcode = null;

    /**
     * Zip code plus 4
     *
     * @var string
     */
    public $submitterPlus4 = null;

    /**
     * County
     *
     * @var string
     */
    public $submitterCounty = null;

    /**
     * Country
     *
     * @var integer
     */
    public $submitterCountry = null;

    /**
     * Home phone number
     *
     * @var string
     */
    public $submitterPhoneHome = null;

    /**
     * Work phone number
     *
     * @var string
     */
    public $submitterPhoneWork = null;

    /**
     * Work phone extension
     *
     * @var string
     */
    public $submitterPhoneWorkExt = null;

    /**
     * Cell phone number
     *
     * @var string
     */
    public $submitterPhoneCell = null;

    /**
     * Fax number
     *
     * @var string
     */
    public $submitterFax = null;

    /**
     * Email address
     *
     * @var string
     */
    public $submitterEmail = null;

    /**
     * Alternate email address
     *
     * @var string
     */
    public $submitterEmailAlt = null;

    /**
     * Pager email address
     *
     * @var string
     */
    public $submitterEmailPager = null;

    /**
     * Company
     *
     * @var string
     */
    public $submitterCompany = null;

    /**
     * Referred by
     *
     * @var string
     */
    public $submitterReferredBy = null;

    /**
     * Carrier
     *
     * @var string
     */
    public $submitterCarrier = null;

    /**
     * Number of bounced email messages
     *
     * @var string
     */
    public $submitterBounces = null;

    /**
     * Send mail
     *
     * @var string
     */
    public $submitterSendMail = null;

    /**
     * Active
     *
     * @var string
     */
    public $submitterActive = null;

    /**
     * Comment
     *
     * @var string
     */
    public $submitterComment = null;

    /**
     * Transportation
     *
     * @var string
     */
    public $submitterTransportation = null;

    /**
     * Availability
     *
     * @var string
     */
    public $submitterAvailability = null;

    /**
     * Caretaker public
     *
     * @var string
     */
    public $submitterCaretakerPublic = null;

    /**
     * Coalition member
     *
     * @var string
     */
    public $submitterCoalitionMember = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'submittedformID' => 'id',
            'submittedformFormID' => 'formId',
            'submittedformAnimalID' => 'animalId',
            'submittedformAssignedTo' => 'assignedTo',
            'submittedformAssignedToID' => 'assignedToId',
            'submittedformCommentsCount' => 'commentsCount',
            'submittedformCommentsInline' => 'commentsInline',
            'submittedformCompleted' => 'completed',
            'submittedformUpdated' => 'updated',
            'submittedformFormName' => 'formName',
            'submittedformPending' => 'pending',
            'submittedformStatus' => 'status',
            'submittedformStatusID' => 'statusId',
            'submittedformAnswers' => 'answers',
            'submitterID' => 'submitterId',
            'submitterClass' => 'submitterClass',
            'submitterSalutation' => 'submitterSalutation',
            'submitterName' => 'submitterName',
            'submitterFirstname' => 'submitterFirstname',
            'submitterLastname' => 'submitterLastname',
            'submitterTitle' => 'submitterTitle',
            'submitterAddress' => 'submitterAddress',
            'submitterCity' => 'submitterCity',
            'submitterState' => 'submitterState',
            'submitterPostalcode' => 'submitterPostalcode',
            'submitterPlus4' => 'submitterPlus4',
            'submitterCounty' => 'submitterCounty',
            'submitterCountry' => 'submitterCountry',
            'submitterPhoneHome' => 'submitterPhoneHome',
            'submitterPhoneWork' => 'submitterPhoneWork',
            'submitterPhoneWorkExt' => 'submitterPhoneWorkExt',
            'submitterPhoneCell' => 'submitterPhoneCell',
            'submitterFax' => 'submitterFax',
            'submitterEmail' => 'submitterEmail',
            'submitterEmailAlt' => 'submitterEmailAlt',
            'submitterEmailPager' => 'submitterEmailPager',
            'submitterCompany' => 'submitterCompany',
            'submitterReferredBy' => 'submitterReferredBy',
            'submitterCarrier' => 'submitterCarrier',
            'submitterBounces' => 'submitterBounces',
            'submitterSendMail' => 'submitterSendMail',
            'submitterActive' => 'submitterActive',
            'submitterComment' => 'submitterComment',
            'submitterTransportation' => 'submitterTransportation',
            'submitterAvailability' => 'submitterAvailability',
            'submitterCaretakerPublic' => 'submitterCaretakerPublic',
            'submitterCoalitionMember' => 'submitterCoalitionMember',
        ],
        'output' => [
            'id' => 'submittedformID',
            'formId' => 'submittedformFormID',
            'animalId' => 'submittedformAnimalID',
            'assignedTo' => 'submittedformAssignedTo',
            'assignedToId' => 'submittedformAssignedToID',
            'commentsCount' => 'submittedformCommentsCount',
            'commentsInline' => 'submittedformCommentsInline',
            'completed' => 'submittedformCompleted',
            'updated' => 'submittedformUpdated',
            'formName' => 'submittedformFormName',
            'pending' => 'submittedformPending',
            'status' => 'submittedformStatus',
            'statusId' => 'submittedformStatusID',
            'answers' => 'submittedformAnswers',
            'submitterId' => 'submitterID',
            'submitterClass' => 'submitterClass',
            'submitterSalutation' => 'submitterSalutation',
            'submitterName' => 'submitterName',
            'submitterFirstname' => 'submitterFirstname',
            'submitterLastname' => 'submitterLastname',
            'submitterTitle' => 'submitterTitle',
            'submitterAddress' => 'submitterAddress',
            'submitterCity' => 'submitterCity',
            'submitterState' => 'submitterState',
            'submitterPostalcode' => 'submitterPostalcode',
            'submitterPlus4' => 'submitterPlus4',
            'submitterCounty' => 'submitterCounty',
            'submitterCountry' => 'submitterCountry',
            'submitterPhoneHome' => 'submitterPhoneHome',
            'submitterPhoneWork' => 'submitterPhoneWork',
            'submitterPhoneWorkExt' => 'submitterPhoneWorkExt',
            'submitterPhoneCell' => 'submitterPhoneCell',
            'submitterFax' => 'submitterFax',
            'submitterEmail' => 'submitterEmail',
            'submitterEmailAlt' => 'submitterEmailAlt',
            'submitterEmailPager' => 'submitterEmailPager',
            'submitterCompany' => 'submitterCompany',
            'submitterReferredBy' => 'submitterReferredBy',
            'submitterCarrier' => 'submitterCarrier',
            'submitterBounces' => 'submitterBounces',
            'submitterSendMail' => 'submitterSendMail',
            'submitterActive' => 'submitterActive',
            'submitterComment' => 'submitterComment',
            'submitterTransportation' => 'submitterTransportation',
            'submitterAvailability' => 'submitterAvailability',
            'submitterCaretakerPublic' => 'submitterCaretakerPublic',
            'submitterCoalitionMember' => 'submitterCoalitionMember',
        ]
    ];

}
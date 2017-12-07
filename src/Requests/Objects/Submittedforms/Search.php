<?php
/**
 * Submittedforms Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:27
 */
namespace RescueGroups\Requests\Objects\Submittedforms;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $submittedformID = null;

    /**
     * Form
     * @var integer
     */
    private $submittedformFormID = null;

    /**
     * Animal
     * @var integer
     */
    private $submittedformAnimalID = null;

    /**
     * Assigned To
     * @var string
     */
    private $submittedformAssignedTo = null;

    /**
     * Assigned To
     * @var integer
     */
    private $submittedformAssignedToID = null;

    /**
     * Comments Count
     * @var int
     */
    private $submittedformCommentsCount = null;

    /**
     * Comments
     * @var string
     */
    private $submittedformCommentsInline = null;

    /**
     * Completed Date
     * @var \DateTime
     */
    private $submittedformCompleted = null;

    /**
     * Updated Date
     * @var \DateTime
     */
    private $submittedformUpdated = null;

    /**
     * Form Name
     * @var string
     */
    private $submittedformFormName = null;

    /**
     * Pending
     * @var string
     */
    private $submittedformPending = null;

    /**
     * Status
     * @var string
     */
    private $submittedformStatus = null;

    /**
     * Status
     * @var integer
     */
    private $submittedformStatusID = null;

    /**
     * Answers
     * @var string
     */
    private $submittedformAnswers = null;

    /**
     * ID
     * @var integer
     */
    private $submitterID = null;

    /**
     * Class
     * @var string
     */
    private $submitterClass = null;

    /**
     * Salutation
     * @var string
     */
    private $submitterSalutation = null;

    /**
     * Name
     * @var string
     */
    private $submitterName = null;

    /**
     * First name
     * @var string
     */
    private $submitterFirstname = null;

    /**
     * Last name
     * @var string
     */
    private $submitterLastname = null;

    /**
     * Title
     * @var string
     */
    private $submitterTitle = null;

    /**
     * Street address
     * @var string
     */
    private $submitterAddress = null;

    /**
     * City
     * @var string
     */
    private $submitterCity = null;

    /**
     * State/Province
     * @var string
     */
    private $submitterState = null;

    /**
     * Postal Code
     * @var string
     */
    private $submitterPostalcode = null;

    /**
     * Zip code plus 4
     * @var string
     */
    private $submitterPlus4 = null;

    /**
     * County
     * @var string
     */
    private $submitterCounty = null;

    /**
     * Country
     * @var integer
     */
    private $submitterCountry = null;

    /**
     * Home phone number
     * @var phone
     */
    private $submitterPhoneHome = null;

    /**
     * Work phone number
     * @var phone
     */
    private $submitterPhoneWork = null;

    /**
     * Work phone extension
     * @var string
     */
    private $submitterPhoneWorkExt = null;

    /**
     * Cell phone number
     * @var phone
     */
    private $submitterPhoneCell = null;

    /**
     * Fax number
     * @var phone
     */
    private $submitterFax = null;

    /**
     * Email address
     * @var email
     */
    private $submitterEmail = null;

    /**
     * Alternate email address
     * @var email
     */
    private $submitterEmailAlt = null;

    /**
     * Pager email address
     * @var email
     */
    private $submitterEmailPager = null;

    /**
     * Company
     * @var string
     */
    private $submitterCompany = null;

    /**
     * Referred by
     * @var string
     */
    private $submitterReferredBy = null;

    /**
     * Carrier
     * @var string
     */
    private $submitterCarrier = null;

    /**
     * Number of bounced email messages
     * @var int
     */
    private $submitterBounces = null;

    /**
     * Send mail
     * @var string
     */
    private $submitterSendMail = null;

    /**
     * Active
     * @var string
     */
    private $submitterActive = null;

    /**
     * Comment
     * @var string
     */
    private $submitterComment = null;

    /**
     * Transportation
     * @var string
     */
    private $submitterTransportation = null;

    /**
     * Availability
     * @var string
     */
    private $submitterAvailability = null;

    /**
     * Caretaker public
     * @var string
     */
    private $submitterCaretakerPublic = null;

    /**
     * Coalition member
     * @var string
     */
    private $submitterCoalitionMember = null;


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
        return 'submittedforms';
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
     * @param integer $submittedformID
     * @return $this
     */
    public function setSubmittedformID($submittedformID)
    {
        $this->submittedformID = $submittedformID;

        return $this;
    }

    /**
     * Set Form
     *
     * @param integer $submittedformFormID
     * @return $this
     */
    public function setSubmittedformFormID($submittedformFormID)
    {
        $this->submittedformFormID = $submittedformFormID;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param integer $submittedformAnimalID
     * @return $this
     */
    public function setSubmittedformAnimalID($submittedformAnimalID)
    {
        $this->submittedformAnimalID = $submittedformAnimalID;

        return $this;
    }

    /**
     * Set Assigned To
     *
     * @param string $submittedformAssignedTo
     * @return $this
     */
    public function setSubmittedformAssignedTo($submittedformAssignedTo)
    {
        $this->submittedformAssignedTo = $submittedformAssignedTo;

        return $this;
    }

    /**
     * Set Assigned To
     *
     * @param integer $submittedformAssignedToID
     * @return $this
     */
    public function setSubmittedformAssignedToID($submittedformAssignedToID)
    {
        $this->submittedformAssignedToID = $submittedformAssignedToID;

        return $this;
    }

    /**
     * Set Comments Count
     *
     * @param int $submittedformCommentsCount
     * @return $this
     */
    public function setSubmittedformCommentsCount($submittedformCommentsCount)
    {
        $this->submittedformCommentsCount = $submittedformCommentsCount;

        return $this;
    }

    /**
     * Set Comments
     *
     * @param string $submittedformCommentsInline
     * @return $this
     */
    public function setSubmittedformCommentsInline($submittedformCommentsInline)
    {
        $this->submittedformCommentsInline = $submittedformCommentsInline;

        return $this;
    }

    /**
     * Set Completed Date
     *
     * @param \DateTime $submittedformCompleted
     * @return $this
     */
    public function setSubmittedformCompleted($submittedformCompleted)
    {
        $this->submittedformCompleted = $submittedformCompleted;

        return $this;
    }

    /**
     * Set Updated Date
     *
     * @param \DateTime $submittedformUpdated
     * @return $this
     */
    public function setSubmittedformUpdated($submittedformUpdated)
    {
        $this->submittedformUpdated = $submittedformUpdated;

        return $this;
    }

    /**
     * Set Form Name
     *
     * @param string $submittedformFormName
     * @return $this
     */
    public function setSubmittedformFormName($submittedformFormName)
    {
        $this->submittedformFormName = $submittedformFormName;

        return $this;
    }

    /**
     * Set Pending
     *
     * @param string $submittedformPending
     * @return $this
     */
    public function setSubmittedformPending($submittedformPending)
    {
        $this->submittedformPending = $submittedformPending;

        return $this;
    }

    /**
     * Set Status
     *
     * @param string $submittedformStatus
     * @return $this
     */
    public function setSubmittedformStatus($submittedformStatus)
    {
        $this->submittedformStatus = $submittedformStatus;

        return $this;
    }

    /**
     * Set Status
     *
     * @param integer $submittedformStatusID
     * @return $this
     */
    public function setSubmittedformStatusID($submittedformStatusID)
    {
        $this->submittedformStatusID = $submittedformStatusID;

        return $this;
    }

    /**
     * Set Answers
     *
     * @param string $submittedformAnswers
     * @return $this
     */
    public function setSubmittedformAnswers($submittedformAnswers)
    {
        $this->submittedformAnswers = $submittedformAnswers;

        return $this;
    }

    /**
     * Set ID
     *
     * @param integer $submitterID
     * @return $this
     */
    public function setSubmitterID($submitterID)
    {
        $this->submitterID = $submitterID;

        return $this;
    }

    /**
     * Set Class
     *
     * @param string $submitterClass
     * @return $this
     */
    public function setSubmitterClass($submitterClass)
    {
        $this->submitterClass = $submitterClass;

        return $this;
    }

    /**
     * Set Salutation
     *
     * @param string $submitterSalutation
     * @return $this
     */
    public function setSubmitterSalutation($submitterSalutation)
    {
        $this->submitterSalutation = $submitterSalutation;

        return $this;
    }

    /**
     * Set Name
     *
     * @param string $submitterName
     * @return $this
     */
    public function setSubmitterName($submitterName)
    {
        $this->submitterName = $submitterName;

        return $this;
    }

    /**
     * Set First name
     *
     * @param string $submitterFirstname
     * @return $this
     */
    public function setSubmitterFirstname($submitterFirstname)
    {
        $this->submitterFirstname = $submitterFirstname;

        return $this;
    }

    /**
     * Set Last name
     *
     * @param string $submitterLastname
     * @return $this
     */
    public function setSubmitterLastname($submitterLastname)
    {
        $this->submitterLastname = $submitterLastname;

        return $this;
    }

    /**
     * Set Title
     *
     * @param string $submitterTitle
     * @return $this
     */
    public function setSubmitterTitle($submitterTitle)
    {
        $this->submitterTitle = $submitterTitle;

        return $this;
    }

    /**
     * Set Street address
     *
     * @param string $submitterAddress
     * @return $this
     */
    public function setSubmitterAddress($submitterAddress)
    {
        $this->submitterAddress = $submitterAddress;

        return $this;
    }

    /**
     * Set City
     *
     * @param string $submitterCity
     * @return $this
     */
    public function setSubmitterCity($submitterCity)
    {
        $this->submitterCity = $submitterCity;

        return $this;
    }

    /**
     * Set State/Province
     *
     * @param string $submitterState
     * @return $this
     */
    public function setSubmitterState($submitterState)
    {
        $this->submitterState = $submitterState;

        return $this;
    }

    /**
     * Set Postal Code
     *
     * @param string $submitterPostalcode
     * @return $this
     */
    public function setSubmitterPostalcode($submitterPostalcode)
    {
        $this->submitterPostalcode = $submitterPostalcode;

        return $this;
    }

    /**
     * Set Zip code plus 4
     *
     * @param string $submitterPlus4
     * @return $this
     */
    public function setSubmitterPlus4($submitterPlus4)
    {
        $this->submitterPlus4 = $submitterPlus4;

        return $this;
    }

    /**
     * Set County
     *
     * @param string $submitterCounty
     * @return $this
     */
    public function setSubmitterCounty($submitterCounty)
    {
        $this->submitterCounty = $submitterCounty;

        return $this;
    }

    /**
     * Set Country
     *
     * @param integer $submitterCountry
     * @return $this
     */
    public function setSubmitterCountry($submitterCountry)
    {
        $this->submitterCountry = $submitterCountry;

        return $this;
    }

    /**
     * Set Home phone number
     *
     * @param phone $submitterPhoneHome
     * @return $this
     */
    public function setSubmitterPhoneHome($submitterPhoneHome)
    {
        $this->submitterPhoneHome = $submitterPhoneHome;

        return $this;
    }

    /**
     * Set Work phone number
     *
     * @param phone $submitterPhoneWork
     * @return $this
     */
    public function setSubmitterPhoneWork($submitterPhoneWork)
    {
        $this->submitterPhoneWork = $submitterPhoneWork;

        return $this;
    }

    /**
     * Set Work phone extension
     *
     * @param string $submitterPhoneWorkExt
     * @return $this
     */
    public function setSubmitterPhoneWorkExt($submitterPhoneWorkExt)
    {
        $this->submitterPhoneWorkExt = $submitterPhoneWorkExt;

        return $this;
    }

    /**
     * Set Cell phone number
     *
     * @param phone $submitterPhoneCell
     * @return $this
     */
    public function setSubmitterPhoneCell($submitterPhoneCell)
    {
        $this->submitterPhoneCell = $submitterPhoneCell;

        return $this;
    }

    /**
     * Set Fax number
     *
     * @param phone $submitterFax
     * @return $this
     */
    public function setSubmitterFax($submitterFax)
    {
        $this->submitterFax = $submitterFax;

        return $this;
    }

    /**
     * Set Email address
     *
     * @param email $submitterEmail
     * @return $this
     */
    public function setSubmitterEmail($submitterEmail)
    {
        $this->submitterEmail = $submitterEmail;

        return $this;
    }

    /**
     * Set Alternate email address
     *
     * @param email $submitterEmailAlt
     * @return $this
     */
    public function setSubmitterEmailAlt($submitterEmailAlt)
    {
        $this->submitterEmailAlt = $submitterEmailAlt;

        return $this;
    }

    /**
     * Set Pager email address
     *
     * @param email $submitterEmailPager
     * @return $this
     */
    public function setSubmitterEmailPager($submitterEmailPager)
    {
        $this->submitterEmailPager = $submitterEmailPager;

        return $this;
    }

    /**
     * Set Company
     *
     * @param string $submitterCompany
     * @return $this
     */
    public function setSubmitterCompany($submitterCompany)
    {
        $this->submitterCompany = $submitterCompany;

        return $this;
    }

    /**
     * Set Referred by
     *
     * @param string $submitterReferredBy
     * @return $this
     */
    public function setSubmitterReferredBy($submitterReferredBy)
    {
        $this->submitterReferredBy = $submitterReferredBy;

        return $this;
    }

    /**
     * Set Carrier
     *
     * @param string $submitterCarrier
     * @return $this
     */
    public function setSubmitterCarrier($submitterCarrier)
    {
        $this->submitterCarrier = $submitterCarrier;

        return $this;
    }

    /**
     * Set Number of bounced email messages
     *
     * @param int $submitterBounces
     * @return $this
     */
    public function setSubmitterBounces($submitterBounces)
    {
        $this->submitterBounces = $submitterBounces;

        return $this;
    }

    /**
     * Set Send mail
     *
     * @param string $submitterSendMail
     * @return $this
     */
    public function setSubmitterSendMail($submitterSendMail)
    {
        $this->submitterSendMail = $submitterSendMail;

        return $this;
    }

    /**
     * Set Active
     *
     * @param string $submitterActive
     * @return $this
     */
    public function setSubmitterActive($submitterActive)
    {
        $this->submitterActive = $submitterActive;

        return $this;
    }

    /**
     * Set Comment
     *
     * @param string $submitterComment
     * @return $this
     */
    public function setSubmitterComment($submitterComment)
    {
        $this->submitterComment = $submitterComment;

        return $this;
    }

    /**
     * Set Transportation
     *
     * @param string $submitterTransportation
     * @return $this
     */
    public function setSubmitterTransportation($submitterTransportation)
    {
        $this->submitterTransportation = $submitterTransportation;

        return $this;
    }

    /**
     * Set Availability
     *
     * @param string $submitterAvailability
     * @return $this
     */
    public function setSubmitterAvailability($submitterAvailability)
    {
        $this->submitterAvailability = $submitterAvailability;

        return $this;
    }

    /**
     * Set Caretaker public
     *
     * @param string $submitterCaretakerPublic
     * @return $this
     */
    public function setSubmitterCaretakerPublic($submitterCaretakerPublic)
    {
        $this->submitterCaretakerPublic = $submitterCaretakerPublic;

        return $this;
    }

    /**
     * Set Coalition member
     *
     * @param string $submitterCoalitionMember
     * @return $this
     */
    public function setSubmitterCoalitionMember($submitterCoalitionMember)
    {
        $this->submitterCoalitionMember = $submitterCoalitionMember;

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
        if ($this->submittedformID !== null) $parameterArray['submittedformID'] = $this->submittedformID;
        if ($this->submittedformFormID !== null) $parameterArray['submittedformFormID'] = $this->submittedformFormID;
        if ($this->submittedformAnimalID !== null) $parameterArray['submittedformAnimalID'] = $this->submittedformAnimalID;
        if ($this->submittedformAssignedTo !== null) $parameterArray['submittedformAssignedTo'] = $this->submittedformAssignedTo;
        if ($this->submittedformAssignedToID !== null) $parameterArray['submittedformAssignedToID'] = $this->submittedformAssignedToID;
        if ($this->submittedformCommentsCount !== null) $parameterArray['submittedformCommentsCount'] = $this->submittedformCommentsCount;
        if ($this->submittedformCommentsInline !== null) $parameterArray['submittedformCommentsInline'] = $this->submittedformCommentsInline;
        if ($this->submittedformCompleted !== null) $parameterArray['submittedformCompleted'] = $this->submittedformCompleted;
        if ($this->submittedformUpdated !== null) $parameterArray['submittedformUpdated'] = $this->submittedformUpdated;
        if ($this->submittedformFormName !== null) $parameterArray['submittedformFormName'] = $this->submittedformFormName;
        if ($this->submittedformPending !== null) $parameterArray['submittedformPending'] = $this->submittedformPending;
        if ($this->submittedformStatus !== null) $parameterArray['submittedformStatus'] = $this->submittedformStatus;
        if ($this->submittedformStatusID !== null) $parameterArray['submittedformStatusID'] = $this->submittedformStatusID;
        if ($this->submittedformAnswers !== null) $parameterArray['submittedformAnswers'] = $this->submittedformAnswers;
        if ($this->submitterID !== null) $parameterArray['submitterID'] = $this->submitterID;
        if ($this->submitterClass !== null) $parameterArray['submitterClass'] = $this->submitterClass;
        if ($this->submitterSalutation !== null) $parameterArray['submitterSalutation'] = $this->submitterSalutation;
        if ($this->submitterName !== null) $parameterArray['submitterName'] = $this->submitterName;
        if ($this->submitterFirstname !== null) $parameterArray['submitterFirstname'] = $this->submitterFirstname;
        if ($this->submitterLastname !== null) $parameterArray['submitterLastname'] = $this->submitterLastname;
        if ($this->submitterTitle !== null) $parameterArray['submitterTitle'] = $this->submitterTitle;
        if ($this->submitterAddress !== null) $parameterArray['submitterAddress'] = $this->submitterAddress;
        if ($this->submitterCity !== null) $parameterArray['submitterCity'] = $this->submitterCity;
        if ($this->submitterState !== null) $parameterArray['submitterState'] = $this->submitterState;
        if ($this->submitterPostalcode !== null) $parameterArray['submitterPostalcode'] = $this->submitterPostalcode;
        if ($this->submitterPlus4 !== null) $parameterArray['submitterPlus4'] = $this->submitterPlus4;
        if ($this->submitterCounty !== null) $parameterArray['submitterCounty'] = $this->submitterCounty;
        if ($this->submitterCountry !== null) $parameterArray['submitterCountry'] = $this->submitterCountry;
        if ($this->submitterPhoneHome !== null) $parameterArray['submitterPhoneHome'] = $this->submitterPhoneHome;
        if ($this->submitterPhoneWork !== null) $parameterArray['submitterPhoneWork'] = $this->submitterPhoneWork;
        if ($this->submitterPhoneWorkExt !== null) $parameterArray['submitterPhoneWorkExt'] = $this->submitterPhoneWorkExt;
        if ($this->submitterPhoneCell !== null) $parameterArray['submitterPhoneCell'] = $this->submitterPhoneCell;
        if ($this->submitterFax !== null) $parameterArray['submitterFax'] = $this->submitterFax;
        if ($this->submitterEmail !== null) $parameterArray['submitterEmail'] = $this->submitterEmail;
        if ($this->submitterEmailAlt !== null) $parameterArray['submitterEmailAlt'] = $this->submitterEmailAlt;
        if ($this->submitterEmailPager !== null) $parameterArray['submitterEmailPager'] = $this->submitterEmailPager;
        if ($this->submitterCompany !== null) $parameterArray['submitterCompany'] = $this->submitterCompany;
        if ($this->submitterReferredBy !== null) $parameterArray['submitterReferredBy'] = $this->submitterReferredBy;
        if ($this->submitterCarrier !== null) $parameterArray['submitterCarrier'] = $this->submitterCarrier;
        if ($this->submitterBounces !== null) $parameterArray['submitterBounces'] = $this->submitterBounces;
        if ($this->submitterSendMail !== null) $parameterArray['submitterSendMail'] = $this->submitterSendMail;
        if ($this->submitterActive !== null) $parameterArray['submitterActive'] = $this->submitterActive;
        if ($this->submitterComment !== null) $parameterArray['submitterComment'] = $this->submitterComment;
        if ($this->submitterTransportation !== null) $parameterArray['submitterTransportation'] = $this->submitterTransportation;
        if ($this->submitterAvailability !== null) $parameterArray['submitterAvailability'] = $this->submitterAvailability;
        if ($this->submitterCaretakerPublic !== null) $parameterArray['submitterCaretakerPublic'] = $this->submitterCaretakerPublic;
        if ($this->submitterCoalitionMember !== null) $parameterArray['submitterCoalitionMember'] = $this->submitterCoalitionMember;

        $this->addSearchParameters($parameterArray);

    }
}
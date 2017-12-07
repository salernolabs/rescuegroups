<?php
/**
 * Contacts Add Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:38
 */
namespace RescueGroups\Requests\Objects\Contacts;

class Add implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
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
     * Coalition member
     * @var string
     */
    private $contactCoalitionMember = null;

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
     * Send website invitation
     * @var string
     */
    private $contactSendInvite = null;

    /**
     * Groups
     * @var integer
     */
    private $contactGroups = null;


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
        return 'contacts';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'add';
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
     * Set Send website invitation
     *
     * @param string $contactSendInvite
     * @return $this
     */
    public function setContactSendInvite($contactSendInvite)
    {
        $this->contactSendInvite = $contactSendInvite;

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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->contactClass !== null) $parameterArray['contactClass'] = $this->contactClass;
        if ($this->contactSalutation !== null) $parameterArray['contactSalutation'] = $this->contactSalutation;
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
        if ($this->contactSendMail !== null) $parameterArray['contactSendMail'] = $this->contactSendMail;
        if ($this->contactActive !== null) $parameterArray['contactActive'] = $this->contactActive;
        if ($this->contactComment !== null) $parameterArray['contactComment'] = $this->contactComment;
        if ($this->contactCoalitionMember !== null) $parameterArray['contactCoalitionMember'] = $this->contactCoalitionMember;
        if ($this->contactTransportation !== null) $parameterArray['contactTransportation'] = $this->contactTransportation;
        if ($this->contactAvailability !== null) $parameterArray['contactAvailability'] = $this->contactAvailability;
        if ($this->contactCaretakerPublic !== null) $parameterArray['contactCaretakerPublic'] = $this->contactCaretakerPublic;
        if ($this->contactSendInvite !== null) $parameterArray['contactSendInvite'] = $this->contactSendInvite;
        if ($this->contactGroups !== null) $parameterArray['contactGroups'] = $this->contactGroups;

    }
}
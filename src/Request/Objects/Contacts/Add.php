<?php
/**
 * Contacts Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Contacts;

class Add extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'contacts';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'add';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Class
     *
     * @var string
     */
    private $contactClass = null;

    /**
     * Salutation
     *
     * @var string
     */
    private $contactSalutation = null;

    /**
     * First name
     *
     * @var string
     */
    private $contactFirstname = null;

    /**
     * Last name
     *
     * @var string
     */
    private $contactLastname = null;

    /**
     * Title
     *
     * @var string
     */
    private $contactTitle = null;

    /**
     * Street address
     *
     * @var string
     */
    private $contactAddress = null;

    /**
     * City
     *
     * @var string
     */
    private $contactCity = null;

    /**
     * State/Province
     *
     * @var string
     */
    private $contactState = null;

    /**
     * Postal Code
     *
     * @var string
     */
    private $contactPostalcode = null;

    /**
     * Zip code plus 4
     *
     * @var string
     */
    private $contactPlus4 = null;

    /**
     * County
     *
     * @var string
     */
    private $contactCounty = null;

    /**
     * Country
     *
     * @var integer
     */
    private $contactCountry = null;

    /**
     * Home phone number
     *
     * @var string
     */
    private $contactPhoneHome = null;

    /**
     * Work phone number
     *
     * @var string
     */
    private $contactPhoneWork = null;

    /**
     * Work phone extension
     *
     * @var string
     */
    private $contactPhoneWorkExt = null;

    /**
     * Cell phone number
     *
     * @var string
     */
    private $contactPhoneCell = null;

    /**
     * Fax number
     *
     * @var string
     */
    private $contactFax = null;

    /**
     * Email address
     *
     * @var string
     */
    private $contactEmail = null;

    /**
     * Alternate email address
     *
     * @var string
     */
    private $contactEmailAlt = null;

    /**
     * Pager email address
     *
     * @var string
     */
    private $contactEmailPager = null;

    /**
     * Company
     *
     * @var string
     */
    private $contactCompany = null;

    /**
     * Referred by
     *
     * @var string
     */
    private $contactReferredBy = null;

    /**
     * Carrier
     *
     * @var string
     */
    private $contactCarrier = null;

    /**
     * Send mail
     *
     * @var string
     */
    private $contactSendMail = null;

    /**
     * Active
     *
     * @var string
     */
    private $contactActive = null;

    /**
     * Comment
     *
     * @var string
     */
    private $contactComment = null;

    /**
     * Coalition member
     *
     * @var string
     */
    private $contactCoalitionMember = null;

    /**
     * Transportation
     *
     * @var string
     */
    private $contactTransportation = null;

    /**
     * Availability
     *
     * @var string
     */
    private $contactAvailability = null;

    /**
     * Caretaker public
     *
     * @var string
     */
    private $contactCaretakerPublic = null;

    /**
     * Send website invitation
     *
     * @var string
     */
    private $contactSendInvite = null;

    /**
     * Groups
     *
     * @var integer
     */
    private $contactGroups = null;


    /**
     * Set Class
     *
     * @param string $value
     * @return $this
     */
    public function setContactClass($value)
    {
        $this->contactClass = $value;

        return $this;
    }

    /**
     * Set Salutation
     *
     * @param string $value
     * @return $this
     */
    public function setContactSalutation($value)
    {
        $this->contactSalutation = $value;

        return $this;
    }

    /**
     * Set First name
     *
     * @param string $value
     * @return $this
     */
    public function setContactFirstname($value)
    {
        $this->contactFirstname = $value;

        return $this;
    }

    /**
     * Set Last name
     *
     * @param string $value
     * @return $this
     */
    public function setContactLastname($value)
    {
        $this->contactLastname = $value;

        return $this;
    }

    /**
     * Set Title
     *
     * @param string $value
     * @return $this
     */
    public function setContactTitle($value)
    {
        $this->contactTitle = $value;

        return $this;
    }

    /**
     * Set Street address
     *
     * @param string $value
     * @return $this
     */
    public function setContactAddress($value)
    {
        $this->contactAddress = $value;

        return $this;
    }

    /**
     * Set City
     *
     * @param string $value
     * @return $this
     */
    public function setContactCity($value)
    {
        $this->contactCity = $value;

        return $this;
    }

    /**
     * Set State/Province
     *
     * @param string $value
     * @return $this
     */
    public function setContactState($value)
    {
        $this->contactState = $value;

        return $this;
    }

    /**
     * Set Postal Code
     *
     * @param string $value
     * @return $this
     */
    public function setContactPostalcode($value)
    {
        $this->contactPostalcode = $value;

        return $this;
    }

    /**
     * Set Zip code plus 4
     *
     * @param string $value
     * @return $this
     */
    public function setContactPlus4($value)
    {
        $this->contactPlus4 = $value;

        return $this;
    }

    /**
     * Set County
     *
     * @param string $value
     * @return $this
     */
    public function setContactCounty($value)
    {
        $this->contactCounty = $value;

        return $this;
    }

    /**
     * Set Country
     *
     * @param integer $value
     * @return $this
     */
    public function setContactCountry($value)
    {
        $this->contactCountry = $value;

        return $this;
    }

    /**
     * Set Home phone number
     *
     * @param string $value
     * @return $this
     */
    public function setContactPhoneHome($value)
    {
        $this->contactPhoneHome = $value;

        return $this;
    }

    /**
     * Set Work phone number
     *
     * @param string $value
     * @return $this
     */
    public function setContactPhoneWork($value)
    {
        $this->contactPhoneWork = $value;

        return $this;
    }

    /**
     * Set Work phone extension
     *
     * @param string $value
     * @return $this
     */
    public function setContactPhoneWorkExt($value)
    {
        $this->contactPhoneWorkExt = $value;

        return $this;
    }

    /**
     * Set Cell phone number
     *
     * @param string $value
     * @return $this
     */
    public function setContactPhoneCell($value)
    {
        $this->contactPhoneCell = $value;

        return $this;
    }

    /**
     * Set Fax number
     *
     * @param string $value
     * @return $this
     */
    public function setContactFax($value)
    {
        $this->contactFax = $value;

        return $this;
    }

    /**
     * Set Email address
     *
     * @param string $value
     * @return $this
     */
    public function setContactEmail($value)
    {
        $this->contactEmail = $value;

        return $this;
    }

    /**
     * Set Alternate email address
     *
     * @param string $value
     * @return $this
     */
    public function setContactEmailAlt($value)
    {
        $this->contactEmailAlt = $value;

        return $this;
    }

    /**
     * Set Pager email address
     *
     * @param string $value
     * @return $this
     */
    public function setContactEmailPager($value)
    {
        $this->contactEmailPager = $value;

        return $this;
    }

    /**
     * Set Company
     *
     * @param string $value
     * @return $this
     */
    public function setContactCompany($value)
    {
        $this->contactCompany = $value;

        return $this;
    }

    /**
     * Set Referred by
     *
     * @param string $value
     * @return $this
     */
    public function setContactReferredBy($value)
    {
        $this->contactReferredBy = $value;

        return $this;
    }

    /**
     * Set Carrier
     *
     * @param string $value
     * @return $this
     */
    public function setContactCarrier($value)
    {
        $this->contactCarrier = $value;

        return $this;
    }

    /**
     * Set Send mail
     *
     * @param string $value
     * @return $this
     */
    public function setContactSendMail($value)
    {
        $this->contactSendMail = $value;

        return $this;
    }

    /**
     * Set Active
     *
     * @param string $value
     * @return $this
     */
    public function setContactActive($value)
    {
        $this->contactActive = $value;

        return $this;
    }

    /**
     * Set Comment
     *
     * @param string $value
     * @return $this
     */
    public function setContactComment($value)
    {
        $this->contactComment = $value;

        return $this;
    }

    /**
     * Set Coalition member
     *
     * @param string $value
     * @return $this
     */
    public function setContactCoalitionMember($value)
    {
        $this->contactCoalitionMember = $value;

        return $this;
    }

    /**
     * Set Transportation
     *
     * @param string $value
     * @return $this
     */
    public function setContactTransportation($value)
    {
        $this->contactTransportation = $value;

        return $this;
    }

    /**
     * Set Availability
     *
     * @param string $value
     * @return $this
     */
    public function setContactAvailability($value)
    {
        $this->contactAvailability = $value;

        return $this;
    }

    /**
     * Set Caretaker public
     *
     * @param string $value
     * @return $this
     */
    public function setContactCaretakerPublic($value)
    {
        $this->contactCaretakerPublic = $value;

        return $this;
    }

    /**
     * Set Send website invitation
     *
     * @param string $value
     * @return $this
     */
    public function setContactSendInvite($value)
    {
        $this->contactSendInvite = $value;

        return $this;
    }

    /**
     * Set Groups
     *
     * @param integer $value
     * @return $this
     */
    public function setContactGroups($value)
    {
        $this->contactGroups = $value;

        return $this;
    }


    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->contactClass !== null) $parameterArray['values'][] = ["contactClass"=>$this->contactClass];
        if ($this->contactSalutation !== null) $parameterArray['values'][] = ["contactSalutation"=>$this->contactSalutation];
        if ($this->contactFirstname !== null) $parameterArray['values'][] = ["contactFirstname"=>$this->contactFirstname];
        if ($this->contactLastname !== null) $parameterArray['values'][] = ["contactLastname"=>$this->contactLastname];
        if ($this->contactTitle !== null) $parameterArray['values'][] = ["contactTitle"=>$this->contactTitle];
        if ($this->contactAddress !== null) $parameterArray['values'][] = ["contactAddress"=>$this->contactAddress];
        if ($this->contactCity !== null) $parameterArray['values'][] = ["contactCity"=>$this->contactCity];
        if ($this->contactState !== null) $parameterArray['values'][] = ["contactState"=>$this->contactState];
        if ($this->contactPostalcode !== null) $parameterArray['values'][] = ["contactPostalcode"=>$this->contactPostalcode];
        if ($this->contactPlus4 !== null) $parameterArray['values'][] = ["contactPlus4"=>$this->contactPlus4];
        if ($this->contactCounty !== null) $parameterArray['values'][] = ["contactCounty"=>$this->contactCounty];
        if ($this->contactCountry !== null) $parameterArray['values'][] = ["contactCountry"=>$this->contactCountry];
        if ($this->contactPhoneHome !== null) $parameterArray['values'][] = ["contactPhoneHome"=>$this->contactPhoneHome];
        if ($this->contactPhoneWork !== null) $parameterArray['values'][] = ["contactPhoneWork"=>$this->contactPhoneWork];
        if ($this->contactPhoneWorkExt !== null) $parameterArray['values'][] = ["contactPhoneWorkExt"=>$this->contactPhoneWorkExt];
        if ($this->contactPhoneCell !== null) $parameterArray['values'][] = ["contactPhoneCell"=>$this->contactPhoneCell];
        if ($this->contactFax !== null) $parameterArray['values'][] = ["contactFax"=>$this->contactFax];
        if ($this->contactEmail !== null) $parameterArray['values'][] = ["contactEmail"=>$this->contactEmail];
        if ($this->contactEmailAlt !== null) $parameterArray['values'][] = ["contactEmailAlt"=>$this->contactEmailAlt];
        if ($this->contactEmailPager !== null) $parameterArray['values'][] = ["contactEmailPager"=>$this->contactEmailPager];
        if ($this->contactCompany !== null) $parameterArray['values'][] = ["contactCompany"=>$this->contactCompany];
        if ($this->contactReferredBy !== null) $parameterArray['values'][] = ["contactReferredBy"=>$this->contactReferredBy];
        if ($this->contactCarrier !== null) $parameterArray['values'][] = ["contactCarrier"=>$this->contactCarrier];
        if ($this->contactSendMail !== null) $parameterArray['values'][] = ["contactSendMail"=>$this->contactSendMail];
        if ($this->contactActive !== null) $parameterArray['values'][] = ["contactActive"=>$this->contactActive];
        if ($this->contactComment !== null) $parameterArray['values'][] = ["contactComment"=>$this->contactComment];
        if ($this->contactCoalitionMember !== null) $parameterArray['values'][] = ["contactCoalitionMember"=>$this->contactCoalitionMember];
        if ($this->contactTransportation !== null) $parameterArray['values'][] = ["contactTransportation"=>$this->contactTransportation];
        if ($this->contactAvailability !== null) $parameterArray['values'][] = ["contactAvailability"=>$this->contactAvailability];
        if ($this->contactCaretakerPublic !== null) $parameterArray['values'][] = ["contactCaretakerPublic"=>$this->contactCaretakerPublic];
        if ($this->contactSendInvite !== null) $parameterArray['values'][] = ["contactSendInvite"=>$this->contactSendInvite];
        if ($this->contactGroups !== null) $parameterArray['values'][] = ["contactGroups"=>$this->contactGroups];
    }
}
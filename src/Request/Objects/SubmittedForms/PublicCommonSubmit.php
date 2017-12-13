<?php
/**
 * SubmittedForms PublicCommonSubmit Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\SubmittedForms;

class PublicCommonSubmit implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Animal
     * @var integer
     */
    private $submittedformAnimalID = null;

    /**
     * Salutation
     * @var string
     */
    private $submitterSalutation = null;

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
     * @var string
     */
    private $submitterPhoneHome = null;

    /**
     * Work phone number
     * @var string
     */
    private $submitterPhoneWork = null;

    /**
     * Work phone extension
     * @var string
     */
    private $submitterPhoneWorkExt = null;

    /**
     * Cell phone number
     * @var string
     */
    private $submitterPhoneCell = null;

    /**
     * Fax number
     * @var string
     */
    private $submitterFax = null;

    /**
     * Email address
     * @var string
     */
    private $submitterEmail = null;

    /**
     * Alternate email address
     * @var string
     */
    private $submitterEmailAlt = null;

    /**
     * Pager email address
     * @var string
     */
    private $submitterEmailPager = null;

    /**
     * Referred by
     * @var string
     */
    private $submitterReferredBy = null;

    /**
     * Answers
     * @var string
     */
    private $submittedformAnswers = null;


    /**
     * @return bool
     */
    public function loginRequired()
    {
        return true;
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
        return 'publicCommonSubmit';
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
     * @param string $submitterPhoneHome
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
     * @param string $submitterPhoneWork
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
     * @param string $submitterPhoneCell
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
     * @param string $submitterFax
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
     * @param string $submitterEmail
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
     * @param string $submitterEmailAlt
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
     * @param string $submitterEmailPager
     * @return $this
     */
    public function setSubmitterEmailPager($submitterEmailPager)
    {
        $this->submitterEmailPager = $submitterEmailPager;

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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->submittedformAnimalID !== null) $parameterArray['submittedformAnimalID'] = $this->submittedformAnimalID;
        if ($this->submitterSalutation !== null) $parameterArray['submitterSalutation'] = $this->submitterSalutation;
        if ($this->submitterFirstname !== null) $parameterArray['submitterFirstname'] = $this->submitterFirstname;
        if ($this->submitterLastname !== null) $parameterArray['submitterLastname'] = $this->submitterLastname;
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
        if ($this->submitterReferredBy !== null) $parameterArray['submitterReferredBy'] = $this->submitterReferredBy;
        if ($this->submittedformAnswers !== null) $parameterArray['submittedformAnswers'] = $this->submittedformAnswers;

    }
}
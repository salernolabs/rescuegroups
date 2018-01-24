<?php
/**
 * SubmittedForms PublicCommonSubmit Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\SubmittedForms;

class PublicCommonSubmit extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'submittedforms';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'publicCommonSubmit';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = false;

    /**
     * Animal
     *
     * @var integer
     */
    private $animalId = null;

    /**
     * Salutation
     *
     * @var string
     */
    private $submitterSalutation = null;

    /**
     * First name
     *
     * @var string
     */
    private $submitterFirstname = null;

    /**
     * Last name
     *
     * @var string
     */
    private $submitterLastname = null;

    /**
     * Street address
     *
     * @var string
     */
    private $submitterAddress = null;

    /**
     * City
     *
     * @var string
     */
    private $submitterCity = null;

    /**
     * State/Province
     *
     * @var string
     */
    private $submitterState = null;

    /**
     * Postal Code
     *
     * @var string
     */
    private $submitterPostalcode = null;

    /**
     * Zip code plus 4
     *
     * @var string
     */
    private $submitterPlus4 = null;

    /**
     * County
     *
     * @var string
     */
    private $submitterCounty = null;

    /**
     * Country
     *
     * @var integer
     */
    private $submitterCountry = null;

    /**
     * Home phone number
     *
     * @var string
     */
    private $submitterPhoneHome = null;

    /**
     * Work phone number
     *
     * @var string
     */
    private $submitterPhoneWork = null;

    /**
     * Work phone extension
     *
     * @var string
     */
    private $submitterPhoneWorkExt = null;

    /**
     * Cell phone number
     *
     * @var string
     */
    private $submitterPhoneCell = null;

    /**
     * Fax number
     *
     * @var string
     */
    private $submitterFax = null;

    /**
     * Email address
     *
     * @var string
     */
    private $submitterEmail = null;

    /**
     * Alternate email address
     *
     * @var string
     */
    private $submitterEmailAlt = null;

    /**
     * Pager email address
     *
     * @var string
     */
    private $submitterEmailPager = null;

    /**
     * Referred by
     *
     * @var string
     */
    private $submitterReferredBy = null;

    /**
     * Answers
     *
     * @var string
     */
    private $answers = null;


    /**
     * Set Animal
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalId($value)
    {
        $this->animalId = $value;

        return $this;
    }

    /**
     * Set Salutation
     *
     * @param string $value
     * @return $this
     */
    public function setSubmitterSalutation($value)
    {
        $this->submitterSalutation = $value;

        return $this;
    }

    /**
     * Set First name
     *
     * @param string $value
     * @return $this
     */
    public function setSubmitterFirstname($value)
    {
        $this->submitterFirstname = $value;

        return $this;
    }

    /**
     * Set Last name
     *
     * @param string $value
     * @return $this
     */
    public function setSubmitterLastname($value)
    {
        $this->submitterLastname = $value;

        return $this;
    }

    /**
     * Set Street address
     *
     * @param string $value
     * @return $this
     */
    public function setSubmitterAddress($value)
    {
        $this->submitterAddress = $value;

        return $this;
    }

    /**
     * Set City
     *
     * @param string $value
     * @return $this
     */
    public function setSubmitterCity($value)
    {
        $this->submitterCity = $value;

        return $this;
    }

    /**
     * Set State/Province
     *
     * @param string $value
     * @return $this
     */
    public function setSubmitterState($value)
    {
        $this->submitterState = $value;

        return $this;
    }

    /**
     * Set Postal Code
     *
     * @param string $value
     * @return $this
     */
    public function setSubmitterPostalcode($value)
    {
        $this->submitterPostalcode = $value;

        return $this;
    }

    /**
     * Set Zip code plus 4
     *
     * @param string $value
     * @return $this
     */
    public function setSubmitterPlus4($value)
    {
        $this->submitterPlus4 = $value;

        return $this;
    }

    /**
     * Set County
     *
     * @param string $value
     * @return $this
     */
    public function setSubmitterCounty($value)
    {
        $this->submitterCounty = $value;

        return $this;
    }

    /**
     * Set Country
     *
     * @param integer $value
     * @return $this
     */
    public function setSubmitterCountry($value)
    {
        $this->submitterCountry = $value;

        return $this;
    }

    /**
     * Set Home phone number
     *
     * @param string $value
     * @return $this
     */
    public function setSubmitterPhoneHome($value)
    {
        $this->submitterPhoneHome = $value;

        return $this;
    }

    /**
     * Set Work phone number
     *
     * @param string $value
     * @return $this
     */
    public function setSubmitterPhoneWork($value)
    {
        $this->submitterPhoneWork = $value;

        return $this;
    }

    /**
     * Set Work phone extension
     *
     * @param string $value
     * @return $this
     */
    public function setSubmitterPhoneWorkExt($value)
    {
        $this->submitterPhoneWorkExt = $value;

        return $this;
    }

    /**
     * Set Cell phone number
     *
     * @param string $value
     * @return $this
     */
    public function setSubmitterPhoneCell($value)
    {
        $this->submitterPhoneCell = $value;

        return $this;
    }

    /**
     * Set Fax number
     *
     * @param string $value
     * @return $this
     */
    public function setSubmitterFax($value)
    {
        $this->submitterFax = $value;

        return $this;
    }

    /**
     * Set Email address
     *
     * @param string $value
     * @return $this
     */
    public function setSubmitterEmail($value)
    {
        $this->submitterEmail = $value;

        return $this;
    }

    /**
     * Set Alternate email address
     *
     * @param string $value
     * @return $this
     */
    public function setSubmitterEmailAlt($value)
    {
        $this->submitterEmailAlt = $value;

        return $this;
    }

    /**
     * Set Pager email address
     *
     * @param string $value
     * @return $this
     */
    public function setSubmitterEmailPager($value)
    {
        $this->submitterEmailPager = $value;

        return $this;
    }

    /**
     * Set Referred by
     *
     * @param string $value
     * @return $this
     */
    public function setSubmitterReferredBy($value)
    {
        $this->submitterReferredBy = $value;

        return $this;
    }

    /**
     * Set Answers
     *
     * @param string $value
     * @return $this
     */
    public function setAnswers($value)
    {
        $this->answers = $value;

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

        $value = [];
        if ($this->animalId !== null) $value["submittedformAnimalID"] = $this->animalId;
        if ($this->submitterSalutation !== null) $value["submitterSalutation"] = $this->submitterSalutation;
        if ($this->submitterFirstname !== null) $value["submitterFirstname"] = $this->submitterFirstname;
        if ($this->submitterLastname !== null) $value["submitterLastname"] = $this->submitterLastname;
        if ($this->submitterAddress !== null) $value["submitterAddress"] = $this->submitterAddress;
        if ($this->submitterCity !== null) $value["submitterCity"] = $this->submitterCity;
        if ($this->submitterState !== null) $value["submitterState"] = $this->submitterState;
        if ($this->submitterPostalcode !== null) $value["submitterPostalcode"] = $this->submitterPostalcode;
        if ($this->submitterPlus4 !== null) $value["submitterPlus4"] = $this->submitterPlus4;
        if ($this->submitterCounty !== null) $value["submitterCounty"] = $this->submitterCounty;
        if ($this->submitterCountry !== null) $value["submitterCountry"] = $this->submitterCountry;
        if ($this->submitterPhoneHome !== null) $value["submitterPhoneHome"] = $this->submitterPhoneHome;
        if ($this->submitterPhoneWork !== null) $value["submitterPhoneWork"] = $this->submitterPhoneWork;
        if ($this->submitterPhoneWorkExt !== null) $value["submitterPhoneWorkExt"] = $this->submitterPhoneWorkExt;
        if ($this->submitterPhoneCell !== null) $value["submitterPhoneCell"] = $this->submitterPhoneCell;
        if ($this->submitterFax !== null) $value["submitterFax"] = $this->submitterFax;
        if ($this->submitterEmail !== null) $value["submitterEmail"] = $this->submitterEmail;
        if ($this->submitterEmailAlt !== null) $value["submitterEmailAlt"] = $this->submitterEmailAlt;
        if ($this->submitterEmailPager !== null) $value["submitterEmailPager"] = $this->submitterEmailPager;
        if ($this->submitterReferredBy !== null) $value["submitterReferredBy"] = $this->submitterReferredBy;
        if ($this->answers !== null) $value["submittedformAnswers"] = $this->answers;

        if (!empty($value)) $parameterArray['values'][] = $value;
    }
}
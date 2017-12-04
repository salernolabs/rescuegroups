<?php
/**
 * Orgs PublicSearch Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Orgs;

class PublicSearch implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $orgID = null;

    /**
     * Location
     * @var string
     */
    private $orgLocation = null;

    /**
     * Name
     * @var string
     */
    private $orgName = null;

    /**
     * Address
     * @var string
     */
    private $orgAddress = null;

    /**
     * City
     * @var string
     */
    private $orgCity = null;

    /**
     * State/Province
     * @var province
     */
    private $orgState = null;

    /**
     * Postal Code
     * @var string
     */
    private $orgPostalcode = null;

    /**
     * Plus 4
     * @var string
     */
    private $orgPlus4 = null;

    /**
     * Country
     * @var integer
     */
    private $orgCountry = null;

    /**
     * Phone
     * @var phone
     */
    private $orgPhone = null;

    /**
     * Fax
     * @var phone
     */
    private $orgFax = null;

    /**
     * Email
     * @var email
     */
    private $orgEmail = null;

    /**
     * Url
     * @var url
     */
    private $orgWebsiteUrl = null;

    /**
     * Facebook Url
     * @var url
     */
    private $orgFacebookUrl = null;

    /**
     * Url
     * @var url
     */
    private $orgAdoptionUrl = null;

    /**
     * Url
     * @var url
     */
    private $orgDonationUrl = null;

    /**
     * Url
     * @var url
     */
    private $orgSponsorshipUrl = null;

    /**
     * Serve Areas
     * @var string
     */
    private $orgServeAreas = null;

    /**
     * Adoption Process
     * @var string
     */
    private $orgAdoptionProcess = null;

    /**
     * About
     * @var string
     */
    private $orgAbout = null;

    /**
     * Services
     * @var string
     */
    private $orgServices = null;

    /**
     * Meet Pets
     * @var string
     */
    private $orgMeetPets = null;

    /**
     * Org Type
     * @var string
     */
    private $orgType = null;

    /**
     * Distance
     * @var int
     */
    private $orgLocationDistance = null;

    /**
     * Accepting common application submissions
     * @var string
     */
    private $orgCommonapplicationAccept = null;


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
        return 'orgs';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'publicSearch';
    }

    /**
     * Set ID
     *
     * @param integer $orgID
     * @return $this
     */
    public function setOrgID($orgID)
    {
        $this->orgID = $orgID;

        return $this;
    }

    /**
     * Set Location
     *
     * @param string $orgLocation
     * @return $this
     */
    public function setOrgLocation($orgLocation)
    {
        $this->orgLocation = $orgLocation;

        return $this;
    }

    /**
     * Set Name
     *
     * @param string $orgName
     * @return $this
     */
    public function setOrgName($orgName)
    {
        $this->orgName = $orgName;

        return $this;
    }

    /**
     * Set Address
     *
     * @param string $orgAddress
     * @return $this
     */
    public function setOrgAddress($orgAddress)
    {
        $this->orgAddress = $orgAddress;

        return $this;
    }

    /**
     * Set City
     *
     * @param string $orgCity
     * @return $this
     */
    public function setOrgCity($orgCity)
    {
        $this->orgCity = $orgCity;

        return $this;
    }

    /**
     * Set State/Province
     *
     * @param province $orgState
     * @return $this
     */
    public function setOrgState($orgState)
    {
        $this->orgState = $orgState;

        return $this;
    }

    /**
     * Set Postal Code
     *
     * @param string $orgPostalcode
     * @return $this
     */
    public function setOrgPostalcode($orgPostalcode)
    {
        $this->orgPostalcode = $orgPostalcode;

        return $this;
    }

    /**
     * Set Plus 4
     *
     * @param string $orgPlus4
     * @return $this
     */
    public function setOrgPlus4($orgPlus4)
    {
        $this->orgPlus4 = $orgPlus4;

        return $this;
    }

    /**
     * Set Country
     *
     * @param integer $orgCountry
     * @return $this
     */
    public function setOrgCountry($orgCountry)
    {
        $this->orgCountry = $orgCountry;

        return $this;
    }

    /**
     * Set Phone
     *
     * @param phone $orgPhone
     * @return $this
     */
    public function setOrgPhone($orgPhone)
    {
        $this->orgPhone = $orgPhone;

        return $this;
    }

    /**
     * Set Fax
     *
     * @param phone $orgFax
     * @return $this
     */
    public function setOrgFax($orgFax)
    {
        $this->orgFax = $orgFax;

        return $this;
    }

    /**
     * Set Email
     *
     * @param email $orgEmail
     * @return $this
     */
    public function setOrgEmail($orgEmail)
    {
        $this->orgEmail = $orgEmail;

        return $this;
    }

    /**
     * Set Url
     *
     * @param url $orgWebsiteUrl
     * @return $this
     */
    public function setOrgWebsiteUrl($orgWebsiteUrl)
    {
        $this->orgWebsiteUrl = $orgWebsiteUrl;

        return $this;
    }

    /**
     * Set Facebook Url
     *
     * @param url $orgFacebookUrl
     * @return $this
     */
    public function setOrgFacebookUrl($orgFacebookUrl)
    {
        $this->orgFacebookUrl = $orgFacebookUrl;

        return $this;
    }

    /**
     * Set Url
     *
     * @param url $orgAdoptionUrl
     * @return $this
     */
    public function setOrgAdoptionUrl($orgAdoptionUrl)
    {
        $this->orgAdoptionUrl = $orgAdoptionUrl;

        return $this;
    }

    /**
     * Set Url
     *
     * @param url $orgDonationUrl
     * @return $this
     */
    public function setOrgDonationUrl($orgDonationUrl)
    {
        $this->orgDonationUrl = $orgDonationUrl;

        return $this;
    }

    /**
     * Set Url
     *
     * @param url $orgSponsorshipUrl
     * @return $this
     */
    public function setOrgSponsorshipUrl($orgSponsorshipUrl)
    {
        $this->orgSponsorshipUrl = $orgSponsorshipUrl;

        return $this;
    }

    /**
     * Set Serve Areas
     *
     * @param string $orgServeAreas
     * @return $this
     */
    public function setOrgServeAreas($orgServeAreas)
    {
        $this->orgServeAreas = $orgServeAreas;

        return $this;
    }

    /**
     * Set Adoption Process
     *
     * @param string $orgAdoptionProcess
     * @return $this
     */
    public function setOrgAdoptionProcess($orgAdoptionProcess)
    {
        $this->orgAdoptionProcess = $orgAdoptionProcess;

        return $this;
    }

    /**
     * Set About
     *
     * @param string $orgAbout
     * @return $this
     */
    public function setOrgAbout($orgAbout)
    {
        $this->orgAbout = $orgAbout;

        return $this;
    }

    /**
     * Set Services
     *
     * @param string $orgServices
     * @return $this
     */
    public function setOrgServices($orgServices)
    {
        $this->orgServices = $orgServices;

        return $this;
    }

    /**
     * Set Meet Pets
     *
     * @param string $orgMeetPets
     * @return $this
     */
    public function setOrgMeetPets($orgMeetPets)
    {
        $this->orgMeetPets = $orgMeetPets;

        return $this;
    }

    /**
     * Set Org Type
     *
     * @param string $orgType
     * @return $this
     */
    public function setOrgType($orgType)
    {
        $this->orgType = $orgType;

        return $this;
    }

    /**
     * Set Distance
     *
     * @param int $orgLocationDistance
     * @return $this
     */
    public function setOrgLocationDistance($orgLocationDistance)
    {
        $this->orgLocationDistance = $orgLocationDistance;

        return $this;
    }

    /**
     * Set Accepting common application submissions
     *
     * @param string $orgCommonapplicationAccept
     * @return $this
     */
    public function setOrgCommonapplicationAccept($orgCommonapplicationAccept)
    {
        $this->orgCommonapplicationAccept = $orgCommonapplicationAccept;

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
        if ($this->orgID !== null) $parameterArray['orgID'] = $this->orgID;
        if ($this->orgLocation !== null) $parameterArray['orgLocation'] = $this->orgLocation;
        if ($this->orgName !== null) $parameterArray['orgName'] = $this->orgName;
        if ($this->orgAddress !== null) $parameterArray['orgAddress'] = $this->orgAddress;
        if ($this->orgCity !== null) $parameterArray['orgCity'] = $this->orgCity;
        if ($this->orgState !== null) $parameterArray['orgState'] = $this->orgState;
        if ($this->orgPostalcode !== null) $parameterArray['orgPostalcode'] = $this->orgPostalcode;
        if ($this->orgPlus4 !== null) $parameterArray['orgPlus4'] = $this->orgPlus4;
        if ($this->orgCountry !== null) $parameterArray['orgCountry'] = $this->orgCountry;
        if ($this->orgPhone !== null) $parameterArray['orgPhone'] = $this->orgPhone;
        if ($this->orgFax !== null) $parameterArray['orgFax'] = $this->orgFax;
        if ($this->orgEmail !== null) $parameterArray['orgEmail'] = $this->orgEmail;
        if ($this->orgWebsiteUrl !== null) $parameterArray['orgWebsiteUrl'] = $this->orgWebsiteUrl;
        if ($this->orgFacebookUrl !== null) $parameterArray['orgFacebookUrl'] = $this->orgFacebookUrl;
        if ($this->orgAdoptionUrl !== null) $parameterArray['orgAdoptionUrl'] = $this->orgAdoptionUrl;
        if ($this->orgDonationUrl !== null) $parameterArray['orgDonationUrl'] = $this->orgDonationUrl;
        if ($this->orgSponsorshipUrl !== null) $parameterArray['orgSponsorshipUrl'] = $this->orgSponsorshipUrl;
        if ($this->orgServeAreas !== null) $parameterArray['orgServeAreas'] = $this->orgServeAreas;
        if ($this->orgAdoptionProcess !== null) $parameterArray['orgAdoptionProcess'] = $this->orgAdoptionProcess;
        if ($this->orgAbout !== null) $parameterArray['orgAbout'] = $this->orgAbout;
        if ($this->orgServices !== null) $parameterArray['orgServices'] = $this->orgServices;
        if ($this->orgMeetPets !== null) $parameterArray['orgMeetPets'] = $this->orgMeetPets;
        if ($this->orgType !== null) $parameterArray['orgType'] = $this->orgType;
        if ($this->orgLocationDistance !== null) $parameterArray['orgLocationDistance'] = $this->orgLocationDistance;
        if ($this->orgCommonapplicationAccept !== null) $parameterArray['orgCommonapplicationAccept'] = $this->orgCommonapplicationAccept;

        $this->addSearchParameters($parameterArray);

    }
}
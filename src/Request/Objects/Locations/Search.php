<?php
/**
 * Locations Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Locations;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $locationID = null;

    /**
     * Name
     * @var string
     */
    private $locationName = null;

    /**
     * Web address
     * @var string
     */
    private $locationUrl = null;

    /**
     * Street address
     * @var string
     */
    private $locationAddress = null;

    /**
     * City
     * @var string
     */
    private $locationCity = null;

    /**
     * State/Province
     * @var string
     */
    private $locationState = null;

    /**
     * Postal Code
     * @var string
     */
    private $locationPostalcode = null;

    /**
     * Country
     * @var integer
     */
    private $locationCountry = null;

    /**
     * Phone
     * @var string
     */
    private $locationPhone = null;

    /**
     * Phone extension
     * @var string
     */
    private $locationPhoneExt = null;

    /**
     * Animals
     * @var string
     */
    private $locationAnimals = null;

    /**
     * Events
     * @var string
     */
    private $locationEvents = null;

    /**
     * Colonies
     * @var string
     */
    private $locationColonies = null;

    /**
     * Meet Requests
     * @var string
     */
    private $locationMeetrequests = null;


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
        return 'locations';
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
     * @param integer $locationID
     * @return $this
     */
    public function setLocationID($locationID)
    {
        $this->locationID = $locationID;

        return $this;
    }

    /**
     * Set Name
     *
     * @param string $locationName
     * @return $this
     */
    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;

        return $this;
    }

    /**
     * Set Web address
     *
     * @param string $locationUrl
     * @return $this
     */
    public function setLocationUrl($locationUrl)
    {
        $this->locationUrl = $locationUrl;

        return $this;
    }

    /**
     * Set Street address
     *
     * @param string $locationAddress
     * @return $this
     */
    public function setLocationAddress($locationAddress)
    {
        $this->locationAddress = $locationAddress;

        return $this;
    }

    /**
     * Set City
     *
     * @param string $locationCity
     * @return $this
     */
    public function setLocationCity($locationCity)
    {
        $this->locationCity = $locationCity;

        return $this;
    }

    /**
     * Set State/Province
     *
     * @param string $locationState
     * @return $this
     */
    public function setLocationState($locationState)
    {
        $this->locationState = $locationState;

        return $this;
    }

    /**
     * Set Postal Code
     *
     * @param string $locationPostalcode
     * @return $this
     */
    public function setLocationPostalcode($locationPostalcode)
    {
        $this->locationPostalcode = $locationPostalcode;

        return $this;
    }

    /**
     * Set Country
     *
     * @param integer $locationCountry
     * @return $this
     */
    public function setLocationCountry($locationCountry)
    {
        $this->locationCountry = $locationCountry;

        return $this;
    }

    /**
     * Set Phone
     *
     * @param string $locationPhone
     * @return $this
     */
    public function setLocationPhone($locationPhone)
    {
        $this->locationPhone = $locationPhone;

        return $this;
    }

    /**
     * Set Phone extension
     *
     * @param string $locationPhoneExt
     * @return $this
     */
    public function setLocationPhoneExt($locationPhoneExt)
    {
        $this->locationPhoneExt = $locationPhoneExt;

        return $this;
    }

    /**
     * Set Animals
     *
     * @param string $locationAnimals
     * @return $this
     */
    public function setLocationAnimals($locationAnimals)
    {
        $this->locationAnimals = $locationAnimals;

        return $this;
    }

    /**
     * Set Events
     *
     * @param string $locationEvents
     * @return $this
     */
    public function setLocationEvents($locationEvents)
    {
        $this->locationEvents = $locationEvents;

        return $this;
    }

    /**
     * Set Colonies
     *
     * @param string $locationColonies
     * @return $this
     */
    public function setLocationColonies($locationColonies)
    {
        $this->locationColonies = $locationColonies;

        return $this;
    }

    /**
     * Set Meet Requests
     *
     * @param string $locationMeetrequests
     * @return $this
     */
    public function setLocationMeetrequests($locationMeetrequests)
    {
        $this->locationMeetrequests = $locationMeetrequests;

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
        if ($this->locationID !== null) $parameterArray['locationID'] = $this->locationID;
        if ($this->locationName !== null) $parameterArray['locationName'] = $this->locationName;
        if ($this->locationUrl !== null) $parameterArray['locationUrl'] = $this->locationUrl;
        if ($this->locationAddress !== null) $parameterArray['locationAddress'] = $this->locationAddress;
        if ($this->locationCity !== null) $parameterArray['locationCity'] = $this->locationCity;
        if ($this->locationState !== null) $parameterArray['locationState'] = $this->locationState;
        if ($this->locationPostalcode !== null) $parameterArray['locationPostalcode'] = $this->locationPostalcode;
        if ($this->locationCountry !== null) $parameterArray['locationCountry'] = $this->locationCountry;
        if ($this->locationPhone !== null) $parameterArray['locationPhone'] = $this->locationPhone;
        if ($this->locationPhoneExt !== null) $parameterArray['locationPhoneExt'] = $this->locationPhoneExt;
        if ($this->locationAnimals !== null) $parameterArray['locationAnimals'] = $this->locationAnimals;
        if ($this->locationEvents !== null) $parameterArray['locationEvents'] = $this->locationEvents;
        if ($this->locationColonies !== null) $parameterArray['locationColonies'] = $this->locationColonies;
        if ($this->locationMeetrequests !== null) $parameterArray['locationMeetrequests'] = $this->locationMeetrequests;

        $this->addSearchParameters($parameterArray);

    }
}
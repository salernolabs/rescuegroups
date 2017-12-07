<?php
/**
 * Colonies Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:38
 */
namespace RescueGroups\Requests\Objects\Colonies;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $colonyID = null;

    /**
     * Animals
     * @var string
     */
    private $colonyAnimals = null;

    /**
     * Caretakers
     * @var string
     */
    private $colonyCaretakers = null;

    /**
     * Location
     * @var integer
     */
    private $colonyLocationID = null;

    /**
     * Name
     * @var string
     */
    private $colonyName = null;

    /**
     * Number of animals
     * @var int
     */
    private $colonyTotalAnimals = null;

    /**
     * Registered
     * @var \DateTime
     */
    private $colonyRegisteredDate = null;

    /**
     * Specific location
     * @var string
     */
    private $colonySpecificLocation = null;

    /**
     * Name
     * @var string
     */
    private $locationName = null;

    /**
     * Web address
     * @var url
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
     * @var province
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
     * @var phone
     */
    private $locationPhone = null;

    /**
     * Phone extension
     * @var string
     */
    private $locationPhoneExt = null;

    /**
     * Animals
     * @var int
     */
    private $locationAnimals = null;

    /**
     * Events
     * @var int
     */
    private $locationEvents = null;

    /**
     * Colonies
     * @var int
     */
    private $locationColonies = null;

    /**
     * Meet Requests
     * @var int
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
        return 'colonies';
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
     * @param integer $colonyID
     * @return $this
     */
    public function setColonyID($colonyID)
    {
        $this->colonyID = $colonyID;

        return $this;
    }

    /**
     * Set Animals
     *
     * @param string $colonyAnimals
     * @return $this
     */
    public function setColonyAnimals($colonyAnimals)
    {
        $this->colonyAnimals = $colonyAnimals;

        return $this;
    }

    /**
     * Set Caretakers
     *
     * @param string $colonyCaretakers
     * @return $this
     */
    public function setColonyCaretakers($colonyCaretakers)
    {
        $this->colonyCaretakers = $colonyCaretakers;

        return $this;
    }

    /**
     * Set Location
     *
     * @param integer $colonyLocationID
     * @return $this
     */
    public function setColonyLocationID($colonyLocationID)
    {
        $this->colonyLocationID = $colonyLocationID;

        return $this;
    }

    /**
     * Set Name
     *
     * @param string $colonyName
     * @return $this
     */
    public function setColonyName($colonyName)
    {
        $this->colonyName = $colonyName;

        return $this;
    }

    /**
     * Set Number of animals
     *
     * @param int $colonyTotalAnimals
     * @return $this
     */
    public function setColonyTotalAnimals($colonyTotalAnimals)
    {
        $this->colonyTotalAnimals = $colonyTotalAnimals;

        return $this;
    }

    /**
     * Set Registered
     *
     * @param \DateTime $colonyRegisteredDate
     * @return $this
     */
    public function setColonyRegisteredDate($colonyRegisteredDate)
    {
        $this->colonyRegisteredDate = $colonyRegisteredDate;

        return $this;
    }

    /**
     * Set Specific location
     *
     * @param string $colonySpecificLocation
     * @return $this
     */
    public function setColonySpecificLocation($colonySpecificLocation)
    {
        $this->colonySpecificLocation = $colonySpecificLocation;

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
     * @param url $locationUrl
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
     * @param province $locationState
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
     * @param phone $locationPhone
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
     * @param int $locationAnimals
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
     * @param int $locationEvents
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
     * @param int $locationColonies
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
     * @param int $locationMeetrequests
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
        if ($this->colonyID !== null) $parameterArray['colonyID'] = $this->colonyID;
        if ($this->colonyAnimals !== null) $parameterArray['colonyAnimals'] = $this->colonyAnimals;
        if ($this->colonyCaretakers !== null) $parameterArray['colonyCaretakers'] = $this->colonyCaretakers;
        if ($this->colonyLocationID !== null) $parameterArray['colonyLocationID'] = $this->colonyLocationID;
        if ($this->colonyName !== null) $parameterArray['colonyName'] = $this->colonyName;
        if ($this->colonyTotalAnimals !== null) $parameterArray['colonyTotalAnimals'] = $this->colonyTotalAnimals;
        if ($this->colonyRegisteredDate !== null) $parameterArray['colonyRegisteredDate'] = $this->colonyRegisteredDate;
        if ($this->colonySpecificLocation !== null) $parameterArray['colonySpecificLocation'] = $this->colonySpecificLocation;
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
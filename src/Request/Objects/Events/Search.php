<?php
/**
 * Events Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Events;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $eventID = null;

    /**
     * Name
     * @var string
     */
    private $eventName = null;

    /**
     * Start Date/Time
     * @var \DateTime
     */
    private $eventStart = null;

    /**
     * End Date/Time
     * @var \DateTime
     */
    private $eventEnd = null;

    /**
     * Web address
     * @var url
     */
    private $eventUrl = null;

    /**
     * Description
     * @var string
     */
    private $eventDescription = null;

    /**
     * Location
     * @var integer
     */
    private $eventLocationID = null;

    /**
     * Event animal attendance
     * @var int
     */
    private $eventAnimalAttendance = null;

    /**
     * Event meet requests
     * @var int
     */
    private $eventMeetrequests = null;

    /**
     * Species attending
     * @var integer
     */
    private $eventSpecies = null;

    /**
     * Location
     * @var integer
     */
    private $locationID = null;

    /**
     * Location name
     * @var string
     */
    private $locationName = null;

    /**
     * Location web address
     * @var url
     */
    private $locationUrl = null;

    /**
     * Location street address
     * @var string
     */
    private $locationAddress = null;

    /**
     * Location city
     * @var string
     */
    private $locationCity = null;

    /**
     * Location state/province
     * @var province
     */
    private $locationState = null;

    /**
     * Location postal code
     * @var string
     */
    private $locationPostalcode = null;

    /**
     * Location country
     * @var integer
     */
    private $locationCountry = null;

    /**
     * Location phone
     * @var phone
     */
    private $locationPhone = null;

    /**
     * Location phone extension
     * @var string
     */
    private $locationPhoneExt = null;

    /**
     * Location animals
     * @var int
     */
    private $locationAnimals = null;

    /**
     * Location events
     * @var int
     */
    private $locationEvents = null;

    /**
     * Location colonies
     * @var int
     */
    private $locationColonies = null;

    /**
     * Location meet requests
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
        return 'events';
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
     * @param integer $eventID
     * @return $this
     */
    public function setEventID($eventID)
    {
        $this->eventID = $eventID;

        return $this;
    }

    /**
     * Set Name
     *
     * @param string $eventName
     * @return $this
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;

        return $this;
    }

    /**
     * Set Start Date/Time
     *
     * @param \DateTime $eventStart
     * @return $this
     */
    public function setEventStart($eventStart)
    {
        $this->eventStart = $eventStart;

        return $this;
    }

    /**
     * Set End Date/Time
     *
     * @param \DateTime $eventEnd
     * @return $this
     */
    public function setEventEnd($eventEnd)
    {
        $this->eventEnd = $eventEnd;

        return $this;
    }

    /**
     * Set Web address
     *
     * @param url $eventUrl
     * @return $this
     */
    public function setEventUrl($eventUrl)
    {
        $this->eventUrl = $eventUrl;

        return $this;
    }

    /**
     * Set Description
     *
     * @param string $eventDescription
     * @return $this
     */
    public function setEventDescription($eventDescription)
    {
        $this->eventDescription = $eventDescription;

        return $this;
    }

    /**
     * Set Location
     *
     * @param integer $eventLocationID
     * @return $this
     */
    public function setEventLocationID($eventLocationID)
    {
        $this->eventLocationID = $eventLocationID;

        return $this;
    }

    /**
     * Set Event animal attendance
     *
     * @param int $eventAnimalAttendance
     * @return $this
     */
    public function setEventAnimalAttendance($eventAnimalAttendance)
    {
        $this->eventAnimalAttendance = $eventAnimalAttendance;

        return $this;
    }

    /**
     * Set Event meet requests
     *
     * @param int $eventMeetrequests
     * @return $this
     */
    public function setEventMeetrequests($eventMeetrequests)
    {
        $this->eventMeetrequests = $eventMeetrequests;

        return $this;
    }

    /**
     * Set Species attending
     *
     * @param integer $eventSpecies
     * @return $this
     */
    public function setEventSpecies($eventSpecies)
    {
        $this->eventSpecies = $eventSpecies;

        return $this;
    }

    /**
     * Set Location
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
     * Set Location name
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
     * Set Location web address
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
     * Set Location street address
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
     * Set Location city
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
     * Set Location state/province
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
     * Set Location postal code
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
     * Set Location country
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
     * Set Location phone
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
     * Set Location phone extension
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
     * Set Location animals
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
     * Set Location events
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
     * Set Location colonies
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
     * Set Location meet requests
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
        if ($this->eventID !== null) $parameterArray['eventID'] = $this->eventID;
        if ($this->eventName !== null) $parameterArray['eventName'] = $this->eventName;
        if ($this->eventStart !== null) $parameterArray['eventStart'] = $this->eventStart;
        if ($this->eventEnd !== null) $parameterArray['eventEnd'] = $this->eventEnd;
        if ($this->eventUrl !== null) $parameterArray['eventUrl'] = $this->eventUrl;
        if ($this->eventDescription !== null) $parameterArray['eventDescription'] = $this->eventDescription;
        if ($this->eventLocationID !== null) $parameterArray['eventLocationID'] = $this->eventLocationID;
        if ($this->eventAnimalAttendance !== null) $parameterArray['eventAnimalAttendance'] = $this->eventAnimalAttendance;
        if ($this->eventMeetrequests !== null) $parameterArray['eventMeetrequests'] = $this->eventMeetrequests;
        if ($this->eventSpecies !== null) $parameterArray['eventSpecies'] = $this->eventSpecies;
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
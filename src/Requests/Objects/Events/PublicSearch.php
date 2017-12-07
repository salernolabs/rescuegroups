<?php
/**
 * Events PublicSearch Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:21
 */
namespace RescueGroups\Requests\Objects\Events;

class PublicSearch implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $eventID = null;

    /**
     * Organization
     * @var integer
     */
    private $eventOrgID = null;

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
     * Species attending
     * @var integer
     */
    private $eventSpecies = null;

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
     * Location events
     * @var int
     */
    private $locationEvents = null;

    /**
     * Distance
     * @var int
     */
    private $locationDistance = null;


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
        return 'events';
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
     * @param integer $eventID
     * @return $this
     */
    public function setEventID($eventID)
    {
        $this->eventID = $eventID;

        return $this;
    }

    /**
     * Set Organization
     *
     * @param integer $eventOrgID
     * @return $this
     */
    public function setEventOrgID($eventOrgID)
    {
        $this->eventOrgID = $eventOrgID;

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
     * Set Distance
     *
     * @param int $locationDistance
     * @return $this
     */
    public function setLocationDistance($locationDistance)
    {
        $this->locationDistance = $locationDistance;

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
        if ($this->eventOrgID !== null) $parameterArray['eventOrgID'] = $this->eventOrgID;
        if ($this->eventName !== null) $parameterArray['eventName'] = $this->eventName;
        if ($this->eventStart !== null) $parameterArray['eventStart'] = $this->eventStart;
        if ($this->eventEnd !== null) $parameterArray['eventEnd'] = $this->eventEnd;
        if ($this->eventUrl !== null) $parameterArray['eventUrl'] = $this->eventUrl;
        if ($this->eventDescription !== null) $parameterArray['eventDescription'] = $this->eventDescription;
        if ($this->eventLocationID !== null) $parameterArray['eventLocationID'] = $this->eventLocationID;
        if ($this->eventSpecies !== null) $parameterArray['eventSpecies'] = $this->eventSpecies;
        if ($this->locationName !== null) $parameterArray['locationName'] = $this->locationName;
        if ($this->locationUrl !== null) $parameterArray['locationUrl'] = $this->locationUrl;
        if ($this->locationAddress !== null) $parameterArray['locationAddress'] = $this->locationAddress;
        if ($this->locationCity !== null) $parameterArray['locationCity'] = $this->locationCity;
        if ($this->locationState !== null) $parameterArray['locationState'] = $this->locationState;
        if ($this->locationPostalcode !== null) $parameterArray['locationPostalcode'] = $this->locationPostalcode;
        if ($this->locationCountry !== null) $parameterArray['locationCountry'] = $this->locationCountry;
        if ($this->locationPhone !== null) $parameterArray['locationPhone'] = $this->locationPhone;
        if ($this->locationPhoneExt !== null) $parameterArray['locationPhoneExt'] = $this->locationPhoneExt;
        if ($this->locationEvents !== null) $parameterArray['locationEvents'] = $this->locationEvents;
        if ($this->locationDistance !== null) $parameterArray['locationDistance'] = $this->locationDistance;

        $this->addSearchParameters($parameterArray);

    }
}
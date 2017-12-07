<?php
/**
 * EventAnimalAttendance PublicSearch Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:21
 */
namespace RescueGroups\Requests\Objects\EventAnimalAttendance;

class PublicSearch implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $attendanceID = null;

    /**
     * Status
     * @var string
     */
    private $attendanceStatus = null;

    /**
     * Animal
     * @var integer
     */
    private $attendanceAnimalID = null;

    /**
     * Event
     * @var integer
     */
    private $attendanceEventID = null;

    /**
     * Name
     * @var string
     */
    private $animalName = null;

    /**
     * Org
     * @var integer
     */
    private $animalOrgID = null;

    /**
     * Status
     * @var string
     */
    private $animalStatus = null;

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
     * Location name
     * @var string
     */
    private $eventLocationName = null;

    /**
     * Location web address
     * @var url
     */
    private $eventLocationUrl = null;

    /**
     * Location street address
     * @var string
     */
    private $eventLocationAddress = null;

    /**
     * Location city
     * @var string
     */
    private $eventLocationCity = null;

    /**
     * Location state/province
     * @var province
     */
    private $eventLocationState = null;

    /**
     * Location postal code
     * @var string
     */
    private $eventLocationPostalcode = null;

    /**
     * Location country
     * @var integer
     */
    private $eventLocationCountry = null;

    /**
     * Location phone
     * @var phone
     */
    private $eventLocationPhone = null;

    /**
     * Location phone extension
     * @var string
     */
    private $eventLocationPhoneExt = null;


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
        return 'eventanimalattendance';
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
     * @param integer $attendanceID
     * @return $this
     */
    public function setAttendanceID($attendanceID)
    {
        $this->attendanceID = $attendanceID;

        return $this;
    }

    /**
     * Set Status
     *
     * @param string $attendanceStatus
     * @return $this
     */
    public function setAttendanceStatus($attendanceStatus)
    {
        $this->attendanceStatus = $attendanceStatus;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param integer $attendanceAnimalID
     * @return $this
     */
    public function setAttendanceAnimalID($attendanceAnimalID)
    {
        $this->attendanceAnimalID = $attendanceAnimalID;

        return $this;
    }

    /**
     * Set Event
     *
     * @param integer $attendanceEventID
     * @return $this
     */
    public function setAttendanceEventID($attendanceEventID)
    {
        $this->attendanceEventID = $attendanceEventID;

        return $this;
    }

    /**
     * Set Name
     *
     * @param string $animalName
     * @return $this
     */
    public function setAnimalName($animalName)
    {
        $this->animalName = $animalName;

        return $this;
    }

    /**
     * Set Org
     *
     * @param integer $animalOrgID
     * @return $this
     */
    public function setAnimalOrgID($animalOrgID)
    {
        $this->animalOrgID = $animalOrgID;

        return $this;
    }

    /**
     * Set Status
     *
     * @param string $animalStatus
     * @return $this
     */
    public function setAnimalStatus($animalStatus)
    {
        $this->animalStatus = $animalStatus;

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
     * Set Location name
     *
     * @param string $eventLocationName
     * @return $this
     */
    public function setEventLocationName($eventLocationName)
    {
        $this->eventLocationName = $eventLocationName;

        return $this;
    }

    /**
     * Set Location web address
     *
     * @param url $eventLocationUrl
     * @return $this
     */
    public function setEventLocationUrl($eventLocationUrl)
    {
        $this->eventLocationUrl = $eventLocationUrl;

        return $this;
    }

    /**
     * Set Location street address
     *
     * @param string $eventLocationAddress
     * @return $this
     */
    public function setEventLocationAddress($eventLocationAddress)
    {
        $this->eventLocationAddress = $eventLocationAddress;

        return $this;
    }

    /**
     * Set Location city
     *
     * @param string $eventLocationCity
     * @return $this
     */
    public function setEventLocationCity($eventLocationCity)
    {
        $this->eventLocationCity = $eventLocationCity;

        return $this;
    }

    /**
     * Set Location state/province
     *
     * @param province $eventLocationState
     * @return $this
     */
    public function setEventLocationState($eventLocationState)
    {
        $this->eventLocationState = $eventLocationState;

        return $this;
    }

    /**
     * Set Location postal code
     *
     * @param string $eventLocationPostalcode
     * @return $this
     */
    public function setEventLocationPostalcode($eventLocationPostalcode)
    {
        $this->eventLocationPostalcode = $eventLocationPostalcode;

        return $this;
    }

    /**
     * Set Location country
     *
     * @param integer $eventLocationCountry
     * @return $this
     */
    public function setEventLocationCountry($eventLocationCountry)
    {
        $this->eventLocationCountry = $eventLocationCountry;

        return $this;
    }

    /**
     * Set Location phone
     *
     * @param phone $eventLocationPhone
     * @return $this
     */
    public function setEventLocationPhone($eventLocationPhone)
    {
        $this->eventLocationPhone = $eventLocationPhone;

        return $this;
    }

    /**
     * Set Location phone extension
     *
     * @param string $eventLocationPhoneExt
     * @return $this
     */
    public function setEventLocationPhoneExt($eventLocationPhoneExt)
    {
        $this->eventLocationPhoneExt = $eventLocationPhoneExt;

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
        if ($this->attendanceID !== null) $parameterArray['attendanceID'] = $this->attendanceID;
        if ($this->attendanceStatus !== null) $parameterArray['attendanceStatus'] = $this->attendanceStatus;
        if ($this->attendanceAnimalID !== null) $parameterArray['attendanceAnimalID'] = $this->attendanceAnimalID;
        if ($this->attendanceEventID !== null) $parameterArray['attendanceEventID'] = $this->attendanceEventID;
        if ($this->animalName !== null) $parameterArray['animalName'] = $this->animalName;
        if ($this->animalOrgID !== null) $parameterArray['animalOrgID'] = $this->animalOrgID;
        if ($this->animalStatus !== null) $parameterArray['animalStatus'] = $this->animalStatus;
        if ($this->eventName !== null) $parameterArray['eventName'] = $this->eventName;
        if ($this->eventStart !== null) $parameterArray['eventStart'] = $this->eventStart;
        if ($this->eventEnd !== null) $parameterArray['eventEnd'] = $this->eventEnd;
        if ($this->eventUrl !== null) $parameterArray['eventUrl'] = $this->eventUrl;
        if ($this->eventDescription !== null) $parameterArray['eventDescription'] = $this->eventDescription;
        if ($this->eventLocationID !== null) $parameterArray['eventLocationID'] = $this->eventLocationID;
        if ($this->eventLocationName !== null) $parameterArray['eventLocationName'] = $this->eventLocationName;
        if ($this->eventLocationUrl !== null) $parameterArray['eventLocationUrl'] = $this->eventLocationUrl;
        if ($this->eventLocationAddress !== null) $parameterArray['eventLocationAddress'] = $this->eventLocationAddress;
        if ($this->eventLocationCity !== null) $parameterArray['eventLocationCity'] = $this->eventLocationCity;
        if ($this->eventLocationState !== null) $parameterArray['eventLocationState'] = $this->eventLocationState;
        if ($this->eventLocationPostalcode !== null) $parameterArray['eventLocationPostalcode'] = $this->eventLocationPostalcode;
        if ($this->eventLocationCountry !== null) $parameterArray['eventLocationCountry'] = $this->eventLocationCountry;
        if ($this->eventLocationPhone !== null) $parameterArray['eventLocationPhone'] = $this->eventLocationPhone;
        if ($this->eventLocationPhoneExt !== null) $parameterArray['eventLocationPhoneExt'] = $this->eventLocationPhoneExt;

        $this->addSearchParameters($parameterArray);

    }
}
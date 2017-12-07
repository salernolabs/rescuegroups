<?php
/**
 * AnimalsMeetRequests Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:35
 */
namespace RescueGroups\Requests\Objects\AnimalsMeetRequests;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * Meet Request ID
     * @var integer
     */
    private $meetrequestID = null;

    /**
     * Animal ID
     * @var integer
     */
    private $meetrequestAnimalID = null;

    /**
     * Contact ID
     * @var integer
     */
    private $meetrequestContactID = null;

    /**
     * Event ID
     * @var integer
     */
    private $meetrequestEventID = null;

    /**
     * Location ID
     * @var integer
     */
    private $meetrequestLocationID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $meetrequestDate = null;

    /**
     * Animal
     * @var string
     */
    private $animalName = null;

    /**
     * Contact
     * @var string
     */
    private $contactName = null;

    /**
     * Contact Type
     * @var string
     */
    private $contactType = null;

    /**
     * Event
     * @var string
     */
    private $eventName = null;

    /**
     * Location
     * @var string
     */
    private $locationName = null;


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
        return 'animalsMeetrequests';
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
     * Set Meet Request ID
     *
     * @param integer $meetrequestID
     * @return $this
     */
    public function setMeetrequestID($meetrequestID)
    {
        $this->meetrequestID = $meetrequestID;

        return $this;
    }

    /**
     * Set Animal ID
     *
     * @param integer $meetrequestAnimalID
     * @return $this
     */
    public function setMeetrequestAnimalID($meetrequestAnimalID)
    {
        $this->meetrequestAnimalID = $meetrequestAnimalID;

        return $this;
    }

    /**
     * Set Contact ID
     *
     * @param integer $meetrequestContactID
     * @return $this
     */
    public function setMeetrequestContactID($meetrequestContactID)
    {
        $this->meetrequestContactID = $meetrequestContactID;

        return $this;
    }

    /**
     * Set Event ID
     *
     * @param integer $meetrequestEventID
     * @return $this
     */
    public function setMeetrequestEventID($meetrequestEventID)
    {
        $this->meetrequestEventID = $meetrequestEventID;

        return $this;
    }

    /**
     * Set Location ID
     *
     * @param integer $meetrequestLocationID
     * @return $this
     */
    public function setMeetrequestLocationID($meetrequestLocationID)
    {
        $this->meetrequestLocationID = $meetrequestLocationID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $meetrequestDate
     * @return $this
     */
    public function setMeetrequestDate($meetrequestDate)
    {
        $this->meetrequestDate = $meetrequestDate;

        return $this;
    }

    /**
     * Set Animal
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
     * Set Contact
     *
     * @param string $contactName
     * @return $this
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Set Contact Type
     *
     * @param string $contactType
     * @return $this
     */
    public function setContactType($contactType)
    {
        $this->contactType = $contactType;

        return $this;
    }

    /**
     * Set Event
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
     * Set Location
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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->meetrequestID !== null) $parameterArray['meetrequestID'] = $this->meetrequestID;
        if ($this->meetrequestAnimalID !== null) $parameterArray['meetrequestAnimalID'] = $this->meetrequestAnimalID;
        if ($this->meetrequestContactID !== null) $parameterArray['meetrequestContactID'] = $this->meetrequestContactID;
        if ($this->meetrequestEventID !== null) $parameterArray['meetrequestEventID'] = $this->meetrequestEventID;
        if ($this->meetrequestLocationID !== null) $parameterArray['meetrequestLocationID'] = $this->meetrequestLocationID;
        if ($this->meetrequestDate !== null) $parameterArray['meetrequestDate'] = $this->meetrequestDate;
        if ($this->animalName !== null) $parameterArray['animalName'] = $this->animalName;
        if ($this->contactName !== null) $parameterArray['contactName'] = $this->contactName;
        if ($this->contactType !== null) $parameterArray['contactType'] = $this->contactType;
        if ($this->eventName !== null) $parameterArray['eventName'] = $this->eventName;
        if ($this->locationName !== null) $parameterArray['locationName'] = $this->locationName;

        $this->addSearchParameters($parameterArray);

    }
}
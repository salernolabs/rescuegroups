<?php
/**
 * Events Add Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\Events;

class Add implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
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
        return 'add';
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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->eventName !== null) $parameterArray['eventName'] = $this->eventName;
        if ($this->eventStart !== null) $parameterArray['eventStart'] = $this->eventStart;
        if ($this->eventEnd !== null) $parameterArray['eventEnd'] = $this->eventEnd;
        if ($this->eventUrl !== null) $parameterArray['eventUrl'] = $this->eventUrl;
        if ($this->eventDescription !== null) $parameterArray['eventDescription'] = $this->eventDescription;
        if ($this->eventLocationID !== null) $parameterArray['eventLocationID'] = $this->eventLocationID;
        if ($this->eventSpecies !== null) $parameterArray['eventSpecies'] = $this->eventSpecies;

    }
}
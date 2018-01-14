<?php
/**
 * Events Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Events;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Name
     *
     * @var string
     */
    private $eventName = null;

    /**
     * Start Date/Time
     *
     * @var \DateTime
     */
    private $eventStart = null;

    /**
     * End Date/Time
     *
     * @var \DateTime
     */
    private $eventEnd = null;

    /**
     * Web address
     *
     * @var string
     */
    private $eventUrl = null;

    /**
     * Description
     *
     * @var string
     */
    private $eventDescription = null;

    /**
     * Location
     *
     * @var integer
     */
    private $eventLocationID = null;

    /**
     * Species attending
     *
     * @var integer
     */
    private $eventSpecies = null;


    /**
     * Set Name
     *
     * @param string $value
     * @return $this
     */
    public function setEventName($value)
    {
        $this->eventName = $value;

        return $this;
    }

    /**
     * Set Start Date/Time
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setEventStart($value)
    {
        $this->eventStart = $value;

        return $this;
    }

    /**
     * Set End Date/Time
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setEventEnd($value)
    {
        $this->eventEnd = $value;

        return $this;
    }

    /**
     * Set Web address
     *
     * @param string $value
     * @return $this
     */
    public function setEventUrl($value)
    {
        $this->eventUrl = $value;

        return $this;
    }

    /**
     * Set Description
     *
     * @param string $value
     * @return $this
     */
    public function setEventDescription($value)
    {
        $this->eventDescription = $value;

        return $this;
    }

    /**
     * Set Location
     *
     * @param integer $value
     * @return $this
     */
    public function setEventLocationID($value)
    {
        $this->eventLocationID = $value;

        return $this;
    }

    /**
     * Set Species attending
     *
     * @param integer $value
     * @return $this
     */
    public function setEventSpecies($value)
    {
        $this->eventSpecies = $value;

        return $this;
    }


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
        return 'add';
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->eventName !== null) $parameterArray['values'][] = ["eventName"=>$this->eventName];
        if ($this->eventStart !== null) $parameterArray['values'][] = ["eventStart"=>$this->eventStart];
        if ($this->eventEnd !== null) $parameterArray['values'][] = ["eventEnd"=>$this->eventEnd];
        if ($this->eventUrl !== null) $parameterArray['values'][] = ["eventUrl"=>$this->eventUrl];
        if ($this->eventDescription !== null) $parameterArray['values'][] = ["eventDescription"=>$this->eventDescription];
        if ($this->eventLocationID !== null) $parameterArray['values'][] = ["eventLocationID"=>$this->eventLocationID];
        if ($this->eventSpecies !== null) $parameterArray['values'][] = ["eventSpecies"=>$this->eventSpecies];
    }
}
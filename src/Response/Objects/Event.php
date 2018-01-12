<?php
/**
 * Event Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class Event
{
    /**
     * ID
     * @var integer
     */
    public $eventID;

    /**
     * Name
     * @var string
     */
    public $eventName;

    /**
     * Start Date/Time
     * @var \DateTime
     */
    public $eventStart;

    /**
     * End Date/Time
     * @var \DateTime
     */
    public $eventEnd;

    /**
     * Web address
     * @var string
     */
    public $eventUrl;

    /**
     * Description
     * @var string
     */
    public $eventDescription;

    /**
     * Location
     * @var integer
     */
    public $eventLocationID;

    /**
     * Species attending
     * @var integer
     */
    public $eventSpecies;



    /**
     * Events Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->eventID)) $this->eventID = $inputData->eventID;
        if (!empty($inputData->eventName)) $this->eventName = $inputData->eventName;
        if (!empty($inputData->eventStart)) $this->eventStart = $inputData->eventStart;
        if (!empty($inputData->eventEnd)) $this->eventEnd = $inputData->eventEnd;
        if (!empty($inputData->eventUrl)) $this->eventUrl = $inputData->eventUrl;
        if (!empty($inputData->eventDescription)) $this->eventDescription = $inputData->eventDescription;
        if (!empty($inputData->eventLocationID)) $this->eventLocationID = $inputData->eventLocationID;
        if (!empty($inputData->eventSpecies)) $this->eventSpecies = $inputData->eventSpecies;

    }
}
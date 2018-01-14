<?php
/**
 * Event Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class Event implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * ID
     *
     * @var integer
     */
    public $eventID = null;

    /**
     * Name
     *
     * @var string
     */
    public $eventName = null;

    /**
     * Start Date/Time
     *
     * @var \DateTime
     */
    public $eventStart = null;

    /**
     * End Date/Time
     *
     * @var \DateTime
     */
    public $eventEnd = null;

    /**
     * Web address
     *
     * @var string
     */
    public $eventUrl = null;

    /**
     * Description
     *
     * @var string
     */
    public $eventDescription = null;

    /**
     * Location
     *
     * @var integer
     */
    public $eventLocationID = null;

    /**
     * Species attending
     *
     * @var integer
     */
    public $eventSpecies = null;


    /**
     * Event Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->eventID)) $this->eventID = $inputData->eventID;
        if (!empty($inputData->eventName)) $this->eventName = $inputData->eventName;
        if (!empty($inputData->eventStart)) $this->eventStart = $inputData->eventStart;
        if (!empty($inputData->eventEnd)) $this->eventEnd = $inputData->eventEnd;
        if (!empty($inputData->eventUrl)) $this->eventUrl = $inputData->eventUrl;
        if (!empty($inputData->eventDescription)) $this->eventDescription = $inputData->eventDescription;
        if (!empty($inputData->eventLocationID)) $this->eventLocationID = $inputData->eventLocationID;
        if (!empty($inputData->eventSpecies)) $this->eventSpecies = $inputData->eventSpecies;
    }

    /**
     * Get array mapping for API functions
     *
     * @return array
     */
    public function getArray()
    {
        $output = [];
        if ($this->eventID !== null) $output['eventID'] = $this->eventID;
        if ($this->eventName !== null) $output['eventName'] = $this->eventName;
        if ($this->eventStart !== null) $output['eventStart'] = $this->eventStart;
        if ($this->eventEnd !== null) $output['eventEnd'] = $this->eventEnd;
        if ($this->eventUrl !== null) $output['eventUrl'] = $this->eventUrl;
        if ($this->eventDescription !== null) $output['eventDescription'] = $this->eventDescription;
        if ($this->eventLocationID !== null) $output['eventLocationID'] = $this->eventLocationID;
        if ($this->eventSpecies !== null) $output['eventSpecies'] = $this->eventSpecies;

        return $output;
    }
}
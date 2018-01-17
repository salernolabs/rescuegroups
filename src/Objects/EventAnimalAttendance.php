<?php
/**
 * EventAnimalAttendance Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class EventAnimalAttendance implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $attendanceID = null;

    /**
     * Animal
     *
     * @var integer
     */
    public $attendanceAnimalID = null;

    /**
     * Status
     *
     * @var string
     */
    public $attendanceStatus = null;

    /**
     * Event
     *
     * @var integer
     */
    public $attendanceEventID = null;


    /**
     * EventAnimalAttendance Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->attendanceID)) $this->attendanceID = $inputData->attendanceID;
        if (!empty($inputData->attendanceAnimalID)) $this->attendanceAnimalID = $inputData->attendanceAnimalID;
        if (!empty($inputData->attendanceStatus)) $this->attendanceStatus = $inputData->attendanceStatus;
        if (!empty($inputData->attendanceEventID)) $this->attendanceEventID = $inputData->attendanceEventID;
    }

    /**
     * Get array mapping for API functions
     *
     * @param bool $includeId
     * @return array
     */
    public function getArray($includeId = true)
    {
        $output = [];
        if ($includeId && $this->attendanceID !== null) $output['attendanceID'] = $this->attendanceID;
        if ($this->attendanceAnimalID !== null) $output['attendanceAnimalID'] = $this->attendanceAnimalID;
        if ($this->attendanceStatus !== null) $output['attendanceStatus'] = $this->attendanceStatus;
        if ($this->attendanceEventID !== null) $output['attendanceEventID'] = $this->attendanceEventID;

        return $output;
    }
}
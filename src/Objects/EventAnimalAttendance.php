<?php
/**
 * EventAnimalAttendance Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class EventAnimalAttendance
{
    /**
     * ID
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
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->attendanceID)) $this->attendanceID = $inputData->attendanceID;
        if (!empty($inputData->attendanceAnimalID)) $this->attendanceAnimalID = $inputData->attendanceAnimalID;
        if (!empty($inputData->attendanceStatus)) $this->attendanceStatus = $inputData->attendanceStatus;
        if (!empty($inputData->attendanceEventID)) $this->attendanceEventID = $inputData->attendanceEventID;
    }
}
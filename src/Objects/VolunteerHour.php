<?php
/**
 * VolunteerHour Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class VolunteerHour
{
    /**
     * ID
     *
     * @var integer
     */
    public $id = null;

    /**
     * Volunteer
     *
     * @var integer
     */
    public $volunteerID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $volunteerDate = null;

    /**
     * Hours
     *
     * @var float
     */
    public $volunteerLength = null;

    /**
     * Task
     *
     * @var string
     */
    public $volunteerTask = null;


    /**
     * VolunteerHour Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->volunteerHoursID)) $this->id = $inputData->volunteerHoursID;
        if (!empty($inputData->volunteerHoursVolunteerID)) $this->volunteerID = $inputData->volunteerHoursVolunteerID;
        if (!empty($inputData->volunteerHoursVolunteerDate)) $this->volunteerDate = $inputData->volunteerHoursVolunteerDate;
        if (!empty($inputData->volunteerHoursVolunteerLength)) $this->volunteerLength = $inputData->volunteerHoursVolunteerLength;
        if (!empty($inputData->volunteerHoursVolunteerTask)) $this->volunteerTask = $inputData->volunteerHoursVolunteerTask;
    }
}
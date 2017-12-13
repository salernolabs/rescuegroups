<?php
/**
 * VolunteerHour Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects\VolunteerHour;

class VolunteerHour
{
    /**
     * Volunteer
     * @var integer
     */
    public $volunteerID;

    /**
     * Date
     * @var \DateTime
     */
    public $volunteerDate;

    /**
     * Hours
     * @var float
     */
    public $volunteerLength;

    /**
     * Task
     * @var string
     */
    public $volunteerTask;



    /**
     * VolunteerHours Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->volunteerHoursVolunteerID)) $this->volunteerID = $inputData->volunteerHoursVolunteerID;
        if (!empty($inputData->volunteerHoursVolunteerDate)) $this->volunteerDate = $inputData->volunteerHoursVolunteerDate;
        if (!empty($inputData->volunteerHoursVolunteerLength)) $this->volunteerLength = $inputData->volunteerHoursVolunteerLength;
        if (!empty($inputData->volunteerHoursVolunteerTask)) $this->volunteerTask = $inputData->volunteerHoursVolunteerTask;

    }
}
<?php
/**
 * VolunteerHour Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class VolunteerHour implements \RescueGroups\Objects\APIEncodableInterface
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
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->volunteerHoursID)) $this->id = $inputData->volunteerHoursID;
        if (!empty($inputData->volunteerHoursVolunteerID)) $this->volunteerID = $inputData->volunteerHoursVolunteerID;
        if (!empty($inputData->volunteerHoursVolunteerDate)) $this->volunteerDate = $inputData->volunteerHoursVolunteerDate;
        if (!empty($inputData->volunteerHoursVolunteerLength)) $this->volunteerLength = $inputData->volunteerHoursVolunteerLength;
        if (!empty($inputData->volunteerHoursVolunteerTask)) $this->volunteerTask = $inputData->volunteerHoursVolunteerTask;
    }

    /**
     * Get array mapping for API functions
     *
     * @return array
     */
    public function getArray()
    {
        $output = [];
        if ($this->id !== null) $output['volunteerHoursID'] = $this->id;
        if ($this->volunteerID !== null) $output['volunteerHoursVolunteerID'] = $this->volunteerID;
        if ($this->volunteerDate !== null) $output['volunteerHoursVolunteerDate'] = $this->volunteerDate;
        if ($this->volunteerLength !== null) $output['volunteerHoursVolunteerLength'] = $this->volunteerLength;
        if ($this->volunteerTask !== null) $output['volunteerHoursVolunteerTask'] = $this->volunteerTask;

        return $output;
    }
}
<?php
/**
 * VolunteerHour Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class VolunteerHour implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $id = null;

    /**
     * Volunteer
     *
     * @var integer
     */
    public $volunteerId = null;

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
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'volunteerHoursID' => 'id',
            'volunteerHoursVolunteerID' => 'volunteerId',
            'volunteerHoursVolunteerDate' => 'volunteerDate',
            'volunteerHoursVolunteerLength' => 'volunteerLength',
            'volunteerHoursVolunteerTask' => 'volunteerTask',
        ],
        'output' => [
            'id' => 'volunteerHoursID',
            'volunteerId' => 'volunteerHoursVolunteerID',
            'volunteerDate' => 'volunteerHoursVolunteerDate',
            'volunteerLength' => 'volunteerHoursVolunteerLength',
            'volunteerTask' => 'volunteerHoursVolunteerTask',
        ]
    ];

    /**
     * VolunteerHour Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        $this->mapFromAPI($inputData);
    }

    /**
     * Get array mapping for API functions
     *
     * @param bool $includeId
     * @return array
     */
    public function getArray($includeId = true)
    {
        return $this->mapToAPI($includeId);
    }
}
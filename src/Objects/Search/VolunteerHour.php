<?php
/**
 * VolunteerHour Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class VolunteerHour extends \RescueGroups\Objects\VolunteerHour implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Added Date
     *
     * @var \DateTime
     */
    public $createdDate = null;

    /**
     * Volunteer Type
     *
     * @var string
     */
    public $volunteerType = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'volunteerHoursID' => 'id',
            'volunteerHoursVolunteerID' => 'volunteerId',
            'volunteerHoursVolunteerDate' => 'volunteerDate',
            'volunteerHoursCreatedDate' => 'createdDate',
            'volunteerHoursVolunteerLength' => 'volunteerLength',
            'volunteerHoursVolunteerTask' => 'volunteerTask',
            'volunteerType' => 'volunteerType',
        ],
        'output' => [
            'id' => 'volunteerHoursID',
            'volunteerId' => 'volunteerHoursVolunteerID',
            'volunteerDate' => 'volunteerHoursVolunteerDate',
            'createdDate' => 'volunteerHoursCreatedDate',
            'volunteerLength' => 'volunteerHoursVolunteerLength',
            'volunteerTask' => 'volunteerHoursVolunteerTask',
            'volunteerType' => 'volunteerType',
        ]
    ];

}
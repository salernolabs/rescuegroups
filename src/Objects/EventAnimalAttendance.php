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
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $id = null;

    /**
     * Animal
     *
     * @var integer
     */
    public $animalId = null;

    /**
     * Status
     *
     * @var string
     */
    public $status = null;

    /**
     * Event
     *
     * @var integer
     */
    public $eventId = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'attendanceID' => 'id',
            'attendanceAnimalID' => 'animalId',
            'attendanceStatus' => 'status',
            'attendanceEventID' => 'eventId',
        ],
        'output' => [
            'id' => 'attendanceID',
            'animalId' => 'attendanceAnimalID',
            'status' => 'attendanceStatus',
            'eventId' => 'attendanceEventID',
        ]
    ];

    /**
     * EventAnimalAttendance Constructor
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
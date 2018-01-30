<?php
/**
 * Event Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class Event implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $id = null;

    /**
     * Name
     *
     * @var string
     */
    public $name = null;

    /**
     * Start Date/Time
     *
     * @var \DateTime
     */
    public $start = null;

    /**
     * End Date/Time
     *
     * @var \DateTime
     */
    public $end = null;

    /**
     * Web address
     *
     * @var string
     */
    public $url = null;

    /**
     * Description
     *
     * @var string
     */
    public $description = null;

    /**
     * Location
     *
     * @var integer
     */
    public $locationId = null;

    /**
     * Species attending
     *
     * @var integer
     */
    public $species = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'eventID' => 'id',
            'eventName' => 'name',
            'eventStart' => 'start',
            'eventEnd' => 'end',
            'eventUrl' => 'url',
            'eventDescription' => 'description',
            'eventLocationID' => 'locationId',
            'eventSpecies' => 'species',
        ],
        'output' => [
            'id' => 'eventID',
            'name' => 'eventName',
            'start' => 'eventStart',
            'end' => 'eventEnd',
            'url' => 'eventUrl',
            'description' => 'eventDescription',
            'locationId' => 'eventLocationID',
            'species' => 'eventSpecies',
        ]
    ];

    /**
     * Event Constructor
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
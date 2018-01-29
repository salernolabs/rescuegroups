<?php
/**
 * AnimalsMeetRequest Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class AnimalsMeetRequest implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Meet Request ID, Primary Key
     *
     * @var integer
     */
    public $id = null;

    /**
     * Animal ID
     *
     * @var integer
     */
    public $animalId = null;

    /**
     * Contact ID
     *
     * @var integer
     */
    public $contactId = null;

    /**
     * Event ID
     *
     * @var integer
     */
    public $eventId = null;

    /**
     * Location ID
     *
     * @var integer
     */
    public $locationId = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $date = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'meetrequestID' => 'id',
            'meetrequestAnimalID' => 'animalId',
            'meetrequestContactID' => 'contactId',
            'meetrequestEventID' => 'eventId',
            'meetrequestLocationID' => 'locationId',
            'meetrequestDate' => 'date',
        ],
        'output' => [
            'id' => 'meetrequestID',
            'animalId' => 'meetrequestAnimalID',
            'contactId' => 'meetrequestContactID',
            'eventId' => 'meetrequestEventID',
            'locationId' => 'meetrequestLocationID',
            'date' => 'meetrequestDate',
        ]
    ];

    /**
     * AnimalsMeetRequest Constructor
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
<?php
/**
 * OutcomesReleas Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class OutcomesReleas implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $id = null;

    /**
     * Condition
     *
     * @var integer
     */
    public $animalConditionId = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $date = null;

    /**
     * Notes
     *
     * @var string
     */
    public $notes = null;

    /**
     * Location
     *
     * @var string
     */
    public $location = null;

    /**
     * Street address
     *
     * @var string
     */
    public $address = null;

    /**
     * City
     *
     * @var string
     */
    public $city = null;

    /**
     * State/Province
     *
     * @var string
     */
    public $state = null;

    /**
     * Postal Code
     *
     * @var string
     */
    public $postalcode = null;

    /**
     * Released By
     *
     * @var integer
     */
    public $byId = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'outcomesReleaseID' => 'id',
            'outcomesReleaseAnimalConditionID' => 'animalConditionId',
            'outcomesReleaseDate' => 'date',
            'outcomesReleaseNotes' => 'notes',
            'outcomesReleaseLocation' => 'location',
            'outcomesReleaseAddress' => 'address',
            'outcomesReleaseCity' => 'city',
            'outcomesReleaseState' => 'state',
            'outcomesReleasePostalcode' => 'postalcode',
            'outcomesReleaseByID' => 'byId',
        ],
        'output' => [
            'id' => 'outcomesReleaseID',
            'animalConditionId' => 'outcomesReleaseAnimalConditionID',
            'date' => 'outcomesReleaseDate',
            'notes' => 'outcomesReleaseNotes',
            'location' => 'outcomesReleaseLocation',
            'address' => 'outcomesReleaseAddress',
            'city' => 'outcomesReleaseCity',
            'state' => 'outcomesReleaseState',
            'postalcode' => 'outcomesReleasePostalcode',
            'byId' => 'outcomesReleaseByID',
        ]
    ];

    /**
     * OutcomesReleas Constructor
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
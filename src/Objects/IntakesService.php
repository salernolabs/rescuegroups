<?php
/**
 * IntakesService Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class IntakesService implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Service, Primary Key
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
     * Owner
     *
     * @var integer
     */
    public $ownerId = null;

    /**
     * Service
     *
     * @var integer
     */
    public $servicetypeId = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'intakesServiceID' => 'id',
            'intakesServiceAnimalID' => 'animalId',
            'intakesServiceAnimalConditionID' => 'animalConditionId',
            'intakesServiceDate' => 'date',
            'intakesServiceNotes' => 'notes',
            'intakesServiceOwnerID' => 'ownerId',
            'intakesServiceServicetypeID' => 'servicetypeId',
        ],
        'output' => [
            'id' => 'intakesServiceID',
            'animalId' => 'intakesServiceAnimalID',
            'animalConditionId' => 'intakesServiceAnimalConditionID',
            'date' => 'intakesServiceDate',
            'notes' => 'intakesServiceNotes',
            'ownerId' => 'intakesServiceOwnerID',
            'servicetypeId' => 'intakesServiceServicetypeID',
        ]
    ];

    /**
     * IntakesService Constructor
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
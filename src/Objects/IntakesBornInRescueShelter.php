<?php
/**
 * IntakesBornInRescueShelter Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class IntakesBornInRescueShelter implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Born In Rescue/Shelter, Primary Key
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
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'intakesBorninrescueshelterID' => 'id',
            'intakesBorninrescueshelterAnimalID' => 'animalId',
            'intakesBorninrescueshelterAnimalConditionID' => 'animalConditionId',
            'intakesBorninrescueshelterDate' => 'date',
            'intakesBorninrescueshelterNotes' => 'notes',
        ],
        'output' => [
            'id' => 'intakesBorninrescueshelterID',
            'animalId' => 'intakesBorninrescueshelterAnimalID',
            'animalConditionId' => 'intakesBorninrescueshelterAnimalConditionID',
            'date' => 'intakesBorninrescueshelterDate',
            'notes' => 'intakesBorninrescueshelterNotes',
        ]
    ];

    /**
     * IntakesBornInRescueShelter Constructor
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
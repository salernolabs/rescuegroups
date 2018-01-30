<?php
/**
 * OutcomesAdoption Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class OutcomesAdoption implements \RescueGroups\Objects\APIEncodableInterface
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
     * Adoption
     *
     * @var integer
     */
    public $adoptionId = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'outcomesAdoptionID' => 'id',
            'outcomesAdoptionAnimalConditionID' => 'animalConditionId',
            'outcomesAdoptionDate' => 'date',
            'outcomesAdoptionNotes' => 'notes',
            'outcomesAdoptionAdoptionID' => 'adoptionId',
        ],
        'output' => [
            'id' => 'outcomesAdoptionID',
            'animalConditionId' => 'outcomesAdoptionAnimalConditionID',
            'date' => 'outcomesAdoptionDate',
            'notes' => 'outcomesAdoptionNotes',
            'adoptionId' => 'outcomesAdoptionAdoptionID',
        ]
    ];

    /**
     * OutcomesAdoption Constructor
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
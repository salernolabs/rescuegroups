<?php
/**
 * OutcomesDeceased Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class OutcomesDeceased implements \RescueGroups\Objects\APIEncodableInterface
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
     * Reason
     *
     * @var string
     */
    public $reason = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'outcomesDeceasedID' => 'id',
            'outcomesDeceasedAnimalConditionID' => 'animalConditionId',
            'outcomesDeceasedDate' => 'date',
            'outcomesDeceasedNotes' => 'notes',
            'outcomesDeceasedReason' => 'reason',
        ],
        'output' => [
            'id' => 'outcomesDeceasedID',
            'animalConditionId' => 'outcomesDeceasedAnimalConditionID',
            'date' => 'outcomesDeceasedDate',
            'notes' => 'outcomesDeceasedNotes',
            'reason' => 'outcomesDeceasedReason',
        ]
    ];

    /**
     * OutcomesDeceased Constructor
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
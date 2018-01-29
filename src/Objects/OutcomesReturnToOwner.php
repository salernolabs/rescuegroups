<?php
/**
 * OutcomesReturnToOwner Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class OutcomesReturnToOwner implements \RescueGroups\Objects\APIEncodableInterface
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
     * Return To
     *
     * @var integer
     */
    public $ownerId = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'outcomesReturntoownerID' => 'id',
            'outcomesReturntoownerAnimalConditionID' => 'animalConditionId',
            'outcomesReturntoownerDate' => 'date',
            'outcomesReturntoownerNotes' => 'notes',
            'outcomesReturntoownerOwnerID' => 'ownerId',
        ],
        'output' => [
            'id' => 'outcomesReturntoownerID',
            'animalConditionId' => 'outcomesReturntoownerAnimalConditionID',
            'date' => 'outcomesReturntoownerDate',
            'notes' => 'outcomesReturntoownerNotes',
            'ownerId' => 'outcomesReturntoownerOwnerID',
        ]
    ];

    /**
     * OutcomesReturnToOwner Constructor
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
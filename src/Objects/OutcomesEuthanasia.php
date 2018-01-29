<?php
/**
 * OutcomesEuthanasia Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class OutcomesEuthanasia implements \RescueGroups\Objects\APIEncodableInterface
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
     * Euthanasia Reason
     *
     * @var integer
     */
    public $reasonId = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'outcomesEuthanasiaID' => 'id',
            'outcomesEuthanasiaAnimalConditionID' => 'animalConditionId',
            'outcomesEuthanasiaDate' => 'date',
            'outcomesEuthanasiaNotes' => 'notes',
            'outcomesEuthanasiaReasonID' => 'reasonId',
        ],
        'output' => [
            'id' => 'outcomesEuthanasiaID',
            'animalConditionId' => 'outcomesEuthanasiaAnimalConditionID',
            'date' => 'outcomesEuthanasiaDate',
            'notes' => 'outcomesEuthanasiaNotes',
            'reasonId' => 'outcomesEuthanasiaReasonID',
        ]
    ];

    /**
     * OutcomesEuthanasia Constructor
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
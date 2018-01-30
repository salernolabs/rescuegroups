<?php
/**
 * OutcomesDeceased Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class OutcomesDeceased extends \RescueGroups\Objects\OutcomesDeceased implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Outcome Deceased Intake
     *
     * @var integer
     */
    public $intakeId = null;

    /**
     * Animal
     *
     * @var integer
     */
    public $animalId = null;

    /**
     * Animal
     *
     * @var string
     */
    public $animalName = null;

    /**
     * Condition
     *
     * @var string
     */
    public $animalConditionName = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'outcomesDeceasedID' => 'id',
            'outcomesDeceasedIntakeID' => 'intakeId',
            'outcomesDeceasedAnimalConditionID' => 'animalConditionId',
            'outcomesDeceasedDate' => 'date',
            'outcomesDeceasedNotes' => 'notes',
            'outcomesDeceasedReason' => 'reason',
            'animalID' => 'animalId',
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
        ],
        'output' => [
            'id' => 'outcomesDeceasedID',
            'intakeId' => 'outcomesDeceasedIntakeID',
            'animalConditionId' => 'outcomesDeceasedAnimalConditionID',
            'date' => 'outcomesDeceasedDate',
            'notes' => 'outcomesDeceasedNotes',
            'reason' => 'outcomesDeceasedReason',
            'animalId' => 'animalID',
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
        ]
    ];

}
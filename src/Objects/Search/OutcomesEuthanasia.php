<?php
/**
 * OutcomesEuthanasia Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class OutcomesEuthanasia extends \RescueGroups\Objects\OutcomesEuthanasia implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Outcome Euthanasia Intake
     *
     * @var integer
     */
    public $intakeId = null;

    /**
     * Euthanasia Reason
     *
     * @var string
     */
    public $reason = null;

    /**
     * Animal
     *
     * @var string
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
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'outcomesEuthanasiaID' => 'id',
            'outcomesEuthanasiaIntakeID' => 'intakeId',
            'outcomesEuthanasiaAnimalConditionID' => 'animalConditionId',
            'outcomesEuthanasiaDate' => 'date',
            'outcomesEuthanasiaNotes' => 'notes',
            'outcomesEuthanasiaReasonID' => 'reasonId',
            'outcomesEuthanasiaReason' => 'reason',
            'animalID' => 'animalId',
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
        ],
        'output' => [
            'id' => 'outcomesEuthanasiaID',
            'intakeId' => 'outcomesEuthanasiaIntakeID',
            'animalConditionId' => 'outcomesEuthanasiaAnimalConditionID',
            'date' => 'outcomesEuthanasiaDate',
            'notes' => 'outcomesEuthanasiaNotes',
            'reasonId' => 'outcomesEuthanasiaReasonID',
            'reason' => 'outcomesEuthanasiaReason',
            'animalId' => 'animalID',
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
        ]
    ];

}
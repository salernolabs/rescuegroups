<?php
/**
 * OutcomesReturnToOwner Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class OutcomesReturnToOwner extends \RescueGroups\Objects\OutcomesReturnToOwner implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Outcome Returntoowner Intake
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
     * Owner
     *
     * @var string
     */
    public $returntoownerName = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'outcomesReturntoownerID' => 'id',
            'outcomesReturntoownerIntakeID' => 'intakeId',
            'outcomesReturntoownerAnimalConditionID' => 'animalConditionId',
            'outcomesReturntoownerDate' => 'date',
            'outcomesReturntoownerNotes' => 'notes',
            'outcomesReturntoownerOwnerID' => 'ownerId',
            'animalID' => 'animalId',
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
            'returntoownerName' => 'returntoownerName',
        ],
        'output' => [
            'id' => 'outcomesReturntoownerID',
            'intakeId' => 'outcomesReturntoownerIntakeID',
            'animalConditionId' => 'outcomesReturntoownerAnimalConditionID',
            'date' => 'outcomesReturntoownerDate',
            'notes' => 'outcomesReturntoownerNotes',
            'ownerId' => 'outcomesReturntoownerOwnerID',
            'animalId' => 'animalID',
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
            'returntoownerName' => 'returntoownerName',
        ]
    ];

}
<?php
/**
 * IntakesStrayDropoff Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class IntakesStrayDropoff extends \RescueGroups\Objects\IntakesStrayDropoff implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

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
     * Dropped off by
     *
     * @var string
     */
    public $finderName = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'intakesStraydropoffID' => 'id',
            'intakesStraydropoffAnimalID' => 'animalId',
            'intakesStraydropoffAnimalConditionID' => 'animalConditionId',
            'intakesStraydropoffDate' => 'date',
            'intakesStraydropoffNotes' => 'notes',
            'intakesStraydropoffFoundLocation' => 'foundLocation',
            'intakesStraydropoffFoundAddress' => 'foundAddress',
            'intakesStraydropoffFoundCity' => 'foundCity',
            'intakesStraydropoffFoundState' => 'foundState',
            'intakesStraydropoffFoundPostalcode' => 'foundPostalcode',
            'intakesStraydropoffFinderID' => 'finderId',
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
            'finderName' => 'finderName',
        ],
        'output' => [
            'id' => 'intakesStraydropoffID',
            'animalId' => 'intakesStraydropoffAnimalID',
            'animalConditionId' => 'intakesStraydropoffAnimalConditionID',
            'date' => 'intakesStraydropoffDate',
            'notes' => 'intakesStraydropoffNotes',
            'foundLocation' => 'intakesStraydropoffFoundLocation',
            'foundAddress' => 'intakesStraydropoffFoundAddress',
            'foundCity' => 'intakesStraydropoffFoundCity',
            'foundState' => 'intakesStraydropoffFoundState',
            'foundPostalcode' => 'intakesStraydropoffFoundPostalcode',
            'finderId' => 'intakesStraydropoffFinderID',
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
            'finderName' => 'finderName',
        ]
    ];

}
<?php
/**
 * IntakesBornInRescueShelter Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class IntakesBornInRescueShelter extends \RescueGroups\Objects\IntakesBornInRescueShelter implements \RescueGroups\Objects\APIEncodableInterface
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
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
        ],
        'output' => [
            'id' => 'intakesBorninrescueshelterID',
            'animalId' => 'intakesBorninrescueshelterAnimalID',
            'animalConditionId' => 'intakesBorninrescueshelterAnimalConditionID',
            'date' => 'intakesBorninrescueshelterDate',
            'notes' => 'intakesBorninrescueshelterNotes',
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
        ]
    ];

}
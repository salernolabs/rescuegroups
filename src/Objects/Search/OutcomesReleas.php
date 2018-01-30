<?php
/**
 * OutcomesReleas Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class OutcomesReleas extends \RescueGroups\Objects\OutcomesReleas implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Outcome Release Intake
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
     * Released By
     *
     * @var string
     */
    public $releaseByName = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'outcomesReleaseID' => 'id',
            'outcomesReleaseIntakeID' => 'intakeId',
            'outcomesReleaseAnimalConditionID' => 'animalConditionId',
            'outcomesReleaseDate' => 'date',
            'outcomesReleaseNotes' => 'notes',
            'outcomesReleaseLocation' => 'location',
            'outcomesReleaseAddress' => 'address',
            'outcomesReleaseCity' => 'city',
            'outcomesReleaseState' => 'state',
            'outcomesReleasePostalcode' => 'postalcode',
            'outcomesReleaseByID' => 'byId',
            'animalID' => 'animalId',
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
            'releaseByName' => 'releaseByName',
        ],
        'output' => [
            'id' => 'outcomesReleaseID',
            'intakeId' => 'outcomesReleaseIntakeID',
            'animalConditionId' => 'outcomesReleaseAnimalConditionID',
            'date' => 'outcomesReleaseDate',
            'notes' => 'outcomesReleaseNotes',
            'location' => 'outcomesReleaseLocation',
            'address' => 'outcomesReleaseAddress',
            'city' => 'outcomesReleaseCity',
            'state' => 'outcomesReleaseState',
            'postalcode' => 'outcomesReleasePostalcode',
            'byId' => 'outcomesReleaseByID',
            'animalId' => 'animalID',
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
            'releaseByName' => 'releaseByName',
        ]
    ];

}
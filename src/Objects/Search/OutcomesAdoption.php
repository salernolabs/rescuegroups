<?php
/**
 * OutcomesAdoption Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class OutcomesAdoption extends \RescueGroups\Objects\OutcomesAdoption implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Outcome Adoption Intake
     *
     * @var integer
     */
    public $intakeId = null;

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
     * Adopter Contact
     *
     * @var string
     */
    public $adopterContactId = null;

    /**
     * Owner
     *
     * @var string
     */
    public $ownerName = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'outcomesAdoptionID' => 'id',
            'outcomesAdoptionIntakeID' => 'intakeId',
            'outcomesAdoptionAnimalConditionID' => 'animalConditionId',
            'outcomesAdoptionDate' => 'date',
            'outcomesAdoptionNotes' => 'notes',
            'outcomesAdoptionAdoptionID' => 'adoptionId',
            'animalID' => 'animalId',
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
            'adopterContactID' => 'adopterContactId',
            'ownerName' => 'ownerName',
        ],
        'output' => [
            'id' => 'outcomesAdoptionID',
            'intakeId' => 'outcomesAdoptionIntakeID',
            'animalConditionId' => 'outcomesAdoptionAnimalConditionID',
            'date' => 'outcomesAdoptionDate',
            'notes' => 'outcomesAdoptionNotes',
            'adoptionId' => 'outcomesAdoptionAdoptionID',
            'animalId' => 'animalID',
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
            'adopterContactId' => 'adopterContactID',
            'ownerName' => 'ownerName',
        ]
    ];

}
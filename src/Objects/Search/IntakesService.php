<?php
/**
 * IntakesService Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class IntakesService extends \RescueGroups\Objects\IntakesService implements \RescueGroups\Objects\APIEncodableInterface
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
     * Owner
     *
     * @var string
     */
    public $ownerName = null;

    /**
     * Service
     *
     * @var string
     */
    public $serviceName = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'intakesServiceID' => 'id',
            'intakesServiceAnimalID' => 'animalId',
            'intakesServiceAnimalConditionID' => 'animalConditionId',
            'intakesServiceDate' => 'date',
            'intakesServiceNotes' => 'notes',
            'intakesServiceOwnerID' => 'ownerId',
            'intakesServiceServicetypeID' => 'servicetypeId',
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
            'ownerName' => 'ownerName',
            'serviceName' => 'serviceName',
        ],
        'output' => [
            'id' => 'intakesServiceID',
            'animalId' => 'intakesServiceAnimalID',
            'animalConditionId' => 'intakesServiceAnimalConditionID',
            'date' => 'intakesServiceDate',
            'notes' => 'intakesServiceNotes',
            'ownerId' => 'intakesServiceOwnerID',
            'servicetypeId' => 'intakesServiceServicetypeID',
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
            'ownerName' => 'ownerName',
            'serviceName' => 'serviceName',
        ]
    ];

}
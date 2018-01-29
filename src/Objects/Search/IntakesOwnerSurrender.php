<?php
/**
 * IntakesOwnerSurrender Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class IntakesOwnerSurrender extends \RescueGroups\Objects\IntakesOwnerSurrender implements \RescueGroups\Objects\APIEncodableInterface
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
     * Surrendered By
     *
     * @var string
     */
    public $ownerName = null;

    /**
     * Surrender Reason
     *
     * @var string
     */
    public $surrenderReason = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'intakesOwnersurrenderID' => 'id',
            'intakesOwnersurrenderAnimalID' => 'animalId',
            'intakesOwnersurrenderAnimalConditionID' => 'animalConditionId',
            'intakesOwnersurrenderDate' => 'date',
            'intakesOwnersurrenderNotes' => 'notes',
            'intakesOwnersurrenderOwnerID' => 'ownerId',
            'intakesOwnersurrenderReasonID' => 'reasonId',
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
            'ownerName' => 'ownerName',
            'surrenderReason' => 'surrenderReason',
        ],
        'output' => [
            'id' => 'intakesOwnersurrenderID',
            'animalId' => 'intakesOwnersurrenderAnimalID',
            'animalConditionId' => 'intakesOwnersurrenderAnimalConditionID',
            'date' => 'intakesOwnersurrenderDate',
            'notes' => 'intakesOwnersurrenderNotes',
            'ownerId' => 'intakesOwnersurrenderOwnerID',
            'reasonId' => 'intakesOwnersurrenderReasonID',
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
            'ownerName' => 'ownerName',
            'surrenderReason' => 'surrenderReason',
        ]
    ];

}
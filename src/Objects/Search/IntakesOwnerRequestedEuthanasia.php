<?php
/**
 * IntakesOwnerRequestedEuthanasia Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class IntakesOwnerRequestedEuthanasia extends \RescueGroups\Objects\IntakesOwnerRequestedEuthanasia implements \RescueGroups\Objects\APIEncodableInterface
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
     * Euthanasia Reason
     *
     * @var string
     */
    public $euthanasiaReason = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'intakesOwnerrequestedeuthanasiaID' => 'id',
            'intakesOwnerrequestedeuthanasiaAnimalID' => 'animalId',
            'intakesOwnerrequestedeuthanasiaAnimalConditionID' => 'animalConditionId',
            'intakesOwnerrequestedeuthanasiaDate' => 'date',
            'intakesOwnerrequestedeuthanasiaNotes' => 'notes',
            'intakesOwnerrequestedeuthanasiaOwnerID' => 'ownerId',
            'intakesOwnerrequestedeuthanasiaReasonID' => 'reasonId',
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
            'ownerName' => 'ownerName',
            'euthanasiaReason' => 'euthanasiaReason',
        ],
        'output' => [
            'id' => 'intakesOwnerrequestedeuthanasiaID',
            'animalId' => 'intakesOwnerrequestedeuthanasiaAnimalID',
            'animalConditionId' => 'intakesOwnerrequestedeuthanasiaAnimalConditionID',
            'date' => 'intakesOwnerrequestedeuthanasiaDate',
            'notes' => 'intakesOwnerrequestedeuthanasiaNotes',
            'ownerId' => 'intakesOwnerrequestedeuthanasiaOwnerID',
            'reasonId' => 'intakesOwnerrequestedeuthanasiaReasonID',
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
            'ownerName' => 'ownerName',
            'euthanasiaReason' => 'euthanasiaReason',
        ]
    ];

}
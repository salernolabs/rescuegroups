<?php
/**
 * IntakesTransfer Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class IntakesTransfer extends \RescueGroups\Objects\IntakesTransfer implements \RescueGroups\Objects\APIEncodableInterface
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
     * Transfer From
     *
     * @var string
     */
    public $transferFromName = null;

    /**
     * Transfer Reason
     *
     * @var string
     */
    public $transferReason = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'intakesTransferID' => 'id',
            'intakesTransferAnimalID' => 'animalId',
            'intakesTransferAnimalConditionID' => 'animalConditionId',
            'intakesTransferDate' => 'date',
            'intakesTransferNotes' => 'notes',
            'intakesTransferFromID' => 'fromId',
            'intakesTransferCoalitionMember' => 'coalitionMember',
            'intakesTransferReasonID' => 'reasonId',
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
            'transferFromName' => 'transferFromName',
            'transferReason' => 'transferReason',
        ],
        'output' => [
            'id' => 'intakesTransferID',
            'animalId' => 'intakesTransferAnimalID',
            'animalConditionId' => 'intakesTransferAnimalConditionID',
            'date' => 'intakesTransferDate',
            'notes' => 'intakesTransferNotes',
            'fromId' => 'intakesTransferFromID',
            'coalitionMember' => 'intakesTransferCoalitionMember',
            'reasonId' => 'intakesTransferReasonID',
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
            'transferFromName' => 'transferFromName',
            'transferReason' => 'transferReason',
        ]
    ];

}
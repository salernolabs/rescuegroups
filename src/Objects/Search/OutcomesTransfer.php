<?php
/**
 * OutcomesTransfer Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class OutcomesTransfer extends \RescueGroups\Objects\OutcomesTransfer implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Outcome Transfer Intake
     *
     * @var integer
     */
    public $intakeId = null;

    /**
     * Transfer Reason
     *
     * @var string
     */
    public $reason = null;

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
     * Receive Name
     *
     * @var string
     */
    public $receiveName = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'outcomesTransferID' => 'id',
            'outcomesTransferIntakeID' => 'intakeId',
            'outcomesTransferAnimalConditionID' => 'animalConditionId',
            'outcomesTransferDate' => 'date',
            'outcomesTransferNotes' => 'notes',
            'outcomesTransferReceiveID' => 'receiveId',
            'outcomesTransferCoalitionMember' => 'coalitionMember',
            'outcomesTransferReasonID' => 'reasonId',
            'outcomesTransferReason' => 'reason',
            'animalID' => 'animalId',
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
            'receiveName' => 'receiveName',
        ],
        'output' => [
            'id' => 'outcomesTransferID',
            'intakeId' => 'outcomesTransferIntakeID',
            'animalConditionId' => 'outcomesTransferAnimalConditionID',
            'date' => 'outcomesTransferDate',
            'notes' => 'outcomesTransferNotes',
            'receiveId' => 'outcomesTransferReceiveID',
            'coalitionMember' => 'outcomesTransferCoalitionMember',
            'reasonId' => 'outcomesTransferReasonID',
            'reason' => 'outcomesTransferReason',
            'animalId' => 'animalID',
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
            'receiveName' => 'receiveName',
        ]
    ];

}
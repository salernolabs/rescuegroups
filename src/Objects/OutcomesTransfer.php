<?php
/**
 * OutcomesTransfer Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class OutcomesTransfer implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $id = null;

    /**
     * Condition
     *
     * @var integer
     */
    public $animalConditionId = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $date = null;

    /**
     * Notes
     *
     * @var string
     */
    public $notes = null;

    /**
     * Received
     *
     * @var integer
     */
    public $receiveId = null;

    /**
     * Coalition Member
     *
     * @var string
     */
    public $coalitionMember = null;

    /**
     * Transfer Reason
     *
     * @var integer
     */
    public $reasonId = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'outcomesTransferID' => 'id',
            'outcomesTransferAnimalConditionID' => 'animalConditionId',
            'outcomesTransferDate' => 'date',
            'outcomesTransferNotes' => 'notes',
            'outcomesTransferReceiveID' => 'receiveId',
            'outcomesTransferCoalitionMember' => 'coalitionMember',
            'outcomesTransferReasonID' => 'reasonId',
        ],
        'output' => [
            'id' => 'outcomesTransferID',
            'animalConditionId' => 'outcomesTransferAnimalConditionID',
            'date' => 'outcomesTransferDate',
            'notes' => 'outcomesTransferNotes',
            'receiveId' => 'outcomesTransferReceiveID',
            'coalitionMember' => 'outcomesTransferCoalitionMember',
            'reasonId' => 'outcomesTransferReasonID',
        ]
    ];

    /**
     * OutcomesTransfer Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        $this->mapFromAPI($inputData);
    }

    /**
     * Get array mapping for API functions
     *
     * @param bool $includeId
     * @return array
     */
    public function getArray($includeId = true)
    {
        return $this->mapToAPI($includeId);
    }
}
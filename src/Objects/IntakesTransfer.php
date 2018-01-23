<?php
/**
 * IntakesTransfer Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class IntakesTransfer implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Owner Surrender, Primary Key
     *
     * @var integer
     */
    public $id = null;

    /**
     * Animal
     *
     * @var integer
     */
    public $animalId = null;

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
     * Transferred From
     *
     * @var integer
     */
    public $fromId = null;

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
            'intakesTransferID' => 'id',
            'intakesTransferAnimalID' => 'animalId',
            'intakesTransferAnimalConditionID' => 'animalConditionId',
            'intakesTransferDate' => 'date',
            'intakesTransferNotes' => 'notes',
            'intakesTransferFromID' => 'fromId',
            'intakesTransferCoalitionMember' => 'coalitionMember',
            'intakesTransferReasonID' => 'reasonId',
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
        ]
    ];

    /**
     * IntakesTransfer Constructor
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
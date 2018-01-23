<?php
/**
 * IntakesOwnerRequestedEuthanasia Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class IntakesOwnerRequestedEuthanasia implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Owner requestedeuthanasia, Primary Key
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
     * Owner
     *
     * @var integer
     */
    public $ownerId = null;

    /**
     * Euthanasia Reason
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
            'intakesOwnerrequestedeuthanasiaID' => 'id',
            'intakesOwnerrequestedeuthanasiaAnimalID' => 'animalId',
            'intakesOwnerrequestedeuthanasiaAnimalConditionID' => 'animalConditionId',
            'intakesOwnerrequestedeuthanasiaDate' => 'date',
            'intakesOwnerrequestedeuthanasiaNotes' => 'notes',
            'intakesOwnerrequestedeuthanasiaOwnerID' => 'ownerId',
            'intakesOwnerrequestedeuthanasiaReasonID' => 'reasonId',
        ],
        'output' => [
            'id' => 'intakesOwnerrequestedeuthanasiaID',
            'animalId' => 'intakesOwnerrequestedeuthanasiaAnimalID',
            'animalConditionId' => 'intakesOwnerrequestedeuthanasiaAnimalConditionID',
            'date' => 'intakesOwnerrequestedeuthanasiaDate',
            'notes' => 'intakesOwnerrequestedeuthanasiaNotes',
            'ownerId' => 'intakesOwnerrequestedeuthanasiaOwnerID',
            'reasonId' => 'intakesOwnerrequestedeuthanasiaReasonID',
        ]
    ];

    /**
     * IntakesOwnerRequestedEuthanasia Constructor
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
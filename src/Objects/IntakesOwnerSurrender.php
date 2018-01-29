<?php
/**
 * IntakesOwnerSurrender Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class IntakesOwnerSurrender implements \RescueGroups\Objects\APIEncodableInterface
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
     * Surrendered By
     *
     * @var integer
     */
    public $ownerId = null;

    /**
     * Surrender Reason
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
            'intakesOwnersurrenderID' => 'id',
            'intakesOwnersurrenderAnimalID' => 'animalId',
            'intakesOwnersurrenderAnimalConditionID' => 'animalConditionId',
            'intakesOwnersurrenderDate' => 'date',
            'intakesOwnersurrenderNotes' => 'notes',
            'intakesOwnersurrenderOwnerID' => 'ownerId',
            'intakesOwnersurrenderReasonID' => 'reasonId',
        ],
        'output' => [
            'id' => 'intakesOwnersurrenderID',
            'animalId' => 'intakesOwnersurrenderAnimalID',
            'animalConditionId' => 'intakesOwnersurrenderAnimalConditionID',
            'date' => 'intakesOwnersurrenderDate',
            'notes' => 'intakesOwnersurrenderNotes',
            'ownerId' => 'intakesOwnersurrenderOwnerID',
            'reasonId' => 'intakesOwnersurrenderReasonID',
        ]
    ];

    /**
     * IntakesOwnerSurrender Constructor
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
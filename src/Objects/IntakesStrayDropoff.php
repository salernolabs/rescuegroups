<?php
/**
 * IntakesStrayDropoff Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class IntakesStrayDropoff implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Stray Pickup, Primary Key
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
     * Found Location
     *
     * @var string
     */
    public $foundLocation = null;

    /**
     * Found Street address
     *
     * @var string
     */
    public $foundAddress = null;

    /**
     * Found City
     *
     * @var string
     */
    public $foundCity = null;

    /**
     * Found State/Province
     *
     * @var string
     */
    public $foundState = null;

    /**
     * Found Postal Code
     *
     * @var string
     */
    public $foundPostalcode = null;

    /**
     * Dropped off by
     *
     * @var integer
     */
    public $finderId = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'intakesStraydropoffID' => 'id',
            'intakesStraydropoffAnimalID' => 'animalId',
            'intakesStraydropoffAnimalConditionID' => 'animalConditionId',
            'intakesStraydropoffDate' => 'date',
            'intakesStraydropoffNotes' => 'notes',
            'intakesStraydropoffFoundLocation' => 'foundLocation',
            'intakesStraydropoffFoundAddress' => 'foundAddress',
            'intakesStraydropoffFoundCity' => 'foundCity',
            'intakesStraydropoffFoundState' => 'foundState',
            'intakesStraydropoffFoundPostalcode' => 'foundPostalcode',
            'intakesStraydropoffFinderID' => 'finderId',
        ],
        'output' => [
            'id' => 'intakesStraydropoffID',
            'animalId' => 'intakesStraydropoffAnimalID',
            'animalConditionId' => 'intakesStraydropoffAnimalConditionID',
            'date' => 'intakesStraydropoffDate',
            'notes' => 'intakesStraydropoffNotes',
            'foundLocation' => 'intakesStraydropoffFoundLocation',
            'foundAddress' => 'intakesStraydropoffFoundAddress',
            'foundCity' => 'intakesStraydropoffFoundCity',
            'foundState' => 'intakesStraydropoffFoundState',
            'foundPostalcode' => 'intakesStraydropoffFoundPostalcode',
            'finderId' => 'intakesStraydropoffFinderID',
        ]
    ];

    /**
     * IntakesStrayDropoff Constructor
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
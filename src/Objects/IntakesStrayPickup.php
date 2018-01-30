<?php
/**
 * IntakesStrayPickup Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class IntakesStrayPickup implements \RescueGroups\Objects\APIEncodableInterface
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
     * Pickup Location
     *
     * @var string
     */
    public $location = null;

    /**
     * Pickup Street address
     *
     * @var string
     */
    public $address = null;

    /**
     * Pickup City
     *
     * @var string
     */
    public $city = null;

    /**
     * Pickup State/Province
     *
     * @var string
     */
    public $state = null;

    /**
     * Pickup Postal Code
     *
     * @var string
     */
    public $postalcode = null;

    /**
     * Found By
     *
     * @var integer
     */
    public $finderId = null;

    /**
     * Pickup By
     *
     * @var integer
     */
    public $staffId = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'intakesStraypickupID' => 'id',
            'intakesStraypickupAnimalID' => 'animalId',
            'intakesStraypickupAnimalConditionID' => 'animalConditionId',
            'intakesStraypickupDate' => 'date',
            'intakesStraypickupNotes' => 'notes',
            'intakesStraypickupLocation' => 'location',
            'intakesStraypickupAddress' => 'address',
            'intakesStraypickupCity' => 'city',
            'intakesStraypickupState' => 'state',
            'intakesStraypickupPostalcode' => 'postalcode',
            'intakesStraypickupFinderID' => 'finderId',
            'intakesStraypickupStaffID' => 'staffId',
        ],
        'output' => [
            'id' => 'intakesStraypickupID',
            'animalId' => 'intakesStraypickupAnimalID',
            'animalConditionId' => 'intakesStraypickupAnimalConditionID',
            'date' => 'intakesStraypickupDate',
            'notes' => 'intakesStraypickupNotes',
            'location' => 'intakesStraypickupLocation',
            'address' => 'intakesStraypickupAddress',
            'city' => 'intakesStraypickupCity',
            'state' => 'intakesStraypickupState',
            'postalcode' => 'intakesStraypickupPostalcode',
            'finderId' => 'intakesStraypickupFinderID',
            'staffId' => 'intakesStraypickupStaffID',
        ]
    ];

    /**
     * IntakesStrayPickup Constructor
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
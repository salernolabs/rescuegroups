<?php
/**
 * IntakesImpound Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class IntakesImpound implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Impound, Primary Key
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
     * Impound Location
     *
     * @var string
     */
    public $location = null;

    /**
     * Impound Street address
     *
     * @var string
     */
    public $address = null;

    /**
     * Impound City
     *
     * @var string
     */
    public $city = null;

    /**
     * Impound State/Province
     *
     * @var string
     */
    public $state = null;

    /**
     * Impound Postal Code
     *
     * @var string
     */
    public $postalcode = null;

    /**
     * Impound From
     *
     * @var integer
     */
    public $fromId = null;

    /**
     * Impound Performed By
     *
     * @var integer
     */
    public $staffId = null;

    /**
     * Reason
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
            'intakesImpoundID' => 'id',
            'intakesImpoundAnimalID' => 'animalId',
            'intakesImpoundAnimalConditionID' => 'animalConditionId',
            'intakesImpoundDate' => 'date',
            'intakesImpoundNotes' => 'notes',
            'intakesImpoundLocation' => 'location',
            'intakesImpoundAddress' => 'address',
            'intakesImpoundCity' => 'city',
            'intakesImpoundState' => 'state',
            'intakesImpoundPostalcode' => 'postalcode',
            'intakesImpoundFromID' => 'fromId',
            'intakesImpoundStaffID' => 'staffId',
            'intakesImpoundReasonID' => 'reasonId',
        ],
        'output' => [
            'id' => 'intakesImpoundID',
            'animalId' => 'intakesImpoundAnimalID',
            'animalConditionId' => 'intakesImpoundAnimalConditionID',
            'date' => 'intakesImpoundDate',
            'notes' => 'intakesImpoundNotes',
            'location' => 'intakesImpoundLocation',
            'address' => 'intakesImpoundAddress',
            'city' => 'intakesImpoundCity',
            'state' => 'intakesImpoundState',
            'postalcode' => 'intakesImpoundPostalcode',
            'fromId' => 'intakesImpoundFromID',
            'staffId' => 'intakesImpoundStaffID',
            'reasonId' => 'intakesImpoundReasonID',
        ]
    ];

    /**
     * IntakesImpound Constructor
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
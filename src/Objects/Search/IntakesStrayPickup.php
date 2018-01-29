<?php
/**
 * IntakesStrayPickup Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class IntakesStrayPickup extends \RescueGroups\Objects\IntakesStrayPickup implements \RescueGroups\Objects\APIEncodableInterface
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
     * Found by
     *
     * @var string
     */
    public $finderName = null;

    /**
     * Pickup by
     *
     * @var string
     */
    public $pickupstaffName = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
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
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
            'finderName' => 'finderName',
            'pickupstaffName' => 'pickupstaffName',
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
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
            'finderName' => 'finderName',
            'pickupstaffName' => 'pickupstaffName',
        ]
    ];

}
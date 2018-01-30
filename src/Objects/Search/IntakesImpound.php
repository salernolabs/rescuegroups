<?php
/**
 * IntakesImpound Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class IntakesImpound extends \RescueGroups\Objects\IntakesImpound implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Animal
     *
     * @var string
     */
    public $animalName = null;

    /**
     * Animal Condition
     *
     * @var string
     */
    public $animalConditionName = null;

    /**
     * Impound From
     *
     * @var string
     */
    public $impoundFromName = null;

    /**
     * Impound Performed by
     *
     * @var string
     */
    public $impoundStaffName = null;

    /**
     * Impound Reason
     *
     * @var string
     */
    public $impoundReason = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
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
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
            'impoundFromName' => 'impoundFromName',
            'impoundStaffName' => 'impoundStaffName',
            'impoundReason' => 'impoundReason',
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
            'animalName' => 'animalName',
            'animalConditionName' => 'animalConditionName',
            'impoundFromName' => 'impoundFromName',
            'impoundStaffName' => 'impoundStaffName',
            'impoundReason' => 'impoundReason',
        ]
    ];

}
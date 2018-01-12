<?php
/**
 * IntakesStrayDropoff Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class IntakesStrayDropoff
{
    /**
     * Stray Pickup
     *
     * @var integer
     */
    public $intakesStraydropoffID = null;

    /**
     * Animal
     *
     * @var integer
     */
    public $intakesStraydropoffAnimalID = null;

    /**
     * Condition
     *
     * @var integer
     */
    public $intakesStraydropoffAnimalConditionID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $intakesStraydropoffDate = null;

    /**
     * Notes
     *
     * @var string
     */
    public $intakesStraydropoffNotes = null;

    /**
     * Found Location
     *
     * @var string
     */
    public $intakesStraydropoffFoundLocation = null;

    /**
     * Found Street address
     *
     * @var string
     */
    public $intakesStraydropoffFoundAddress = null;

    /**
     * Found City
     *
     * @var string
     */
    public $intakesStraydropoffFoundCity = null;

    /**
     * Found State/Province
     *
     * @var string
     */
    public $intakesStraydropoffFoundState = null;

    /**
     * Found Postal Code
     *
     * @var string
     */
    public $intakesStraydropoffFoundPostalcode = null;

    /**
     * Dropped off by
     *
     * @var integer
     */
    public $intakesStraydropoffFinderID = null;


    /**
     * IntakesStrayDropoff Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->intakesStraydropoffID)) $this->intakesStraydropoffID = $inputData->intakesStraydropoffID;
        if (!empty($inputData->intakesStraydropoffAnimalID)) $this->intakesStraydropoffAnimalID = $inputData->intakesStraydropoffAnimalID;
        if (!empty($inputData->intakesStraydropoffAnimalConditionID)) $this->intakesStraydropoffAnimalConditionID = $inputData->intakesStraydropoffAnimalConditionID;
        if (!empty($inputData->intakesStraydropoffDate)) $this->intakesStraydropoffDate = $inputData->intakesStraydropoffDate;
        if (!empty($inputData->intakesStraydropoffNotes)) $this->intakesStraydropoffNotes = $inputData->intakesStraydropoffNotes;
        if (!empty($inputData->intakesStraydropoffFoundLocation)) $this->intakesStraydropoffFoundLocation = $inputData->intakesStraydropoffFoundLocation;
        if (!empty($inputData->intakesStraydropoffFoundAddress)) $this->intakesStraydropoffFoundAddress = $inputData->intakesStraydropoffFoundAddress;
        if (!empty($inputData->intakesStraydropoffFoundCity)) $this->intakesStraydropoffFoundCity = $inputData->intakesStraydropoffFoundCity;
        if (!empty($inputData->intakesStraydropoffFoundState)) $this->intakesStraydropoffFoundState = $inputData->intakesStraydropoffFoundState;
        if (!empty($inputData->intakesStraydropoffFoundPostalcode)) $this->intakesStraydropoffFoundPostalcode = $inputData->intakesStraydropoffFoundPostalcode;
        if (!empty($inputData->intakesStraydropoffFinderID)) $this->intakesStraydropoffFinderID = $inputData->intakesStraydropoffFinderID;
    }
}
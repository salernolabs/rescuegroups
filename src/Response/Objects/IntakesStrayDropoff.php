<?php
/**
 * IntakesStrayDropoff Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects\IntakesStrayDropoff;

class IntakesStrayDropoff
{
    /**
     * Animal
     * @var integer
     */
    public $intakesStraydropoffAnimalID;

    /**
     * Condition
     * @var integer
     */
    public $intakesStraydropoffAnimalConditionID;

    /**
     * Date
     * @var \DateTime
     */
    public $intakesStraydropoffDate;

    /**
     * Notes
     * @var string
     */
    public $intakesStraydropoffNotes;

    /**
     * Found Location
     * @var string
     */
    public $intakesStraydropoffFoundLocation;

    /**
     * Found Street address
     * @var string
     */
    public $intakesStraydropoffFoundAddress;

    /**
     * Found City
     * @var string
     */
    public $intakesStraydropoffFoundCity;

    /**
     * Found State/Province
     * @var string
     */
    public $intakesStraydropoffFoundState;

    /**
     * Found Postal Code
     * @var string
     */
    public $intakesStraydropoffFoundPostalcode;

    /**
     * Dropped off by
     * @var integer
     */
    public $intakesStraydropoffFinderID;



    /**
     * IntakesStrayDropoffs Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
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
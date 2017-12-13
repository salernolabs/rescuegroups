<?php
/**
 * IntakesStrayPickup Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects\IntakesStrayPickup;

class IntakesStrayPickup
{
    /**
     * Animal
     * @var integer
     */
    public $intakesStraypickupAnimalID;

    /**
     * Condition
     * @var integer
     */
    public $intakesStraypickupAnimalConditionID;

    /**
     * Date
     * @var \DateTime
     */
    public $intakesStraypickupDate;

    /**
     * Notes
     * @var string
     */
    public $intakesStraypickupNotes;

    /**
     * Pickup Location
     * @var string
     */
    public $intakesStraypickupLocation;

    /**
     * Pickup Street address
     * @var string
     */
    public $intakesStraypickupAddress;

    /**
     * Pickup City
     * @var string
     */
    public $intakesStraypickupCity;

    /**
     * Pickup State/Province
     * @var string
     */
    public $intakesStraypickupState;

    /**
     * Pickup Postal Code
     * @var string
     */
    public $intakesStraypickupPostalcode;

    /**
     * Found By
     * @var integer
     */
    public $intakesStraypickupFinderID;

    /**
     * Pickup By
     * @var integer
     */
    public $intakesStraypickupStaffID;



    /**
     * IntakesStrayPickups Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->intakesStraypickupAnimalID)) $this->intakesStraypickupAnimalID = $inputData->intakesStraypickupAnimalID;
        if (!empty($inputData->intakesStraypickupAnimalConditionID)) $this->intakesStraypickupAnimalConditionID = $inputData->intakesStraypickupAnimalConditionID;
        if (!empty($inputData->intakesStraypickupDate)) $this->intakesStraypickupDate = $inputData->intakesStraypickupDate;
        if (!empty($inputData->intakesStraypickupNotes)) $this->intakesStraypickupNotes = $inputData->intakesStraypickupNotes;
        if (!empty($inputData->intakesStraypickupLocation)) $this->intakesStraypickupLocation = $inputData->intakesStraypickupLocation;
        if (!empty($inputData->intakesStraypickupAddress)) $this->intakesStraypickupAddress = $inputData->intakesStraypickupAddress;
        if (!empty($inputData->intakesStraypickupCity)) $this->intakesStraypickupCity = $inputData->intakesStraypickupCity;
        if (!empty($inputData->intakesStraypickupState)) $this->intakesStraypickupState = $inputData->intakesStraypickupState;
        if (!empty($inputData->intakesStraypickupPostalcode)) $this->intakesStraypickupPostalcode = $inputData->intakesStraypickupPostalcode;
        if (!empty($inputData->intakesStraypickupFinderID)) $this->intakesStraypickupFinderID = $inputData->intakesStraypickupFinderID;
        if (!empty($inputData->intakesStraypickupStaffID)) $this->intakesStraypickupStaffID = $inputData->intakesStraypickupStaffID;

    }
}
<?php
/**
 * IntakesStrayPickup Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class IntakesStrayPickup
{
    /**
     * Stray Pickup
     *
     * @var integer
     */
    public $intakesStraypickupID = null;

    /**
     * Animal
     *
     * @var integer
     */
    public $intakesStraypickupAnimalID = null;

    /**
     * Condition
     *
     * @var integer
     */
    public $intakesStraypickupAnimalConditionID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $intakesStraypickupDate = null;

    /**
     * Notes
     *
     * @var string
     */
    public $intakesStraypickupNotes = null;

    /**
     * Pickup Location
     *
     * @var string
     */
    public $intakesStraypickupLocation = null;

    /**
     * Pickup Street address
     *
     * @var string
     */
    public $intakesStraypickupAddress = null;

    /**
     * Pickup City
     *
     * @var string
     */
    public $intakesStraypickupCity = null;

    /**
     * Pickup State/Province
     *
     * @var string
     */
    public $intakesStraypickupState = null;

    /**
     * Pickup Postal Code
     *
     * @var string
     */
    public $intakesStraypickupPostalcode = null;

    /**
     * Found By
     *
     * @var integer
     */
    public $intakesStraypickupFinderID = null;

    /**
     * Pickup By
     *
     * @var integer
     */
    public $intakesStraypickupStaffID = null;


    /**
     * IntakesStrayPickup Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->intakesStraypickupID)) $this->intakesStraypickupID = $inputData->intakesStraypickupID;
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
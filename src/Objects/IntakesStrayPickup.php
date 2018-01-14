<?php
/**
 * IntakesStrayPickup Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class IntakesStrayPickup implements \RescueGroups\Objects\APIEncodableInterface
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
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

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

    /**
     * Get array mapping for API functions
     *
     * @return array
     */
    public function getArray()
    {
        $output = [];
        if ($this->intakesStraypickupID !== null) $output['intakesStraypickupID'] = $this->intakesStraypickupID;
        if ($this->intakesStraypickupAnimalID !== null) $output['intakesStraypickupAnimalID'] = $this->intakesStraypickupAnimalID;
        if ($this->intakesStraypickupAnimalConditionID !== null) $output['intakesStraypickupAnimalConditionID'] = $this->intakesStraypickupAnimalConditionID;
        if ($this->intakesStraypickupDate !== null) $output['intakesStraypickupDate'] = $this->intakesStraypickupDate;
        if ($this->intakesStraypickupNotes !== null) $output['intakesStraypickupNotes'] = $this->intakesStraypickupNotes;
        if ($this->intakesStraypickupLocation !== null) $output['intakesStraypickupLocation'] = $this->intakesStraypickupLocation;
        if ($this->intakesStraypickupAddress !== null) $output['intakesStraypickupAddress'] = $this->intakesStraypickupAddress;
        if ($this->intakesStraypickupCity !== null) $output['intakesStraypickupCity'] = $this->intakesStraypickupCity;
        if ($this->intakesStraypickupState !== null) $output['intakesStraypickupState'] = $this->intakesStraypickupState;
        if ($this->intakesStraypickupPostalcode !== null) $output['intakesStraypickupPostalcode'] = $this->intakesStraypickupPostalcode;
        if ($this->intakesStraypickupFinderID !== null) $output['intakesStraypickupFinderID'] = $this->intakesStraypickupFinderID;
        if ($this->intakesStraypickupStaffID !== null) $output['intakesStraypickupStaffID'] = $this->intakesStraypickupStaffID;

        return $output;
    }
}
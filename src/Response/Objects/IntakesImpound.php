<?php
/**
 * IntakesImpound Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class IntakesImpound
{
    /**
     * Animal
     * @var integer
     */
    public $intakesImpoundAnimalID;

    /**
     * Condition
     * @var integer
     */
    public $intakesImpoundAnimalConditionID;

    /**
     * Date
     * @var \DateTime
     */
    public $intakesImpoundDate;

    /**
     * Notes
     * @var string
     */
    public $intakesImpoundNotes;

    /**
     * Impound Location
     * @var string
     */
    public $intakesImpoundLocation;

    /**
     * Impound Street address
     * @var string
     */
    public $intakesImpoundAddress;

    /**
     * Impound City
     * @var string
     */
    public $intakesImpoundCity;

    /**
     * Impound State/Province
     * @var string
     */
    public $intakesImpoundState;

    /**
     * Impound Postal Code
     * @var string
     */
    public $intakesImpoundPostalcode;

    /**
     * Impound From
     * @var integer
     */
    public $intakesImpoundFromID;

    /**
     * Impound Performed By
     * @var integer
     */
    public $intakesImpoundStaffID;

    /**
     * Reason
     * @var integer
     */
    public $intakesImpoundReasonID;



    /**
     * IntakesImpounds Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->intakesImpoundAnimalID)) $this->intakesImpoundAnimalID = $inputData->intakesImpoundAnimalID;
        if (!empty($inputData->intakesImpoundAnimalConditionID)) $this->intakesImpoundAnimalConditionID = $inputData->intakesImpoundAnimalConditionID;
        if (!empty($inputData->intakesImpoundDate)) $this->intakesImpoundDate = $inputData->intakesImpoundDate;
        if (!empty($inputData->intakesImpoundNotes)) $this->intakesImpoundNotes = $inputData->intakesImpoundNotes;
        if (!empty($inputData->intakesImpoundLocation)) $this->intakesImpoundLocation = $inputData->intakesImpoundLocation;
        if (!empty($inputData->intakesImpoundAddress)) $this->intakesImpoundAddress = $inputData->intakesImpoundAddress;
        if (!empty($inputData->intakesImpoundCity)) $this->intakesImpoundCity = $inputData->intakesImpoundCity;
        if (!empty($inputData->intakesImpoundState)) $this->intakesImpoundState = $inputData->intakesImpoundState;
        if (!empty($inputData->intakesImpoundPostalcode)) $this->intakesImpoundPostalcode = $inputData->intakesImpoundPostalcode;
        if (!empty($inputData->intakesImpoundFromID)) $this->intakesImpoundFromID = $inputData->intakesImpoundFromID;
        if (!empty($inputData->intakesImpoundStaffID)) $this->intakesImpoundStaffID = $inputData->intakesImpoundStaffID;
        if (!empty($inputData->intakesImpoundReasonID)) $this->intakesImpoundReasonID = $inputData->intakesImpoundReasonID;

    }
}
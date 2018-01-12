<?php
/**
 * IntakesImpound Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class IntakesImpound
{
    /**
     * Impound
     *
     * @var integer
     */
    public $intakesImpoundID = null;

    /**
     * Animal
     *
     * @var integer
     */
    public $intakesImpoundAnimalID = null;

    /**
     * Condition
     *
     * @var integer
     */
    public $intakesImpoundAnimalConditionID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $intakesImpoundDate = null;

    /**
     * Notes
     *
     * @var string
     */
    public $intakesImpoundNotes = null;

    /**
     * Impound Location
     *
     * @var string
     */
    public $intakesImpoundLocation = null;

    /**
     * Impound Street address
     *
     * @var string
     */
    public $intakesImpoundAddress = null;

    /**
     * Impound City
     *
     * @var string
     */
    public $intakesImpoundCity = null;

    /**
     * Impound State/Province
     *
     * @var string
     */
    public $intakesImpoundState = null;

    /**
     * Impound Postal Code
     *
     * @var string
     */
    public $intakesImpoundPostalcode = null;

    /**
     * Impound From
     *
     * @var integer
     */
    public $intakesImpoundFromID = null;

    /**
     * Impound Performed By
     *
     * @var integer
     */
    public $intakesImpoundStaffID = null;

    /**
     * Reason
     *
     * @var integer
     */
    public $intakesImpoundReasonID = null;


    /**
     * IntakesImpound Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->intakesImpoundID)) $this->intakesImpoundID = $inputData->intakesImpoundID;
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
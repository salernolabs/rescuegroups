<?php
/**
 * OutcomesReleas Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class OutcomesReleas
{
    /**
     * Outcome Release Intake
     * @var integer
     */
    public $outcomesReleaseIntakeID;

    /**
     * Condition
     * @var integer
     */
    public $outcomesReleaseAnimalConditionID;

    /**
     * Date
     * @var \DateTime
     */
    public $outcomesReleaseDate;

    /**
     * Notes
     * @var string
     */
    public $outcomesReleaseNotes;

    /**
     * Location
     * @var string
     */
    public $outcomesReleaseLocation;

    /**
     * Street address
     * @var string
     */
    public $outcomesReleaseAddress;

    /**
     * City
     * @var string
     */
    public $outcomesReleaseCity;

    /**
     * State/Province
     * @var string
     */
    public $outcomesReleaseState;

    /**
     * Postal Code
     * @var string
     */
    public $outcomesReleasePostalcode;

    /**
     * Released By
     * @var integer
     */
    public $outcomesReleaseByID;



    /**
     * OutcomesReleases Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->outcomesReleaseIntakeID)) $this->outcomesReleaseIntakeID = $inputData->outcomesReleaseIntakeID;
        if (!empty($inputData->outcomesReleaseAnimalConditionID)) $this->outcomesReleaseAnimalConditionID = $inputData->outcomesReleaseAnimalConditionID;
        if (!empty($inputData->outcomesReleaseDate)) $this->outcomesReleaseDate = $inputData->outcomesReleaseDate;
        if (!empty($inputData->outcomesReleaseNotes)) $this->outcomesReleaseNotes = $inputData->outcomesReleaseNotes;
        if (!empty($inputData->outcomesReleaseLocation)) $this->outcomesReleaseLocation = $inputData->outcomesReleaseLocation;
        if (!empty($inputData->outcomesReleaseAddress)) $this->outcomesReleaseAddress = $inputData->outcomesReleaseAddress;
        if (!empty($inputData->outcomesReleaseCity)) $this->outcomesReleaseCity = $inputData->outcomesReleaseCity;
        if (!empty($inputData->outcomesReleaseState)) $this->outcomesReleaseState = $inputData->outcomesReleaseState;
        if (!empty($inputData->outcomesReleasePostalcode)) $this->outcomesReleasePostalcode = $inputData->outcomesReleasePostalcode;
        if (!empty($inputData->outcomesReleaseByID)) $this->outcomesReleaseByID = $inputData->outcomesReleaseByID;

    }
}
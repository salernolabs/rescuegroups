<?php
/**
 * OutcomesDeceased Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects\OutcomesDeceased;

class OutcomesDeceased
{
    /**
     * Outcome Deceased Intake
     * @var integer
     */
    public $intakeID;

    /**
     * Condition
     * @var integer
     */
    public $animalConditionID;

    /**
     * Date
     * @var \DateTime
     */
    public $date;

    /**
     * Notes
     * @var string
     */
    public $notes;

    /**
     * Reason
     * @var string
     */
    public $reason;



    /**
     * OutcomesDeceased Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->outcomesDeceasedIntakeID)) $this->intakeID = $inputData->outcomesDeceasedIntakeID;
        if (!empty($inputData->outcomesDeceasedAnimalConditionID)) $this->animalConditionID = $inputData->outcomesDeceasedAnimalConditionID;
        if (!empty($inputData->outcomesDeceasedDate)) $this->date = $inputData->outcomesDeceasedDate;
        if (!empty($inputData->outcomesDeceasedNotes)) $this->notes = $inputData->outcomesDeceasedNotes;
        if (!empty($inputData->outcomesDeceasedReason)) $this->reason = $inputData->outcomesDeceasedReason;

    }
}
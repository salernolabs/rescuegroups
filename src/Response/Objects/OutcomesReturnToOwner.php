<?php
/**
 * OutcomesReturnToOwner Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class OutcomesReturnToOwner
{
    /**
     * Outcome Returntoowner Intake
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
     * Return To
     * @var integer
     */
    public $ownerID;



    /**
     * OutcomesReturnToOwner Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->outcomesReturntoownerIntakeID)) $this->intakeID = $inputData->outcomesReturntoownerIntakeID;
        if (!empty($inputData->outcomesReturntoownerAnimalConditionID)) $this->animalConditionID = $inputData->outcomesReturntoownerAnimalConditionID;
        if (!empty($inputData->outcomesReturntoownerDate)) $this->date = $inputData->outcomesReturntoownerDate;
        if (!empty($inputData->outcomesReturntoownerNotes)) $this->notes = $inputData->outcomesReturntoownerNotes;
        if (!empty($inputData->outcomesReturntoownerOwnerID)) $this->ownerID = $inputData->outcomesReturntoownerOwnerID;

    }
}
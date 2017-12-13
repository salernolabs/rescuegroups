<?php
/**
 * OutcomesEuthanasia Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects\OutcomesEuthanasia;

class OutcomesEuthanasia
{
    /**
     * Outcome Euthanasia Intake
     * @var integer
     */
    public $outcomesEuthanasiaIntakeID;

    /**
     * Condition
     * @var integer
     */
    public $outcomesEuthanasiaAnimalConditionID;

    /**
     * Date
     * @var \DateTime
     */
    public $outcomesEuthanasiaDate;

    /**
     * Notes
     * @var string
     */
    public $outcomesEuthanasiaNotes;

    /**
     * Euthanasia Reason
     * @var integer
     */
    public $outcomesEuthanasiaReasonID;



    /**
     * OutcomesEuthanasias Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->outcomesEuthanasiaIntakeID)) $this->outcomesEuthanasiaIntakeID = $inputData->outcomesEuthanasiaIntakeID;
        if (!empty($inputData->outcomesEuthanasiaAnimalConditionID)) $this->outcomesEuthanasiaAnimalConditionID = $inputData->outcomesEuthanasiaAnimalConditionID;
        if (!empty($inputData->outcomesEuthanasiaDate)) $this->outcomesEuthanasiaDate = $inputData->outcomesEuthanasiaDate;
        if (!empty($inputData->outcomesEuthanasiaNotes)) $this->outcomesEuthanasiaNotes = $inputData->outcomesEuthanasiaNotes;
        if (!empty($inputData->outcomesEuthanasiaReasonID)) $this->outcomesEuthanasiaReasonID = $inputData->outcomesEuthanasiaReasonID;

    }
}
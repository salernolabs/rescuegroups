<?php
/**
 * OutcomesEuthanasia Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class OutcomesEuthanasia
{
    /**
     * ID
     * @var integer
     */
    public $outcomesEuthanasiaID;

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
        if (!empty($inputData->outcomesEuthanasiaID)) $this->outcomesEuthanasiaID = $inputData->outcomesEuthanasiaID;
        if (!empty($inputData->outcomesEuthanasiaAnimalConditionID)) $this->outcomesEuthanasiaAnimalConditionID = $inputData->outcomesEuthanasiaAnimalConditionID;
        if (!empty($inputData->outcomesEuthanasiaDate)) $this->outcomesEuthanasiaDate = $inputData->outcomesEuthanasiaDate;
        if (!empty($inputData->outcomesEuthanasiaNotes)) $this->outcomesEuthanasiaNotes = $inputData->outcomesEuthanasiaNotes;
        if (!empty($inputData->outcomesEuthanasiaReasonID)) $this->outcomesEuthanasiaReasonID = $inputData->outcomesEuthanasiaReasonID;

    }
}
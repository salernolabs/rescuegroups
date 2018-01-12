<?php
/**
 * OutcomesEuthanasia Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class OutcomesEuthanasia
{
    /**
     * ID
     *
     * @var integer
     */
    public $outcomesEuthanasiaID = null;

    /**
     * Condition
     *
     * @var integer
     */
    public $outcomesEuthanasiaAnimalConditionID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $outcomesEuthanasiaDate = null;

    /**
     * Notes
     *
     * @var string
     */
    public $outcomesEuthanasiaNotes = null;

    /**
     * Euthanasia Reason
     *
     * @var integer
     */
    public $outcomesEuthanasiaReasonID = null;


    /**
     * OutcomesEuthanasia Constructor
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
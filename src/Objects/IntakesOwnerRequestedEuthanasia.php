<?php
/**
 * IntakesOwnerRequestedEuthanasia Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class IntakesOwnerRequestedEuthanasia
{
    /**
     * Owner requestedeuthanasia
     *
     * @var integer
     */
    public $intakesOwnerrequestedeuthanasiaID = null;

    /**
     * Animal
     *
     * @var integer
     */
    public $intakesOwnerrequestedeuthanasiaAnimalID = null;

    /**
     * Condition
     *
     * @var integer
     */
    public $intakesOwnerrequestedeuthanasiaAnimalConditionID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $intakesOwnerrequestedeuthanasiaDate = null;

    /**
     * Notes
     *
     * @var string
     */
    public $intakesOwnerrequestedeuthanasiaNotes = null;

    /**
     * Owner
     *
     * @var integer
     */
    public $intakesOwnerrequestedeuthanasiaOwnerID = null;

    /**
     * Euthanasia Reason
     *
     * @var integer
     */
    public $intakesOwnerrequestedeuthanasiaReasonID = null;


    /**
     * IntakesOwnerRequestedEuthanasia Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->intakesOwnerrequestedeuthanasiaID)) $this->intakesOwnerrequestedeuthanasiaID = $inputData->intakesOwnerrequestedeuthanasiaID;
        if (!empty($inputData->intakesOwnerrequestedeuthanasiaAnimalID)) $this->intakesOwnerrequestedeuthanasiaAnimalID = $inputData->intakesOwnerrequestedeuthanasiaAnimalID;
        if (!empty($inputData->intakesOwnerrequestedeuthanasiaAnimalConditionID)) $this->intakesOwnerrequestedeuthanasiaAnimalConditionID = $inputData->intakesOwnerrequestedeuthanasiaAnimalConditionID;
        if (!empty($inputData->intakesOwnerrequestedeuthanasiaDate)) $this->intakesOwnerrequestedeuthanasiaDate = $inputData->intakesOwnerrequestedeuthanasiaDate;
        if (!empty($inputData->intakesOwnerrequestedeuthanasiaNotes)) $this->intakesOwnerrequestedeuthanasiaNotes = $inputData->intakesOwnerrequestedeuthanasiaNotes;
        if (!empty($inputData->intakesOwnerrequestedeuthanasiaOwnerID)) $this->intakesOwnerrequestedeuthanasiaOwnerID = $inputData->intakesOwnerrequestedeuthanasiaOwnerID;
        if (!empty($inputData->intakesOwnerrequestedeuthanasiaReasonID)) $this->intakesOwnerrequestedeuthanasiaReasonID = $inputData->intakesOwnerrequestedeuthanasiaReasonID;
    }
}
<?php
/**
 * IntakesOwnerRequestedEuthanasia Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class IntakesOwnerRequestedEuthanasia
{
    /**
     * Owner requestedeuthanasia
     * @var integer
     */
    public $intakesOwnerrequestedeuthanasiaID;

    /**
     * Animal
     * @var integer
     */
    public $intakesOwnerrequestedeuthanasiaAnimalID;

    /**
     * Condition
     * @var integer
     */
    public $intakesOwnerrequestedeuthanasiaAnimalConditionID;

    /**
     * Date
     * @var \DateTime
     */
    public $intakesOwnerrequestedeuthanasiaDate;

    /**
     * Notes
     * @var string
     */
    public $intakesOwnerrequestedeuthanasiaNotes;

    /**
     * Owner
     * @var integer
     */
    public $intakesOwnerrequestedeuthanasiaOwnerID;

    /**
     * Euthanasia Reason
     * @var integer
     */
    public $intakesOwnerrequestedeuthanasiaReasonID;



    /**
     * IntakesOwnerRequestedEuthanasias Constructor
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
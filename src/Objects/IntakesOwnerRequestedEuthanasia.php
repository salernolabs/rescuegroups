<?php
/**
 * IntakesOwnerRequestedEuthanasia Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class IntakesOwnerRequestedEuthanasia implements \RescueGroups\Objects\APIEncodableInterface
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
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->intakesOwnerrequestedeuthanasiaID)) $this->intakesOwnerrequestedeuthanasiaID = $inputData->intakesOwnerrequestedeuthanasiaID;
        if (!empty($inputData->intakesOwnerrequestedeuthanasiaAnimalID)) $this->intakesOwnerrequestedeuthanasiaAnimalID = $inputData->intakesOwnerrequestedeuthanasiaAnimalID;
        if (!empty($inputData->intakesOwnerrequestedeuthanasiaAnimalConditionID)) $this->intakesOwnerrequestedeuthanasiaAnimalConditionID = $inputData->intakesOwnerrequestedeuthanasiaAnimalConditionID;
        if (!empty($inputData->intakesOwnerrequestedeuthanasiaDate)) $this->intakesOwnerrequestedeuthanasiaDate = $inputData->intakesOwnerrequestedeuthanasiaDate;
        if (!empty($inputData->intakesOwnerrequestedeuthanasiaNotes)) $this->intakesOwnerrequestedeuthanasiaNotes = $inputData->intakesOwnerrequestedeuthanasiaNotes;
        if (!empty($inputData->intakesOwnerrequestedeuthanasiaOwnerID)) $this->intakesOwnerrequestedeuthanasiaOwnerID = $inputData->intakesOwnerrequestedeuthanasiaOwnerID;
        if (!empty($inputData->intakesOwnerrequestedeuthanasiaReasonID)) $this->intakesOwnerrequestedeuthanasiaReasonID = $inputData->intakesOwnerrequestedeuthanasiaReasonID;
    }

    /**
     * Get array mapping for API functions
     *
     * @return array
     */
    public function getArray()
    {
        $output = [];
        if ($this->intakesOwnerrequestedeuthanasiaID !== null) $output['intakesOwnerrequestedeuthanasiaID'] = $this->intakesOwnerrequestedeuthanasiaID;
        if ($this->intakesOwnerrequestedeuthanasiaAnimalID !== null) $output['intakesOwnerrequestedeuthanasiaAnimalID'] = $this->intakesOwnerrequestedeuthanasiaAnimalID;
        if ($this->intakesOwnerrequestedeuthanasiaAnimalConditionID !== null) $output['intakesOwnerrequestedeuthanasiaAnimalConditionID'] = $this->intakesOwnerrequestedeuthanasiaAnimalConditionID;
        if ($this->intakesOwnerrequestedeuthanasiaDate !== null) $output['intakesOwnerrequestedeuthanasiaDate'] = $this->intakesOwnerrequestedeuthanasiaDate;
        if ($this->intakesOwnerrequestedeuthanasiaNotes !== null) $output['intakesOwnerrequestedeuthanasiaNotes'] = $this->intakesOwnerrequestedeuthanasiaNotes;
        if ($this->intakesOwnerrequestedeuthanasiaOwnerID !== null) $output['intakesOwnerrequestedeuthanasiaOwnerID'] = $this->intakesOwnerrequestedeuthanasiaOwnerID;
        if ($this->intakesOwnerrequestedeuthanasiaReasonID !== null) $output['intakesOwnerrequestedeuthanasiaReasonID'] = $this->intakesOwnerrequestedeuthanasiaReasonID;

        return $output;
    }
}
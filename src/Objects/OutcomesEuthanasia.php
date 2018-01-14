<?php
/**
 * OutcomesEuthanasia Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class OutcomesEuthanasia implements \RescueGroups\Objects\APIEncodableInterface
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
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->outcomesEuthanasiaID)) $this->outcomesEuthanasiaID = $inputData->outcomesEuthanasiaID;
        if (!empty($inputData->outcomesEuthanasiaAnimalConditionID)) $this->outcomesEuthanasiaAnimalConditionID = $inputData->outcomesEuthanasiaAnimalConditionID;
        if (!empty($inputData->outcomesEuthanasiaDate)) $this->outcomesEuthanasiaDate = $inputData->outcomesEuthanasiaDate;
        if (!empty($inputData->outcomesEuthanasiaNotes)) $this->outcomesEuthanasiaNotes = $inputData->outcomesEuthanasiaNotes;
        if (!empty($inputData->outcomesEuthanasiaReasonID)) $this->outcomesEuthanasiaReasonID = $inputData->outcomesEuthanasiaReasonID;
    }

    /**
     * Get array mapping for API functions
     *
     * @return array
     */
    public function getArray()
    {
        $output = [];
        if ($this->outcomesEuthanasiaID !== null) $output['outcomesEuthanasiaID'] = $this->outcomesEuthanasiaID;
        if ($this->outcomesEuthanasiaAnimalConditionID !== null) $output['outcomesEuthanasiaAnimalConditionID'] = $this->outcomesEuthanasiaAnimalConditionID;
        if ($this->outcomesEuthanasiaDate !== null) $output['outcomesEuthanasiaDate'] = $this->outcomesEuthanasiaDate;
        if ($this->outcomesEuthanasiaNotes !== null) $output['outcomesEuthanasiaNotes'] = $this->outcomesEuthanasiaNotes;
        if ($this->outcomesEuthanasiaReasonID !== null) $output['outcomesEuthanasiaReasonID'] = $this->outcomesEuthanasiaReasonID;

        return $output;
    }
}
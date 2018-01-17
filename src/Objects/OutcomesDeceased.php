<?php
/**
 * OutcomesDeceased Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class OutcomesDeceased implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $id = null;

    /**
     * Condition
     *
     * @var integer
     */
    public $animalConditionID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $date = null;

    /**
     * Notes
     *
     * @var string
     */
    public $notes = null;

    /**
     * Reason
     *
     * @var string
     */
    public $reason = null;


    /**
     * OutcomesDeceased Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->outcomesDeceasedID)) $this->id = $inputData->outcomesDeceasedID;
        if (!empty($inputData->outcomesDeceasedAnimalConditionID)) $this->animalConditionID = $inputData->outcomesDeceasedAnimalConditionID;
        if (!empty($inputData->outcomesDeceasedDate)) $this->date = $inputData->outcomesDeceasedDate;
        if (!empty($inputData->outcomesDeceasedNotes)) $this->notes = $inputData->outcomesDeceasedNotes;
        if (!empty($inputData->outcomesDeceasedReason)) $this->reason = $inputData->outcomesDeceasedReason;
    }

    /**
     * Get array mapping for API functions
     *
     * @param bool $includeId
     * @return array
     */
    public function getArray($includeId = true)
    {
        $output = [];
        if ($includeId && $this->id !== null) $output['outcomesDeceasedID'] = $this->id;
        if ($this->animalConditionID !== null) $output['outcomesDeceasedAnimalConditionID'] = $this->animalConditionID;
        if ($this->date !== null) $output['outcomesDeceasedDate'] = $this->date;
        if ($this->notes !== null) $output['outcomesDeceasedNotes'] = $this->notes;
        if ($this->reason !== null) $output['outcomesDeceasedReason'] = $this->reason;

        return $output;
    }
}
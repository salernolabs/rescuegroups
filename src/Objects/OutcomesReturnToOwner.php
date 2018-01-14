<?php
/**
 * OutcomesReturnToOwner Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class OutcomesReturnToOwner implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * ID
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
     * Return To
     *
     * @var integer
     */
    public $ownerID = null;


    /**
     * OutcomesReturnToOwner Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->outcomesReturntoownerID)) $this->id = $inputData->outcomesReturntoownerID;
        if (!empty($inputData->outcomesReturntoownerAnimalConditionID)) $this->animalConditionID = $inputData->outcomesReturntoownerAnimalConditionID;
        if (!empty($inputData->outcomesReturntoownerDate)) $this->date = $inputData->outcomesReturntoownerDate;
        if (!empty($inputData->outcomesReturntoownerNotes)) $this->notes = $inputData->outcomesReturntoownerNotes;
        if (!empty($inputData->outcomesReturntoownerOwnerID)) $this->ownerID = $inputData->outcomesReturntoownerOwnerID;
    }

    /**
     * Get array mapping for API functions
     *
     * @return array
     */
    public function getArray()
    {
        $output = [];
        if ($this->id !== null) $output['outcomesReturntoownerID'] = $this->id;
        if ($this->animalConditionID !== null) $output['outcomesReturntoownerAnimalConditionID'] = $this->animalConditionID;
        if ($this->date !== null) $output['outcomesReturntoownerDate'] = $this->date;
        if ($this->notes !== null) $output['outcomesReturntoownerNotes'] = $this->notes;
        if ($this->ownerID !== null) $output['outcomesReturntoownerOwnerID'] = $this->ownerID;

        return $output;
    }
}
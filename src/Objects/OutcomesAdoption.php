<?php
/**
 * OutcomesAdoption Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class OutcomesAdoption implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * ID
     *
     * @var integer
     */
    public $outcomesAdoptionID = null;

    /**
     * Condition
     *
     * @var integer
     */
    public $outcomesAdoptionAnimalConditionID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $outcomesAdoptionDate = null;

    /**
     * Notes
     *
     * @var string
     */
    public $outcomesAdoptionNotes = null;

    /**
     * Adoption
     *
     * @var integer
     */
    public $outcomesAdoptionAdoptionID = null;


    /**
     * OutcomesAdoption Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->outcomesAdoptionID)) $this->outcomesAdoptionID = $inputData->outcomesAdoptionID;
        if (!empty($inputData->outcomesAdoptionAnimalConditionID)) $this->outcomesAdoptionAnimalConditionID = $inputData->outcomesAdoptionAnimalConditionID;
        if (!empty($inputData->outcomesAdoptionDate)) $this->outcomesAdoptionDate = $inputData->outcomesAdoptionDate;
        if (!empty($inputData->outcomesAdoptionNotes)) $this->outcomesAdoptionNotes = $inputData->outcomesAdoptionNotes;
        if (!empty($inputData->outcomesAdoptionAdoptionID)) $this->outcomesAdoptionAdoptionID = $inputData->outcomesAdoptionAdoptionID;
    }

    /**
     * Get array mapping for API functions
     *
     * @return array
     */
    public function getArray()
    {
        $output = [];
        if ($this->outcomesAdoptionID !== null) $output['outcomesAdoptionID'] = $this->outcomesAdoptionID;
        if ($this->outcomesAdoptionAnimalConditionID !== null) $output['outcomesAdoptionAnimalConditionID'] = $this->outcomesAdoptionAnimalConditionID;
        if ($this->outcomesAdoptionDate !== null) $output['outcomesAdoptionDate'] = $this->outcomesAdoptionDate;
        if ($this->outcomesAdoptionNotes !== null) $output['outcomesAdoptionNotes'] = $this->outcomesAdoptionNotes;
        if ($this->outcomesAdoptionAdoptionID !== null) $output['outcomesAdoptionAdoptionID'] = $this->outcomesAdoptionAdoptionID;

        return $output;
    }
}
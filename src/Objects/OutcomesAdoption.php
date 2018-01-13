<?php
/**
 * OutcomesAdoption Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class OutcomesAdoption
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
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->outcomesAdoptionID)) $this->outcomesAdoptionID = $inputData->outcomesAdoptionID;
        if (!empty($inputData->outcomesAdoptionAnimalConditionID)) $this->outcomesAdoptionAnimalConditionID = $inputData->outcomesAdoptionAnimalConditionID;
        if (!empty($inputData->outcomesAdoptionDate)) $this->outcomesAdoptionDate = $inputData->outcomesAdoptionDate;
        if (!empty($inputData->outcomesAdoptionNotes)) $this->outcomesAdoptionNotes = $inputData->outcomesAdoptionNotes;
        if (!empty($inputData->outcomesAdoptionAdoptionID)) $this->outcomesAdoptionAdoptionID = $inputData->outcomesAdoptionAdoptionID;
    }
}
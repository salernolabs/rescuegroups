<?php
/**
 * OutcomesAdoption Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class OutcomesAdoption
{
    /**
     * ID
     * @var integer
     */
    public $outcomesAdoptionID;

    /**
     * Condition
     * @var integer
     */
    public $outcomesAdoptionAnimalConditionID;

    /**
     * Date
     * @var \DateTime
     */
    public $outcomesAdoptionDate;

    /**
     * Notes
     * @var string
     */
    public $outcomesAdoptionNotes;

    /**
     * Adoption
     * @var integer
     */
    public $outcomesAdoptionAdoptionID;



    /**
     * OutcomesAdoptions Constructor
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
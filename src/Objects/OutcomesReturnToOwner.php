<?php
/**
 * OutcomesReturnToOwner Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class OutcomesReturnToOwner
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
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->outcomesReturntoownerID)) $this->id = $inputData->outcomesReturntoownerID;
        if (!empty($inputData->outcomesReturntoownerAnimalConditionID)) $this->animalConditionID = $inputData->outcomesReturntoownerAnimalConditionID;
        if (!empty($inputData->outcomesReturntoownerDate)) $this->date = $inputData->outcomesReturntoownerDate;
        if (!empty($inputData->outcomesReturntoownerNotes)) $this->notes = $inputData->outcomesReturntoownerNotes;
        if (!empty($inputData->outcomesReturntoownerOwnerID)) $this->ownerID = $inputData->outcomesReturntoownerOwnerID;
    }
}
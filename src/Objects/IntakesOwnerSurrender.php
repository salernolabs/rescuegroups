<?php
/**
 * IntakesOwnerSurrender Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class IntakesOwnerSurrender
{
    /**
     * Owner Surrender
     *
     * @var integer
     */
    public $intakesOwnersurrenderID = null;

    /**
     * Animal
     *
     * @var integer
     */
    public $intakesOwnersurrenderAnimalID = null;

    /**
     * Condition
     *
     * @var integer
     */
    public $intakesOwnersurrenderAnimalConditionID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $intakesOwnersurrenderDate = null;

    /**
     * Notes
     *
     * @var string
     */
    public $intakesOwnersurrenderNotes = null;

    /**
     * Surrendered By
     *
     * @var integer
     */
    public $intakesOwnersurrenderOwnerID = null;

    /**
     * Surrender Reason
     *
     * @var integer
     */
    public $intakesOwnersurrenderReasonID = null;


    /**
     * IntakesOwnerSurrender Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->intakesOwnersurrenderID)) $this->intakesOwnersurrenderID = $inputData->intakesOwnersurrenderID;
        if (!empty($inputData->intakesOwnersurrenderAnimalID)) $this->intakesOwnersurrenderAnimalID = $inputData->intakesOwnersurrenderAnimalID;
        if (!empty($inputData->intakesOwnersurrenderAnimalConditionID)) $this->intakesOwnersurrenderAnimalConditionID = $inputData->intakesOwnersurrenderAnimalConditionID;
        if (!empty($inputData->intakesOwnersurrenderDate)) $this->intakesOwnersurrenderDate = $inputData->intakesOwnersurrenderDate;
        if (!empty($inputData->intakesOwnersurrenderNotes)) $this->intakesOwnersurrenderNotes = $inputData->intakesOwnersurrenderNotes;
        if (!empty($inputData->intakesOwnersurrenderOwnerID)) $this->intakesOwnersurrenderOwnerID = $inputData->intakesOwnersurrenderOwnerID;
        if (!empty($inputData->intakesOwnersurrenderReasonID)) $this->intakesOwnersurrenderReasonID = $inputData->intakesOwnersurrenderReasonID;
    }
}
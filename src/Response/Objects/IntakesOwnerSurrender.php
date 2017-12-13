<?php
/**
 * IntakesOwnerSurrender Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects\IntakesOwnerSurrender;

class IntakesOwnerSurrender
{
    /**
     * Animal
     * @var integer
     */
    public $intakesOwnersurrenderAnimalID;

    /**
     * Condition
     * @var integer
     */
    public $intakesOwnersurrenderAnimalConditionID;

    /**
     * Date
     * @var \DateTime
     */
    public $intakesOwnersurrenderDate;

    /**
     * Notes
     * @var string
     */
    public $intakesOwnersurrenderNotes;

    /**
     * Surrendered By
     * @var integer
     */
    public $intakesOwnersurrenderOwnerID;

    /**
     * Surrender Reason
     * @var integer
     */
    public $intakesOwnersurrenderReasonID;



    /**
     * IntakesOwnerSurrenders Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->intakesOwnersurrenderAnimalID)) $this->intakesOwnersurrenderAnimalID = $inputData->intakesOwnersurrenderAnimalID;
        if (!empty($inputData->intakesOwnersurrenderAnimalConditionID)) $this->intakesOwnersurrenderAnimalConditionID = $inputData->intakesOwnersurrenderAnimalConditionID;
        if (!empty($inputData->intakesOwnersurrenderDate)) $this->intakesOwnersurrenderDate = $inputData->intakesOwnersurrenderDate;
        if (!empty($inputData->intakesOwnersurrenderNotes)) $this->intakesOwnersurrenderNotes = $inputData->intakesOwnersurrenderNotes;
        if (!empty($inputData->intakesOwnersurrenderOwnerID)) $this->intakesOwnersurrenderOwnerID = $inputData->intakesOwnersurrenderOwnerID;
        if (!empty($inputData->intakesOwnersurrenderReasonID)) $this->intakesOwnersurrenderReasonID = $inputData->intakesOwnersurrenderReasonID;

    }
}
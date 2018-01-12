<?php
/**
 * IntakesBornInRescueShelter Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class IntakesBornInRescueShelter
{
    /**
     * Born In Rescue/Shelter
     *
     * @var integer
     */
    public $id = null;

    /**
     * Animal
     *
     * @var integer
     */
    public $animalID = null;

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
     * IntakesBornInRescueShelter Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->intakesBorninrescueshelterID)) $this->id = $inputData->intakesBorninrescueshelterID;
        if (!empty($inputData->intakesBorninrescueshelterAnimalID)) $this->animalID = $inputData->intakesBorninrescueshelterAnimalID;
        if (!empty($inputData->intakesBorninrescueshelterAnimalConditionID)) $this->animalConditionID = $inputData->intakesBorninrescueshelterAnimalConditionID;
        if (!empty($inputData->intakesBorninrescueshelterDate)) $this->date = $inputData->intakesBorninrescueshelterDate;
        if (!empty($inputData->intakesBorninrescueshelterNotes)) $this->notes = $inputData->intakesBorninrescueshelterNotes;
    }
}
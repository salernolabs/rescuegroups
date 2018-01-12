<?php
/**
 * IntakesBornInRescueShelter Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class IntakesBornInRescueShelter
{
    /**
     * Born In Rescue/Shelter
     * @var integer
     */
    public $id;

    /**
     * Animal
     * @var integer
     */
    public $animalID;

    /**
     * Condition
     * @var integer
     */
    public $animalConditionID;

    /**
     * Date
     * @var \DateTime
     */
    public $date;

    /**
     * Notes
     * @var string
     */
    public $notes;



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
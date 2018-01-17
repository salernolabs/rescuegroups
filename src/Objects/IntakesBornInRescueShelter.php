<?php
/**
 * IntakesBornInRescueShelter Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class IntakesBornInRescueShelter implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * Born In Rescue/Shelter, Primary Key
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
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->intakesBorninrescueshelterID)) $this->id = $inputData->intakesBorninrescueshelterID;
        if (!empty($inputData->intakesBorninrescueshelterAnimalID)) $this->animalID = $inputData->intakesBorninrescueshelterAnimalID;
        if (!empty($inputData->intakesBorninrescueshelterAnimalConditionID)) $this->animalConditionID = $inputData->intakesBorninrescueshelterAnimalConditionID;
        if (!empty($inputData->intakesBorninrescueshelterDate)) $this->date = $inputData->intakesBorninrescueshelterDate;
        if (!empty($inputData->intakesBorninrescueshelterNotes)) $this->notes = $inputData->intakesBorninrescueshelterNotes;
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
        if ($includeId && $this->id !== null) $output['intakesBorninrescueshelterID'] = $this->id;
        if ($this->animalID !== null) $output['intakesBorninrescueshelterAnimalID'] = $this->animalID;
        if ($this->animalConditionID !== null) $output['intakesBorninrescueshelterAnimalConditionID'] = $this->animalConditionID;
        if ($this->date !== null) $output['intakesBorninrescueshelterDate'] = $this->date;
        if ($this->notes !== null) $output['intakesBorninrescueshelterNotes'] = $this->notes;

        return $output;
    }
}
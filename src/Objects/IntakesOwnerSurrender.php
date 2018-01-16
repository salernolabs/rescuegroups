<?php
/**
 * IntakesOwnerSurrender Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class IntakesOwnerSurrender implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * Owner Surrender, Primary Key
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
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->intakesOwnersurrenderID)) $this->intakesOwnersurrenderID = $inputData->intakesOwnersurrenderID;
        if (!empty($inputData->intakesOwnersurrenderAnimalID)) $this->intakesOwnersurrenderAnimalID = $inputData->intakesOwnersurrenderAnimalID;
        if (!empty($inputData->intakesOwnersurrenderAnimalConditionID)) $this->intakesOwnersurrenderAnimalConditionID = $inputData->intakesOwnersurrenderAnimalConditionID;
        if (!empty($inputData->intakesOwnersurrenderDate)) $this->intakesOwnersurrenderDate = $inputData->intakesOwnersurrenderDate;
        if (!empty($inputData->intakesOwnersurrenderNotes)) $this->intakesOwnersurrenderNotes = $inputData->intakesOwnersurrenderNotes;
        if (!empty($inputData->intakesOwnersurrenderOwnerID)) $this->intakesOwnersurrenderOwnerID = $inputData->intakesOwnersurrenderOwnerID;
        if (!empty($inputData->intakesOwnersurrenderReasonID)) $this->intakesOwnersurrenderReasonID = $inputData->intakesOwnersurrenderReasonID;
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
        if ($includeId && $this->intakesOwnersurrenderID !== null) $output['intakesOwnersurrenderID'] = $this->intakesOwnersurrenderID;
        if ($this->intakesOwnersurrenderAnimalID !== null) $output['intakesOwnersurrenderAnimalID'] = $this->intakesOwnersurrenderAnimalID;
        if ($this->intakesOwnersurrenderAnimalConditionID !== null) $output['intakesOwnersurrenderAnimalConditionID'] = $this->intakesOwnersurrenderAnimalConditionID;
        if ($this->intakesOwnersurrenderDate !== null) $output['intakesOwnersurrenderDate'] = $this->intakesOwnersurrenderDate;
        if ($this->intakesOwnersurrenderNotes !== null) $output['intakesOwnersurrenderNotes'] = $this->intakesOwnersurrenderNotes;
        if ($this->intakesOwnersurrenderOwnerID !== null) $output['intakesOwnersurrenderOwnerID'] = $this->intakesOwnersurrenderOwnerID;
        if ($this->intakesOwnersurrenderReasonID !== null) $output['intakesOwnersurrenderReasonID'] = $this->intakesOwnersurrenderReasonID;

        return $output;
    }
}
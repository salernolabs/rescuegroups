<?php
/**
 * IntakesTransfer Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class IntakesTransfer implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * Owner Surrender
     *
     * @var integer
     */
    public $intakesTransferID = null;

    /**
     * Animal
     *
     * @var integer
     */
    public $intakesTransferAnimalID = null;

    /**
     * Condition
     *
     * @var integer
     */
    public $intakesTransferAnimalConditionID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $intakesTransferDate = null;

    /**
     * Notes
     *
     * @var string
     */
    public $intakesTransferNotes = null;

    /**
     * Transferred From
     *
     * @var integer
     */
    public $intakesTransferFromID = null;

    /**
     * Coalition Member
     *
     * @var string
     */
    public $intakesTransferCoalitionMember = null;

    /**
     * Transfer Reason
     *
     * @var integer
     */
    public $intakesTransferReasonID = null;


    /**
     * IntakesTransfer Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->intakesTransferID)) $this->intakesTransferID = $inputData->intakesTransferID;
        if (!empty($inputData->intakesTransferAnimalID)) $this->intakesTransferAnimalID = $inputData->intakesTransferAnimalID;
        if (!empty($inputData->intakesTransferAnimalConditionID)) $this->intakesTransferAnimalConditionID = $inputData->intakesTransferAnimalConditionID;
        if (!empty($inputData->intakesTransferDate)) $this->intakesTransferDate = $inputData->intakesTransferDate;
        if (!empty($inputData->intakesTransferNotes)) $this->intakesTransferNotes = $inputData->intakesTransferNotes;
        if (!empty($inputData->intakesTransferFromID)) $this->intakesTransferFromID = $inputData->intakesTransferFromID;
        if (!empty($inputData->intakesTransferCoalitionMember)) $this->intakesTransferCoalitionMember = $inputData->intakesTransferCoalitionMember;
        if (!empty($inputData->intakesTransferReasonID)) $this->intakesTransferReasonID = $inputData->intakesTransferReasonID;
    }

    /**
     * Get array mapping for API functions
     *
     * @return array
     */
    public function getArray()
    {
        $output = [];
        if ($this->intakesTransferID !== null) $output['intakesTransferID'] = $this->intakesTransferID;
        if ($this->intakesTransferAnimalID !== null) $output['intakesTransferAnimalID'] = $this->intakesTransferAnimalID;
        if ($this->intakesTransferAnimalConditionID !== null) $output['intakesTransferAnimalConditionID'] = $this->intakesTransferAnimalConditionID;
        if ($this->intakesTransferDate !== null) $output['intakesTransferDate'] = $this->intakesTransferDate;
        if ($this->intakesTransferNotes !== null) $output['intakesTransferNotes'] = $this->intakesTransferNotes;
        if ($this->intakesTransferFromID !== null) $output['intakesTransferFromID'] = $this->intakesTransferFromID;
        if ($this->intakesTransferCoalitionMember !== null) $output['intakesTransferCoalitionMember'] = $this->intakesTransferCoalitionMember;
        if ($this->intakesTransferReasonID !== null) $output['intakesTransferReasonID'] = $this->intakesTransferReasonID;

        return $output;
    }
}
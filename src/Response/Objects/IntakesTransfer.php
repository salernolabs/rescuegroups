<?php
/**
 * IntakesTransfer Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects\IntakesTransfer;

class IntakesTransfer
{
    /**
     * Animal
     * @var integer
     */
    public $intakesTransferAnimalID;

    /**
     * Condition
     * @var integer
     */
    public $intakesTransferAnimalConditionID;

    /**
     * Date
     * @var \DateTime
     */
    public $intakesTransferDate;

    /**
     * Notes
     * @var string
     */
    public $intakesTransferNotes;

    /**
     * Transferred From
     * @var integer
     */
    public $intakesTransferFromID;

    /**
     * Coalition Member
     * @var string
     */
    public $intakesTransferCoalitionMember;

    /**
     * Transfer Reason
     * @var integer
     */
    public $intakesTransferReasonID;



    /**
     * IntakesTransfers Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->intakesTransferAnimalID)) $this->intakesTransferAnimalID = $inputData->intakesTransferAnimalID;
        if (!empty($inputData->intakesTransferAnimalConditionID)) $this->intakesTransferAnimalConditionID = $inputData->intakesTransferAnimalConditionID;
        if (!empty($inputData->intakesTransferDate)) $this->intakesTransferDate = $inputData->intakesTransferDate;
        if (!empty($inputData->intakesTransferNotes)) $this->intakesTransferNotes = $inputData->intakesTransferNotes;
        if (!empty($inputData->intakesTransferFromID)) $this->intakesTransferFromID = $inputData->intakesTransferFromID;
        if (!empty($inputData->intakesTransferCoalitionMember)) $this->intakesTransferCoalitionMember = $inputData->intakesTransferCoalitionMember;
        if (!empty($inputData->intakesTransferReasonID)) $this->intakesTransferReasonID = $inputData->intakesTransferReasonID;

    }
}
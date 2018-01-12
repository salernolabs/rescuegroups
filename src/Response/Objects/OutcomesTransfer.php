<?php
/**
 * OutcomesTransfer Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class OutcomesTransfer
{
    /**
     * ID
     * @var integer
     */
    public $outcomesTransferID;

    /**
     * Condition
     * @var integer
     */
    public $outcomesTransferAnimalConditionID;

    /**
     * Date
     * @var \DateTime
     */
    public $outcomesTransferDate;

    /**
     * Notes
     * @var string
     */
    public $outcomesTransferNotes;

    /**
     * Received
     * @var integer
     */
    public $outcomesTransferReceiveID;

    /**
     * Coalition Member
     * @var string
     */
    public $outcomesTransferCoalitionMember;

    /**
     * Transfer Reason
     * @var integer
     */
    public $outcomesTransferReasonID;



    /**
     * OutcomesTransfers Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->outcomesTransferID)) $this->outcomesTransferID = $inputData->outcomesTransferID;
        if (!empty($inputData->outcomesTransferAnimalConditionID)) $this->outcomesTransferAnimalConditionID = $inputData->outcomesTransferAnimalConditionID;
        if (!empty($inputData->outcomesTransferDate)) $this->outcomesTransferDate = $inputData->outcomesTransferDate;
        if (!empty($inputData->outcomesTransferNotes)) $this->outcomesTransferNotes = $inputData->outcomesTransferNotes;
        if (!empty($inputData->outcomesTransferReceiveID)) $this->outcomesTransferReceiveID = $inputData->outcomesTransferReceiveID;
        if (!empty($inputData->outcomesTransferCoalitionMember)) $this->outcomesTransferCoalitionMember = $inputData->outcomesTransferCoalitionMember;
        if (!empty($inputData->outcomesTransferReasonID)) $this->outcomesTransferReasonID = $inputData->outcomesTransferReasonID;

    }
}
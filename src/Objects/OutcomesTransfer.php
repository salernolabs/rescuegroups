<?php
/**
 * OutcomesTransfer Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class OutcomesTransfer
{
    /**
     * ID
     *
     * @var integer
     */
    public $outcomesTransferID = null;

    /**
     * Condition
     *
     * @var integer
     */
    public $outcomesTransferAnimalConditionID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $outcomesTransferDate = null;

    /**
     * Notes
     *
     * @var string
     */
    public $outcomesTransferNotes = null;

    /**
     * Received
     *
     * @var integer
     */
    public $outcomesTransferReceiveID = null;

    /**
     * Coalition Member
     *
     * @var string
     */
    public $outcomesTransferCoalitionMember = null;

    /**
     * Transfer Reason
     *
     * @var integer
     */
    public $outcomesTransferReasonID = null;


    /**
     * OutcomesTransfer Constructor
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
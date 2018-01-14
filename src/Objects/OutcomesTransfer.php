<?php
/**
 * OutcomesTransfer Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class OutcomesTransfer implements \RescueGroups\Objects\APIEncodableInterface
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
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->outcomesTransferID)) $this->outcomesTransferID = $inputData->outcomesTransferID;
        if (!empty($inputData->outcomesTransferAnimalConditionID)) $this->outcomesTransferAnimalConditionID = $inputData->outcomesTransferAnimalConditionID;
        if (!empty($inputData->outcomesTransferDate)) $this->outcomesTransferDate = $inputData->outcomesTransferDate;
        if (!empty($inputData->outcomesTransferNotes)) $this->outcomesTransferNotes = $inputData->outcomesTransferNotes;
        if (!empty($inputData->outcomesTransferReceiveID)) $this->outcomesTransferReceiveID = $inputData->outcomesTransferReceiveID;
        if (!empty($inputData->outcomesTransferCoalitionMember)) $this->outcomesTransferCoalitionMember = $inputData->outcomesTransferCoalitionMember;
        if (!empty($inputData->outcomesTransferReasonID)) $this->outcomesTransferReasonID = $inputData->outcomesTransferReasonID;
    }

    /**
     * Get array mapping for API functions
     *
     * @return array
     */
    public function getArray()
    {
        $output = [];
        if ($this->outcomesTransferID !== null) $output['outcomesTransferID'] = $this->outcomesTransferID;
        if ($this->outcomesTransferAnimalConditionID !== null) $output['outcomesTransferAnimalConditionID'] = $this->outcomesTransferAnimalConditionID;
        if ($this->outcomesTransferDate !== null) $output['outcomesTransferDate'] = $this->outcomesTransferDate;
        if ($this->outcomesTransferNotes !== null) $output['outcomesTransferNotes'] = $this->outcomesTransferNotes;
        if ($this->outcomesTransferReceiveID !== null) $output['outcomesTransferReceiveID'] = $this->outcomesTransferReceiveID;
        if ($this->outcomesTransferCoalitionMember !== null) $output['outcomesTransferCoalitionMember'] = $this->outcomesTransferCoalitionMember;
        if ($this->outcomesTransferReasonID !== null) $output['outcomesTransferReasonID'] = $this->outcomesTransferReasonID;

        return $output;
    }
}
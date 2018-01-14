<?php
/**
 * Call Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class Call implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * ID
     *
     * @var integer
     */
    public $callID = null;

    /**
     * Contact
     *
     * @var integer
     */
    public $callContactID = null;

    /**
     * Assigned
     *
     * @var integer
     */
    public $callAssignedID = null;

    /**
     * Status
     *
     * @var integer
     */
    public $callStatusID = null;

    /**
     * Urgency
     *
     * @var integer
     */
    public $callUrgencyID = null;

    /**
     * Category
     *
     * @var integer
     */
    public $callCategoryID = null;

    /**
     * Queue
     *
     * @var integer
     */
    public $callQueueID = null;

    /**
     * Call date
     *
     * @var \DateTime
     */
    public $callDate = null;


    /**
     * Call Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->callID)) $this->callID = $inputData->callID;
        if (!empty($inputData->callContactID)) $this->callContactID = $inputData->callContactID;
        if (!empty($inputData->callAssignedID)) $this->callAssignedID = $inputData->callAssignedID;
        if (!empty($inputData->callStatusID)) $this->callStatusID = $inputData->callStatusID;
        if (!empty($inputData->callUrgencyID)) $this->callUrgencyID = $inputData->callUrgencyID;
        if (!empty($inputData->callCategoryID)) $this->callCategoryID = $inputData->callCategoryID;
        if (!empty($inputData->callQueueID)) $this->callQueueID = $inputData->callQueueID;
        if (!empty($inputData->callDate)) $this->callDate = $inputData->callDate;
    }

    /**
     * Get array mapping for API functions
     *
     * @return array
     */
    public function getArray()
    {
        $output = [];
        if ($this->callID !== null) $output['callID'] = $this->callID;
        if ($this->callContactID !== null) $output['callContactID'] = $this->callContactID;
        if ($this->callAssignedID !== null) $output['callAssignedID'] = $this->callAssignedID;
        if ($this->callStatusID !== null) $output['callStatusID'] = $this->callStatusID;
        if ($this->callUrgencyID !== null) $output['callUrgencyID'] = $this->callUrgencyID;
        if ($this->callCategoryID !== null) $output['callCategoryID'] = $this->callCategoryID;
        if ($this->callQueueID !== null) $output['callQueueID'] = $this->callQueueID;
        if ($this->callDate !== null) $output['callDate'] = $this->callDate;

        return $output;
    }
}
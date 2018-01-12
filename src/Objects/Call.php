<?php
/**
 * Call Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class Call
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
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->callID)) $this->callID = $inputData->callID;
        if (!empty($inputData->callContactID)) $this->callContactID = $inputData->callContactID;
        if (!empty($inputData->callAssignedID)) $this->callAssignedID = $inputData->callAssignedID;
        if (!empty($inputData->callStatusID)) $this->callStatusID = $inputData->callStatusID;
        if (!empty($inputData->callUrgencyID)) $this->callUrgencyID = $inputData->callUrgencyID;
        if (!empty($inputData->callCategoryID)) $this->callCategoryID = $inputData->callCategoryID;
        if (!empty($inputData->callQueueID)) $this->callQueueID = $inputData->callQueueID;
        if (!empty($inputData->callDate)) $this->callDate = $inputData->callDate;
    }
}
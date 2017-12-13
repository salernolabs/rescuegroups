<?php
/**
 * Call Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class Call
{
    /**
     * Contact
     * @var integer
     */
    public $callContactID;

    /**
     * Assigned
     * @var integer
     */
    public $callAssignedID;

    /**
     * Status
     * @var integer
     */
    public $callStatusID;

    /**
     * Urgency
     * @var integer
     */
    public $callUrgencyID;

    /**
     * Category
     * @var integer
     */
    public $callCategoryID;

    /**
     * Queue
     * @var integer
     */
    public $callQueueID;

    /**
     * Call date
     * @var \DateTime
     */
    public $callDate;



    /**
     * Calls Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->callContactID)) $this->callContactID = $inputData->callContactID;
        if (!empty($inputData->callAssignedID)) $this->callAssignedID = $inputData->callAssignedID;
        if (!empty($inputData->callStatusID)) $this->callStatusID = $inputData->callStatusID;
        if (!empty($inputData->callUrgencyID)) $this->callUrgencyID = $inputData->callUrgencyID;
        if (!empty($inputData->callCategoryID)) $this->callCategoryID = $inputData->callCategoryID;
        if (!empty($inputData->callQueueID)) $this->callQueueID = $inputData->callQueueID;
        if (!empty($inputData->callDate)) $this->callDate = $inputData->callDate;

    }
}
<?php
/**
 * CallsQueue Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class CallsQueue
{
    /**
     * ID
     *
     * @var integer
     */
    public $queueID = null;

    /**
     * Name
     *
     * @var string
     */
    public $queueName = null;

    /**
     * From Email Address
     *
     * @var string
     */
    public $queueFromEmail = null;

    /**
     * Default Urgency
     *
     * @var integer
     */
    public $queueDefaultUrgencyID = null;


    /**
     * CallsQueue Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->queueID)) $this->queueID = $inputData->queueID;
        if (!empty($inputData->queueName)) $this->queueName = $inputData->queueName;
        if (!empty($inputData->queueFromEmail)) $this->queueFromEmail = $inputData->queueFromEmail;
        if (!empty($inputData->queueDefaultUrgencyID)) $this->queueDefaultUrgencyID = $inputData->queueDefaultUrgencyID;
    }
}
<?php
/**
 * CallsQueue Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects\CallsQueue;

class CallsQueue
{
    /**
     * Name
     * @var string
     */
    public $queueName;

    /**
     * From Email Address
     * @var string
     */
    public $queueFromEmail;

    /**
     * Default Urgency
     * @var integer
     */
    public $queueDefaultUrgencyID;



    /**
     * CallsQueues Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->queueName)) $this->queueName = $inputData->queueName;
        if (!empty($inputData->queueFromEmail)) $this->queueFromEmail = $inputData->queueFromEmail;
        if (!empty($inputData->queueDefaultUrgencyID)) $this->queueDefaultUrgencyID = $inputData->queueDefaultUrgencyID;

    }
}
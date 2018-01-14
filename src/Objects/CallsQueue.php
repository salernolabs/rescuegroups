<?php
/**
 * CallsQueue Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class CallsQueue implements \RescueGroups\Objects\APIEncodableInterface
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
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->queueID)) $this->queueID = $inputData->queueID;
        if (!empty($inputData->queueName)) $this->queueName = $inputData->queueName;
        if (!empty($inputData->queueFromEmail)) $this->queueFromEmail = $inputData->queueFromEmail;
        if (!empty($inputData->queueDefaultUrgencyID)) $this->queueDefaultUrgencyID = $inputData->queueDefaultUrgencyID;
    }

    /**
     * Get array mapping for API functions
     *
     * @return array
     */
    public function getArray()
    {
        $output = [];
        if ($this->queueID !== null) $output['queueID'] = $this->queueID;
        if ($this->queueName !== null) $output['queueName'] = $this->queueName;
        if ($this->queueFromEmail !== null) $output['queueFromEmail'] = $this->queueFromEmail;
        if ($this->queueDefaultUrgencyID !== null) $output['queueDefaultUrgencyID'] = $this->queueDefaultUrgencyID;

        return $output;
    }
}
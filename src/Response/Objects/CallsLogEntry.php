<?php
/**
 * CallsLogEntry Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects\CallsLogEntry;

class CallsLogEntry
{
    /**
     * Call
     * @var integer
     */
    public $logentryCallID;

    /**
     * Contact
     * @var integer
     */
    public $logentryContactID;

    /**
     * Date
     * @var \DateTime
     */
    public $logentryDate;

    /**
     * Outcome
     * @var integer
     */
    public $logentryOutcomeID;

    /**
     * Comments
     * @var string
     */
    public $logentryComments;



    /**
     * CallsLogEntries Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->logentryCallID)) $this->logentryCallID = $inputData->logentryCallID;
        if (!empty($inputData->logentryContactID)) $this->logentryContactID = $inputData->logentryContactID;
        if (!empty($inputData->logentryDate)) $this->logentryDate = $inputData->logentryDate;
        if (!empty($inputData->logentryOutcomeID)) $this->logentryOutcomeID = $inputData->logentryOutcomeID;
        if (!empty($inputData->logentryComments)) $this->logentryComments = $inputData->logentryComments;

    }
}
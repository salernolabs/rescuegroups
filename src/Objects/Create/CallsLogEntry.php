<?php
/**
 * CallsLogEntry Creation Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Create;

class CallsLogEntry implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * Call, Primary Key
     *
     * @var integer
     */
    public $callId = null;

    /**
     * Contact
     *
     * @var integer
     */
    public $contactId = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $date = null;

    /**
     * Outcome
     *
     * @var integer
     */
    public $outcomeId = null;

    /**
     * Comments
     *
     * @var string
     */
    public $comments = null;


    /**
     * CallsLogEntry Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->logentryCallID)) $this->callId = $inputData->logentryCallID;
        if (!empty($inputData->logentryContactID)) $this->contactId = $inputData->logentryContactID;
        if (!empty($inputData->logentryDate)) $this->date = $inputData->logentryDate;
        if (!empty($inputData->logentryOutcomeID)) $this->outcomeId = $inputData->logentryOutcomeID;
        if (!empty($inputData->logentryComments)) $this->comments = $inputData->logentryComments;
    }

    /**
     * Get array mapping for API functions
     *
     * @param bool $includeId
     * @return array
     */
    public function getArray($includeId = true)
    {
        $output = [];
        if ($includeId && $this->callId !== null) $output['logentryCallID'] = $this->callId;
        if ($this->contactId !== null) $output['logentryContactID'] = $this->contactId;
        if ($this->date !== null) $output['logentryDate'] = $this->date;
        if ($this->outcomeId !== null) $output['logentryOutcomeID'] = $this->outcomeId;
        if ($this->comments !== null) $output['logentryComments'] = $this->comments;

        return $output;
    }
}
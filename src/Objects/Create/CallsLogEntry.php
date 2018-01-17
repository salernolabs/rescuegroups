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
    public $logentryCallID = null;

    /**
     * Contact
     *
     * @var integer
     */
    public $logentryContactID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $logentryDate = null;

    /**
     * Outcome
     *
     * @var integer
     */
    public $logentryOutcomeID = null;

    /**
     * Comments
     *
     * @var string
     */
    public $logentryComments = null;


    /**
     * CallsLogEntry Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->logentryCallID)) $this->logentryCallID = $inputData->logentryCallID;
        if (!empty($inputData->logentryContactID)) $this->logentryContactID = $inputData->logentryContactID;
        if (!empty($inputData->logentryDate)) $this->logentryDate = $inputData->logentryDate;
        if (!empty($inputData->logentryOutcomeID)) $this->logentryOutcomeID = $inputData->logentryOutcomeID;
        if (!empty($inputData->logentryComments)) $this->logentryComments = $inputData->logentryComments;
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
        if ($includeId && $this->logentryCallID !== null) $output['logentryCallID'] = $this->logentryCallID;
        if ($this->logentryContactID !== null) $output['logentryContactID'] = $this->logentryContactID;
        if ($this->logentryDate !== null) $output['logentryDate'] = $this->logentryDate;
        if ($this->logentryOutcomeID !== null) $output['logentryOutcomeID'] = $this->logentryOutcomeID;
        if ($this->logentryComments !== null) $output['logentryComments'] = $this->logentryComments;

        return $output;
    }
}
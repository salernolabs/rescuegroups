<?php
/**
 * CallsQueuesMember Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class CallsQueuesMember implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $memberID = null;

    /**
     * Contact
     *
     * @var integer
     */
    public $memberContactID = null;

    /**
     * Queue
     *
     * @var integer
     */
    public $memberQueueID = null;

    /**
     * Manager
     *
     * @var string
     */
    public $memberManager = null;


    /**
     * CallsQueuesMember Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->memberID)) $this->memberID = $inputData->memberID;
        if (!empty($inputData->memberContactID)) $this->memberContactID = $inputData->memberContactID;
        if (!empty($inputData->memberQueueID)) $this->memberQueueID = $inputData->memberQueueID;
        if (!empty($inputData->memberManager)) $this->memberManager = $inputData->memberManager;
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
        if ($includeId && $this->memberID !== null) $output['memberID'] = $this->memberID;
        if ($this->memberContactID !== null) $output['memberContactID'] = $this->memberContactID;
        if ($this->memberQueueID !== null) $output['memberQueueID'] = $this->memberQueueID;
        if ($this->memberManager !== null) $output['memberManager'] = $this->memberManager;

        return $output;
    }
}
<?php
/**
 * WaitingList Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class WaitingList implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $waitinglistID = null;

    /**
     * Name
     *
     * @var string
     */
    public $waitinglistName = null;

    /**
     * Type
     *
     * @var string
     */
    public $waitinglistType = null;

    /**
     * Comment
     *
     * @var string
     */
    public $waitinglistComment = null;


    /**
     * WaitingList Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->waitinglistID)) $this->waitinglistID = $inputData->waitinglistID;
        if (!empty($inputData->waitinglistName)) $this->waitinglistName = $inputData->waitinglistName;
        if (!empty($inputData->waitinglistType)) $this->waitinglistType = $inputData->waitinglistType;
        if (!empty($inputData->waitinglistComment)) $this->waitinglistComment = $inputData->waitinglistComment;
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
        if ($includeId && $this->waitinglistID !== null) $output['waitinglistID'] = $this->waitinglistID;
        if ($this->waitinglistName !== null) $output['waitinglistName'] = $this->waitinglistName;
        if ($this->waitinglistType !== null) $output['waitinglistType'] = $this->waitinglistType;
        if ($this->waitinglistComment !== null) $output['waitinglistComment'] = $this->waitinglistComment;

        return $output;
    }
}
<?php
/**
 * WaitingList Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class WaitingList
{
    /**
     * ID
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
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->waitinglistID)) $this->waitinglistID = $inputData->waitinglistID;
        if (!empty($inputData->waitinglistName)) $this->waitinglistName = $inputData->waitinglistName;
        if (!empty($inputData->waitinglistType)) $this->waitinglistType = $inputData->waitinglistType;
        if (!empty($inputData->waitinglistComment)) $this->waitinglistComment = $inputData->waitinglistComment;
    }
}
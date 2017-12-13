<?php
/**
 * WaitingList Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class WaitingList
{
    /**
     * Name
     * @var string
     */
    public $waitinglistName;

    /**
     * Type
     * @var string
     */
    public $waitinglistType;

    /**
     * Comment
     * @var string
     */
    public $waitinglistComment;



    /**
     * WaitingLists Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->waitinglistName)) $this->waitinglistName = $inputData->waitinglistName;
        if (!empty($inputData->waitinglistType)) $this->waitinglistType = $inputData->waitinglistType;
        if (!empty($inputData->waitinglistComment)) $this->waitinglistComment = $inputData->waitinglistComment;

    }
}
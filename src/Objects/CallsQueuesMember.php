<?php
/**
 * CallsQueuesMember Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class CallsQueuesMember
{
    /**
     * ID
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
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->memberID)) $this->memberID = $inputData->memberID;
        if (!empty($inputData->memberContactID)) $this->memberContactID = $inputData->memberContactID;
        if (!empty($inputData->memberQueueID)) $this->memberQueueID = $inputData->memberQueueID;
        if (!empty($inputData->memberManager)) $this->memberManager = $inputData->memberManager;
    }
}
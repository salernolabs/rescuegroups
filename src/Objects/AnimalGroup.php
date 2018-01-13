<?php
/**
 * AnimalGroup Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class AnimalGroup
{
    /**
     * ID
     *
     * @var integer
     */
    public $groupID = null;

    /**
     * Name
     *
     * @var string
     */
    public $groupName = null;

    /**
     * Header
     *
     * @var integer
     */
    public $groupHeaderID = null;


    /**
     * AnimalGroup Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->groupID)) $this->groupID = $inputData->groupID;
        if (!empty($inputData->groupName)) $this->groupName = $inputData->groupName;
        if (!empty($inputData->groupHeaderID)) $this->groupHeaderID = $inputData->groupHeaderID;
    }
}
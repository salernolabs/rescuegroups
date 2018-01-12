<?php
/**
 * ContactsGroup Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class ContactsGroup
{
    /**
     * ID
     * @var integer
     */
    public $groupID;

    /**
     * Name
     * @var string
     */
    public $groupName;

    /**
     * Business
     * @var string
     */
    public $groupBusiness;



    /**
     * ContactsGroups Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->groupID)) $this->groupID = $inputData->groupID;
        if (!empty($inputData->groupName)) $this->groupName = $inputData->groupName;
        if (!empty($inputData->groupBusiness)) $this->groupBusiness = $inputData->groupBusiness;

    }
}
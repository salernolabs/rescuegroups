<?php
/**
 * ContactsGroup Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects\ContactsGroup;

class ContactsGroup
{
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
        if (!empty($inputData->groupName)) $this->groupName = $inputData->groupName;
        if (!empty($inputData->groupBusiness)) $this->groupBusiness = $inputData->groupBusiness;

    }
}
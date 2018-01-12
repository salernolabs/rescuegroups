<?php
/**
 * ContactsGroup Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class ContactsGroup
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
     * Business
     *
     * @var string
     */
    public $groupBusiness = null;


    /**
     * ContactsGroup Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->groupID)) $this->groupID = $inputData->groupID;
        if (!empty($inputData->groupName)) $this->groupName = $inputData->groupName;
        if (!empty($inputData->groupBusiness)) $this->groupBusiness = $inputData->groupBusiness;
    }
}
<?php
/**
 * ContactsGroup Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class ContactsGroup implements \RescueGroups\Objects\APIEncodableInterface
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
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->groupID)) $this->groupID = $inputData->groupID;
        if (!empty($inputData->groupName)) $this->groupName = $inputData->groupName;
        if (!empty($inputData->groupBusiness)) $this->groupBusiness = $inputData->groupBusiness;
    }

    /**
     * Get array mapping for API functions
     *
     * @return array
     */
    public function getArray()
    {
        $output = [];
        if ($this->groupID !== null) $output['groupID'] = $this->groupID;
        if ($this->groupName !== null) $output['groupName'] = $this->groupName;
        if ($this->groupBusiness !== null) $output['groupBusiness'] = $this->groupBusiness;

        return $output;
    }
}
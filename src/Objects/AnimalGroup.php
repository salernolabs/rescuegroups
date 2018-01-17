<?php
/**
 * AnimalGroup Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class AnimalGroup implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * ID, Primary Key
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
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->groupID)) $this->groupID = $inputData->groupID;
        if (!empty($inputData->groupName)) $this->groupName = $inputData->groupName;
        if (!empty($inputData->groupHeaderID)) $this->groupHeaderID = $inputData->groupHeaderID;
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
        if ($includeId && $this->groupID !== null) $output['groupID'] = $this->groupID;
        if ($this->groupName !== null) $output['groupName'] = $this->groupName;
        if ($this->groupHeaderID !== null) $output['groupHeaderID'] = $this->groupHeaderID;

        return $output;
    }
}
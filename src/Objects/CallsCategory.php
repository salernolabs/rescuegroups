<?php
/**
 * CallsCategory Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class CallsCategory implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * ID
     *
     * @var integer
     */
    public $categoryID = null;

    /**
     * Name
     *
     * @var string
     */
    public $categoryName = null;

    /**
     * Description
     *
     * @var string
     */
    public $categoryDescription = null;

    /**
     * Public
     *
     * @var string
     */
    public $categoryPublic = null;

    /**
     * Default Queue
     *
     * @var integer
     */
    public $categoryDefaultQueueID = null;


    /**
     * CallsCategory Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->categoryID)) $this->categoryID = $inputData->categoryID;
        if (!empty($inputData->categoryName)) $this->categoryName = $inputData->categoryName;
        if (!empty($inputData->categoryDescription)) $this->categoryDescription = $inputData->categoryDescription;
        if (!empty($inputData->categoryPublic)) $this->categoryPublic = $inputData->categoryPublic;
        if (!empty($inputData->categoryDefaultQueueID)) $this->categoryDefaultQueueID = $inputData->categoryDefaultQueueID;
    }

    /**
     * Get array mapping for API functions
     *
     * @return array
     */
    public function getArray()
    {
        $output = [];
        if ($this->categoryID !== null) $output['categoryID'] = $this->categoryID;
        if ($this->categoryName !== null) $output['categoryName'] = $this->categoryName;
        if ($this->categoryDescription !== null) $output['categoryDescription'] = $this->categoryDescription;
        if ($this->categoryPublic !== null) $output['categoryPublic'] = $this->categoryPublic;
        if ($this->categoryDefaultQueueID !== null) $output['categoryDefaultQueueID'] = $this->categoryDefaultQueueID;

        return $output;
    }
}
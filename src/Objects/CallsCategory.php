<?php
/**
 * CallsCategory Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class CallsCategory
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
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->categoryID)) $this->categoryID = $inputData->categoryID;
        if (!empty($inputData->categoryName)) $this->categoryName = $inputData->categoryName;
        if (!empty($inputData->categoryDescription)) $this->categoryDescription = $inputData->categoryDescription;
        if (!empty($inputData->categoryPublic)) $this->categoryPublic = $inputData->categoryPublic;
        if (!empty($inputData->categoryDefaultQueueID)) $this->categoryDefaultQueueID = $inputData->categoryDefaultQueueID;
    }
}
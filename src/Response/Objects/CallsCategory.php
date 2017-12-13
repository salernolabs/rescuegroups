<?php
/**
 * CallsCategory Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects\CallsCategory;

class CallsCategory
{
    /**
     * Name
     * @var string
     */
    public $categoryName;

    /**
     * Description
     * @var string
     */
    public $categoryDescription;

    /**
     * Public
     * @var string
     */
    public $categoryPublic;

    /**
     * Default Queue
     * @var integer
     */
    public $categoryDefaultQueueID;



    /**
     * CallsCategories Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->categoryName)) $this->categoryName = $inputData->categoryName;
        if (!empty($inputData->categoryDescription)) $this->categoryDescription = $inputData->categoryDescription;
        if (!empty($inputData->categoryPublic)) $this->categoryPublic = $inputData->categoryPublic;
        if (!empty($inputData->categoryDefaultQueueID)) $this->categoryDefaultQueueID = $inputData->categoryDefaultQueueID;

    }
}
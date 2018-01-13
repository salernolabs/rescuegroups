<?php
/**
 * NewsArticle Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class NewsArticle
{
    /**
     * ID
     *
     * @var integer
     */
    public $articleID = null;

    /**
     * Title
     *
     * @var string
     */
    public $articleTitle = null;

    /**
     * Description
     *
     * @var string
     */
    public $articleDescription = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $articleDate = null;


    /**
     * NewsArticle Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->articleID)) $this->articleID = $inputData->articleID;
        if (!empty($inputData->articleTitle)) $this->articleTitle = $inputData->articleTitle;
        if (!empty($inputData->articleDescription)) $this->articleDescription = $inputData->articleDescription;
        if (!empty($inputData->articleDate)) $this->articleDate = $inputData->articleDate;
    }
}
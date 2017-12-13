<?php
/**
 * NewsArticle Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects\NewsArticle;

class NewsArticle
{
    /**
     * Title
     * @var string
     */
    public $articleTitle;

    /**
     * Description
     * @var string
     */
    public $articleDescription;

    /**
     * Date
     * @var \DateTime
     */
    public $articleDate;



    /**
     * NewsArticles Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->articleTitle)) $this->articleTitle = $inputData->articleTitle;
        if (!empty($inputData->articleDescription)) $this->articleDescription = $inputData->articleDescription;
        if (!empty($inputData->articleDate)) $this->articleDate = $inputData->articleDate;

    }
}
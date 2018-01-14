<?php
/**
 * NewsArticle Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class NewsArticle implements \RescueGroups\Objects\APIEncodableInterface
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
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->articleID)) $this->articleID = $inputData->articleID;
        if (!empty($inputData->articleTitle)) $this->articleTitle = $inputData->articleTitle;
        if (!empty($inputData->articleDescription)) $this->articleDescription = $inputData->articleDescription;
        if (!empty($inputData->articleDate)) $this->articleDate = $inputData->articleDate;
    }

    /**
     * Get array mapping for API functions
     *
     * @return array
     */
    public function getArray()
    {
        $output = [];
        if ($this->articleID !== null) $output['articleID'] = $this->articleID;
        if ($this->articleTitle !== null) $output['articleTitle'] = $this->articleTitle;
        if ($this->articleDescription !== null) $output['articleDescription'] = $this->articleDescription;
        if ($this->articleDate !== null) $output['articleDate'] = $this->articleDate;

        return $output;
    }
}
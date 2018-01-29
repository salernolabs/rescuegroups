<?php
/**
 * NewsArticle Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class NewsArticle implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $id = null;

    /**
     * Title
     *
     * @var string
     */
    public $title = null;

    /**
     * Description
     *
     * @var string
     */
    public $description = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $date = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'articleID' => 'id',
            'articleTitle' => 'title',
            'articleDescription' => 'description',
            'articleDate' => 'date',
        ],
        'output' => [
            'id' => 'articleID',
            'title' => 'articleTitle',
            'description' => 'articleDescription',
            'date' => 'articleDate',
        ]
    ];

    /**
     * NewsArticle Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        $this->mapFromAPI($inputData);
    }

    /**
     * Get array mapping for API functions
     *
     * @param bool $includeId
     * @return array
     */
    public function getArray($includeId = true)
    {
        return $this->mapToAPI($includeId);
    }
}
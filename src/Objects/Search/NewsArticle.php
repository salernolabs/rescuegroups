<?php
/**
 * NewsArticle Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class NewsArticle extends \RescueGroups\Objects\NewsArticle implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Last updated
     *
     * @var \DateTime
     */
    public $updatedDate = null;


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
            'articleUpdatedDate' => 'updatedDate',
        ],
        'output' => [
            'id' => 'articleID',
            'title' => 'articleTitle',
            'description' => 'articleDescription',
            'date' => 'articleDate',
            'updatedDate' => 'articleUpdatedDate',
        ]
    ];

}
<?php
/**
 * AnimalGroup Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class AnimalGroup extends \RescueGroups\Objects\AnimalGroup implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Animals
     *
     * @var string
     */
    public $animals = null;

    /**
     * Name
     *
     * @var string
     */
    public $webpageName = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'groupID' => 'id',
            'groupName' => 'name',
            'groupHeaderID' => 'headerId',
            'groupAnimals' => 'animals',
            'webpageName' => 'webpageName',
        ],
        'output' => [
            'id' => 'groupID',
            'name' => 'groupName',
            'headerId' => 'groupHeaderID',
            'animals' => 'groupAnimals',
            'webpageName' => 'webpageName',
        ]
    ];

}
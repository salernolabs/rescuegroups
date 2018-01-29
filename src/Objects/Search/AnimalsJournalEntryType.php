<?php
/**
 * AnimalsJournalEntryType Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class AnimalsJournalEntryType extends \RescueGroups\Objects\AnimalsJournalEntryType implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Category
     *
     * @var string
     */
    public $categoryName = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'journalEntrytypeID' => 'id',
            'journalEntrytypeDescription' => 'description',
            'journalEntrytypeCategoryID' => 'categoryId',
            'journalEntrytypeCategoryName' => 'categoryName',
        ],
        'output' => [
            'id' => 'journalEntrytypeID',
            'description' => 'journalEntrytypeDescription',
            'categoryId' => 'journalEntrytypeCategoryID',
            'categoryName' => 'journalEntrytypeCategoryName',
        ]
    ];

}
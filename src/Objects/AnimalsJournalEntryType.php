<?php
/**
 * AnimalsJournalEntryType Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class AnimalsJournalEntryType implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Entrytype ID, Primary Key
     *
     * @var integer
     */
    public $id = null;

    /**
     * Description
     *
     * @var string
     */
    public $description = null;

    /**
     * Category ID
     *
     * @var integer
     */
    public $categoryId = null;


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
        ],
        'output' => [
            'id' => 'journalEntrytypeID',
            'description' => 'journalEntrytypeDescription',
            'categoryId' => 'journalEntrytypeCategoryID',
        ]
    ];

    /**
     * AnimalsJournalEntryType Constructor
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
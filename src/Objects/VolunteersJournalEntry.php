<?php
/**
 * VolunteersJournalEntry Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class VolunteersJournalEntry implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $id = null;

    /**
     * Contact
     *
     * @var integer
     */
    public $contactId = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $date = null;

    /**
     * Comment
     *
     * @var string
     */
    public $comment = null;

    /**
     * Entry Type
     *
     * @var string
     */
    public $type = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'journalEntryID' => 'id',
            'journalEntryContactID' => 'contactId',
            'journalEntryDate' => 'date',
            'journalEntryComment' => 'comment',
            'journalEntryType' => 'type',
        ],
        'output' => [
            'id' => 'journalEntryID',
            'contactId' => 'journalEntryContactID',
            'date' => 'journalEntryDate',
            'comment' => 'journalEntryComment',
            'type' => 'journalEntryType',
        ]
    ];

    /**
     * VolunteersJournalEntry Constructor
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
<?php
/**
 * AnimalsJournalEntry Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class AnimalsJournalEntry implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Entry ID, Primary Key
     *
     * @var integer
     */
    public $id = null;

    /**
     * Animal ID
     *
     * @var integer
     */
    public $animalId = null;

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
     * Entrytype ID
     *
     * @var integer
     */
    public $entrytypeId = null;

    /**
     * Cost
     *
     * @var float
     */
    public $cost = null;

    /**
     * Due Date
     *
     * @var \DateTime
     */
    public $dueDate = null;

    /**
     * Reminder Date
     *
     * @var \DateTime
     */
    public $reminderDate = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'journalEntryID' => 'id',
            'journalEntryAnimalID' => 'animalId',
            'journalEntryDate' => 'date',
            'journalEntryComment' => 'comment',
            'journalEntryEntrytypeID' => 'entrytypeId',
            'journalEntryCost' => 'cost',
            'journalEntryDueDate' => 'dueDate',
            'journalEntryReminderDate' => 'reminderDate',
        ],
        'output' => [
            'id' => 'journalEntryID',
            'animalId' => 'journalEntryAnimalID',
            'date' => 'journalEntryDate',
            'comment' => 'journalEntryComment',
            'entrytypeId' => 'journalEntryEntrytypeID',
            'cost' => 'journalEntryCost',
            'dueDate' => 'journalEntryDueDate',
            'reminderDate' => 'journalEntryReminderDate',
        ]
    ];

    /**
     * AnimalsJournalEntry Constructor
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
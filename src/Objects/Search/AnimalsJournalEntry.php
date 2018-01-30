<?php
/**
 * AnimalsJournalEntry Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class AnimalsJournalEntry extends \RescueGroups\Objects\AnimalsJournalEntry implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Entrytype
     *
     * @var string
     */
    public $typeDescription = null;

    /**
     * Category ID
     *
     * @var integer
     */
    public $typeCategoryId = null;

    /**
     * Category
     *
     * @var string
     */
    public $typeCategoryName = null;

    /**
     * Reminder Contact ID
     *
     * @var integer
     */
    public $reminderContactId = null;

    /**
     * Reminder Contact Name
     *
     * @var string
     */
    public $reminderContactName = null;


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
            'journalEntrytypeDescription' => 'typeDescription',
            'journalEntrytypeCategoryID' => 'typeCategoryId',
            'journalEntrytypeCategoryName' => 'typeCategoryName',
            'journalEntryCost' => 'cost',
            'journalEntryDueDate' => 'dueDate',
            'journalEntryReminderDate' => 'reminderDate',
            'journalEntryReminderContactID' => 'reminderContactId',
            'journalEntryReminderContactName' => 'reminderContactName',
        ],
        'output' => [
            'id' => 'journalEntryID',
            'animalId' => 'journalEntryAnimalID',
            'date' => 'journalEntryDate',
            'comment' => 'journalEntryComment',
            'entrytypeId' => 'journalEntryEntrytypeID',
            'typeDescription' => 'journalEntrytypeDescription',
            'typeCategoryId' => 'journalEntrytypeCategoryID',
            'typeCategoryName' => 'journalEntrytypeCategoryName',
            'cost' => 'journalEntryCost',
            'dueDate' => 'journalEntryDueDate',
            'reminderDate' => 'journalEntryReminderDate',
            'reminderContactId' => 'journalEntryReminderContactID',
            'reminderContactName' => 'journalEntryReminderContactName',
        ]
    ];

}
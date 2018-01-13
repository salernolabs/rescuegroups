<?php
/**
 * AnimalsJournalEntry Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class AnimalsJournalEntry
{
    /**
     * Entry ID
     *
     * @var integer
     */
    public $journalEntryID = null;

    /**
     * Animal ID
     *
     * @var integer
     */
    public $journalEntryAnimalID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $journalEntryDate = null;

    /**
     * Comment
     *
     * @var string
     */
    public $journalEntryComment = null;

    /**
     * Entrytype ID
     *
     * @var integer
     */
    public $journalEntryEntrytypeID = null;

    /**
     * Cost
     *
     * @var float
     */
    public $journalEntryCost = null;

    /**
     * Due Date
     *
     * @var \DateTime
     */
    public $journalEntryDueDate = null;

    /**
     * Reminder Date
     *
     * @var \DateTime
     */
    public $journalEntryReminderDate = null;


    /**
     * AnimalsJournalEntry Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->journalEntryID)) $this->journalEntryID = $inputData->journalEntryID;
        if (!empty($inputData->journalEntryAnimalID)) $this->journalEntryAnimalID = $inputData->journalEntryAnimalID;
        if (!empty($inputData->journalEntryDate)) $this->journalEntryDate = $inputData->journalEntryDate;
        if (!empty($inputData->journalEntryComment)) $this->journalEntryComment = $inputData->journalEntryComment;
        if (!empty($inputData->journalEntryEntrytypeID)) $this->journalEntryEntrytypeID = $inputData->journalEntryEntrytypeID;
        if (!empty($inputData->journalEntryCost)) $this->journalEntryCost = $inputData->journalEntryCost;
        if (!empty($inputData->journalEntryDueDate)) $this->journalEntryDueDate = $inputData->journalEntryDueDate;
        if (!empty($inputData->journalEntryReminderDate)) $this->journalEntryReminderDate = $inputData->journalEntryReminderDate;
    }
}
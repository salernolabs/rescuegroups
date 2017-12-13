<?php
/**
 * AnimalsJournalEntry Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class AnimalsJournalEntry
{
    /**
     * Animal ID
     * @var integer
     */
    public $journalEntryAnimalID;

    /**
     * Date
     * @var \DateTime
     */
    public $journalEntryDate;

    /**
     * Comment
     * @var string
     */
    public $journalEntryComment;

    /**
     * Entrytype ID
     * @var integer
     */
    public $journalEntryEntrytypeID;

    /**
     * Cost
     * @var float
     */
    public $journalEntryCost;

    /**
     * Due Date
     * @var \DateTime
     */
    public $journalEntryDueDate;

    /**
     * Reminder Date
     * @var \DateTime
     */
    public $journalEntryReminderDate;



    /**
     * AnimalsJournalEntries Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->journalEntryAnimalID)) $this->journalEntryAnimalID = $inputData->journalEntryAnimalID;
        if (!empty($inputData->journalEntryDate)) $this->journalEntryDate = $inputData->journalEntryDate;
        if (!empty($inputData->journalEntryComment)) $this->journalEntryComment = $inputData->journalEntryComment;
        if (!empty($inputData->journalEntryEntrytypeID)) $this->journalEntryEntrytypeID = $inputData->journalEntryEntrytypeID;
        if (!empty($inputData->journalEntryCost)) $this->journalEntryCost = $inputData->journalEntryCost;
        if (!empty($inputData->journalEntryDueDate)) $this->journalEntryDueDate = $inputData->journalEntryDueDate;
        if (!empty($inputData->journalEntryReminderDate)) $this->journalEntryReminderDate = $inputData->journalEntryReminderDate;

    }
}
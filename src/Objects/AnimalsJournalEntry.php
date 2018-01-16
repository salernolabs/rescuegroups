<?php
/**
 * AnimalsJournalEntry Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class AnimalsJournalEntry implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * Entry ID, Primary Key
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
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->journalEntryID)) $this->journalEntryID = $inputData->journalEntryID;
        if (!empty($inputData->journalEntryAnimalID)) $this->journalEntryAnimalID = $inputData->journalEntryAnimalID;
        if (!empty($inputData->journalEntryDate)) $this->journalEntryDate = $inputData->journalEntryDate;
        if (!empty($inputData->journalEntryComment)) $this->journalEntryComment = $inputData->journalEntryComment;
        if (!empty($inputData->journalEntryEntrytypeID)) $this->journalEntryEntrytypeID = $inputData->journalEntryEntrytypeID;
        if (!empty($inputData->journalEntryCost)) $this->journalEntryCost = $inputData->journalEntryCost;
        if (!empty($inputData->journalEntryDueDate)) $this->journalEntryDueDate = $inputData->journalEntryDueDate;
        if (!empty($inputData->journalEntryReminderDate)) $this->journalEntryReminderDate = $inputData->journalEntryReminderDate;
    }

    /**
     * Get array mapping for API functions
     *
     * @param bool $includeId
     * @return array
     */
    public function getArray($includeId = true)
    {
        $output = [];
        if ($includeId && $this->journalEntryID !== null) $output['journalEntryID'] = $this->journalEntryID;
        if ($this->journalEntryAnimalID !== null) $output['journalEntryAnimalID'] = $this->journalEntryAnimalID;
        if ($this->journalEntryDate !== null) $output['journalEntryDate'] = $this->journalEntryDate;
        if ($this->journalEntryComment !== null) $output['journalEntryComment'] = $this->journalEntryComment;
        if ($this->journalEntryEntrytypeID !== null) $output['journalEntryEntrytypeID'] = $this->journalEntryEntrytypeID;
        if ($this->journalEntryCost !== null) $output['journalEntryCost'] = $this->journalEntryCost;
        if ($this->journalEntryDueDate !== null) $output['journalEntryDueDate'] = $this->journalEntryDueDate;
        if ($this->journalEntryReminderDate !== null) $output['journalEntryReminderDate'] = $this->journalEntryReminderDate;

        return $output;
    }
}
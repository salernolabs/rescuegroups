<?php
/**
 * VolunteersJournalEntry Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects\VolunteersJournalEntry;

class VolunteersJournalEntry
{
    /**
     * Contact
     * @var integer
     */
    public $journalEntryContactID;

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
     * Entry Type
     * @var string
     */
    public $journalEntryType;



    /**
     * VolunteersJournalEntries Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->journalEntryContactID)) $this->journalEntryContactID = $inputData->journalEntryContactID;
        if (!empty($inputData->journalEntryDate)) $this->journalEntryDate = $inputData->journalEntryDate;
        if (!empty($inputData->journalEntryComment)) $this->journalEntryComment = $inputData->journalEntryComment;
        if (!empty($inputData->journalEntryType)) $this->journalEntryType = $inputData->journalEntryType;

    }
}
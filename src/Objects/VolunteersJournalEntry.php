<?php
/**
 * VolunteersJournalEntry Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class VolunteersJournalEntry
{
    /**
     * ID
     *
     * @var integer
     */
    public $journalEntryID = null;

    /**
     * Contact
     *
     * @var integer
     */
    public $journalEntryContactID = null;

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
     * Entry Type
     *
     * @var string
     */
    public $journalEntryType = null;


    /**
     * VolunteersJournalEntry Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->journalEntryID)) $this->journalEntryID = $inputData->journalEntryID;
        if (!empty($inputData->journalEntryContactID)) $this->journalEntryContactID = $inputData->journalEntryContactID;
        if (!empty($inputData->journalEntryDate)) $this->journalEntryDate = $inputData->journalEntryDate;
        if (!empty($inputData->journalEntryComment)) $this->journalEntryComment = $inputData->journalEntryComment;
        if (!empty($inputData->journalEntryType)) $this->journalEntryType = $inputData->journalEntryType;
    }
}
<?php
/**
 * VolunteersJournalEntry Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class VolunteersJournalEntry implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * ID, Primary Key
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
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->journalEntryID)) $this->journalEntryID = $inputData->journalEntryID;
        if (!empty($inputData->journalEntryContactID)) $this->journalEntryContactID = $inputData->journalEntryContactID;
        if (!empty($inputData->journalEntryDate)) $this->journalEntryDate = $inputData->journalEntryDate;
        if (!empty($inputData->journalEntryComment)) $this->journalEntryComment = $inputData->journalEntryComment;
        if (!empty($inputData->journalEntryType)) $this->journalEntryType = $inputData->journalEntryType;
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
        if ($this->journalEntryContactID !== null) $output['journalEntryContactID'] = $this->journalEntryContactID;
        if ($this->journalEntryDate !== null) $output['journalEntryDate'] = $this->journalEntryDate;
        if ($this->journalEntryComment !== null) $output['journalEntryComment'] = $this->journalEntryComment;
        if ($this->journalEntryType !== null) $output['journalEntryType'] = $this->journalEntryType;

        return $output;
    }
}
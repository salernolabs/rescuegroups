<?php
/**
 * AnimalsJournalEntryType Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class AnimalsJournalEntryType
{
    /**
     * Entrytype ID
     *
     * @var integer
     */
    public $journalEntrytypeID = null;

    /**
     * Description
     *
     * @var string
     */
    public $journalEntrytypeDescription = null;

    /**
     * Category ID
     *
     * @var integer
     */
    public $journalEntrytypeCategoryID = null;


    /**
     * AnimalsJournalEntryType Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->journalEntrytypeID)) $this->journalEntrytypeID = $inputData->journalEntrytypeID;
        if (!empty($inputData->journalEntrytypeDescription)) $this->journalEntrytypeDescription = $inputData->journalEntrytypeDescription;
        if (!empty($inputData->journalEntrytypeCategoryID)) $this->journalEntrytypeCategoryID = $inputData->journalEntrytypeCategoryID;
    }
}
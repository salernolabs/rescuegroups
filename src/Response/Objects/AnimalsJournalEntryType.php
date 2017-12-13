<?php
/**
 * AnimalsJournalEntryType Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class AnimalsJournalEntryType
{
    /**
     * Description
     * @var string
     */
    public $journalEntrytypeDescription;

    /**
     * Category ID
     * @var integer
     */
    public $journalEntrytypeCategoryID;



    /**
     * AnimalsJournalEntryTypes Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->journalEntrytypeDescription)) $this->journalEntrytypeDescription = $inputData->journalEntrytypeDescription;
        if (!empty($inputData->journalEntrytypeCategoryID)) $this->journalEntrytypeCategoryID = $inputData->journalEntrytypeCategoryID;

    }
}
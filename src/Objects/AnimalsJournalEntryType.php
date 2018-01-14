<?php
/**
 * AnimalsJournalEntryType Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class AnimalsJournalEntryType implements \RescueGroups\Objects\APIEncodableInterface
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
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->journalEntrytypeID)) $this->journalEntrytypeID = $inputData->journalEntrytypeID;
        if (!empty($inputData->journalEntrytypeDescription)) $this->journalEntrytypeDescription = $inputData->journalEntrytypeDescription;
        if (!empty($inputData->journalEntrytypeCategoryID)) $this->journalEntrytypeCategoryID = $inputData->journalEntrytypeCategoryID;
    }

    /**
     * Get array mapping for API functions
     *
     * @return array
     */
    public function getArray()
    {
        $output = [];
        if ($this->journalEntrytypeID !== null) $output['journalEntrytypeID'] = $this->journalEntrytypeID;
        if ($this->journalEntrytypeDescription !== null) $output['journalEntrytypeDescription'] = $this->journalEntrytypeDescription;
        if ($this->journalEntrytypeCategoryID !== null) $output['journalEntrytypeCategoryID'] = $this->journalEntrytypeCategoryID;

        return $output;
    }
}
<?php
/**
 * AnimalsJournalEntries Delete Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsJournalEntries;

class Delete extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animalsJournalEntries';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'delete';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Entry ID
     *
     * @var integer
     */
    private $journalEntryID = null;


    /**
     * Set Entry ID
     *
     * @param integer $value
     * @return $this
     */
    public function setJournalEntryID($value)
    {
        $this->journalEntryID = $value;

        return $this;
    }


    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->journalEntryID !== null) $parameterArray['values'][] = ["journalEntryID"=>$this->journalEntryID];
    }
}
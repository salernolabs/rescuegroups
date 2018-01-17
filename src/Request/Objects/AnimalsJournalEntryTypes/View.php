<?php
/**
 * AnimalsJournalEntryTypes View Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsJournalEntryTypes;

class View extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animalsJournalEntrytypes';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'view';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Entrytype ID
     *
     * @var integer
     */
    private $journalEntrytypeID = null;


    /**
     * Set Entrytype ID
     *
     * @param integer $value
     * @return $this
     */
    public function setJournalEntrytypeID($value)
    {
        $this->journalEntrytypeID = $value;

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

        if ($this->journalEntrytypeID !== null) $parameterArray['values'][] = ["journalEntrytypeID"=>$this->journalEntrytypeID];
    }
}
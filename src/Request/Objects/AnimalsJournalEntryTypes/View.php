<?php
/**
 * AnimalsJournalEntryTypes View Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsJournalEntryTypes;

class View implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
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
     * @return bool
     */
    public function loginRequired()
    {
        return true;
    }

    /**
     * Return the object type
     *
     * @return string
     */
    public function getObjectType()
    {
        return 'animalsJournalEntrytypes';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'view';
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
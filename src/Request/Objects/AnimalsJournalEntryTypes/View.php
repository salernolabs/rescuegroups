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
     * @var integer
     */
    private $journalEntrytypeID = null;


    /**
     * @return bool
     */
    public function loginRequired()
    {
        return false;
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
     * Set Entrytype ID
     *
     * @param integer $journalEntrytypeID
     * @return $this
     */
    public function setJournalEntrytypeID($journalEntrytypeID)
    {
        $this->journalEntrytypeID = $journalEntrytypeID;

        return $this;
    }
    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->journalEntrytypeID !== null) $parameterArray['journalEntrytypeID'] = $this->journalEntrytypeID;

    }
}
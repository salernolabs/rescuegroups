<?php
/**
 * AnimalsJournalEntries View Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:17
 */
namespace RescueGroups\Requests\Objects\AnimalsJournalEntries;

class View implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Entry ID
     * @var integer
     */
    private $journalEntryID = null;


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
        return 'animalsJournalEntries';
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
     * Set Entry ID
     *
     * @param integer $journalEntryID
     * @return $this
     */
    public function setJournalEntryID($journalEntryID)
    {
        $this->journalEntryID = $journalEntryID;

        return $this;
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->journalEntryID !== null) $parameterArray['journalEntryID'] = $this->journalEntryID;

    }
}
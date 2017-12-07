<?php
/**
 * AnimalsJournalEntryTypes View Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:17
 */
namespace RescueGroups\Requests\Objects\AnimalsJournalEntryTypes;

class View implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
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
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->journalEntrytypeID !== null) $parameterArray['journalEntrytypeID'] = $this->journalEntrytypeID;

    }
}
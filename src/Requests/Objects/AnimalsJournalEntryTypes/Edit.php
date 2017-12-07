<?php
/**
 * AnimalsJournalEntryTypes Edit Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:17
 */
namespace RescueGroups\Requests\Objects\AnimalsJournalEntryTypes;

class Edit implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Entrytype ID
     * @var integer
     */
    private $journalEntrytypeID = null;

    /**
     * Description
     * @var string
     */
    private $journalEntrytypeDescription = null;

    /**
     * Category ID
     * @var integer
     */
    private $journalEntrytypeCategoryID = null;


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
        return 'edit';
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
     * Set Description
     *
     * @param string $journalEntrytypeDescription
     * @return $this
     */
    public function setJournalEntrytypeDescription($journalEntrytypeDescription)
    {
        $this->journalEntrytypeDescription = $journalEntrytypeDescription;

        return $this;
    }

    /**
     * Set Category ID
     *
     * @param integer $journalEntrytypeCategoryID
     * @return $this
     */
    public function setJournalEntrytypeCategoryID($journalEntrytypeCategoryID)
    {
        $this->journalEntrytypeCategoryID = $journalEntrytypeCategoryID;

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
        if ($this->journalEntrytypeDescription !== null) $parameterArray['journalEntrytypeDescription'] = $this->journalEntrytypeDescription;
        if ($this->journalEntrytypeCategoryID !== null) $parameterArray['journalEntrytypeCategoryID'] = $this->journalEntrytypeCategoryID;

    }
}
<?php
/**
 * AnimalsJournalEntryTypes Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsJournalEntryTypes;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Description
     *
     * @var string
     */
    private $journalEntrytypeDescription = null;

    /**
     * Category ID
     *
     * @var integer
     */
    private $journalEntrytypeCategoryID = null;


    /**
     * Set Description
     *
     * @param string $value
     * @return $this
     */
    public function setJournalEntrytypeDescription($value)
    {
        $this->journalEntrytypeDescription = $value;

        return $this;
    }

    /**
     * Set Category ID
     *
     * @param integer $value
     * @return $this
     */
    public function setJournalEntrytypeCategoryID($value)
    {
        $this->journalEntrytypeCategoryID = $value;

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
        return 'add';
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->journalEntrytypeDescription !== null) $parameterArray['values'][] = ["journalEntrytypeDescription"=>$this->journalEntrytypeDescription];
        if ($this->journalEntrytypeCategoryID !== null) $parameterArray['values'][] = ["journalEntrytypeCategoryID"=>$this->journalEntrytypeCategoryID];
    }
}
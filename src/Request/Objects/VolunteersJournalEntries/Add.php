<?php
/**
 * VolunteersJournalEntries Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\VolunteersJournalEntries;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Contact
     *
     * @var integer
     */
    private $journalEntryContactID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    private $journalEntryDate = null;

    /**
     * Comment
     *
     * @var string
     */
    private $journalEntryComment = null;

    /**
     * Entry Type
     *
     * @var string
     */
    private $journalEntryType = null;


    /**
     * Set Contact
     *
     * @param integer $value
     * @return $this
     */
    public function setJournalEntryContactID($value)
    {
        $this->journalEntryContactID = $value;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setJournalEntryDate($value)
    {
        $this->journalEntryDate = $value;

        return $this;
    }

    /**
     * Set Comment
     *
     * @param string $value
     * @return $this
     */
    public function setJournalEntryComment($value)
    {
        $this->journalEntryComment = $value;

        return $this;
    }

    /**
     * Set Entry Type
     *
     * @param string $value
     * @return $this
     */
    public function setJournalEntryType($value)
    {
        $this->journalEntryType = $value;

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
        return 'volunteersJournalEntries';
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

        if ($this->journalEntryContactID !== null) $parameterArray['values'][] = ["journalEntryContactID"=>$this->journalEntryContactID];
        if ($this->journalEntryDate !== null) $parameterArray['values'][] = ["journalEntryDate"=>$this->journalEntryDate];
        if ($this->journalEntryComment !== null) $parameterArray['values'][] = ["journalEntryComment"=>$this->journalEntryComment];
        if ($this->journalEntryType !== null) $parameterArray['values'][] = ["journalEntryType"=>$this->journalEntryType];
    }
}
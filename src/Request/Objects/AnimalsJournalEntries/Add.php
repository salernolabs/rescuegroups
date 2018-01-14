<?php
/**
 * AnimalsJournalEntries Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsJournalEntries;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Animal ID
     *
     * @var integer
     */
    private $journalEntryAnimalID = null;

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
     * Entrytype ID
     *
     * @var integer
     */
    private $journalEntryEntrytypeID = null;

    /**
     * Cost
     *
     * @var float
     */
    private $journalEntryCost = null;

    /**
     * Due Date
     *
     * @var \DateTime
     */
    private $journalEntryDueDate = null;

    /**
     * Reminder Date
     *
     * @var \DateTime
     */
    private $journalEntryReminderDate = null;


    /**
     * Set Animal ID
     *
     * @param integer $value
     * @return $this
     */
    public function setJournalEntryAnimalID($value)
    {
        $this->journalEntryAnimalID = $value;

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
     * Set Entrytype ID
     *
     * @param integer $value
     * @return $this
     */
    public function setJournalEntryEntrytypeID($value)
    {
        $this->journalEntryEntrytypeID = $value;

        return $this;
    }

    /**
     * Set Cost
     *
     * @param float $value
     * @return $this
     */
    public function setJournalEntryCost($value)
    {
        $this->journalEntryCost = $value;

        return $this;
    }

    /**
     * Set Due Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setJournalEntryDueDate($value)
    {
        $this->journalEntryDueDate = $value;

        return $this;
    }

    /**
     * Set Reminder Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setJournalEntryReminderDate($value)
    {
        $this->journalEntryReminderDate = $value;

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
        return 'animalsJournalEntries';
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

        if ($this->journalEntryAnimalID !== null) $parameterArray['values'][] = ["journalEntryAnimalID"=>$this->journalEntryAnimalID];
        if ($this->journalEntryDate !== null) $parameterArray['values'][] = ["journalEntryDate"=>$this->journalEntryDate];
        if ($this->journalEntryComment !== null) $parameterArray['values'][] = ["journalEntryComment"=>$this->journalEntryComment];
        if ($this->journalEntryEntrytypeID !== null) $parameterArray['values'][] = ["journalEntryEntrytypeID"=>$this->journalEntryEntrytypeID];
        if ($this->journalEntryCost !== null) $parameterArray['values'][] = ["journalEntryCost"=>$this->journalEntryCost];
        if ($this->journalEntryDueDate !== null) $parameterArray['values'][] = ["journalEntryDueDate"=>$this->journalEntryDueDate];
        if ($this->journalEntryReminderDate !== null) $parameterArray['values'][] = ["journalEntryReminderDate"=>$this->journalEntryReminderDate];
    }
}
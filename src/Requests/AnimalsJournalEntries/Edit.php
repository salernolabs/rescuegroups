<?php
/**
 * AnimalsJournalEntries Edit Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\AnimalsJournalEntries;

class Edit implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Entry ID
     * @var integer
     */
    private $journalEntryID = null;

    /**
     * Animal ID
     * @var integer
     */
    private $journalEntryAnimalID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $journalEntryDate = null;

    /**
     * Comment
     * @var string
     */
    private $journalEntryComment = null;

    /**
     * Entrytype ID
     * @var integer
     */
    private $journalEntryEntrytypeID = null;

    /**
     * Cost
     * @var float
     */
    private $journalEntryCost = null;

    /**
     * Due Date
     * @var \DateTime
     */
    private $journalEntryDueDate = null;

    /**
     * Reminder Date
     * @var \DateTime
     */
    private $journalEntryReminderDate = null;


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
        return 'edit';
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
     * Set Animal ID
     *
     * @param integer $journalEntryAnimalID
     * @return $this
     */
    public function setJournalEntryAnimalID($journalEntryAnimalID)
    {
        $this->journalEntryAnimalID = $journalEntryAnimalID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $journalEntryDate
     * @return $this
     */
    public function setJournalEntryDate($journalEntryDate)
    {
        $this->journalEntryDate = $journalEntryDate;

        return $this;
    }

    /**
     * Set Comment
     *
     * @param string $journalEntryComment
     * @return $this
     */
    public function setJournalEntryComment($journalEntryComment)
    {
        $this->journalEntryComment = $journalEntryComment;

        return $this;
    }

    /**
     * Set Entrytype ID
     *
     * @param integer $journalEntryEntrytypeID
     * @return $this
     */
    public function setJournalEntryEntrytypeID($journalEntryEntrytypeID)
    {
        $this->journalEntryEntrytypeID = $journalEntryEntrytypeID;

        return $this;
    }

    /**
     * Set Cost
     *
     * @param float $journalEntryCost
     * @return $this
     */
    public function setJournalEntryCost($journalEntryCost)
    {
        $this->journalEntryCost = $journalEntryCost;

        return $this;
    }

    /**
     * Set Due Date
     *
     * @param \DateTime $journalEntryDueDate
     * @return $this
     */
    public function setJournalEntryDueDate($journalEntryDueDate)
    {
        $this->journalEntryDueDate = $journalEntryDueDate;

        return $this;
    }

    /**
     * Set Reminder Date
     *
     * @param \DateTime $journalEntryReminderDate
     * @return $this
     */
    public function setJournalEntryReminderDate($journalEntryReminderDate)
    {
        $this->journalEntryReminderDate = $journalEntryReminderDate;

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
        if ($this->journalEntryAnimalID !== null) $parameterArray['journalEntryAnimalID'] = $this->journalEntryAnimalID;
        if ($this->journalEntryDate !== null) $parameterArray['journalEntryDate'] = $this->journalEntryDate;
        if ($this->journalEntryComment !== null) $parameterArray['journalEntryComment'] = $this->journalEntryComment;
        if ($this->journalEntryEntrytypeID !== null) $parameterArray['journalEntryEntrytypeID'] = $this->journalEntryEntrytypeID;
        if ($this->journalEntryCost !== null) $parameterArray['journalEntryCost'] = $this->journalEntryCost;
        if ($this->journalEntryDueDate !== null) $parameterArray['journalEntryDueDate'] = $this->journalEntryDueDate;
        if ($this->journalEntryReminderDate !== null) $parameterArray['journalEntryReminderDate'] = $this->journalEntryReminderDate;

    }
}
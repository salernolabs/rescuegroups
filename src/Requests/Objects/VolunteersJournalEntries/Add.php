<?php
/**
 * VolunteersJournalEntries Add Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:27
 */
namespace RescueGroups\Requests\Objects\VolunteersJournalEntries;

class Add implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Contact
     * @var integer
     */
    private $journalEntryContactID = null;

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
     * Entry Type
     * @var string
     */
    private $journalEntryType = null;


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
     * Set Contact
     *
     * @param integer $journalEntryContactID
     * @return $this
     */
    public function setJournalEntryContactID($journalEntryContactID)
    {
        $this->journalEntryContactID = $journalEntryContactID;

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
     * Set Entry Type
     *
     * @param string $journalEntryType
     * @return $this
     */
    public function setJournalEntryType($journalEntryType)
    {
        $this->journalEntryType = $journalEntryType;

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
        if ($this->journalEntryContactID !== null) $parameterArray['journalEntryContactID'] = $this->journalEntryContactID;
        if ($this->journalEntryDate !== null) $parameterArray['journalEntryDate'] = $this->journalEntryDate;
        if ($this->journalEntryComment !== null) $parameterArray['journalEntryComment'] = $this->journalEntryComment;
        if ($this->journalEntryType !== null) $parameterArray['journalEntryType'] = $this->journalEntryType;

    }
}
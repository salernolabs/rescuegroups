<?php
/**
 * VolunteersJournalEntries Edit Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\VolunteersJournalEntries;

class Edit implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $journalEntryID = null;

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
        return 'edit';
    }

    /**
     * Set ID
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
        if ($this->journalEntryID !== null) $parameterArray['journalEntryID'] = $this->journalEntryID;
        if ($this->journalEntryContactID !== null) $parameterArray['journalEntryContactID'] = $this->journalEntryContactID;
        if ($this->journalEntryDate !== null) $parameterArray['journalEntryDate'] = $this->journalEntryDate;
        if ($this->journalEntryComment !== null) $parameterArray['journalEntryComment'] = $this->journalEntryComment;
        if ($this->journalEntryType !== null) $parameterArray['journalEntryType'] = $this->journalEntryType;

    }
}
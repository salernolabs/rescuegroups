<?php
/**
 * VolunteersJournalEntries Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\VolunteersJournalEntries;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

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
     * Volunteer Name
     * @var string
     */
    private $volunteerName = null;

    /**
     * Volunteer Type
     * @var string
     */
    private $volunteerType = null;

    /**
     * Added Date
     * @var \DateTime
     */
    private $journalEntryCreatedDate = null;


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
        return 'search';
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
     * Set Volunteer Name
     *
     * @param string $volunteerName
     * @return $this
     */
    public function setVolunteerName($volunteerName)
    {
        $this->volunteerName = $volunteerName;

        return $this;
    }

    /**
     * Set Volunteer Type
     *
     * @param string $volunteerType
     * @return $this
     */
    public function setVolunteerType($volunteerType)
    {
        $this->volunteerType = $volunteerType;

        return $this;
    }

    /**
     * Set Added Date
     *
     * @param \DateTime $journalEntryCreatedDate
     * @return $this
     */
    public function setJournalEntryCreatedDate($journalEntryCreatedDate)
    {
        $this->journalEntryCreatedDate = $journalEntryCreatedDate;

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
        if ($this->volunteerName !== null) $parameterArray['volunteerName'] = $this->volunteerName;
        if ($this->volunteerType !== null) $parameterArray['volunteerType'] = $this->volunteerType;
        if ($this->journalEntryCreatedDate !== null) $parameterArray['journalEntryCreatedDate'] = $this->journalEntryCreatedDate;

        $this->addSearchParameters($parameterArray);

    }
}
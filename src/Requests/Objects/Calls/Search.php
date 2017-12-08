<?php
/**
 * Calls Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\Calls;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $callID = null;

    /**
     * Contact
     * @var integer
     */
    private $callContactID = null;

    /**
     * Assigned
     * @var integer
     */
    private $callAssignedID = null;

    /**
     * Status
     * @var integer
     */
    private $callStatusID = null;

    /**
     * Urgency
     * @var integer
     */
    private $callUrgencyID = null;

    /**
     * Category
     * @var integer
     */
    private $callCategoryID = null;

    /**
     * Queue
     * @var integer
     */
    private $callQueueID = null;

    /**
     * Call date
     * @var \DateTime
     */
    private $callDate = null;

    /**
     * Contact
     * @var string
     */
    private $contactName = null;

    /**
     * Contact Type
     * @var string
     */
    private $contactType = null;

    /**
     * Assigned To
     * @var string
     */
    private $assignedName = null;

    /**
     * Queue
     * @var string
     */
    private $queueName = null;

    /**
     * Category
     * @var string
     */
    private $categoryName = null;

    /**
     * Status
     * @var string
     */
    private $statusName = null;

    /**
     * Urgency
     * @var string
     */
    private $urgencyName = null;

    /**
     * Last Outcome
     * @var string
     */
    private $lastOutcome = null;

    /**
     * Log Entries Count
     * @var string
     */
    private $logEntryCount = null;


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
        return 'calls';
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
     * @param integer $callID
     * @return $this
     */
    public function setCallID($callID)
    {
        $this->callID = $callID;

        return $this;
    }

    /**
     * Set Contact
     *
     * @param integer $callContactID
     * @return $this
     */
    public function setCallContactID($callContactID)
    {
        $this->callContactID = $callContactID;

        return $this;
    }

    /**
     * Set Assigned
     *
     * @param integer $callAssignedID
     * @return $this
     */
    public function setCallAssignedID($callAssignedID)
    {
        $this->callAssignedID = $callAssignedID;

        return $this;
    }

    /**
     * Set Status
     *
     * @param integer $callStatusID
     * @return $this
     */
    public function setCallStatusID($callStatusID)
    {
        $this->callStatusID = $callStatusID;

        return $this;
    }

    /**
     * Set Urgency
     *
     * @param integer $callUrgencyID
     * @return $this
     */
    public function setCallUrgencyID($callUrgencyID)
    {
        $this->callUrgencyID = $callUrgencyID;

        return $this;
    }

    /**
     * Set Category
     *
     * @param integer $callCategoryID
     * @return $this
     */
    public function setCallCategoryID($callCategoryID)
    {
        $this->callCategoryID = $callCategoryID;

        return $this;
    }

    /**
     * Set Queue
     *
     * @param integer $callQueueID
     * @return $this
     */
    public function setCallQueueID($callQueueID)
    {
        $this->callQueueID = $callQueueID;

        return $this;
    }

    /**
     * Set Call date
     *
     * @param \DateTime $callDate
     * @return $this
     */
    public function setCallDate($callDate)
    {
        $this->callDate = $callDate;

        return $this;
    }

    /**
     * Set Contact
     *
     * @param string $contactName
     * @return $this
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Set Contact Type
     *
     * @param string $contactType
     * @return $this
     */
    public function setContactType($contactType)
    {
        $this->contactType = $contactType;

        return $this;
    }

    /**
     * Set Assigned To
     *
     * @param string $assignedName
     * @return $this
     */
    public function setAssignedName($assignedName)
    {
        $this->assignedName = $assignedName;

        return $this;
    }

    /**
     * Set Queue
     *
     * @param string $queueName
     * @return $this
     */
    public function setQueueName($queueName)
    {
        $this->queueName = $queueName;

        return $this;
    }

    /**
     * Set Category
     *
     * @param string $categoryName
     * @return $this
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    /**
     * Set Status
     *
     * @param string $statusName
     * @return $this
     */
    public function setStatusName($statusName)
    {
        $this->statusName = $statusName;

        return $this;
    }

    /**
     * Set Urgency
     *
     * @param string $urgencyName
     * @return $this
     */
    public function setUrgencyName($urgencyName)
    {
        $this->urgencyName = $urgencyName;

        return $this;
    }

    /**
     * Set Last Outcome
     *
     * @param string $lastOutcome
     * @return $this
     */
    public function setLastOutcome($lastOutcome)
    {
        $this->lastOutcome = $lastOutcome;

        return $this;
    }

    /**
     * Set Log Entries Count
     *
     * @param string $logEntryCount
     * @return $this
     */
    public function setLogEntryCount($logEntryCount)
    {
        $this->logEntryCount = $logEntryCount;

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
        if ($this->callID !== null) $parameterArray['callID'] = $this->callID;
        if ($this->callContactID !== null) $parameterArray['callContactID'] = $this->callContactID;
        if ($this->callAssignedID !== null) $parameterArray['callAssignedID'] = $this->callAssignedID;
        if ($this->callStatusID !== null) $parameterArray['callStatusID'] = $this->callStatusID;
        if ($this->callUrgencyID !== null) $parameterArray['callUrgencyID'] = $this->callUrgencyID;
        if ($this->callCategoryID !== null) $parameterArray['callCategoryID'] = $this->callCategoryID;
        if ($this->callQueueID !== null) $parameterArray['callQueueID'] = $this->callQueueID;
        if ($this->callDate !== null) $parameterArray['callDate'] = $this->callDate;
        if ($this->contactName !== null) $parameterArray['contactName'] = $this->contactName;
        if ($this->contactType !== null) $parameterArray['contactType'] = $this->contactType;
        if ($this->assignedName !== null) $parameterArray['assignedName'] = $this->assignedName;
        if ($this->queueName !== null) $parameterArray['queueName'] = $this->queueName;
        if ($this->categoryName !== null) $parameterArray['categoryName'] = $this->categoryName;
        if ($this->statusName !== null) $parameterArray['statusName'] = $this->statusName;
        if ($this->urgencyName !== null) $parameterArray['urgencyName'] = $this->urgencyName;
        if ($this->lastOutcome !== null) $parameterArray['lastOutcome'] = $this->lastOutcome;
        if ($this->logEntryCount !== null) $parameterArray['logEntryCount'] = $this->logEntryCount;

        $this->addSearchParameters($parameterArray);

    }
}
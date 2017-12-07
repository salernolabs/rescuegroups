<?php
/**
 * Calls Edit Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:37
 */
namespace RescueGroups\Requests\Objects\Calls;

class Edit implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
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
        return 'edit';
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

    }
}
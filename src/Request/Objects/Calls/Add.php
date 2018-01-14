<?php
/**
 * Calls Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Calls;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Contact
     *
     * @var integer
     */
    private $callContactID = null;

    /**
     * Assigned
     *
     * @var integer
     */
    private $callAssignedID = null;

    /**
     * Status
     *
     * @var integer
     */
    private $callStatusID = null;

    /**
     * Urgency
     *
     * @var integer
     */
    private $callUrgencyID = null;

    /**
     * Category
     *
     * @var integer
     */
    private $callCategoryID = null;

    /**
     * Queue
     *
     * @var integer
     */
    private $callQueueID = null;

    /**
     * Call date
     *
     * @var \DateTime
     */
    private $callDate = null;


    /**
     * Set Contact
     *
     * @param integer $value
     * @return $this
     */
    public function setCallContactID($value)
    {
        $this->callContactID = $value;

        return $this;
    }

    /**
     * Set Assigned
     *
     * @param integer $value
     * @return $this
     */
    public function setCallAssignedID($value)
    {
        $this->callAssignedID = $value;

        return $this;
    }

    /**
     * Set Status
     *
     * @param integer $value
     * @return $this
     */
    public function setCallStatusID($value)
    {
        $this->callStatusID = $value;

        return $this;
    }

    /**
     * Set Urgency
     *
     * @param integer $value
     * @return $this
     */
    public function setCallUrgencyID($value)
    {
        $this->callUrgencyID = $value;

        return $this;
    }

    /**
     * Set Category
     *
     * @param integer $value
     * @return $this
     */
    public function setCallCategoryID($value)
    {
        $this->callCategoryID = $value;

        return $this;
    }

    /**
     * Set Queue
     *
     * @param integer $value
     * @return $this
     */
    public function setCallQueueID($value)
    {
        $this->callQueueID = $value;

        return $this;
    }

    /**
     * Set Call date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setCallDate($value)
    {
        $this->callDate = $value;

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
        return 'calls';
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

        if ($this->callContactID !== null) $parameterArray['values'][] = ["callContactID"=>$this->callContactID];
        if ($this->callAssignedID !== null) $parameterArray['values'][] = ["callAssignedID"=>$this->callAssignedID];
        if ($this->callStatusID !== null) $parameterArray['values'][] = ["callStatusID"=>$this->callStatusID];
        if ($this->callUrgencyID !== null) $parameterArray['values'][] = ["callUrgencyID"=>$this->callUrgencyID];
        if ($this->callCategoryID !== null) $parameterArray['values'][] = ["callCategoryID"=>$this->callCategoryID];
        if ($this->callQueueID !== null) $parameterArray['values'][] = ["callQueueID"=>$this->callQueueID];
        if ($this->callDate !== null) $parameterArray['values'][] = ["callDate"=>$this->callDate];
    }
}
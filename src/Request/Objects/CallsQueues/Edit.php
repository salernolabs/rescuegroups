<?php
/**
 * CallsQueues Edit Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\CallsQueues;

class Edit implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $queueID = null;

    /**
     * Name
     * @var string
     */
    private $queueName = null;

    /**
     * From Email Address
     * @var string
     */
    private $queueFromEmail = null;

    /**
     * Default Urgency
     * @var integer
     */
    private $queueDefaultUrgencyID = null;


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
        return 'callsQueues';
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
     * @param integer $queueID
     * @return $this
     */
    public function setQueueID($queueID)
    {
        $this->queueID = $queueID;

        return $this;
    }

    /**
     * Set Name
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
     * Set From Email Address
     *
     * @param string $queueFromEmail
     * @return $this
     */
    public function setQueueFromEmail($queueFromEmail)
    {
        $this->queueFromEmail = $queueFromEmail;

        return $this;
    }

    /**
     * Set Default Urgency
     *
     * @param integer $queueDefaultUrgencyID
     * @return $this
     */
    public function setQueueDefaultUrgencyID($queueDefaultUrgencyID)
    {
        $this->queueDefaultUrgencyID = $queueDefaultUrgencyID;

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
        if ($this->queueID !== null) $parameterArray['queueID'] = $this->queueID;
        if ($this->queueName !== null) $parameterArray['queueName'] = $this->queueName;
        if ($this->queueFromEmail !== null) $parameterArray['queueFromEmail'] = $this->queueFromEmail;
        if ($this->queueDefaultUrgencyID !== null) $parameterArray['queueDefaultUrgencyID'] = $this->queueDefaultUrgencyID;

    }
}
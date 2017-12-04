<?php
/**
 * CallsQueues Add Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\CallsQueues;

class Add implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Name
     * @var string
     */
    private $queueName = null;

    /**
     * From Email Address
     * @var email
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
        return 'add';
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
     * @param email $queueFromEmail
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
        if ($this->queueName !== null) $parameterArray['queueName'] = $this->queueName;
        if ($this->queueFromEmail !== null) $parameterArray['queueFromEmail'] = $this->queueFromEmail;
        if ($this->queueDefaultUrgencyID !== null) $parameterArray['queueDefaultUrgencyID'] = $this->queueDefaultUrgencyID;

    }
}
<?php
/**
 * CallsQueues Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\CallsQueues;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
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
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->queueName !== null) $parameterArray['queueName'] = $this->queueName;
        if ($this->queueFromEmail !== null) $parameterArray['queueFromEmail'] = $this->queueFromEmail;
        if ($this->queueDefaultUrgencyID !== null) $parameterArray['queueDefaultUrgencyID'] = $this->queueDefaultUrgencyID;

    }
}
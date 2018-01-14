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
     *
     * @var string
     */
    private $queueName = null;

    /**
     * From Email Address
     *
     * @var string
     */
    private $queueFromEmail = null;

    /**
     * Default Urgency
     *
     * @var integer
     */
    private $queueDefaultUrgencyID = null;


    /**
     * Set Name
     *
     * @param string $value
     * @return $this
     */
    public function setQueueName($value)
    {
        $this->queueName = $value;

        return $this;
    }

    /**
     * Set From Email Address
     *
     * @param string $value
     * @return $this
     */
    public function setQueueFromEmail($value)
    {
        $this->queueFromEmail = $value;

        return $this;
    }

    /**
     * Set Default Urgency
     *
     * @param integer $value
     * @return $this
     */
    public function setQueueDefaultUrgencyID($value)
    {
        $this->queueDefaultUrgencyID = $value;

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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->queueName !== null) $parameterArray['values'][] = ["queueName"=>$this->queueName];
        if ($this->queueFromEmail !== null) $parameterArray['values'][] = ["queueFromEmail"=>$this->queueFromEmail];
        if ($this->queueDefaultUrgencyID !== null) $parameterArray['values'][] = ["queueDefaultUrgencyID"=>$this->queueDefaultUrgencyID];
    }
}
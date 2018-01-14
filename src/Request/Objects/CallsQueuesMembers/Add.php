<?php
/**
 * CallsQueuesMembers Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\CallsQueuesMembers;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Contact
     *
     * @var integer
     */
    private $memberContactID = null;

    /**
     * Queue
     *
     * @var integer
     */
    private $memberQueueID = null;

    /**
     * Manager
     *
     * @var string
     */
    private $memberManager = null;


    /**
     * Set Contact
     *
     * @param integer $value
     * @return $this
     */
    public function setMemberContactID($value)
    {
        $this->memberContactID = $value;

        return $this;
    }

    /**
     * Set Queue
     *
     * @param integer $value
     * @return $this
     */
    public function setMemberQueueID($value)
    {
        $this->memberQueueID = $value;

        return $this;
    }

    /**
     * Set Manager
     *
     * @param string $value
     * @return $this
     */
    public function setMemberManager($value)
    {
        $this->memberManager = $value;

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
        return 'callsQueuesMembers';
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

        if ($this->memberContactID !== null) $parameterArray['values'][] = ["memberContactID"=>$this->memberContactID];
        if ($this->memberQueueID !== null) $parameterArray['values'][] = ["memberQueueID"=>$this->memberQueueID];
        if ($this->memberManager !== null) $parameterArray['values'][] = ["memberManager"=>$this->memberManager];
    }
}
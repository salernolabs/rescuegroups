<?php
/**
 * CallsQueuesMembers Edit Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:38
 */
namespace RescueGroups\Requests\Objects\CallsQueuesMembers;

class Edit implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $memberID = null;

    /**
     * Contact
     * @var integer
     */
    private $memberContactID = null;

    /**
     * Queue
     * @var integer
     */
    private $memberQueueID = null;

    /**
     * Manager
     * @var string
     */
    private $memberManager = null;


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
        return 'callsQueuesMembers';
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
     * @param integer $memberID
     * @return $this
     */
    public function setMemberID($memberID)
    {
        $this->memberID = $memberID;

        return $this;
    }

    /**
     * Set Contact
     *
     * @param integer $memberContactID
     * @return $this
     */
    public function setMemberContactID($memberContactID)
    {
        $this->memberContactID = $memberContactID;

        return $this;
    }

    /**
     * Set Queue
     *
     * @param integer $memberQueueID
     * @return $this
     */
    public function setMemberQueueID($memberQueueID)
    {
        $this->memberQueueID = $memberQueueID;

        return $this;
    }

    /**
     * Set Manager
     *
     * @param string $memberManager
     * @return $this
     */
    public function setMemberManager($memberManager)
    {
        $this->memberManager = $memberManager;

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
        if ($this->memberID !== null) $parameterArray['memberID'] = $this->memberID;
        if ($this->memberContactID !== null) $parameterArray['memberContactID'] = $this->memberContactID;
        if ($this->memberQueueID !== null) $parameterArray['memberQueueID'] = $this->memberQueueID;
        if ($this->memberManager !== null) $parameterArray['memberManager'] = $this->memberManager;

    }
}
<?php
/**
 * CallsQueuesMembers View Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:19
 */
namespace RescueGroups\Requests\Objects\CallsQueuesMembers;

class View implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $memberID = null;


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
        return 'view';
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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->memberID !== null) $parameterArray['memberID'] = $this->memberID;

    }
}
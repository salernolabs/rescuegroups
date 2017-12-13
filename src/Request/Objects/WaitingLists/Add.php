<?php
/**
 * WaitingLists Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\WaitingLists;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Name
     * @var string
     */
    private $waitinglistName = null;

    /**
     * Type
     * @var string
     */
    private $waitinglistType = null;

    /**
     * Comment
     * @var string
     */
    private $waitinglistComment = null;


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
        return 'waitinglists';
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
     * @param string $waitinglistName
     * @return $this
     */
    public function setWaitinglistName($waitinglistName)
    {
        $this->waitinglistName = $waitinglistName;

        return $this;
    }

    /**
     * Set Type
     *
     * @param string $waitinglistType
     * @return $this
     */
    public function setWaitinglistType($waitinglistType)
    {
        $this->waitinglistType = $waitinglistType;

        return $this;
    }

    /**
     * Set Comment
     *
     * @param string $waitinglistComment
     * @return $this
     */
    public function setWaitinglistComment($waitinglistComment)
    {
        $this->waitinglistComment = $waitinglistComment;

        return $this;
    }
    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->waitinglistName !== null) $parameterArray['waitinglistName'] = $this->waitinglistName;
        if ($this->waitinglistType !== null) $parameterArray['waitinglistType'] = $this->waitinglistType;
        if ($this->waitinglistComment !== null) $parameterArray['waitinglistComment'] = $this->waitinglistComment;

    }
}
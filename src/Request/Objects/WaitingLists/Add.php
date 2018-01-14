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
     *
     * @var string
     */
    private $waitinglistName = null;

    /**
     * Type
     *
     * @var string
     */
    private $waitinglistType = null;

    /**
     * Comment
     *
     * @var string
     */
    private $waitinglistComment = null;


    /**
     * Set Name
     *
     * @param string $value
     * @return $this
     */
    public function setWaitinglistName($value)
    {
        $this->waitinglistName = $value;

        return $this;
    }

    /**
     * Set Type
     *
     * @param string $value
     * @return $this
     */
    public function setWaitinglistType($value)
    {
        $this->waitinglistType = $value;

        return $this;
    }

    /**
     * Set Comment
     *
     * @param string $value
     * @return $this
     */
    public function setWaitinglistComment($value)
    {
        $this->waitinglistComment = $value;

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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->waitinglistName !== null) $parameterArray['values'][] = ["waitinglistName"=>$this->waitinglistName];
        if ($this->waitinglistType !== null) $parameterArray['values'][] = ["waitinglistType"=>$this->waitinglistType];
        if ($this->waitinglistComment !== null) $parameterArray['values'][] = ["waitinglistComment"=>$this->waitinglistComment];
    }
}
<?php
/**
 * Animals SetPublicStatuses Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Animals;

class SetPublicStatuses implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Statuses
     * @var int
     */
    private $statuslist = null;


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
        return 'animals';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'setPublicStatuses';
    }

    /**
     * Set Statuses
     *
     * @param int $statuslist
     * @return $this
     */
    public function setStatuslist($statuslist)
    {
        $this->statuslist = $statuslist;

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
        if ($this->statuslist !== null) $parameterArray['statuslist'] = $this->statuslist;

    }
}
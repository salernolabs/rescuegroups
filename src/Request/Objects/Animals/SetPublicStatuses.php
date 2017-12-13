<?php
/**
 * Animals SetPublicStatuses Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Animals;

class SetPublicStatuses implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Statuses
     * @var string
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
     * @param string $statuslist
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
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->statuslist !== null) $parameterArray['statuslist'] = $this->statuslist;

    }
}
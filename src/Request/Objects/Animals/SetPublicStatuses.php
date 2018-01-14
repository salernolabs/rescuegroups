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
     *
     * @var string
     */
    private $statuslist = null;


    /**
     * Set Statuses
     *
     * @param string $value
     * @return $this
     */
    public function setStatuslist($value)
    {
        $this->statuslist = $value;

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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->statuslist !== null) $parameterArray['values'][] = ["statuslist"=>$this->statuslist];
    }
}
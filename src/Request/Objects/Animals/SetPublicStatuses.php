<?php
/**
 * Animals SetPublicStatuses Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Animals;

class SetPublicStatuses extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animals';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'setPublicStatuses';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

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
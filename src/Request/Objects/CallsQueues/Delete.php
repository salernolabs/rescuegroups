<?php
/**
 * CallsQueues Delete Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\CallsQueues;

class Delete extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'callsQueues';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'delete';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * ID
     *
     * @var integer
     */
    private $queueID = null;


    /**
     * Set ID
     *
     * @param integer $value
     * @return $this
     */
    public function setQueueID($value)
    {
        $this->queueID = $value;

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

        if ($this->queueID !== null) $parameterArray['values'][] = ["queueID"=>$this->queueID];
    }
}
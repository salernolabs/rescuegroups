<?php
/**
 * Events View Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Events;

class View extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'events';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'view';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * ID
     *
     * @var integer
     */
    private $eventID = null;


    /**
     * Set ID
     *
     * @param integer $value
     * @return $this
     */
    public function setEventID($value)
    {
        $this->eventID = $value;

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

        if ($this->eventID !== null) $parameterArray['values'][] = ["eventID"=>$this->eventID];
    }
}
<?php
/**
 * IntakesServices View Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesServices;

class View extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'intakesServices';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'view';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Service
     *
     * @var integer
     */
    private $intakesServiceID = null;


    /**
     * Set Service
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesServiceID($value)
    {
        $this->intakesServiceID = $value;

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

        if ($this->intakesServiceID !== null) $parameterArray['values'][] = ["intakesServiceID"=>$this->intakesServiceID];
    }
}
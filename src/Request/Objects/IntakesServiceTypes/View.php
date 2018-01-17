<?php
/**
 * IntakesServiceTypes View Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesServiceTypes;

class View extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'intakesServicetypes';

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
    private $serviceID = null;


    /**
     * Set Service
     *
     * @param integer $value
     * @return $this
     */
    public function setServiceID($value)
    {
        $this->serviceID = $value;

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

        if ($this->serviceID !== null) $parameterArray['values'][] = ["serviceID"=>$this->serviceID];
    }
}
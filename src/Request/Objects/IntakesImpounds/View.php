<?php
/**
 * IntakesImpounds View Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesImpounds;

class View extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'intakesImpounds';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'view';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Impound
     *
     * @var integer
     */
    private $intakesImpoundID = null;


    /**
     * Set Impound
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesImpoundID($value)
    {
        $this->intakesImpoundID = $value;

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

        if ($this->intakesImpoundID !== null) $parameterArray['values'][] = ["intakesImpoundID"=>$this->intakesImpoundID];
    }
}
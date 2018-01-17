<?php
/**
 * OutcomesEuthanasias View Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\OutcomesEuthanasias;

class View extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'outcomesEuthanasias';

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
    private $outcomesEuthanasiaID = null;


    /**
     * Set ID
     *
     * @param integer $value
     * @return $this
     */
    public function setOutcomesEuthanasiaID($value)
    {
        $this->outcomesEuthanasiaID = $value;

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

        if ($this->outcomesEuthanasiaID !== null) $parameterArray['values'][] = ["outcomesEuthanasiaID"=>$this->outcomesEuthanasiaID];
    }
}
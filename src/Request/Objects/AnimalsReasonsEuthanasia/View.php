<?php
/**
 * AnimalsReasonsEuthanasia View Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsReasonsEuthanasia;

class View extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animalsReasonsEuthanasia';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'view';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Reason ID
     *
     * @var integer
     */
    private $reasonID = null;


    /**
     * Set Reason ID
     *
     * @param integer $value
     * @return $this
     */
    public function setReasonID($value)
    {
        $this->reasonID = $value;

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

        if ($this->reasonID !== null) $parameterArray['values'][] = ["reasonID"=>$this->reasonID];
    }
}
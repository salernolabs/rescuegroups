<?php
/**
 * IntakesOwnerSurrenders View Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesOwnerSurrenders;

class View extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'intakesOwnersurrenders';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'view';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Owner Surrender
     *
     * @var integer
     */
    private $intakesOwnersurrenderID = null;


    /**
     * Set Owner Surrender
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesOwnersurrenderID($value)
    {
        $this->intakesOwnersurrenderID = $value;

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

        if ($this->intakesOwnersurrenderID !== null) $parameterArray['values'][] = ["intakesOwnersurrenderID"=>$this->intakesOwnersurrenderID];
    }
}
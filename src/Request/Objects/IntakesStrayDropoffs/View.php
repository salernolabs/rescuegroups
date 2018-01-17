<?php
/**
 * IntakesStrayDropoffs View Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesStrayDropoffs;

class View extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'intakesStraydropoffs';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'view';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Stray Pickup
     *
     * @var integer
     */
    private $intakesStraydropoffID = null;


    /**
     * Set Stray Pickup
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesStraydropoffID($value)
    {
        $this->intakesStraydropoffID = $value;

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

        if ($this->intakesStraydropoffID !== null) $parameterArray['values'][] = ["intakesStraydropoffID"=>$this->intakesStraydropoffID];
    }
}
<?php
/**
 * IntakesStrayDropoffs View Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesStrayDropoffs;

class View implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
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
     * @return bool
     */
    public function loginRequired()
    {
        return true;
    }

    /**
     * Return the object type
     *
     * @return string
     */
    public function getObjectType()
    {
        return 'intakesStraydropoffs';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'view';
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
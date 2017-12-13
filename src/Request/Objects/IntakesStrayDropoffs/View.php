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
     * @var integer
     */
    private $intakesStraydropoffID = null;


    /**
     * @return bool
     */
    public function loginRequired()
    {
        return false;
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
     * Set Stray Pickup
     *
     * @param integer $intakesStraydropoffID
     * @return $this
     */
    public function setIntakesStraydropoffID($intakesStraydropoffID)
    {
        $this->intakesStraydropoffID = $intakesStraydropoffID;

        return $this;
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->intakesStraydropoffID !== null) $parameterArray['intakesStraydropoffID'] = $this->intakesStraydropoffID;

    }
}
<?php
/**
 * IntakesStrayPickups View Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesStrayPickups;

class View implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Stray Pickup
     * @var integer
     */
    private $intakesStraypickupID = null;


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
        return 'intakesStraypickups';
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
     * @param integer $intakesStraypickupID
     * @return $this
     */
    public function setIntakesStraypickupID($intakesStraypickupID)
    {
        $this->intakesStraypickupID = $intakesStraypickupID;

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
        if ($this->intakesStraypickupID !== null) $parameterArray['intakesStraypickupID'] = $this->intakesStraypickupID;

    }
}
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
     *
     * @var integer
     */
    private $intakesStraypickupID = null;


    /**
     * Set Stray Pickup
     *
     * @param integer $value
     * @return $this
     */
    public function setIntakesStraypickupID($value)
    {
        $this->intakesStraypickupID = $value;

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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->intakesStraypickupID !== null) $parameterArray['values'][] = ["intakesStraypickupID"=>$this->intakesStraypickupID];
    }
}
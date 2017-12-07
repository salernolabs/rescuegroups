<?php
/**
 * IntakesStrayPickups View Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:41
 */
namespace RescueGroups\Requests\Objects\IntakesStrayPickups;

class View implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
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
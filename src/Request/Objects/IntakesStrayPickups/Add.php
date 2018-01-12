<?php
/**
 * IntakesStrayPickups Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesStrayPickups;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "intakesStraypickupAnimalID" => 1,
        "intakesStraypickupAnimalConditionID" => 1,
        "intakesStraypickupDate" => 1,
        "intakesStraypickupNotes" => 0,
        "intakesStraypickupLocation" => 0,
        "intakesStraypickupAddress" => 1,
        "intakesStraypickupCity" => 1,
        "intakesStraypickupState" => 1,
        "intakesStraypickupPostalcode" => 1,
        "intakesStraypickupFinderID" => 1,
        "intakesStraypickupStaffID" => 1,
    ];


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
        return 'add';
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {

    }

}
<?php
/**
 * IntakesStrayPickups Edit Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesStrayPickups;

class Edit implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "intakesStraypickupID" => 1,
        "intakesStraypickupAnimalID" => 0,
        "intakesStraypickupAnimalConditionID" => 0,
        "intakesStraypickupDate" => 0,
        "intakesStraypickupNotes" => 0,
        "intakesStraypickupLocation" => 0,
        "intakesStraypickupAddress" => 0,
        "intakesStraypickupCity" => 0,
        "intakesStraypickupState" => 0,
        "intakesStraypickupPostalcode" => 0,
        "intakesStraypickupFinderID" => 0,
        "intakesStraypickupStaffID" => 0,
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
        return 'edit';
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
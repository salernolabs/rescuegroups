<?php
/**
 * IntakesStrayDropoffs Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesStrayDropoffs;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "intakesStraydropoffAnimalID" => 1,
        "intakesStraydropoffAnimalConditionID" => 1,
        "intakesStraydropoffDate" => 1,
        "intakesStraydropoffNotes" => 0,
        "intakesStraydropoffFoundLocation" => 0,
        "intakesStraydropoffFoundAddress" => 0,
        "intakesStraydropoffFoundCity" => 0,
        "intakesStraydropoffFoundState" => 0,
        "intakesStraydropoffFoundPostalcode" => 0,
        "intakesStraydropoffFinderID" => 1,
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
        return 'intakesStraydropoffs';
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
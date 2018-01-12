<?php
/**
 * OutcomesReleases Edit Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\OutcomesReleases;

class Edit implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "outcomesReleaseID" => 1,
        "outcomesReleaseAnimalConditionID" => 0,
        "outcomesReleaseDate" => 0,
        "outcomesReleaseNotes" => 0,
        "outcomesReleaseLocation" => 0,
        "outcomesReleaseAddress" => 0,
        "outcomesReleaseCity" => 0,
        "outcomesReleaseState" => 0,
        "outcomesReleasePostalcode" => 0,
        "outcomesReleaseByID" => 0,
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
        return 'outcomesReleases';
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
<?php
/**
 * OutcomesReleases Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\OutcomesReleases;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "outcomesReleaseIntakeID" => 1,
        "outcomesReleaseAnimalConditionID" => 1,
        "outcomesReleaseDate" => 1,
        "outcomesReleaseNotes" => 0,
        "outcomesReleaseLocation" => 0,
        "outcomesReleaseAddress" => 0,
        "outcomesReleaseCity" => 0,
        "outcomesReleaseState" => 0,
        "outcomesReleasePostalcode" => 0,
        "outcomesReleaseByID" => 1,
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
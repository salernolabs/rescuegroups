<?php
/**
 * IntakesOwnerRequestedEuthanasias Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesOwnerRequestedEuthanasias;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "intakesOwnerrequestedeuthanasiaAnimalID" => 1,
        "intakesOwnerrequestedeuthanasiaAnimalConditionID" => 1,
        "intakesOwnerrequestedeuthanasiaDate" => 1,
        "intakesOwnerrequestedeuthanasiaNotes" => 0,
        "intakesOwnerrequestedeuthanasiaOwnerID" => 1,
        "intakesOwnerrequestedeuthanasiaReasonID" => 1,
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
        return 'intakesOwnerrequestedeuthanasias';
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
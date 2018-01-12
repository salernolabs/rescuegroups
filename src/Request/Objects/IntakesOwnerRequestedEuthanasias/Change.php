<?php
/**
 * IntakesOwnerRequestedEuthanasias Change Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesOwnerRequestedEuthanasias;

class Change implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "intakeID" => 1,
        "intakesOwnerrequestedeuthanasiaAnimalID" => 0,
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
        return 'change';
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
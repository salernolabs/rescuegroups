<?php
/**
 * IntakesOwnerRequestedEuthanasias Edit Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesOwnerRequestedEuthanasias;

class Edit implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "intakesOwnerrequestedeuthanasiaID" => 1,
        "intakesOwnerrequestedeuthanasiaAnimalID" => 0,
        "intakesOwnerrequestedeuthanasiaAnimalConditionID" => 0,
        "intakesOwnerrequestedeuthanasiaDate" => 0,
        "intakesOwnerrequestedeuthanasiaNotes" => 0,
        "intakesOwnerrequestedeuthanasiaOwnerID" => 0,
        "intakesOwnerrequestedeuthanasiaReasonID" => 0,
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
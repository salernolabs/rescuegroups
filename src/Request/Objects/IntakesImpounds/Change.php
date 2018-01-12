<?php
/**
 * IntakesImpounds Change Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesImpounds;

class Change implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "intakeID" => 1,
        "intakesImpoundAnimalID" => 0,
        "intakesImpoundAnimalConditionID" => 1,
        "intakesImpoundDate" => 1,
        "intakesImpoundNotes" => 0,
        "intakesImpoundLocation" => 0,
        "intakesImpoundAddress" => 1,
        "intakesImpoundCity" => 1,
        "intakesImpoundState" => 1,
        "intakesImpoundPostalcode" => 1,
        "intakesImpoundFromID" => 1,
        "intakesImpoundStaffID" => 1,
        "intakesImpoundReasonID" => 1,
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
        return 'intakesImpounds';
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
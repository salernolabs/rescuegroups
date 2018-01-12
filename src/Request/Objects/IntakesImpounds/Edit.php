<?php
/**
 * IntakesImpounds Edit Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesImpounds;

class Edit implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "intakesImpoundID" => 1,
        "intakesImpoundAnimalID" => 0,
        "intakesImpoundAnimalConditionID" => 0,
        "intakesImpoundDate" => 0,
        "intakesImpoundNotes" => 0,
        "intakesImpoundLocation" => 0,
        "intakesImpoundAddress" => 0,
        "intakesImpoundCity" => 0,
        "intakesImpoundState" => 0,
        "intakesImpoundPostalcode" => 0,
        "intakesImpoundFromID" => 0,
        "intakesImpoundStaffID" => 0,
        "intakesImpoundReasonID" => 0,
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
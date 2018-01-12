<?php
/**
 * IntakesOwnerSurrenders Change Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesOwnerSurrenders;

class Change implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "intakeID" => 1,
        "intakesOwnersurrenderAnimalID" => 0,
        "intakesOwnersurrenderAnimalConditionID" => 1,
        "intakesOwnersurrenderDate" => 1,
        "intakesOwnersurrenderNotes" => 0,
        "intakesOwnersurrenderOwnerID" => 1,
        "intakesOwnersurrenderReasonID" => 1,
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
        return 'intakesOwnersurrenders';
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
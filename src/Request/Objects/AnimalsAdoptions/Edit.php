<?php
/**
 * AnimalsAdoptions Edit Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsAdoptions;

class Edit implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "adoptionID" => 1,
        "adoptionAnimalID" => 0,
        "adoptionAdopterID" => 0,
        "adoptionLeadID" => 0,
        "adoptionFeeAmount" => 0,
        "adoptionDonationAmount" => 0,
        "adoptionDonationID" => 0,
        "adoptionDate" => 0,
        "adoptionSubmittedformID" => 0,
        "adoptionStatusID" => 0,
        "adoptionLetterSent" => 0,
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
        return 'animalsAdoptions';
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
<?php
/**
 * AnimalsAdoptions Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsAdoptions;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "adoptionAnimalID" => 1,
        "adoptionAdopterID" => 1,
        "adoptionLeadID" => 0,
        "adoptionFeeAmount" => 0,
        "adoptionDonationAmount" => 0,
        "adoptionDonationID" => 0,
        "adoptionDate" => 1,
        "adoptionSubmittedformID" => 0,
        "adoptionStatusID" => 1,
        "adoptionLetterSent" => 0,
        "adoptionAddAdopterRole" => 0,
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
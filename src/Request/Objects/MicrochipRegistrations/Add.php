<?php
/**
 * MicrochipRegistrations Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\MicrochipRegistrations;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "microchipRegistrationAnimalID" => 1,
        "microchipRegistrationMicrochipNumber" => 1,
        "microchipRegistrationMicrochipVendor" => 1,
        "microchipRegistrationRegistry" => 1,
        "microchipRegistrationRegistrantFirstname" => 1,
        "microchipRegistrationRegistrantLastname" => 1,
        "microchipRegistrationRegistrantAddress" => 1,
        "microchipRegistrationRegistrantCity" => 1,
        "microchipRegistrationRegistrantState" => 1,
        "microchipRegistrationRegistrantPostalcode" => 1,
        "microchipRegistrationRegistrantCountry" => 1,
        "microchipRegistrationRegistrantPrimaryPhone" => 1,
        "microchipRegistrationRegistrantSecondaryPhone" => 0,
        "microchipRegistrationRegistrantPrimaryEmail" => 1,
        "microchipRegistrationRegistrantSecondaryEmail" => 0,
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
        return 'microchipRegistrations';
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
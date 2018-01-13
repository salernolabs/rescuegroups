<?php
/**
 * MicrochipRegistrations Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\MicrochipRegistrations;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "microchipRegistrationID" => 1,
        "microchipRegistrationCreatedDate" => 0,
        "microchipRegistrationCreatedByID" => 0,
        "microchipRegistrationUpdatedDate" => 0,
        "microchipRegistrationUpdatedByID" => 0,
        "microchipRegistrationMicrochipNumber" => 0,
        "microchipRegistrationMicrochipVendor" => 0,
        "microchipRegistrationRegistry" => 0,
        "microchipRegistrationOrgID" => 0,
        "microchipRegistrationAnimalID" => 0,
        "microchipRegistrationRegistrantName" => 0,
        "microchipRegistrationRegistrantFirstname" => 0,
        "microchipRegistrationRegistrantLastname" => 0,
        "microchipRegistrationRegistrantAddress" => 0,
        "microchipRegistrationRegistrantCity" => 0,
        "microchipRegistrationRegistrantState" => 0,
        "microchipRegistrationRegistrantPostalcode" => 0,
        "microchipRegistrationRegistrantCountry" => 0,
        "microchipRegistrationRegistrantPrimaryPhone" => 0,
        "microchipRegistrationRegistrantSecondaryPhone" => 0,
        "microchipRegistrationRegistrantPrimaryEmail" => 0,
        "microchipRegistrationRegistrantSecondaryEmail" => 0,
        "microchipRegistrationDate" => 0,
        "microchipRegistrationCode" => 0,
        "microchipRegistrationComplete" => 0,
    ];

    /**
     * @return bool
     */
    public function loginRequired()
    {
        return true;
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
        return 'search';
    }

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\MicrochipRegistration[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\MicrochipRegistration($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\MicrochipRegistration($data)];
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        $this->addSearchParameters($parameterArray);
    }
}
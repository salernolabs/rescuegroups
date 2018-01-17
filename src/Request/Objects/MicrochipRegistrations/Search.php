<?php
/**
 * MicrochipRegistrations Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\MicrochipRegistrations;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'microchipRegistrations';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'search';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "microchipRegistrationID" => [1, 'microchipRegistrationID'],
        "microchipRegistrationCreatedDate" => [0, 'microchipRegistrationCreatedDate'],
        "microchipRegistrationCreatedByID" => [0, 'microchipRegistrationCreatedByID'],
        "microchipRegistrationUpdatedDate" => [0, 'microchipRegistrationUpdatedDate'],
        "microchipRegistrationUpdatedByID" => [0, 'microchipRegistrationUpdatedByID'],
        "microchipRegistrationMicrochipNumber" => [0, 'microchipRegistrationMicrochipNumber'],
        "microchipRegistrationMicrochipVendor" => [0, 'microchipRegistrationMicrochipVendor'],
        "microchipRegistrationRegistry" => [0, 'microchipRegistrationRegistry'],
        "microchipRegistrationOrgID" => [0, 'microchipRegistrationOrgID'],
        "microchipRegistrationAnimalID" => [0, 'microchipRegistrationAnimalID'],
        "microchipRegistrationRegistrantName" => [0, 'microchipRegistrationRegistrantName'],
        "microchipRegistrationRegistrantFirstname" => [0, 'microchipRegistrationRegistrantFirstname'],
        "microchipRegistrationRegistrantLastname" => [0, 'microchipRegistrationRegistrantLastname'],
        "microchipRegistrationRegistrantAddress" => [0, 'microchipRegistrationRegistrantAddress'],
        "microchipRegistrationRegistrantCity" => [0, 'microchipRegistrationRegistrantCity'],
        "microchipRegistrationRegistrantState" => [0, 'microchipRegistrationRegistrantState'],
        "microchipRegistrationRegistrantPostalcode" => [0, 'microchipRegistrationRegistrantPostalcode'],
        "microchipRegistrationRegistrantCountry" => [0, 'microchipRegistrationRegistrantCountry'],
        "microchipRegistrationRegistrantPrimaryPhone" => [0, 'microchipRegistrationRegistrantPrimaryPhone'],
        "microchipRegistrationRegistrantSecondaryPhone" => [0, 'microchipRegistrationRegistrantSecondaryPhone'],
        "microchipRegistrationRegistrantPrimaryEmail" => [0, 'microchipRegistrationRegistrantPrimaryEmail'],
        "microchipRegistrationRegistrantSecondaryEmail" => [0, 'microchipRegistrationRegistrantSecondaryEmail'],
        "microchipRegistrationDate" => [0, 'microchipRegistrationDate'],
        "microchipRegistrationCode" => [0, 'microchipRegistrationCode'],
        "microchipRegistrationComplete" => [0, 'microchipRegistrationComplete'],
    ];

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
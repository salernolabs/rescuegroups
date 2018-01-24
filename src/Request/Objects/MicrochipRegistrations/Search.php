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

    const FIELD_ID = 'id';
    const FIELD_CREATED_DATE = 'createdDate';
    const FIELD_CREATED_BY_ID = 'createdById';
    const FIELD_UPDATED_DATE = 'updatedDate';
    const FIELD_UPDATED_BY_ID = 'updatedById';
    const FIELD_MICROCHIP_NUMBER = 'microchipNumber';
    const FIELD_MICROCHIP_VENDOR = 'microchipVendor';
    const FIELD_REGISTRY = 'registry';
    const FIELD_ORG_ID = 'orgId';
    const FIELD_ANIMAL_ID = 'animalId';
    const FIELD_REGISTRANT_NAME = 'registrantName';
    const FIELD_REGISTRANT_FIRSTNAME = 'registrantFirstname';
    const FIELD_REGISTRANT_LASTNAME = 'registrantLastname';
    const FIELD_REGISTRANT_ADDRESS = 'registrantAddress';
    const FIELD_REGISTRANT_CITY = 'registrantCity';
    const FIELD_REGISTRANT_STATE = 'registrantState';
    const FIELD_REGISTRANT_POSTALCODE = 'registrantPostalcode';
    const FIELD_REGISTRANT_COUNTRY = 'registrantCountry';
    const FIELD_REGISTRANT_PRIMARY_PHONE = 'registrantPrimaryPhone';
    const FIELD_REGISTRANT_SECONDARY_PHONE = 'registrantSecondaryPhone';
    const FIELD_REGISTRANT_PRIMARY_EMAIL = 'registrantPrimaryEmail';
    const FIELD_REGISTRANT_SECONDARY_EMAIL = 'registrantSecondaryEmail';
    const FIELD_DATE = 'date';
    const FIELD_CODE = 'code';
    const FIELD_COMPLETE = 'complete';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [1, 'microchipRegistrationID'],
        "createdDate" => [0, 'microchipRegistrationCreatedDate'],
        "createdById" => [0, 'microchipRegistrationCreatedByID'],
        "updatedDate" => [0, 'microchipRegistrationUpdatedDate'],
        "updatedById" => [0, 'microchipRegistrationUpdatedByID'],
        "microchipNumber" => [0, 'microchipRegistrationMicrochipNumber'],
        "microchipVendor" => [0, 'microchipRegistrationMicrochipVendor'],
        "registry" => [0, 'microchipRegistrationRegistry'],
        "orgId" => [0, 'microchipRegistrationOrgID'],
        "animalId" => [0, 'microchipRegistrationAnimalID'],
        "registrantName" => [0, 'microchipRegistrationRegistrantName'],
        "registrantFirstname" => [0, 'microchipRegistrationRegistrantFirstname'],
        "registrantLastname" => [0, 'microchipRegistrationRegistrantLastname'],
        "registrantAddress" => [0, 'microchipRegistrationRegistrantAddress'],
        "registrantCity" => [0, 'microchipRegistrationRegistrantCity'],
        "registrantState" => [0, 'microchipRegistrationRegistrantState'],
        "registrantPostalcode" => [0, 'microchipRegistrationRegistrantPostalcode'],
        "registrantCountry" => [0, 'microchipRegistrationRegistrantCountry'],
        "registrantPrimaryPhone" => [0, 'microchipRegistrationRegistrantPrimaryPhone'],
        "registrantSecondaryPhone" => [0, 'microchipRegistrationRegistrantSecondaryPhone'],
        "registrantPrimaryEmail" => [0, 'microchipRegistrationRegistrantPrimaryEmail'],
        "registrantSecondaryEmail" => [0, 'microchipRegistrationRegistrantSecondaryEmail'],
        "date" => [0, 'microchipRegistrationDate'],
        "code" => [0, 'microchipRegistrationCode'],
        "complete" => [0, 'microchipRegistrationComplete'],
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
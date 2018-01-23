<?php
/**
 * Events PublicSearch Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Events;

class PublicSearch extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'events';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'publicSearch';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = false;

    const FIELD_ID = 'id';
    const FIELD_ORG_ID = 'orgId';
    const FIELD_NAME = 'name';
    const FIELD_START = 'start';
    const FIELD_END = 'end';
    const FIELD_URL = 'url';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_LOCATION_ID = 'locationId';
    const FIELD_SPECIES = 'species';
    const FIELD_LOCATION_NAME = 'locationName';
    const FIELD_LOCATION_URL = 'locationUrl';
    const FIELD_LOCATION_ADDRESS = 'locationAddress';
    const FIELD_LOCATION_CITY = 'locationCity';
    const FIELD_LOCATION_STATE = 'locationState';
    const FIELD_LOCATION_POSTALCODE = 'locationPostalcode';
    const FIELD_LOCATION_COUNTRY = 'locationCountry';
    const FIELD_LOCATION_PHONE = 'locationPhone';
    const FIELD_LOCATION_PHONE_EXT = 'locationPhoneExt';
    const FIELD_LOCATIONS = 'locations';
    const FIELD_LOCATION_DISTANCE = 'locationDistance';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [1, 'eventID'],
        "orgId" => [0, 'eventOrgID'],
        "name" => [0, 'eventName'],
        "start" => [0, 'eventStart'],
        "end" => [0, 'eventEnd'],
        "url" => [0, 'eventUrl'],
        "description" => [0, 'eventDescription'],
        "locationId" => [0, 'eventLocationID'],
        "species" => [0, 'eventSpecies'],
        "locationName" => [0, 'locationName'],
        "locationUrl" => [0, 'locationUrl'],
        "locationAddress" => [0, 'locationAddress'],
        "locationCity" => [0, 'locationCity'],
        "locationState" => [0, 'locationState'],
        "locationPostalcode" => [0, 'locationPostalcode'],
        "locationCountry" => [0, 'locationCountry'],
        "locationPhone" => [0, 'locationPhone'],
        "locationPhoneExt" => [0, 'locationPhoneExt'],
        "locations" => [0, 'locationEvents'],
        "locationDistance" => [0, 'locationDistance'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\Event[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\Event($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Event($data)];
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
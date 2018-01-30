<?php
/**
 * Events Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Events;

class Search extends \RescueGroups\Request\Objects\Base implements
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
    const QUERY_OBJECT_ACTION = 'search';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    const FIELD_ID = 'id';
    const FIELD_NAME = 'name';
    const FIELD_START = 'start';
    const FIELD_END = 'end';
    const FIELD_URL = 'url';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_LOCATION_ID = 'locationId';
    const FIELD_ANIMAL_ATTENDANCE = 'animalAttendance';
    const FIELD_MEETREQUESTS = 'meetrequests';
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
    const FIELD_LOCATION_ANIMALS = 'locationAnimals';
    const FIELD_LOCATIONS = 'locations';
    const FIELD_LOCATION_COLONIES = 'locationColonies';
    const FIELD_LOCATION_MEETREQUESTS = 'locationMeetrequests';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [1, 'eventID'],
        "name" => [0, 'eventName'],
        "start" => [0, 'eventStart'],
        "end" => [0, 'eventEnd'],
        "url" => [0, 'eventUrl'],
        "description" => [0, 'eventDescription'],
        "locationId" => [0, 'eventLocationID'],
        "animalAttendance" => [0, 'eventAnimalAttendance'],
        "meetrequests" => [0, 'eventMeetrequests'],
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
        "locationAnimals" => [0, 'locationAnimals'],
        "locations" => [0, 'locationEvents'],
        "locationColonies" => [0, 'locationColonies'],
        "locationMeetrequests" => [0, 'locationMeetrequests'],
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
                $output[] = new \RescueGroups\Objects\Search\Event($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Search\Event($data)];
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
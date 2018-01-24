<?php
/**
 * EventAnimalAttendance PublicSearch Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\EventAnimalAttendance;

class PublicSearch extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'eventanimalattendance';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'publicSearch';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = false;

    const FIELD_ID = 'id';
    const FIELD_STATUS = 'status';
    const FIELD_ANIMAL_ID = 'animalId';
    const FIELD_EVENT_ID = 'eventId';
    const FIELD_ANIMAL_NAME = 'animalName';
    const FIELD_ANIMAL_ORG_ID = 'animalOrgId';
    const FIELD_ANIMAL_STATUS = 'animalStatus';
    const FIELD_EVENT_NAME = 'eventName';
    const FIELD_EVENT_START = 'eventStart';
    const FIELD_EVENT_END = 'eventEnd';
    const FIELD_EVENT_URL = 'eventUrl';
    const FIELD_EVENT_DESCRIPTION = 'eventDescription';
    const FIELD_EVENT_LOCATION_ID = 'eventLocationId';
    const FIELD_EVENT_LOCATION_NAME = 'eventLocationName';
    const FIELD_EVENT_LOCATION_URL = 'eventLocationUrl';
    const FIELD_EVENT_LOCATION_ADDRESS = 'eventLocationAddress';
    const FIELD_EVENT_LOCATION_CITY = 'eventLocationCity';
    const FIELD_EVENT_LOCATION_STATE = 'eventLocationState';
    const FIELD_EVENT_LOCATION_POSTALCODE = 'eventLocationPostalcode';
    const FIELD_EVENT_LOCATION_COUNTRY = 'eventLocationCountry';
    const FIELD_EVENT_LOCATION_PHONE = 'eventLocationPhone';
    const FIELD_EVENT_LOCATION_PHONE_EXT = 'eventLocationPhoneExt';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [1, 'attendanceID'],
        "status" => [0, 'attendanceStatus'],
        "animalId" => [0, 'attendanceAnimalID'],
        "eventId" => [0, 'attendanceEventID'],
        "animalName" => [0, 'animalName'],
        "animalOrgId" => [0, 'animalOrgID'],
        "animalStatus" => [0, 'animalStatus'],
        "eventName" => [0, 'eventName'],
        "eventStart" => [0, 'eventStart'],
        "eventEnd" => [0, 'eventEnd'],
        "eventUrl" => [0, 'eventUrl'],
        "eventDescription" => [0, 'eventDescription'],
        "eventLocationId" => [0, 'eventLocationID'],
        "eventLocationName" => [0, 'eventLocationName'],
        "eventLocationUrl" => [0, 'eventLocationUrl'],
        "eventLocationAddress" => [0, 'eventLocationAddress'],
        "eventLocationCity" => [0, 'eventLocationCity'],
        "eventLocationState" => [0, 'eventLocationState'],
        "eventLocationPostalcode" => [0, 'eventLocationPostalcode'],
        "eventLocationCountry" => [0, 'eventLocationCountry'],
        "eventLocationPhone" => [0, 'eventLocationPhone'],
        "eventLocationPhoneExt" => [0, 'eventLocationPhoneExt'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\EventAnimalAttendance[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\EventAnimalAttendance($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\EventAnimalAttendance($data)];
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
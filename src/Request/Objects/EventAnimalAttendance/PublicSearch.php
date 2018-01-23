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
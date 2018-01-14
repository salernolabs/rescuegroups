<?php
/**
 * EventAnimalAttendance PublicSearch Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\EventAnimalAttendance;

class PublicSearch implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "attendanceID" => [1, 'attendanceID'],
        "attendanceStatus" => [0, 'attendanceStatus'],
        "attendanceAnimalID" => [0, 'attendanceAnimalID'],
        "attendanceEventID" => [0, 'attendanceEventID'],
        "animalName" => [0, 'animalName'],
        "animalOrgID" => [0, 'animalOrgID'],
        "animalStatus" => [0, 'animalStatus'],
        "eventName" => [0, 'eventName'],
        "eventStart" => [0, 'eventStart'],
        "eventEnd" => [0, 'eventEnd'],
        "eventUrl" => [0, 'eventUrl'],
        "eventDescription" => [0, 'eventDescription'],
        "eventLocationID" => [0, 'eventLocationID'],
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
        return 'eventanimalattendance';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'publicSearch';
    }

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
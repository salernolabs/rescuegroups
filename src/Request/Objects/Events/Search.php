<?php
/**
 * Events Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Events;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "eventID" => [1, 'eventID'],
        "eventName" => [0, 'eventName'],
        "eventStart" => [0, 'eventStart'],
        "eventEnd" => [0, 'eventEnd'],
        "eventUrl" => [0, 'eventUrl'],
        "eventDescription" => [0, 'eventDescription'],
        "eventLocationID" => [0, 'eventLocationID'],
        "eventAnimalAttendance" => [0, 'eventAnimalAttendance'],
        "eventMeetrequests" => [0, 'eventMeetrequests'],
        "eventSpecies" => [0, 'eventSpecies'],
        "locationID" => [0, 'locationID'],
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
        "locationEvents" => [0, 'locationEvents'],
        "locationColonies" => [0, 'locationColonies'],
        "locationMeetrequests" => [0, 'locationMeetrequests'],
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
        return 'events';
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
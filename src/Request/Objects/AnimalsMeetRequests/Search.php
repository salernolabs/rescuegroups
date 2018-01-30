<?php
/**
 * AnimalsMeetRequests Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsMeetRequests;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animalsMeetrequests';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'search';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    const FIELD_ID = 'id';
    const FIELD_ANIMAL_ID = 'animalId';
    const FIELD_CONTACT_ID = 'contactId';
    const FIELD_EVENT_ID = 'eventId';
    const FIELD_LOCATION_ID = 'locationId';
    const FIELD_DATE = 'date';
    const FIELD_ANIMAL_NAME = 'animalName';
    const FIELD_CONTACT_NAME = 'contactName';
    const FIELD_CONTACT_TYPE = 'contactType';
    const FIELD_EVENT_NAME = 'eventName';
    const FIELD_LOCATION_NAME = 'locationName';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [0, 'meetrequestID'],
        "animalId" => [0, 'meetrequestAnimalID'],
        "contactId" => [0, 'meetrequestContactID'],
        "eventId" => [0, 'meetrequestEventID'],
        "locationId" => [0, 'meetrequestLocationID'],
        "date" => [0, 'meetrequestDate'],
        "animalName" => [0, 'animalName'],
        "contactName" => [0, 'contactName'],
        "contactType" => [0, 'contactType'],
        "eventName" => [0, 'eventName'],
        "locationName" => [0, 'locationName'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\AnimalsMeetRequest[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\Search\AnimalsMeetRequest($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Search\AnimalsMeetRequest($data)];
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
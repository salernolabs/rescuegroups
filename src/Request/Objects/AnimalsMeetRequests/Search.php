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

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "meetrequestID" => [0, 'meetrequestID'],
        "meetrequestAnimalID" => [0, 'meetrequestAnimalID'],
        "meetrequestContactID" => [0, 'meetrequestContactID'],
        "meetrequestEventID" => [0, 'meetrequestEventID'],
        "meetrequestLocationID" => [0, 'meetrequestLocationID'],
        "meetrequestDate" => [0, 'meetrequestDate'],
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
                $output[] = new \RescueGroups\Objects\AnimalsMeetRequest($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\AnimalsMeetRequest($data)];
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
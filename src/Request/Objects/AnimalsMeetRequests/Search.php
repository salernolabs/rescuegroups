<?php
/**
 * AnimalsMeetRequests Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsMeetRequests;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

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
        return 'animalsMeetrequests';
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
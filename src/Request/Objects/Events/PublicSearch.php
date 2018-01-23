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

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "eventID" => [1, 'eventID'],
        "eventOrgID" => [0, 'eventOrgID'],
        "eventName" => [0, 'eventName'],
        "tart" => [0, 'eventStart'],
        "eventEnd" => [0, 'eventEnd'],
        "eventUrl" => [0, 'eventUrl'],
        "eventDescription" => [0, 'eventDescription'],
        "eventLocationID" => [0, 'eventLocationID'],
        "pecies" => [0, 'eventSpecies'],
        "locationName" => [0, 'locationName'],
        "locationUrl" => [0, 'locationUrl'],
        "locationAddress" => [0, 'locationAddress'],
        "locationCity" => [0, 'locationCity'],
        "locationState" => [0, 'locationState'],
        "locationPostalcode" => [0, 'locationPostalcode'],
        "locationCountry" => [0, 'locationCountry'],
        "locationPhone" => [0, 'locationPhone'],
        "locationPhoneExt" => [0, 'locationPhoneExt'],
        "location" => [0, 'locationEvents'],
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
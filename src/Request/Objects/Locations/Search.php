<?php
/**
 * Locations Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Locations;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'locations';

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
        "id" => [1, 'locationID'],
        "name" => [0, 'locationName'],
        "url" => [0, 'locationUrl'],
        "address" => [0, 'locationAddress'],
        "city" => [0, 'locationCity'],
        "state" => [0, 'locationState'],
        "postalcode" => [0, 'locationPostalcode'],
        "country" => [0, 'locationCountry'],
        "phone" => [0, 'locationPhone'],
        "phoneExt" => [0, 'locationPhoneExt'],
        "animals" => [0, 'locationAnimals'],
        "events" => [0, 'locationEvents'],
        "colonies" => [0, 'locationColonies'],
        "meetrequests" => [0, 'locationMeetrequests'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\Location[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\Location($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Location($data)];
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
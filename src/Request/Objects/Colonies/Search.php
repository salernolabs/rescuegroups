<?php
/**
 * Colonies Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Colonies;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'colonies';

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
        "colonyID" => [1, 'colonyID'],
        "colonyAnimals" => [0, 'colonyAnimals'],
        "colonyCaretakers" => [0, 'colonyCaretakers'],
        "colonyLocationID" => [0, 'colonyLocationID'],
        "colonyName" => [1, 'colonyName'],
        "colonyTotalAnimals" => [0, 'colonyTotalAnimals'],
        "colonyRegisteredDate" => [0, 'colonyRegisteredDate'],
        "colonySpecificLocation" => [0, 'colonySpecificLocation'],
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
        "location" => [0, 'locationColonies'],
        "locationMeetrequests" => [0, 'locationMeetrequests'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\Colony[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\Colony($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Colony($data)];
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
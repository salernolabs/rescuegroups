<?php
/**
 * Locations Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Locations;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "locationID" => [1, 'locationID'],
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
        return 'locations';
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
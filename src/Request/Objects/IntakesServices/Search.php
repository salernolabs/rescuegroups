<?php
/**
 * IntakesServices Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesServices;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'intakesServices';

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
        "intakesServiceID" => [0, 'intakesServiceID'],
        "intakesServiceAnimalID" => [0, 'intakesServiceAnimalID'],
        "intakesServiceAnimalConditionID" => [0, 'intakesServiceAnimalConditionID'],
        "intakesServiceDate" => [0, 'intakesServiceDate'],
        "intakesServiceNotes" => [0, 'intakesServiceNotes'],
        "intakesServiceOwnerID" => [0, 'intakesServiceOwnerID'],
        "intakesServiceServicetypeID" => [0, 'intakesServiceServicetypeID'],
        "animalName" => [0, 'animalName'],
        "animalConditionName" => [0, 'animalConditionName'],
        "ownerName" => [0, 'ownerName'],
        "serviceName" => [0, 'serviceName'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\IntakesService[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\IntakesService($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\IntakesService($data)];
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
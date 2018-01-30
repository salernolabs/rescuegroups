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

    const FIELD_ID = 'id';
    const FIELD_ANIMAL_ID = 'animalId';
    const FIELD_ANIMAL_CONDITION_ID = 'animalConditionId';
    const FIELD_DATE = 'date';
    const FIELD_NOTES = 'notes';
    const FIELD_OWNER_ID = 'ownerId';
    const FIELD_SERVICETYPE_ID = 'servicetypeId';
    const FIELD_ANIMAL_NAME = 'animalName';
    const FIELD_ANIMAL_CONDITION_NAME = 'animalConditionName';
    const FIELD_OWNER_NAME = 'ownerName';
    const FIELD_SERVICE_NAME = 'serviceName';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [0, 'intakesServiceID'],
        "animalId" => [0, 'intakesServiceAnimalID'],
        "animalConditionId" => [0, 'intakesServiceAnimalConditionID'],
        "date" => [0, 'intakesServiceDate'],
        "notes" => [0, 'intakesServiceNotes'],
        "ownerId" => [0, 'intakesServiceOwnerID'],
        "servicetypeId" => [0, 'intakesServiceServicetypeID'],
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
                $output[] = new \RescueGroups\Objects\Search\IntakesService($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Search\IntakesService($data)];
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
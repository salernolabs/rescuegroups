<?php
/**
 * OutcomesReleases Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\OutcomesReleases;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'outcomesReleases';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'search';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    const FIELD_ID = 'id';
    const FIELD_INTAKE_ID = 'intakeId';
    const FIELD_ANIMAL_CONDITION_ID = 'animalConditionId';
    const FIELD_DATE = 'date';
    const FIELD_NOTES = 'notes';
    const FIELD_LOCATION = 'location';
    const FIELD_ADDRESS = 'address';
    const FIELD_CITY = 'city';
    const FIELD_STATE = 'state';
    const FIELD_POSTALCODE = 'postalcode';
    const FIELD_BY_ID = 'byId';
    const FIELD_ANIMAL_ID = 'animalId';
    const FIELD_ANIMAL_NAME = 'animalName';
    const FIELD_ANIMAL_CONDITION_NAME = 'animalConditionName';
    const FIELD_RELEASE_BY_NAME = 'releaseByName';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [1, 'outcomesReleaseID'],
        "intakeId" => [0, 'outcomesReleaseIntakeID'],
        "animalConditionId" => [0, 'outcomesReleaseAnimalConditionID'],
        "date" => [0, 'outcomesReleaseDate'],
        "notes" => [0, 'outcomesReleaseNotes'],
        "location" => [0, 'outcomesReleaseLocation'],
        "address" => [0, 'outcomesReleaseAddress'],
        "city" => [0, 'outcomesReleaseCity'],
        "state" => [0, 'outcomesReleaseState'],
        "postalcode" => [0, 'outcomesReleasePostalcode'],
        "byId" => [0, 'outcomesReleaseByID'],
        "animalId" => [0, 'animalID'],
        "animalName" => [0, 'animalName'],
        "animalConditionName" => [0, 'animalConditionName'],
        "releaseByName" => [0, 'releaseByName'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\OutcomesReleas[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\Search\OutcomesReleas($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Search\OutcomesReleas($data)];
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
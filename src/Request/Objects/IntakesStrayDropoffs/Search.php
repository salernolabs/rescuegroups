<?php
/**
 * IntakesStrayDropoffs Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesStrayDropoffs;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'intakesStraydropoffs';

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
    const FIELD_FOUND_LOCATION = 'foundLocation';
    const FIELD_FOUND_ADDRESS = 'foundAddress';
    const FIELD_FOUND_CITY = 'foundCity';
    const FIELD_FOUND_STATE = 'foundState';
    const FIELD_FOUND_POSTALCODE = 'foundPostalcode';
    const FIELD_FINDER_ID = 'finderId';
    const FIELD_ANIMAL_NAME = 'animalName';
    const FIELD_ANIMAL_CONDITION_NAME = 'animalConditionName';
    const FIELD_FINDER_NAME = 'finderName';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [0, 'intakesStraydropoffID'],
        "animalId" => [0, 'intakesStraydropoffAnimalID'],
        "animalConditionId" => [0, 'intakesStraydropoffAnimalConditionID'],
        "date" => [0, 'intakesStraydropoffDate'],
        "notes" => [0, 'intakesStraydropoffNotes'],
        "foundLocation" => [0, 'intakesStraydropoffFoundLocation'],
        "foundAddress" => [0, 'intakesStraydropoffFoundAddress'],
        "foundCity" => [0, 'intakesStraydropoffFoundCity'],
        "foundState" => [0, 'intakesStraydropoffFoundState'],
        "foundPostalcode" => [0, 'intakesStraydropoffFoundPostalcode'],
        "finderId" => [0, 'intakesStraydropoffFinderID'],
        "animalName" => [0, 'animalName'],
        "animalConditionName" => [0, 'animalConditionName'],
        "finderName" => [0, 'finderName'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\IntakesStrayDropoff[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\IntakesStrayDropoff($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\IntakesStrayDropoff($data)];
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
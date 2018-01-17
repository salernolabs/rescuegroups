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

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "intakesStraydropoffID" => [0, 'intakesStraydropoffID'],
        "intakesStraydropoffAnimalID" => [0, 'intakesStraydropoffAnimalID'],
        "intakesStraydropoffAnimalConditionID" => [0, 'intakesStraydropoffAnimalConditionID'],
        "intakesStraydropoffDate" => [0, 'intakesStraydropoffDate'],
        "intakesStraydropoffNotes" => [0, 'intakesStraydropoffNotes'],
        "intakesStraydropoffFoundLocation" => [0, 'intakesStraydropoffFoundLocation'],
        "intakesStraydropoffFoundAddress" => [0, 'intakesStraydropoffFoundAddress'],
        "intakesStraydropoffFoundCity" => [0, 'intakesStraydropoffFoundCity'],
        "intakesStraydropoffFoundState" => [0, 'intakesStraydropoffFoundState'],
        "intakesStraydropoffFoundPostalcode" => [0, 'intakesStraydropoffFoundPostalcode'],
        "intakesStraydropoffFinderID" => [0, 'intakesStraydropoffFinderID'],
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
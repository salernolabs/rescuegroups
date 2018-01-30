<?php
/**
 * IntakesBornInRescueShelter Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesBornInRescueShelter;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'intakesBorninrescueshelter';

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
    const FIELD_ANIMAL_NAME = 'animalName';
    const FIELD_ANIMAL_CONDITION_NAME = 'animalConditionName';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [0, 'intakesBorninrescueshelterID'],
        "animalId" => [0, 'intakesBorninrescueshelterAnimalID'],
        "animalConditionId" => [0, 'intakesBorninrescueshelterAnimalConditionID'],
        "date" => [0, 'intakesBorninrescueshelterDate'],
        "notes" => [0, 'intakesBorninrescueshelterNotes'],
        "animalName" => [0, 'animalName'],
        "animalConditionName" => [0, 'animalConditionName'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\IntakesBornInRescueShelter[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\Search\IntakesBornInRescueShelter($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Search\IntakesBornInRescueShelter($data)];
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
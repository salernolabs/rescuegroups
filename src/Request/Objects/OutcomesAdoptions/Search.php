<?php
/**
 * OutcomesAdoptions Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\OutcomesAdoptions;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'outcomesAdoptions';

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
    const FIELD_ADOPTION_ID = 'adoptionId';
    const FIELD_ANIMAL_ID = 'animalId';
    const FIELD_ANIMAL_NAME = 'animalName';
    const FIELD_ANIMAL_CONDITION_NAME = 'animalConditionName';
    const FIELD_ADOPTER_CONTACT_ID = 'adopterContactId';
    const FIELD_OWNER_NAME = 'ownerName';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [1, 'outcomesAdoptionID'],
        "intakeId" => [0, 'outcomesAdoptionIntakeID'],
        "animalConditionId" => [0, 'outcomesAdoptionAnimalConditionID'],
        "date" => [0, 'outcomesAdoptionDate'],
        "notes" => [0, 'outcomesAdoptionNotes'],
        "adoptionId" => [0, 'outcomesAdoptionAdoptionID'],
        "animalId" => [0, 'animalID'],
        "animalName" => [0, 'animalName'],
        "animalConditionName" => [0, 'animalConditionName'],
        "adopterContactId" => [0, 'adopterContactID'],
        "ownerName" => [0, 'ownerName'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\OutcomesAdoption[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\Search\OutcomesAdoption($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Search\OutcomesAdoption($data)];
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
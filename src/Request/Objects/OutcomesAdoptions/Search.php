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

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "outcomesAdoptionID" => [1, 'outcomesAdoptionID'],
        "outcomesAdoptionIntakeID" => [0, 'outcomesAdoptionIntakeID'],
        "outcomesAdoptionAnimalConditionID" => [0, 'outcomesAdoptionAnimalConditionID'],
        "outcomesAdoptionDate" => [0, 'outcomesAdoptionDate'],
        "outcomesAdoptionNotes" => [0, 'outcomesAdoptionNotes'],
        "outcomesAdoptionAdoptionID" => [0, 'outcomesAdoptionAdoptionID'],
        "animalID" => [0, 'animalID'],
        "animalName" => [0, 'animalName'],
        "animalConditionName" => [0, 'animalConditionName'],
        "adopterContactID" => [0, 'adopterContactID'],
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
                $output[] = new \RescueGroups\Objects\OutcomesAdoption($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\OutcomesAdoption($data)];
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
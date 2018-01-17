<?php
/**
 * OutcomesEuthanasias Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\OutcomesEuthanasias;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'outcomesEuthanasias';

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
        "outcomesEuthanasiaID" => [1, 'outcomesEuthanasiaID'],
        "outcomesEuthanasiaIntakeID" => [0, 'outcomesEuthanasiaIntakeID'],
        "outcomesEuthanasiaAnimalConditionID" => [0, 'outcomesEuthanasiaAnimalConditionID'],
        "outcomesEuthanasiaDate" => [0, 'outcomesEuthanasiaDate'],
        "outcomesEuthanasiaNotes" => [0, 'outcomesEuthanasiaNotes'],
        "outcomesEuthanasiaReasonID" => [0, 'outcomesEuthanasiaReasonID'],
        "outcomesEuthanasiaReason" => [0, 'outcomesEuthanasiaReason'],
        "animalID" => [0, 'animalID'],
        "animalName" => [0, 'animalName'],
        "animalConditionName" => [0, 'animalConditionName'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\OutcomesEuthanasia[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\OutcomesEuthanasia($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\OutcomesEuthanasia($data)];
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
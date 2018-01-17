<?php
/**
 * IntakesOwnerRequestedEuthanasias Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesOwnerRequestedEuthanasias;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'intakesOwnerrequestedeuthanasias';

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
        "intakesOwnerrequestedeuthanasiaID" => [0, 'intakesOwnerrequestedeuthanasiaID'],
        "intakesOwnerrequestedeuthanasiaAnimalID" => [0, 'intakesOwnerrequestedeuthanasiaAnimalID'],
        "intakesOwnerrequestedeuthanasiaAnimalConditionID" => [0, 'intakesOwnerrequestedeuthanasiaAnimalConditionID'],
        "intakesOwnerrequestedeuthanasiaDate" => [0, 'intakesOwnerrequestedeuthanasiaDate'],
        "intakesOwnerrequestedeuthanasiaNotes" => [0, 'intakesOwnerrequestedeuthanasiaNotes'],
        "intakesOwnerrequestedeuthanasiaOwnerID" => [0, 'intakesOwnerrequestedeuthanasiaOwnerID'],
        "intakesOwnerrequestedeuthanasiaReasonID" => [0, 'intakesOwnerrequestedeuthanasiaReasonID'],
        "animalName" => [0, 'animalName'],
        "animalConditionName" => [0, 'animalConditionName'],
        "ownerName" => [0, 'ownerName'],
        "euthanasiaReason" => [0, 'euthanasiaReason'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\IntakesOwnerRequestedEuthanasia[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\IntakesOwnerRequestedEuthanasia($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\IntakesOwnerRequestedEuthanasia($data)];
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
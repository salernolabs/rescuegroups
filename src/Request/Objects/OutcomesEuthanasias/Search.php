<?php
/**
 * OutcomesEuthanasias Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\OutcomesEuthanasias;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

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
     * @return bool
     */
    public function loginRequired()
    {
        return true;
    }

    /**
     * Return the object type
     *
     * @return string
     */
    public function getObjectType()
    {
        return 'outcomesEuthanasias';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'search';
    }

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
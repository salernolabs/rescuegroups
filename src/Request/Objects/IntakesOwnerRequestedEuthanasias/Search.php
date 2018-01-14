<?php
/**
 * IntakesOwnerRequestedEuthanasias Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesOwnerRequestedEuthanasias;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

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
        return 'intakesOwnerrequestedeuthanasias';
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
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
        "intakesOwnerrequestedeuthanasiaID" => 0,
        "intakesOwnerrequestedeuthanasiaAnimalID" => 0,
        "intakesOwnerrequestedeuthanasiaAnimalConditionID" => 0,
        "intakesOwnerrequestedeuthanasiaDate" => 0,
        "intakesOwnerrequestedeuthanasiaNotes" => 0,
        "intakesOwnerrequestedeuthanasiaOwnerID" => 0,
        "intakesOwnerrequestedeuthanasiaReasonID" => 0,
        "animalName" => 0,
        "animalConditionName" => 0,
        "ownerName" => 0,
        "euthanasiaReason" => 0,
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
<?php
/**
 * OutcomesAdoptions Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\OutcomesAdoptions;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

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
        return 'outcomesAdoptions';
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
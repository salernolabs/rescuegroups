<?php
/**
 * OutcomesDeceased Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\OutcomesDeceased;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [1, 'outcomesDeceasedID'],
        "intakeID" => [0, 'outcomesDeceasedIntakeID'],
        "animalConditionID" => [0, 'outcomesDeceasedAnimalConditionID'],
        "date" => [0, 'outcomesDeceasedDate'],
        "notes" => [0, 'outcomesDeceasedNotes'],
        "reason" => [0, 'outcomesDeceasedReason'],
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
        return 'outcomesDeceased';
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
     * @returns \RescueGroups\Objects\OutcomesDeceased[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\OutcomesDeceased($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\OutcomesDeceased($data)];
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
<?php
/**
 * Outcomes Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Outcomes;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "outcomeID" => [0, 'outcomeID'],
        "outcomeAnimalConditionID" => [0, 'outcomeAnimalConditionID'],
        "outcomeType" => [0, 'outcomeType'],
        "outcomeDate" => [0, 'outcomeDate'],
        "outcomeNotes" => [0, 'outcomeNotes'],
        "intakeID" => [0, 'intakeID'],
        "intakeAnimalID" => [0, 'intakeAnimalID'],
        "animalName" => [0, 'animalName'],
        "outcomeAnimalConditionName" => [0, 'outcomeAnimalConditionName'],
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
        return 'outcomes';
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
     * @returns \RescueGroups\Objects\Outcome[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\Outcome($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Outcome($data)];
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
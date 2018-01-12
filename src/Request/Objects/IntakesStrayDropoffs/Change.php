<?php
/**
 * IntakesStrayDropoffs Change Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesStrayDropoffs;

class Change implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "intakeID" => 1,
        "intakesStraydropoffAnimalID" => 0,
        "intakesStraydropoffAnimalConditionID" => 1,
        "intakesStraydropoffDate" => 1,
        "intakesStraydropoffNotes" => 0,
        "intakesStraydropoffFoundLocation" => 0,
        "intakesStraydropoffFoundAddress" => 0,
        "intakesStraydropoffFoundCity" => 0,
        "intakesStraydropoffFoundState" => 0,
        "intakesStraydropoffFoundPostalcode" => 0,
        "intakesStraydropoffFinderID" => 1,
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
        return 'intakesStraydropoffs';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'change';
    }

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\IntakesStrayDropoff[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\IntakesStrayDropoff($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\IntakesStrayDropoff($data)];
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
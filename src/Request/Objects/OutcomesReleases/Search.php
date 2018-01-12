<?php
/**
 * OutcomesReleases Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\OutcomesReleases;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "outcomesReleaseID" => 1,
        "outcomesReleaseIntakeID" => 0,
        "outcomesReleaseAnimalConditionID" => 0,
        "outcomesReleaseDate" => 0,
        "outcomesReleaseNotes" => 0,
        "outcomesReleaseLocation" => 0,
        "outcomesReleaseAddress" => 0,
        "outcomesReleaseCity" => 0,
        "outcomesReleaseState" => 0,
        "outcomesReleasePostalcode" => 0,
        "outcomesReleaseByID" => 0,
        "animalID" => 0,
        "animalName" => 0,
        "animalConditionName" => 0,
        "releaseByName" => 0,
    ];


    /**
     * @return bool
     */
    public function loginRequired()
    {
        return false;
    }

    /**
     * Return the object type
     *
     * @return string
     */
    public function getObjectType()
    {
        return 'outcomesReleases';
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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {

        $this->addSearchParameters($parameterArray);

    }

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Response\Objects\OutcomesReleas[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Response\Objects\OutcomesReleas($object);
            }

            return $output;
        }

        return [new \RescueGroups\Response\Objects\OutcomesReleas($data)];
    }

}
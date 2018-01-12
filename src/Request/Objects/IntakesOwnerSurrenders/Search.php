<?php
/**
 * IntakesOwnerSurrenders Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesOwnerSurrenders;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "intakesOwnersurrenderID" => 0,
        "intakesOwnersurrenderAnimalID" => 0,
        "intakesOwnersurrenderAnimalConditionID" => 0,
        "intakesOwnersurrenderDate" => 0,
        "intakesOwnersurrenderNotes" => 0,
        "intakesOwnersurrenderOwnerID" => 0,
        "intakesOwnersurrenderReasonID" => 0,
        "animalName" => 0,
        "animalConditionName" => 0,
        "ownerName" => 0,
        "surrenderReason" => 0,
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
        return 'intakesOwnersurrenders';
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
     * @returns \RescueGroups\Objects\IntakesOwnerSurrender[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\IntakesOwnerSurrender($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\IntakesOwnerSurrender($data)];
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
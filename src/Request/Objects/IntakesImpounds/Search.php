<?php
/**
 * IntakesImpounds Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesImpounds;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'intakesImpounds';

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
        "intakesImpoundID" => [0, 'intakesImpoundID'],
        "intakesImpoundAnimalID" => [0, 'intakesImpoundAnimalID'],
        "intakesImpoundAnimalConditionID" => [0, 'intakesImpoundAnimalConditionID'],
        "intakesImpoundDate" => [0, 'intakesImpoundDate'],
        "intakesImpoundNotes" => [0, 'intakesImpoundNotes'],
        "intakesImpoundLocation" => [0, 'intakesImpoundLocation'],
        "intakesImpoundAddress" => [0, 'intakesImpoundAddress'],
        "intakesImpoundCity" => [0, 'intakesImpoundCity'],
        "intakesImpoundState" => [0, 'intakesImpoundState'],
        "intakesImpoundPostalcode" => [0, 'intakesImpoundPostalcode'],
        "intakesImpoundFromID" => [0, 'intakesImpoundFromID'],
        "intakesImpoundStaffID" => [0, 'intakesImpoundStaffID'],
        "intakesImpoundReasonID" => [0, 'intakesImpoundReasonID'],
        "animalName" => [0, 'animalName'],
        "animalConditionName" => [0, 'animalConditionName'],
        "impoundFromName" => [0, 'impoundFromName'],
        "impoundStaffName" => [0, 'impoundStaffName'],
        "impoundReason" => [0, 'impoundReason'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\IntakesImpound[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\IntakesImpound($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\IntakesImpound($data)];
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
<?php
/**
 * AnimalsAdoptions Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsAdoptions;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animalsAdoptions';

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
        "adoptionID" => [0, 'adoptionID'],
        "adoptionAnimalID" => [0, 'adoptionAnimalID'],
        "adoptionAdopterID" => [0, 'adoptionAdopterID'],
        "adoptionLeadID" => [0, 'adoptionLeadID'],
        "adoptionLead" => [0, 'adoptionLead'],
        "adoptionFeeAmount" => [0, 'adoptionFeeAmount'],
        "adoptionDonationAmount" => [0, 'adoptionDonationAmount'],
        "adoptionDonationID" => [0, 'adoptionDonationID'],
        "adoptionDate" => [0, 'adoptionDate'],
        "adoptionStatusID" => [0, 'adoptionStatusID'],
        "adoptionStatus" => [0, 'adoptionStatus'],
        "adoptionLetterSent" => [0, 'adoptionLetterSent'],
        "adoptionSubmittedformID" => [0, 'adoptionSubmittedformID'],
        "animalCost" => [0, 'animalCost'],
        "animalName" => [0, 'animalName'],
        "animalFosterID" => [0, 'animalFosterID'],
        "animalFosterName" => [0, 'animalFosterName'],
        "adopterName" => [0, 'adopterName'],
        "adopterType" => [0, 'adopterType'],
        "submitterName" => [0, 'submitterName'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\AnimalsAdoption[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\AnimalsAdoption($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\AnimalsAdoption($data)];
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
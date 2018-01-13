<?php
/**
 * AnimalsAdoptions Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsAdoptions;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "adoptionID" => 0,
        "adoptionAnimalID" => 0,
        "adoptionAdopterID" => 0,
        "adoptionLeadID" => 0,
        "adoptionLead" => 0,
        "adoptionFeeAmount" => 0,
        "adoptionDonationAmount" => 0,
        "adoptionDonationID" => 0,
        "adoptionDate" => 0,
        "adoptionStatusID" => 0,
        "adoptionStatus" => 0,
        "adoptionLetterSent" => 0,
        "adoptionSubmittedformID" => 0,
        "animalCost" => 0,
        "animalName" => 0,
        "animalFosterID" => 0,
        "animalFosterName" => 0,
        "adopterName" => 0,
        "adopterType" => 0,
        "submitterName" => 0,
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
        return 'animalsAdoptions';
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
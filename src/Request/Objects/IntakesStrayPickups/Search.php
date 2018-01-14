<?php
/**
 * IntakesStrayPickups Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesStrayPickups;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "intakesStraypickupID" => [0, 'intakesStraypickupID'],
        "intakesStraypickupAnimalID" => [0, 'intakesStraypickupAnimalID'],
        "intakesStraypickupAnimalConditionID" => [0, 'intakesStraypickupAnimalConditionID'],
        "intakesStraypickupDate" => [0, 'intakesStraypickupDate'],
        "intakesStraypickupNotes" => [0, 'intakesStraypickupNotes'],
        "intakesStraypickupLocation" => [0, 'intakesStraypickupLocation'],
        "intakesStraypickupAddress" => [0, 'intakesStraypickupAddress'],
        "intakesStraypickupCity" => [0, 'intakesStraypickupCity'],
        "intakesStraypickupState" => [0, 'intakesStraypickupState'],
        "intakesStraypickupPostalcode" => [0, 'intakesStraypickupPostalcode'],
        "intakesStraypickupFinderID" => [0, 'intakesStraypickupFinderID'],
        "intakesStraypickupStaffID" => [0, 'intakesStraypickupStaffID'],
        "animalName" => [0, 'animalName'],
        "animalConditionName" => [0, 'animalConditionName'],
        "finderName" => [0, 'finderName'],
        "pickupstaffName" => [0, 'pickupstaffName'],
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
        return 'intakesStraypickups';
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
     * @returns \RescueGroups\Objects\IntakesStrayPickup[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\IntakesStrayPickup($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\IntakesStrayPickup($data)];
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
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

    const FIELD_ID = 'id';
    const FIELD_ANIMAL_ID = 'animalId';
    const FIELD_ANIMAL_CONDITION_ID = 'animalConditionId';
    const FIELD_DATE = 'date';
    const FIELD_NOTES = 'notes';
    const FIELD_LOCATION = 'location';
    const FIELD_ADDRESS = 'address';
    const FIELD_CITY = 'city';
    const FIELD_STATE = 'state';
    const FIELD_POSTALCODE = 'postalcode';
    const FIELD_FROM_ID = 'fromId';
    const FIELD_STAFF_ID = 'staffId';
    const FIELD_REASON_ID = 'reasonId';
    const FIELD_ANIMAL_NAME = 'animalName';
    const FIELD_ANIMAL_CONDITION_NAME = 'animalConditionName';
    const FIELD_IMPOUND_FROM_NAME = 'impoundFromName';
    const FIELD_IMPOUND_STAFF_NAME = 'impoundStaffName';
    const FIELD_IMPOUND_REASON = 'impoundReason';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [0, 'intakesImpoundID'],
        "animalId" => [0, 'intakesImpoundAnimalID'],
        "animalConditionId" => [0, 'intakesImpoundAnimalConditionID'],
        "date" => [0, 'intakesImpoundDate'],
        "notes" => [0, 'intakesImpoundNotes'],
        "location" => [0, 'intakesImpoundLocation'],
        "address" => [0, 'intakesImpoundAddress'],
        "city" => [0, 'intakesImpoundCity'],
        "state" => [0, 'intakesImpoundState'],
        "postalcode" => [0, 'intakesImpoundPostalcode'],
        "fromId" => [0, 'intakesImpoundFromID'],
        "staffId" => [0, 'intakesImpoundStaffID'],
        "reasonId" => [0, 'intakesImpoundReasonID'],
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
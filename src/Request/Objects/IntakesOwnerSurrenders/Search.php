<?php
/**
 * IntakesOwnerSurrenders Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesOwnerSurrenders;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'intakesOwnersurrenders';

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
    const FIELD_OWNER_ID = 'ownerId';
    const FIELD_REASON_ID = 'reasonId';
    const FIELD_ANIMAL_NAME = 'animalName';
    const FIELD_ANIMAL_CONDITION_NAME = 'animalConditionName';
    const FIELD_OWNER_NAME = 'ownerName';
    const FIELD_SURRENDER_REASON = 'surrenderReason';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [0, 'intakesOwnersurrenderID'],
        "animalId" => [0, 'intakesOwnersurrenderAnimalID'],
        "animalConditionId" => [0, 'intakesOwnersurrenderAnimalConditionID'],
        "date" => [0, 'intakesOwnersurrenderDate'],
        "notes" => [0, 'intakesOwnersurrenderNotes'],
        "ownerId" => [0, 'intakesOwnersurrenderOwnerID'],
        "reasonId" => [0, 'intakesOwnersurrenderReasonID'],
        "animalName" => [0, 'animalName'],
        "animalConditionName" => [0, 'animalConditionName'],
        "ownerName" => [0, 'ownerName'],
        "surrenderReason" => [0, 'surrenderReason'],
    ];

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
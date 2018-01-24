<?php
/**
 * IntakesTransfers Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesTransfers;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'intakesTransfers';

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
    const FIELD_FROM_ID = 'fromId';
    const FIELD_COALITION_MEMBER = 'coalitionMember';
    const FIELD_REASON_ID = 'reasonId';
    const FIELD_ANIMAL_NAME = 'animalName';
    const FIELD_ANIMAL_CONDITION_NAME = 'animalConditionName';
    const FIELD_TRANSFER_FROM_NAME = 'transferFromName';
    const FIELD_TRANSFER_REASON = 'transferReason';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [0, 'intakesTransferID'],
        "animalId" => [0, 'intakesTransferAnimalID'],
        "animalConditionId" => [0, 'intakesTransferAnimalConditionID'],
        "date" => [0, 'intakesTransferDate'],
        "notes" => [0, 'intakesTransferNotes'],
        "fromId" => [0, 'intakesTransferFromID'],
        "coalitionMember" => [0, 'intakesTransferCoalitionMember'],
        "reasonId" => [0, 'intakesTransferReasonID'],
        "animalName" => [0, 'animalName'],
        "animalConditionName" => [0, 'animalConditionName'],
        "transferFromName" => [0, 'transferFromName'],
        "transferReason" => [0, 'transferReason'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\IntakesTransfer[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\IntakesTransfer($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\IntakesTransfer($data)];
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
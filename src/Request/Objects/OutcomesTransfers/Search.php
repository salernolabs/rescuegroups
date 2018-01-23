<?php
/**
 * OutcomesTransfers Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\OutcomesTransfers;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'outcomesTransfers';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'search';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    const FIELD_ID = 'id';
    const FIELD_INTAKE_ID = 'intakeId';
    const FIELD_ANIMAL_CONDITION_ID = 'animalConditionId';
    const FIELD_DATE = 'date';
    const FIELD_NOTES = 'notes';
    const FIELD_RECEIVE_ID = 'receiveId';
    const FIELD_COALITION_MEMBER = 'coalitionMember';
    const FIELD_REASON_ID = 'reasonId';
    const FIELD_REASON = 'reason';
    const FIELD_ANIMAL_ID = 'animalId';
    const FIELD_ANIMAL_NAME = 'animalName';
    const FIELD_ANIMAL_CONDITION_NAME = 'animalConditionName';
    const FIELD_RECEIVE_NAME = 'receiveName';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [1, 'outcomesTransferID'],
        "intakeId" => [0, 'outcomesTransferIntakeID'],
        "animalConditionId" => [0, 'outcomesTransferAnimalConditionID'],
        "date" => [0, 'outcomesTransferDate'],
        "notes" => [0, 'outcomesTransferNotes'],
        "receiveId" => [0, 'outcomesTransferReceiveID'],
        "coalitionMember" => [0, 'outcomesTransferCoalitionMember'],
        "reasonId" => [0, 'outcomesTransferReasonID'],
        "reason" => [0, 'outcomesTransferReason'],
        "animalId" => [0, 'animalID'],
        "animalName" => [0, 'animalName'],
        "animalConditionName" => [0, 'animalConditionName'],
        "receiveName" => [0, 'receiveName'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\OutcomesTransfer[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\OutcomesTransfer($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\OutcomesTransfer($data)];
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
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
    \RescueGroups\Request\ObjectActionInterface,
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

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "intakesTransferID" => [0, 'intakesTransferID'],
        "intakesTransferAnimalID" => [0, 'intakesTransferAnimalID'],
        "intakesTransferAnimalConditionID" => [0, 'intakesTransferAnimalConditionID'],
        "intakesTransferDate" => [0, 'intakesTransferDate'],
        "intakesTransferNotes" => [0, 'intakesTransferNotes'],
        "intakesTransferFromID" => [0, 'intakesTransferFromID'],
        "intakesTransferCoalitionMember" => [0, 'intakesTransferCoalitionMember'],
        "intakesTransferReasonID" => [0, 'intakesTransferReasonID'],
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
<?php
/**
 * OutcomesTransfers Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\OutcomesTransfers;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "outcomesTransferID" => [1, 'outcomesTransferID'],
        "outcomesTransferIntakeID" => [0, 'outcomesTransferIntakeID'],
        "outcomesTransferAnimalConditionID" => [0, 'outcomesTransferAnimalConditionID'],
        "outcomesTransferDate" => [0, 'outcomesTransferDate'],
        "outcomesTransferNotes" => [0, 'outcomesTransferNotes'],
        "outcomesTransferReceiveID" => [0, 'outcomesTransferReceiveID'],
        "outcomesTransferCoalitionMember" => [0, 'outcomesTransferCoalitionMember'],
        "outcomesTransferReasonID" => [0, 'outcomesTransferReasonID'],
        "outcomesTransferReason" => [0, 'outcomesTransferReason'],
        "animalID" => [0, 'animalID'],
        "animalName" => [0, 'animalName'],
        "animalConditionName" => [0, 'animalConditionName'],
        "receiveName" => [0, 'receiveName'],
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
        return 'outcomesTransfers';
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
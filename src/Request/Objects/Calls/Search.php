<?php
/**
 * Calls Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Calls;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'calls';

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
        "id" => [1, 'callID'],
        "contactId" => [0, 'callContactID'],
        "assignedId" => [0, 'callAssignedID'],
        "statusId" => [0, 'callStatusID'],
        "urgencyId" => [0, 'callUrgencyID'],
        "categoryId" => [0, 'callCategoryID'],
        "queueId" => [0, 'callQueueID'],
        "date" => [0, 'callDate'],
        "contactName" => [0, 'contactName'],
        "contactType" => [0, 'contactType'],
        "assignedName" => [0, 'assignedName'],
        "queueName" => [0, 'queueName'],
        "categoryName" => [0, 'categoryName'],
        "statusName" => [0, 'statusName'],
        "urgencyName" => [0, 'urgencyName'],
        "lastOutcome" => [0, 'lastOutcome'],
        "logEntryCount" => [0, 'logEntryCount'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\Call[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\Call($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Call($data)];
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
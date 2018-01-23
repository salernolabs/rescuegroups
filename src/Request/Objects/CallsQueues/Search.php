<?php
/**
 * CallsQueues Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\CallsQueues;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'callsQueues';

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
        "id" => [1, 'queueID'],
        "name" => [0, 'queueName'],
        "fromEmail" => [0, 'queueFromEmail'],
        "defaultUrgencyId" => [0, 'queueDefaultUrgencyID'],
        "defaultUrgencyName" => [0, 'queueDefaultUrgencyName'],
        "createdDate" => [0, 'queueCreatedDate'],
        "createdById" => [0, 'queueCreatedByID'],
        "updatedDate" => [0, 'queueUpdatedDate'],
        "updatedById" => [0, 'queueUpdatedByID'],
        "openCallsCount" => [0, 'queueOpenCallsCount'],
        "membersCount" => [0, 'queueMembersCount'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\CallsQueue[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\CallsQueue($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\CallsQueue($data)];
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
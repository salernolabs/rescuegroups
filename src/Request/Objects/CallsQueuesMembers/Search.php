<?php
/**
 * CallsQueuesMembers Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\CallsQueuesMembers;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'callsQueuesMembers';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'search';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    const FIELD_ID = 'id';
    const FIELD_CONTACT_ID = 'contactId';
    const FIELD_QUEUE_ID = 'queueId';
    const FIELD_MANAGER = 'manager';
    const FIELD_CREATED_DATE = 'createdDate';
    const FIELD_CREATED_BY_ID = 'createdById';
    const FIELD_UPDATED_DATE = 'updatedDate';
    const FIELD_UPDATED_BY_ID = 'updatedById';
    const FIELD_QUEUE_NAME = 'queueName';
    const FIELD_NAME = 'name';
    const FIELD_CONTACT_TYPE = 'contactType';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [1, 'memberID'],
        "contactId" => [0, 'memberContactID'],
        "queueId" => [0, 'memberQueueID'],
        "manager" => [0, 'memberManager'],
        "createdDate" => [0, 'memberCreatedDate'],
        "createdById" => [0, 'memberCreatedByID'],
        "updatedDate" => [0, 'memberUpdatedDate'],
        "updatedById" => [0, 'memberUpdatedByID'],
        "queueName" => [0, 'queueName'],
        "name" => [0, 'memberName'],
        "contactType" => [0, 'memberContactType'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\CallsQueuesMember[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\CallsQueuesMember($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\CallsQueuesMember($data)];
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
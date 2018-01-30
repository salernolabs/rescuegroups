<?php
/**
 * CallsCategories Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\CallsCategories;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'callsCategories';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'search';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    const FIELD_ID = 'id';
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_PUBLIC = 'public';
    const FIELD_DEFAULT_QUEUE_ID = 'defaultQueueId';
    const FIELD_DEFAULT_QUEUE_NAME = 'defaultQueueName';
    const FIELD_CREATED_DATE = 'createdDate';
    const FIELD_CREATED_BY_ID = 'createdById';
    const FIELD_UPDATED_DATE = 'updatedDate';
    const FIELD_UPDATED_BY_ID = 'updatedById';
    const FIELD_CALLS_COUNT = 'callsCount';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [1, 'categoryID'],
        "name" => [0, 'categoryName'],
        "description" => [0, 'categoryDescription'],
        "public" => [0, 'categoryPublic'],
        "defaultQueueId" => [0, 'categoryDefaultQueueID'],
        "defaultQueueName" => [0, 'categoryDefaultQueueName'],
        "createdDate" => [0, 'categoryCreatedDate'],
        "createdById" => [0, 'categoryCreatedByID'],
        "updatedDate" => [0, 'categoryUpdatedDate'],
        "updatedById" => [0, 'categoryUpdatedByID'],
        "callsCount" => [0, 'categoryCallsCount'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\CallsCategory[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\Search\CallsCategory($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Search\CallsCategory($data)];
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
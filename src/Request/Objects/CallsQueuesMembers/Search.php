<?php
/**
 * CallsQueuesMembers Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\CallsQueuesMembers;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "memberID" => [1, 'memberID'],
        "memberContactID" => [0, 'memberContactID'],
        "memberQueueID" => [0, 'memberQueueID'],
        "memberManager" => [0, 'memberManager'],
        "memberCreatedDate" => [0, 'memberCreatedDate'],
        "memberCreatedByID" => [0, 'memberCreatedByID'],
        "memberUpdatedDate" => [0, 'memberUpdatedDate'],
        "memberUpdatedByID" => [0, 'memberUpdatedByID'],
        "queueName" => [0, 'queueName'],
        "memberName" => [0, 'memberName'],
        "memberContactType" => [0, 'memberContactType'],
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
        return 'callsQueuesMembers';
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
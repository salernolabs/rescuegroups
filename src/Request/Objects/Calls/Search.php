<?php
/**
 * Calls Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Calls;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "callID" => [1, 'callID'],
        "callContactID" => [0, 'callContactID'],
        "callAssignedID" => [0, 'callAssignedID'],
        "callStatusID" => [0, 'callStatusID'],
        "callUrgencyID" => [0, 'callUrgencyID'],
        "callCategoryID" => [0, 'callCategoryID'],
        "callQueueID" => [0, 'callQueueID'],
        "callDate" => [0, 'callDate'],
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
        return 'calls';
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
<?php
/**
 * CallsQueues Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\CallsQueues;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "queueID" => [1, 'queueID'],
        "queueName" => [0, 'queueName'],
        "queueFromEmail" => [0, 'queueFromEmail'],
        "queueDefaultUrgencyID" => [0, 'queueDefaultUrgencyID'],
        "queueDefaultUrgencyName" => [0, 'queueDefaultUrgencyName'],
        "queueCreatedDate" => [0, 'queueCreatedDate'],
        "queueCreatedByID" => [0, 'queueCreatedByID'],
        "queueUpdatedDate" => [0, 'queueUpdatedDate'],
        "queueUpdatedByID" => [0, 'queueUpdatedByID'],
        "queueOpenCallsCount" => [0, 'queueOpenCallsCount'],
        "queueMembersCount" => [0, 'queueMembersCount'],
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
        return 'callsQueues';
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
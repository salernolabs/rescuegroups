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
        "callID" => 1,
        "callContactID" => 0,
        "callAssignedID" => 0,
        "callStatusID" => 0,
        "callUrgencyID" => 0,
        "callCategoryID" => 0,
        "callQueueID" => 0,
        "callDate" => 0,
        "contactName" => 0,
        "contactType" => 0,
        "assignedName" => 0,
        "queueName" => 0,
        "categoryName" => 0,
        "statusName" => 0,
        "urgencyName" => 0,
        "lastOutcome" => 0,
        "logEntryCount" => 0,
    ];


    /**
     * @return bool
     */
    public function loginRequired()
    {
        return false;
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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {

        $this->addSearchParameters($parameterArray);

    }

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Response\Objects\Call[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Response\Objects\Call($object);
            }

            return $output;
        }

        return [new \RescueGroups\Response\Objects\Call($data)];
    }

}
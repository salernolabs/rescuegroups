<?php
/**
 * CallsLogEntries Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\CallsLogEntries;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'callsLogentries';

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
        "logentryID" => [1, 'logentryID'],
        "logentryCallID" => [0, 'logentryCallID'],
        "logentryContactID" => [0, 'logentryContactID'],
        "logentryDate" => [0, 'logentryDate'],
        "logentryOutcomeID" => [0, 'logentryOutcomeID'],
        "logentryComments" => [0, 'logentryComments'],
        "contactName" => [0, 'contactName'],
        "outcomeName" => [0, 'outcomeName'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\CallsLogEntry[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\CallsLogEntry($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\CallsLogEntry($data)];
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
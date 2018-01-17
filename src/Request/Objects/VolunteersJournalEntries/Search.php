<?php
/**
 * VolunteersJournalEntries Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\VolunteersJournalEntries;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'volunteersJournalEntries';

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
        "journalEntryID" => [1, 'journalEntryID'],
        "journalEntryContactID" => [0, 'journalEntryContactID'],
        "journalEntryDate" => [0, 'journalEntryDate'],
        "journalEntryComment" => [0, 'journalEntryComment'],
        "journalEntryType" => [0, 'journalEntryType'],
        "volunteerName" => [0, 'volunteerName'],
        "volunteerType" => [0, 'volunteerType'],
        "journalEntryCreatedDate" => [0, 'journalEntryCreatedDate'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\VolunteersJournalEntry[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\VolunteersJournalEntry($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\VolunteersJournalEntry($data)];
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
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

    const FIELD_ID = 'id';
    const FIELD_CONTACT_ID = 'contactId';
    const FIELD_DATE = 'date';
    const FIELD_COMMENT = 'comment';
    const FIELD_TYPE = 'type';
    const FIELD_VOLUNTEER_NAME = 'volunteerName';
    const FIELD_VOLUNTEER_TYPE = 'volunteerType';
    const FIELD_CREATED_DATE = 'createdDate';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [1, 'journalEntryID'],
        "contactId" => [0, 'journalEntryContactID'],
        "date" => [0, 'journalEntryDate'],
        "comment" => [0, 'journalEntryComment'],
        "type" => [0, 'journalEntryType'],
        "volunteerName" => [0, 'volunteerName'],
        "volunteerType" => [0, 'volunteerType'],
        "createdDate" => [0, 'journalEntryCreatedDate'],
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
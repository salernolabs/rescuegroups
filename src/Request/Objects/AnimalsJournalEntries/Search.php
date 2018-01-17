<?php
/**
 * AnimalsJournalEntries Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsJournalEntries;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animalsJournalEntries';

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
        "journalEntryID" => [0, 'journalEntryID'],
        "journalEntryAnimalID" => [0, 'journalEntryAnimalID'],
        "journalEntryDate" => [0, 'journalEntryDate'],
        "journalEntryComment" => [0, 'journalEntryComment'],
        "journalEntryEntrytypeID" => [0, 'journalEntryEntrytypeID'],
        "journalEntrytypeDescription" => [0, 'journalEntrytypeDescription'],
        "journalEntrytypeCategoryID" => [0, 'journalEntrytypeCategoryID'],
        "journalEntrytypeCategoryName" => [0, 'journalEntrytypeCategoryName'],
        "journalEntryCost" => [0, 'journalEntryCost'],
        "journalEntryDueDate" => [0, 'journalEntryDueDate'],
        "journalEntryReminderDate" => [0, 'journalEntryReminderDate'],
        "journalEntryReminderContactID" => [0, 'journalEntryReminderContactID'],
        "journalEntryReminderContactName" => [0, 'journalEntryReminderContactName'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\AnimalsJournalEntry[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\AnimalsJournalEntry($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\AnimalsJournalEntry($data)];
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
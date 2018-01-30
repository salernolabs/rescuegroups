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

    const FIELD_ID = 'id';
    const FIELD_ANIMAL_ID = 'animalId';
    const FIELD_DATE = 'date';
    const FIELD_COMMENT = 'comment';
    const FIELD_ENTRYTYPE_ID = 'entrytypeId';
    const FIELD_TYPE_DESCRIPTION = 'typeDescription';
    const FIELD_TYPE_CATEGORY_ID = 'typeCategoryId';
    const FIELD_TYPE_CATEGORY_NAME = 'typeCategoryName';
    const FIELD_COST = 'cost';
    const FIELD_DUE_DATE = 'dueDate';
    const FIELD_REMINDER_DATE = 'reminderDate';
    const FIELD_REMINDER_CONTACT_ID = 'reminderContactId';
    const FIELD_REMINDER_CONTACT_NAME = 'reminderContactName';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [0, 'journalEntryID'],
        "animalId" => [0, 'journalEntryAnimalID'],
        "date" => [0, 'journalEntryDate'],
        "comment" => [0, 'journalEntryComment'],
        "entrytypeId" => [0, 'journalEntryEntrytypeID'],
        "typeDescription" => [0, 'journalEntrytypeDescription'],
        "typeCategoryId" => [0, 'journalEntrytypeCategoryID'],
        "typeCategoryName" => [0, 'journalEntrytypeCategoryName'],
        "cost" => [0, 'journalEntryCost'],
        "dueDate" => [0, 'journalEntryDueDate'],
        "reminderDate" => [0, 'journalEntryReminderDate'],
        "reminderContactId" => [0, 'journalEntryReminderContactID'],
        "reminderContactName" => [0, 'journalEntryReminderContactName'],
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
                $output[] = new \RescueGroups\Objects\Search\AnimalsJournalEntry($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Search\AnimalsJournalEntry($data)];
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
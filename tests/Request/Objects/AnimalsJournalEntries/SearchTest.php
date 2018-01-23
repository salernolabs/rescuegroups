<?php
/**
 * AnimalsJournalEntries search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsJournalEntries;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsJournalEntries\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addFilter('id', 'equals', 'Entry ID')
            ->addField('animalId')
            ->addFilter('animalId', 'equals', 'Animal ID')
            ->addField('date')
            ->addFilter('date', 'equals', 'Date')
            ->addField('comment')
            ->addFilter('comment', 'equals', 'Comment')
            ->addField('entrytypeId')
            ->addFilter('entrytypeId', 'equals', 'Entrytype ID')
            ->addField('typeDescription')
            ->addFilter('typeDescription', 'equals', 'Entrytype')
            ->addField('typeCategoryId')
            ->addFilter('typeCategoryId', 'equals', 'Category ID')
            ->addField('typeCategoryName')
            ->addFilter('typeCategoryName', 'equals', 'Category')
            ->addField('cost')
            ->addFilter('cost', 'equals', 'Cost')
            ->addField('dueDate')
            ->addFilter('dueDate', 'equals', 'Due Date')
            ->addField('reminderDate')
            ->addFilter('reminderDate', 'equals', 'Reminder Date')
            ->addField('reminderContactId')
            ->addFilter('reminderContactId', 'equals', 'Reminder Contact ID')
            ->addField('reminderContactName')
            ->addFilter('reminderContactName', 'equals', 'Reminder Contact Name')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsJournalEntries', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'journalEntryID','operation'=>'equals','criteria'=>"Entry ID"],
            ['fieldName'=>'journalEntryAnimalID','operation'=>'equals','criteria'=>"Animal ID"],
            ['fieldName'=>'journalEntryDate','operation'=>'equals','criteria'=>"Date"],
            ['fieldName'=>'journalEntryComment','operation'=>'equals','criteria'=>"Comment"],
            ['fieldName'=>'journalEntryEntrytypeID','operation'=>'equals','criteria'=>"Entrytype ID"],
            ['fieldName'=>'journalEntrytypeDescription','operation'=>'equals','criteria'=>"Entrytype"],
            ['fieldName'=>'journalEntrytypeCategoryID','operation'=>'equals','criteria'=>"Category ID"],
            ['fieldName'=>'journalEntrytypeCategoryName','operation'=>'equals','criteria'=>"Category"],
            ['fieldName'=>'journalEntryCost','operation'=>'equals','criteria'=>"Cost"],
            ['fieldName'=>'journalEntryDueDate','operation'=>'equals','criteria'=>"Due Date"],
            ['fieldName'=>'journalEntryReminderDate','operation'=>'equals','criteria'=>"Reminder Date"],
            ['fieldName'=>'journalEntryReminderContactID','operation'=>'equals','criteria'=>"Reminder Contact ID"],
            ['fieldName'=>'journalEntryReminderContactName','operation'=>'equals','criteria'=>"Reminder Contact Name"],
        ];

        $translatedFields = [
            "journalEntryID",
            "journalEntryAnimalID",
            "journalEntryDate",
            "journalEntryComment",
            "journalEntryEntrytypeID",
            "journalEntrytypeDescription",
            "journalEntrytypeCategoryID",
            "journalEntrytypeCategoryName",
            "journalEntryCost",
            "journalEntryDueDate",
            "journalEntryReminderDate",
            "journalEntryReminderContactID",
            "journalEntryReminderContactName",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}

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
            ->addField('journalEntryID')
            ->addFilter('journalEntryID', 'equals', 'Entry ID')
            ->addField('journalEntryAnimalID')
            ->addFilter('journalEntryAnimalID', 'equals', 'Animal ID')
            ->addField('journalEntryDate')
            ->addFilter('journalEntryDate', 'equals', 'Date')
            ->addField('journalEntryComment')
            ->addFilter('journalEntryComment', 'equals', 'Comment')
            ->addField('journalEntryEntrytypeID')
            ->addFilter('journalEntryEntrytypeID', 'equals', 'Entrytype ID')
            ->addField('journalEntrytypeDescription')
            ->addFilter('journalEntrytypeDescription', 'equals', 'Entrytype')
            ->addField('journalEntrytypeCategoryID')
            ->addFilter('journalEntrytypeCategoryID', 'equals', 'Category ID')
            ->addField('journalEntrytypeCategoryName')
            ->addFilter('journalEntrytypeCategoryName', 'equals', 'Category')
            ->addField('journalEntryCost')
            ->addFilter('journalEntryCost', 'equals', 'Cost')
            ->addField('journalEntryDueDate')
            ->addFilter('journalEntryDueDate', 'equals', 'Due Date')
            ->addField('journalEntryReminderDate')
            ->addFilter('journalEntryReminderDate', 'equals', 'Reminder Date')
            ->addField('journalEntryReminderContactID')
            ->addFilter('journalEntryReminderContactID', 'equals', 'Reminder Contact ID')
            ->addField('journalEntryReminderContactName')
            ->addFilter('journalEntryReminderContactName', 'equals', 'Reminder Contact Name')
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

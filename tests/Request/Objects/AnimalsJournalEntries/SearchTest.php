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
            ->addField('journalEntryAnimalID')
            ->addField('journalEntryDate')
            ->addField('journalEntryComment')
            ->addField('journalEntryEntrytypeID')
            ->addField('journalEntrytypeDescription')
            ->addField('journalEntrytypeCategoryID')
            ->addField('journalEntrytypeCategoryName')
            ->addField('journalEntryCost')
            ->addField('journalEntryDueDate')
            ->addField('journalEntryReminderDate')
            ->addField('journalEntryReminderContactID')
            ->addField('journalEntryReminderContactName')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsJournalEntries', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
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
    }
}

<?php
/**
 * AnimalsJournalEntries Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsJournalEntries\Search;

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

        
        $query->setJournalEntryID("journalEntryID");
        $query->setJournalEntryAnimalID("journalEntryAnimalID");
        $query->setJournalEntryDate("journalEntryDate");
        $query->setJournalEntryComment("journalEntryComment");
        $query->setJournalEntryEntrytypeID("journalEntryEntrytypeID");
        $query->setJournalEntrytypeDescription("journalEntrytypeDescription");
        $query->setJournalEntrytypeCategoryID("journalEntrytypeCategoryID");
        $query->setJournalEntrytypeCategoryName("journalEntrytypeCategoryName");
        $query->setJournalEntryCost("journalEntryCost");
        $query->setJournalEntryDueDate("journalEntryDueDate");
        $query->setJournalEntryReminderDate("journalEntryReminderDate");
        $query->setJournalEntryReminderContactID("journalEntryReminderContactID");
        $query->setJournalEntryReminderContactName("journalEntryReminderContactName");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsJournalEntries", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("journalEntryID", $data["journalEntryID"]);
        $this->assertEquals("journalEntryAnimalID", $data["journalEntryAnimalID"]);
        $this->assertEquals("journalEntryDate", $data["journalEntryDate"]);
        $this->assertEquals("journalEntryComment", $data["journalEntryComment"]);
        $this->assertEquals("journalEntryEntrytypeID", $data["journalEntryEntrytypeID"]);
        $this->assertEquals("journalEntrytypeDescription", $data["journalEntrytypeDescription"]);
        $this->assertEquals("journalEntrytypeCategoryID", $data["journalEntrytypeCategoryID"]);
        $this->assertEquals("journalEntrytypeCategoryName", $data["journalEntrytypeCategoryName"]);
        $this->assertEquals("journalEntryCost", $data["journalEntryCost"]);
        $this->assertEquals("journalEntryDueDate", $data["journalEntryDueDate"]);
        $this->assertEquals("journalEntryReminderDate", $data["journalEntryReminderDate"]);
        $this->assertEquals("journalEntryReminderContactID", $data["journalEntryReminderContactID"]);
        $this->assertEquals("journalEntryReminderContactName", $data["journalEntryReminderContactName"]);
    }
}
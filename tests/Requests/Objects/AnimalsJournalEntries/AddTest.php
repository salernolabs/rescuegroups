<?php
/**
 * AnimalsJournalEntries Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalsJournalEntries\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalsJournalEntries\Add();

        
        $query->setJournalEntryAnimalID("journalEntryAnimalID");
        $query->setJournalEntryDate("journalEntryDate");
        $query->setJournalEntryComment("journalEntryComment");
        $query->setJournalEntryEntrytypeID("journalEntryEntrytypeID");
        $query->setJournalEntryCost("journalEntryCost");
        $query->setJournalEntryDueDate("journalEntryDueDate");
        $query->setJournalEntryReminderDate("journalEntryReminderDate");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsJournalEntries", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("journalEntryAnimalID", $data["journalEntryAnimalID"]);
        $this->assertEquals("journalEntryDate", $data["journalEntryDate"]);
        $this->assertEquals("journalEntryComment", $data["journalEntryComment"]);
        $this->assertEquals("journalEntryEntrytypeID", $data["journalEntryEntrytypeID"]);
        $this->assertEquals("journalEntryCost", $data["journalEntryCost"]);
        $this->assertEquals("journalEntryDueDate", $data["journalEntryDueDate"]);
        $this->assertEquals("journalEntryReminderDate", $data["journalEntryReminderDate"]);
    }
}
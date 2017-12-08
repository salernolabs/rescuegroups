<?php
/**
 * VolunteersJournalEntries Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\VolunteersJournalEntries\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\VolunteersJournalEntries\Add();

        
        $query->setJournalEntryContactID("journalEntryContactID");
        $query->setJournalEntryDate("journalEntryDate");
        $query->setJournalEntryComment("journalEntryComment");
        $query->setJournalEntryType("journalEntryType");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("volunteersJournalEntries", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("journalEntryContactID", $data["journalEntryContactID"]);
        $this->assertEquals("journalEntryDate", $data["journalEntryDate"]);
        $this->assertEquals("journalEntryComment", $data["journalEntryComment"]);
        $this->assertEquals("journalEntryType", $data["journalEntryType"]);
    }
}
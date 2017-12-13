<?php
/**
 * VolunteersJournalEntries Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\VolunteersJournalEntries\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\VolunteersJournalEntries\Search();

        
        $query->setJournalEntryID("journalEntryID");
        $query->setJournalEntryContactID("journalEntryContactID");
        $query->setJournalEntryDate("journalEntryDate");
        $query->setJournalEntryComment("journalEntryComment");
        $query->setJournalEntryType("journalEntryType");
        $query->setVolunteerName("volunteerName");
        $query->setVolunteerType("volunteerType");
        $query->setJournalEntryCreatedDate("journalEntryCreatedDate");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("volunteersJournalEntries", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("journalEntryID", $data["journalEntryID"]);
        $this->assertEquals("journalEntryContactID", $data["journalEntryContactID"]);
        $this->assertEquals("journalEntryDate", $data["journalEntryDate"]);
        $this->assertEquals("journalEntryComment", $data["journalEntryComment"]);
        $this->assertEquals("journalEntryType", $data["journalEntryType"]);
        $this->assertEquals("volunteerName", $data["volunteerName"]);
        $this->assertEquals("volunteerType", $data["volunteerType"]);
        $this->assertEquals("journalEntryCreatedDate", $data["journalEntryCreatedDate"]);
    }
}
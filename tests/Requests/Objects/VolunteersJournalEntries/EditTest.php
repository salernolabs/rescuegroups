<?php
/**
 * VolunteersJournalEntries Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:27
 */
namespace RescueGroups\Tests\Requests\Objects\VolunteersJournalEntries\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\VolunteersJournalEntries\Edit();

        
        $query->setJournalEntryID("journalEntryID");
        $query->setJournalEntryContactID("journalEntryContactID");
        $query->setJournalEntryDate("journalEntryDate");
        $query->setJournalEntryComment("journalEntryComment");
        $query->setJournalEntryType("journalEntryType");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("volunteersJournalEntries", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("journalEntryID", $data["journalEntryID"]);
        $this->assertEquals("journalEntryContactID", $data["journalEntryContactID"]);
        $this->assertEquals("journalEntryDate", $data["journalEntryDate"]);
        $this->assertEquals("journalEntryComment", $data["journalEntryComment"]);
        $this->assertEquals("journalEntryType", $data["journalEntryType"]);
    }
}
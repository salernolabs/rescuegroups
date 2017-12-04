<?php
/**
 * VolunteersJournalEntries Delete Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\VolunteersJournalEntries\Delete;

class DeleteTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\VolunteersJournalEntries\Delete();

        
        $query->setJournalEntryID("journalEntryID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("volunteersJournalEntries", $data["objectType"]);

        $this->assertEquals("delete", $data["objectAction"]);

        $this->assertEquals("journalEntryID", $data["journalEntryID"]);
    }
}
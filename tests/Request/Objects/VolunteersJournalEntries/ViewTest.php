<?php
/**
 * VolunteersJournalEntries View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\VolunteersJournalEntries;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\VolunteersJournalEntries\View();

        
        $query->setJournalEntryID("journalEntryID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("volunteersJournalEntries", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("journalEntryID", $data["journalEntryID"]);
    }
}
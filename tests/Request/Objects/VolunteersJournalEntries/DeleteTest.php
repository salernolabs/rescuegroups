<?php
/**
 * VolunteersJournalEntries delete Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\VolunteersJournalEntries;

class DeleteTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\VolunteersJournalEntries\Delete();
        $query->setId("ID");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("ID", $data['values'][0]["journalEntryID"]);

        $this->assertEquals('volunteersJournalEntries', $data['objectType']);
        $this->assertEquals('delete', $data['objectAction']);
    }
}
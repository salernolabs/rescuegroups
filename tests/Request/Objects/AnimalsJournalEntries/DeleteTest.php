<?php
/**
 * AnimalsJournalEntries delete Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsJournalEntries;

class DeleteTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsJournalEntries\Delete();
        $query->setId("Entry ID");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Entry ID", $data['values'][0]["journalEntryID"]);

        $this->assertEquals('animalsJournalEntries', $data['objectType']);
        $this->assertEquals('delete', $data['objectAction']);
    }
}
<?php
/**
 * AnimalsJournalEntries Delete Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:35
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalsJournalEntries\Delete;

class DeleteTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalsJournalEntries\Delete();

        
        $query->setJournalEntryID("journalEntryID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsJournalEntries", $data["objectType"]);

        $this->assertEquals("delete", $data["objectAction"]);

        $this->assertEquals("journalEntryID", $data["journalEntryID"]);
    }
}
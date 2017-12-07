<?php
/**
 * AnimalsJournalEntries View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:17
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalsJournalEntries\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalsJournalEntries\View();

        
        $query->setJournalEntryID("journalEntryID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsJournalEntries", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("journalEntryID", $data["journalEntryID"]);
    }
}
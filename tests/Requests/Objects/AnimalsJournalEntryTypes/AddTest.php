<?php
/**
 * AnimalsJournalEntryTypes Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:17
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalsJournalEntryTypes\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalsJournalEntryTypes\Add();

        
        $query->setJournalEntrytypeDescription("journalEntrytypeDescription");
        $query->setJournalEntrytypeCategoryID("journalEntrytypeCategoryID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsJournalEntrytypes", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("journalEntrytypeDescription", $data["journalEntrytypeDescription"]);
        $this->assertEquals("journalEntrytypeCategoryID", $data["journalEntrytypeCategoryID"]);
    }
}
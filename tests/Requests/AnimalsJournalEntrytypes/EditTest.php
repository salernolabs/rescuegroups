<?php
/**
 * AnimalsJournalEntrytypes Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\AnimalsJournalEntrytypes\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\AnimalsJournalEntrytypes\Edit();

        
        $query->setJournalEntrytypeID("journalEntrytypeID");
        $query->setJournalEntrytypeDescription("journalEntrytypeDescription");
        $query->setJournalEntrytypeCategoryID("journalEntrytypeCategoryID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsJournalEntrytypes", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("journalEntrytypeID", $data["journalEntrytypeID"]);
        $this->assertEquals("journalEntrytypeDescription", $data["journalEntrytypeDescription"]);
        $this->assertEquals("journalEntrytypeCategoryID", $data["journalEntrytypeCategoryID"]);
    }
}
<?php
/**
 * WaitingLists Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\WaitingLists\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\WaitingLists\Search();

        
        $query->setWaitinglistID("waitinglistID");
        $query->setWaitinglistName("waitinglistName");
        $query->setWaitinglistType("waitinglistType");
        $query->setWaitinglistComment("waitinglistComment");
        $query->setWaitinglistMembersCount("waitinglistMembersCount");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("waitinglists", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("waitinglistID", $data["waitinglistID"]);
        $this->assertEquals("waitinglistName", $data["waitinglistName"]);
        $this->assertEquals("waitinglistType", $data["waitinglistType"]);
        $this->assertEquals("waitinglistComment", $data["waitinglistComment"]);
        $this->assertEquals("waitinglistMembersCount", $data["waitinglistMembersCount"]);
    }
}
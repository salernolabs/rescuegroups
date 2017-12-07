<?php
/**
 * CallsQueuesMembers Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:38
 */
namespace RescueGroups\Tests\Requests\Objects\CallsQueuesMembers\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\CallsQueuesMembers\Edit();

        
        $query->setMemberID("memberID");
        $query->setMemberContactID("memberContactID");
        $query->setMemberQueueID("memberQueueID");
        $query->setMemberManager("memberManager");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("callsQueuesMembers", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("memberID", $data["memberID"]);
        $this->assertEquals("memberContactID", $data["memberContactID"]);
        $this->assertEquals("memberQueueID", $data["memberQueueID"]);
        $this->assertEquals("memberManager", $data["memberManager"]);
    }
}
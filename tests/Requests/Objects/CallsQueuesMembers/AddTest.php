<?php
/**
 * CallsQueuesMembers Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:19
 */
namespace RescueGroups\Tests\Requests\Objects\CallsQueuesMembers\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\CallsQueuesMembers\Add();

        
        $query->setMemberContactID("memberContactID");
        $query->setMemberQueueID("memberQueueID");
        $query->setMemberManager("memberManager");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("callsQueuesMembers", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("memberContactID", $data["memberContactID"]);
        $this->assertEquals("memberQueueID", $data["memberQueueID"]);
        $this->assertEquals("memberManager", $data["memberManager"]);
    }
}
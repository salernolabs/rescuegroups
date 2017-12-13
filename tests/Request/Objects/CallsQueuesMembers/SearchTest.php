<?php
/**
 * CallsQueuesMembers Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\CallsQueuesMembers;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\CallsQueuesMembers\Search();

        
        $query->setMemberID("memberID");
        $query->setMemberContactID("memberContactID");
        $query->setMemberQueueID("memberQueueID");
        $query->setMemberManager("memberManager");
        $query->setMemberCreatedDate("memberCreatedDate");
        $query->setMemberCreatedByID("memberCreatedByID");
        $query->setMemberUpdatedDate("memberUpdatedDate");
        $query->setMemberUpdatedByID("memberUpdatedByID");
        $query->setQueueName("queueName");
        $query->setMemberName("memberName");
        $query->setMemberContactType("memberContactType");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("callsQueuesMembers", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("memberID", $data["memberID"]);
        $this->assertEquals("memberContactID", $data["memberContactID"]);
        $this->assertEquals("memberQueueID", $data["memberQueueID"]);
        $this->assertEquals("memberManager", $data["memberManager"]);
        $this->assertEquals("memberCreatedDate", $data["memberCreatedDate"]);
        $this->assertEquals("memberCreatedByID", $data["memberCreatedByID"]);
        $this->assertEquals("memberUpdatedDate", $data["memberUpdatedDate"]);
        $this->assertEquals("memberUpdatedByID", $data["memberUpdatedByID"]);
        $this->assertEquals("queueName", $data["queueName"]);
        $this->assertEquals("memberName", $data["memberName"]);
        $this->assertEquals("memberContactType", $data["memberContactType"]);
    }
}
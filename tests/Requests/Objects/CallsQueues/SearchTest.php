<?php
/**
 * CallsQueues Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:38
 */
namespace RescueGroups\Tests\Requests\Objects\CallsQueues\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\CallsQueues\Search();

        
        $query->setQueueID("queueID");
        $query->setQueueName("queueName");
        $query->setQueueFromEmail("queueFromEmail");
        $query->setQueueDefaultUrgencyID("queueDefaultUrgencyID");
        $query->setQueueDefaultUrgencyName("queueDefaultUrgencyName");
        $query->setQueueCreatedDate("queueCreatedDate");
        $query->setQueueCreatedByID("queueCreatedByID");
        $query->setQueueUpdatedDate("queueUpdatedDate");
        $query->setQueueUpdatedByID("queueUpdatedByID");
        $query->setQueueOpenCallsCount("queueOpenCallsCount");
        $query->setQueueMembersCount("queueMembersCount");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("callsQueues", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("queueID", $data["queueID"]);
        $this->assertEquals("queueName", $data["queueName"]);
        $this->assertEquals("queueFromEmail", $data["queueFromEmail"]);
        $this->assertEquals("queueDefaultUrgencyID", $data["queueDefaultUrgencyID"]);
        $this->assertEquals("queueDefaultUrgencyName", $data["queueDefaultUrgencyName"]);
        $this->assertEquals("queueCreatedDate", $data["queueCreatedDate"]);
        $this->assertEquals("queueCreatedByID", $data["queueCreatedByID"]);
        $this->assertEquals("queueUpdatedDate", $data["queueUpdatedDate"]);
        $this->assertEquals("queueUpdatedByID", $data["queueUpdatedByID"]);
        $this->assertEquals("queueOpenCallsCount", $data["queueOpenCallsCount"]);
        $this->assertEquals("queueMembersCount", $data["queueMembersCount"]);
    }
}
<?php
/**
 * Calls Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:19
 */
namespace RescueGroups\Tests\Requests\Objects\Calls\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Calls\Search();

        
        $query->setCallID("callID");
        $query->setCallContactID("callContactID");
        $query->setCallAssignedID("callAssignedID");
        $query->setCallStatusID("callStatusID");
        $query->setCallUrgencyID("callUrgencyID");
        $query->setCallCategoryID("callCategoryID");
        $query->setCallQueueID("callQueueID");
        $query->setCallDate("callDate");
        $query->setContactName("contactName");
        $query->setContactType("contactType");
        $query->setAssignedName("assignedName");
        $query->setQueueName("queueName");
        $query->setCategoryName("categoryName");
        $query->setStatusName("statusName");
        $query->setUrgencyName("urgencyName");
        $query->setLastOutcome("lastOutcome");
        $query->setLogEntryCount("logEntryCount");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("calls", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("callID", $data["callID"]);
        $this->assertEquals("callContactID", $data["callContactID"]);
        $this->assertEquals("callAssignedID", $data["callAssignedID"]);
        $this->assertEquals("callStatusID", $data["callStatusID"]);
        $this->assertEquals("callUrgencyID", $data["callUrgencyID"]);
        $this->assertEquals("callCategoryID", $data["callCategoryID"]);
        $this->assertEquals("callQueueID", $data["callQueueID"]);
        $this->assertEquals("callDate", $data["callDate"]);
        $this->assertEquals("contactName", $data["contactName"]);
        $this->assertEquals("contactType", $data["contactType"]);
        $this->assertEquals("assignedName", $data["assignedName"]);
        $this->assertEquals("queueName", $data["queueName"]);
        $this->assertEquals("categoryName", $data["categoryName"]);
        $this->assertEquals("statusName", $data["statusName"]);
        $this->assertEquals("urgencyName", $data["urgencyName"]);
        $this->assertEquals("lastOutcome", $data["lastOutcome"]);
        $this->assertEquals("logEntryCount", $data["logEntryCount"]);
    }
}
<?php
/**
 * Calls Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:37
 */
namespace RescueGroups\Tests\Requests\Objects\Calls\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Calls\Add();

        
        $query->setCallContactID("callContactID");
        $query->setCallAssignedID("callAssignedID");
        $query->setCallStatusID("callStatusID");
        $query->setCallUrgencyID("callUrgencyID");
        $query->setCallCategoryID("callCategoryID");
        $query->setCallQueueID("callQueueID");
        $query->setCallDate("callDate");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("calls", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("callContactID", $data["callContactID"]);
        $this->assertEquals("callAssignedID", $data["callAssignedID"]);
        $this->assertEquals("callStatusID", $data["callStatusID"]);
        $this->assertEquals("callUrgencyID", $data["callUrgencyID"]);
        $this->assertEquals("callCategoryID", $data["callCategoryID"]);
        $this->assertEquals("callQueueID", $data["callQueueID"]);
        $this->assertEquals("callDate", $data["callDate"]);
    }
}
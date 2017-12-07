<?php
/**
 * CallsQueues Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\CallsQueues\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\CallsQueues\Edit();

        
        $query->setQueueID("queueID");
        $query->setQueueName("queueName");
        $query->setQueueFromEmail("queueFromEmail");
        $query->setQueueDefaultUrgencyID("queueDefaultUrgencyID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("callsQueues", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("queueID", $data["queueID"]);
        $this->assertEquals("queueName", $data["queueName"]);
        $this->assertEquals("queueFromEmail", $data["queueFromEmail"]);
        $this->assertEquals("queueDefaultUrgencyID", $data["queueDefaultUrgencyID"]);
    }
}
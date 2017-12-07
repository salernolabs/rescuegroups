<?php
/**
 * CallsQueues Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:19
 */
namespace RescueGroups\Tests\Requests\Objects\CallsQueues\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\CallsQueues\Add();

        
        $query->setQueueName("queueName");
        $query->setQueueFromEmail("queueFromEmail");
        $query->setQueueDefaultUrgencyID("queueDefaultUrgencyID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("callsQueues", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("queueName", $data["queueName"]);
        $this->assertEquals("queueFromEmail", $data["queueFromEmail"]);
        $this->assertEquals("queueDefaultUrgencyID", $data["queueDefaultUrgencyID"]);
    }
}
<?php
/**
 * CallsQueues View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:19
 */
namespace RescueGroups\Tests\Requests\Objects\CallsQueues\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\CallsQueues\View();

        
        $query->setQueueID("queueID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("callsQueues", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("queueID", $data["queueID"]);
    }
}
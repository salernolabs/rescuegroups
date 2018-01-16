<?php
/**
 * CallsQueues add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\CallsQueues;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\CallsQueues\Add();

        $testObject = new \RescueGroups\Objects\CallsQueue();
        $testObject->queueName = 'testValue Name';
        $testObject->queueFromEmail = 'testValue From Email Address';

        $query->addCallsQueue($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('callsQueues', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Name', $data['values'][0]['queueName']);
        $this->assertEquals('testValue From Email Address', $data['values'][0]['queueFromEmail']);
    }
}
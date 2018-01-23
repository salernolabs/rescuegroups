<?php
/**
 * CallsQueues edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\CallsQueues;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\CallsQueues\Edit();

        $testObject = new \RescueGroups\Objects\CallsQueue();
        $testObject->id = 'testValue ID';
        $testObject->name = 'testValue Name';
        $testObject->fromEmail = 'testValue From Email Address';
        $testObject->defaultUrgencyId = 'testValue Default Urgency';

        $query->updateCallsQueue($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('callsQueues', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue ID', $data['values'][0]['queueID']);
        $this->assertEquals('testValue Name', $data['values'][0]['queueName']);
        $this->assertEquals('testValue From Email Address', $data['values'][0]['queueFromEmail']);
        $this->assertEquals('testValue Default Urgency', $data['values'][0]['queueDefaultUrgencyID']);
    }
}
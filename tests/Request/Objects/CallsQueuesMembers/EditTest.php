<?php
/**
 * CallsQueuesMembers edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\CallsQueuesMembers;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\CallsQueuesMembers\Edit();

        $testObject = new \RescueGroups\Objects\CallsQueuesMember();
        $testObject->id = 'testValue ID';
        $testObject->contactId = 'testValue Contact';
        $testObject->queueId = 'testValue Queue';
        $testObject->manager = 'testValue Manager';

        $query->updateCallsQueuesMember($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('callsQueuesMembers', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue ID', $data['values'][0]['memberID']);
        $this->assertEquals('testValue Contact', $data['values'][0]['memberContactID']);
        $this->assertEquals('testValue Queue', $data['values'][0]['memberQueueID']);
        $this->assertEquals('testValue Manager', $data['values'][0]['memberManager']);
    }
}
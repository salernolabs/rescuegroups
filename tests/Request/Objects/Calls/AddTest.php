<?php
/**
 * Calls add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Calls;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Calls\Add();

        $testObject = new \RescueGroups\Objects\Call();
        $testObject->callAssignedID = 'testValue Assigned';
        $testObject->callStatusID = 'testValue Status';
        $testObject->callUrgencyID = 'testValue Urgency';
        $testObject->callCategoryID = 'testValue Category';
        $testObject->callQueueID = 'testValue Queue';
        $testObject->callDate = 'testValue Call date';

        $query->addCall($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('calls', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Assigned', $data['values'][0]['callAssignedID']);
        $this->assertEquals('testValue Status', $data['values'][0]['callStatusID']);
        $this->assertEquals('testValue Urgency', $data['values'][0]['callUrgencyID']);
        $this->assertEquals('testValue Category', $data['values'][0]['callCategoryID']);
        $this->assertEquals('testValue Queue', $data['values'][0]['callQueueID']);
        $this->assertEquals('testValue Call date', $data['values'][0]['callDate']);
    }
}
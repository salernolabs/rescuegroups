<?php
/**
 * Calls edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Calls;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Calls\Edit();

        $testObject = new \RescueGroups\Objects\Call();
        $testObject->callID = 'testValue ID';
        $testObject->callContactID = 'testValue Contact';
        $testObject->callAssignedID = 'testValue Assigned';
        $testObject->tatusID = 'testValue Status';
        $testObject->callUrgencyID = 'testValue Urgency';
        $testObject->callCategoryID = 'testValue Category';
        $testObject->callQueueID = 'testValue Queue';
        $testObject->callDate = 'testValue Call date';

        $query->updateCall($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('calls', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue ID', $data['values'][0]['callID']);
        $this->assertEquals('testValue Contact', $data['values'][0]['callContactID']);
        $this->assertEquals('testValue Assigned', $data['values'][0]['callAssignedID']);
        $this->assertEquals('testValue Status', $data['values'][0]['callStatusID']);
        $this->assertEquals('testValue Urgency', $data['values'][0]['callUrgencyID']);
        $this->assertEquals('testValue Category', $data['values'][0]['callCategoryID']);
        $this->assertEquals('testValue Queue', $data['values'][0]['callQueueID']);
        $this->assertEquals('testValue Call date', $data['values'][0]['callDate']);
    }
}
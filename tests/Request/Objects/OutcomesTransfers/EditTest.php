<?php
/**
 * OutcomesTransfers edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesTransfers;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesTransfers\Edit();

        $testObject = new \RescueGroups\Objects\OutcomesTransfer();
        $testObject->id = 'testValue ID';
        $testObject->animalConditionId = 'testValue Condition';
        $testObject->date = 'testValue Date';
        $testObject->notes = 'testValue Notes';
        $testObject->receiveId = 'testValue Received';
        $testObject->coalitionMember = 'testValue Coalition Member';
        $testObject->reasonId = 'testValue Transfer Reason';

        $query->updateOutcomesTransfer($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('outcomesTransfers', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue ID', $data['values'][0]['outcomesTransferID']);
        $this->assertEquals('testValue Condition', $data['values'][0]['outcomesTransferAnimalConditionID']);
        $this->assertEquals('testValue Date', $data['values'][0]['outcomesTransferDate']);
        $this->assertEquals('testValue Notes', $data['values'][0]['outcomesTransferNotes']);
        $this->assertEquals('testValue Received', $data['values'][0]['outcomesTransferReceiveID']);
        $this->assertEquals('testValue Coalition Member', $data['values'][0]['outcomesTransferCoalitionMember']);
        $this->assertEquals('testValue Transfer Reason', $data['values'][0]['outcomesTransferReasonID']);
    }
}
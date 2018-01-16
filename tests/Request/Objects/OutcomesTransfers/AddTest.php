<?php
/**
 * OutcomesTransfers add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesTransfers;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesTransfers\Add();

        $testObject = new \RescueGroups\Objects\OutcomesTransfer();
        $testObject->outcomesTransferAnimalConditionID = 'testValue Condition';
        $testObject->outcomesTransferDate = 'testValue Date';
        $testObject->outcomesTransferNotes = 'testValue Notes';
        $testObject->outcomesTransferReceiveID = 'testValue Received';
        $testObject->outcomesTransferCoalitionMember = 'testValue Coalition Member';
        $testObject->outcomesTransferReasonID = 'testValue Transfer Reason';

        $query->addOutcomesTransfer($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('outcomesTransfers', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Condition', $data['values'][0]['outcomesTransferAnimalConditionID']);
        $this->assertEquals('testValue Date', $data['values'][0]['outcomesTransferDate']);
        $this->assertEquals('testValue Notes', $data['values'][0]['outcomesTransferNotes']);
        $this->assertEquals('testValue Received', $data['values'][0]['outcomesTransferReceiveID']);
        $this->assertEquals('testValue Coalition Member', $data['values'][0]['outcomesTransferCoalitionMember']);
        $this->assertEquals('testValue Transfer Reason', $data['values'][0]['outcomesTransferReasonID']);
    }
}
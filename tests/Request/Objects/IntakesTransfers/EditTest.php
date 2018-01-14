<?php
/**
 * IntakesTransfers edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesTransfers;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesTransfers\Edit();

        $testObject = new \RescueGroups\Objects\IntakesTransfer();
        $testObject->intakesTransferID = 'testValue Owner Surrender';
        $testObject->intakesTransferAnimalID = 'testValue Animal';
        $testObject->intakesTransferAnimalConditionID = 'testValue Condition';
        $testObject->intakesTransferDate = 'testValue Date';
        $testObject->intakesTransferNotes = 'testValue Notes';
        $testObject->intakesTransferFromID = 'testValue Transferred From';
        $testObject->intakesTransferCoalitionMember = 'testValue Coalition Member';
        $testObject->intakesTransferReasonID = 'testValue Transfer Reason';

        $query->updateIntakesTransfer($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesTransfers', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue Owner Surrender', $data['values'][0]['intakesTransferID']);
        $this->assertEquals('testValue Animal', $data['values'][0]['intakesTransferAnimalID']);
        $this->assertEquals('testValue Condition', $data['values'][0]['intakesTransferAnimalConditionID']);
        $this->assertEquals('testValue Date', $data['values'][0]['intakesTransferDate']);
        $this->assertEquals('testValue Notes', $data['values'][0]['intakesTransferNotes']);
        $this->assertEquals('testValue Transferred From', $data['values'][0]['intakesTransferFromID']);
        $this->assertEquals('testValue Coalition Member', $data['values'][0]['intakesTransferCoalitionMember']);
        $this->assertEquals('testValue Transfer Reason', $data['values'][0]['intakesTransferReasonID']);
    }
}
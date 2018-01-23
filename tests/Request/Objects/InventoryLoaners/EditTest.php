<?php
/**
 * InventoryLoaners edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\InventoryLoaners;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\InventoryLoaners\Edit();

        $testObject = new \RescueGroups\Objects\InventoryLoaner();
        $testObject->id = 'testValue ID';
        $testObject->itemId = 'testValue Item';
        $testObject->loanDate = 'testValue Loan Date';
        $testObject->loanConditionId = 'testValue Loan Condition';
        $testObject->dueDate = 'testValue Due Date';
        $testObject->returnDate = 'testValue Return Date';
        $testObject->returnConditionId = 'testValue Return Condition';
        $testObject->notes = 'testValue Notes';

        $query->updateInventoryLoaner($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('inventoryLoaners', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue ID', $data['values'][0]['inventoryLoanerID']);
        $this->assertEquals('testValue Item', $data['values'][0]['inventoryLoanerItemID']);
        $this->assertEquals('testValue Loan Date', $data['values'][0]['inventoryLoanerLoanDate']);
        $this->assertEquals('testValue Loan Condition', $data['values'][0]['inventoryLoanerLoanConditionID']);
        $this->assertEquals('testValue Due Date', $data['values'][0]['inventoryLoanerDueDate']);
        $this->assertEquals('testValue Return Date', $data['values'][0]['inventoryLoanerReturnDate']);
        $this->assertEquals('testValue Return Condition', $data['values'][0]['inventoryLoanerReturnConditionID']);
        $this->assertEquals('testValue Notes', $data['values'][0]['inventoryLoanerNotes']);
    }
}
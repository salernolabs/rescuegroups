<?php
/**
 * InventoryLoaners Edit Request Test
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

        
        $query->setInventoryLoanerID("inventoryLoanerID");
        $query->setInventoryLoanerItemID("inventoryLoanerItemID");
        $query->setInventoryLoanerLoanDate("inventoryLoanerLoanDate");
        $query->setInventoryLoanerLoanConditionID("inventoryLoanerLoanConditionID");
        $query->setInventoryLoanerDueDate("inventoryLoanerDueDate");
        $query->setInventoryLoanerReturnDate("inventoryLoanerReturnDate");
        $query->setInventoryLoanerReturnConditionID("inventoryLoanerReturnConditionID");
        $query->setInventoryLoanerNotes("inventoryLoanerNotes");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("inventoryLoaners", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("inventoryLoanerID", $data["inventoryLoanerID"]);
        $this->assertEquals("inventoryLoanerItemID", $data["inventoryLoanerItemID"]);
        $this->assertEquals("inventoryLoanerLoanDate", $data["inventoryLoanerLoanDate"]);
        $this->assertEquals("inventoryLoanerLoanConditionID", $data["inventoryLoanerLoanConditionID"]);
        $this->assertEquals("inventoryLoanerDueDate", $data["inventoryLoanerDueDate"]);
        $this->assertEquals("inventoryLoanerReturnDate", $data["inventoryLoanerReturnDate"]);
        $this->assertEquals("inventoryLoanerReturnConditionID", $data["inventoryLoanerReturnConditionID"]);
        $this->assertEquals("inventoryLoanerNotes", $data["inventoryLoanerNotes"]);
    }
}
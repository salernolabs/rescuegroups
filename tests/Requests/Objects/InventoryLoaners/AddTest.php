<?php
/**
 * InventoryLoaners Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:42
 */
namespace RescueGroups\Tests\Requests\Objects\InventoryLoaners\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\InventoryLoaners\Add();

        
        $query->setInventoryLoanerContactID("inventoryLoanerContactID");
        $query->setInventoryLoanerItemID("inventoryLoanerItemID");
        $query->setInventoryLoanerLoanDate("inventoryLoanerLoanDate");
        $query->setInventoryLoanerLoanConditionID("inventoryLoanerLoanConditionID");
        $query->setInventoryLoanerDueDate("inventoryLoanerDueDate");
        $query->setInventoryLoanerReturnDate("inventoryLoanerReturnDate");
        $query->setInventoryLoanerReturnConditionID("inventoryLoanerReturnConditionID");
        $query->setInventoryLoanerNotes("inventoryLoanerNotes");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("inventoryLoaners", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("inventoryLoanerContactID", $data["inventoryLoanerContactID"]);
        $this->assertEquals("inventoryLoanerItemID", $data["inventoryLoanerItemID"]);
        $this->assertEquals("inventoryLoanerLoanDate", $data["inventoryLoanerLoanDate"]);
        $this->assertEquals("inventoryLoanerLoanConditionID", $data["inventoryLoanerLoanConditionID"]);
        $this->assertEquals("inventoryLoanerDueDate", $data["inventoryLoanerDueDate"]);
        $this->assertEquals("inventoryLoanerReturnDate", $data["inventoryLoanerReturnDate"]);
        $this->assertEquals("inventoryLoanerReturnConditionID", $data["inventoryLoanerReturnConditionID"]);
        $this->assertEquals("inventoryLoanerNotes", $data["inventoryLoanerNotes"]);
    }
}
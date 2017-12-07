<?php
/**
 * InventoryFiles Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\InventoryFiles\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\InventoryFiles\Edit();

        
        $query->setInventoryfileID("inventoryfileID");
        $query->setInventoryfileItemID("inventoryfileItemID");
        $query->setInventoryfileDescription("inventoryfileDescription");
        $query->setInventoryfileStatus("inventoryfileStatus");
        $query->setInventoryfileDisplayInline("inventoryfileDisplayInline");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("inventoryfiles", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("inventoryfileID", $data["inventoryfileID"]);
        $this->assertEquals("inventoryfileItemID", $data["inventoryfileItemID"]);
        $this->assertEquals("inventoryfileDescription", $data["inventoryfileDescription"]);
        $this->assertEquals("inventoryfileStatus", $data["inventoryfileStatus"]);
        $this->assertEquals("inventoryfileDisplayInline", $data["inventoryfileDisplayInline"]);
    }
}
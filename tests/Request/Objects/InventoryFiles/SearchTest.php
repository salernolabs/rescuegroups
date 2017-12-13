<?php
/**
 * InventoryFiles Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\InventoryFiles\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\InventoryFiles\Search();

        
        $query->setInventoryfileID("inventoryfileID");
        $query->setInventoryfileOldName("inventoryfileOldName");
        $query->setInventoryfileDescription("inventoryfileDescription");
        $query->setInventoryfileStatus("inventoryfileStatus");
        $query->setInventoryfileDisplayInline("inventoryfileDisplayInline");
        $query->setInventoryfileSize("inventoryfileSize");
        $query->setInventoryfileCreatedDate("inventoryfileCreatedDate");
        $query->setInventoryfileItemID("inventoryfileItemID");
        $query->setInventoryitemName("inventoryitemName");
        $query->setInventoryitemDescription("inventoryitemDescription");
        $query->setInventoryitemReceivedDate("inventoryitemReceivedDate");
        $query->setInventoryitemSource("inventoryitemSource");
        $query->setInventoryitemCost("inventoryitemCost");
        $query->setInventoryitemConditionID("inventoryitemConditionID");
        $query->setInventoryitemCondition("inventoryitemCondition");
        $query->setInventoryitemCategory("inventoryitemCategory");
        $query->setInventoryitemDisposedDate("inventoryitemDisposedDate");
        $query->setInventoryitemDisposedDestination("inventoryitemDisposedDestination");
        $query->setInventoryitemStorageLocation("inventoryitemStorageLocation");
        $query->setInventoryitemFiles("inventoryitemFiles");
        $query->setInventoryitemLoaners("inventoryitemLoaners");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("inventoryfiles", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("inventoryfileID", $data["inventoryfileID"]);
        $this->assertEquals("inventoryfileOldName", $data["inventoryfileOldName"]);
        $this->assertEquals("inventoryfileDescription", $data["inventoryfileDescription"]);
        $this->assertEquals("inventoryfileStatus", $data["inventoryfileStatus"]);
        $this->assertEquals("inventoryfileDisplayInline", $data["inventoryfileDisplayInline"]);
        $this->assertEquals("inventoryfileSize", $data["inventoryfileSize"]);
        $this->assertEquals("inventoryfileCreatedDate", $data["inventoryfileCreatedDate"]);
        $this->assertEquals("inventoryfileItemID", $data["inventoryfileItemID"]);
        $this->assertEquals("inventoryitemName", $data["inventoryitemName"]);
        $this->assertEquals("inventoryitemDescription", $data["inventoryitemDescription"]);
        $this->assertEquals("inventoryitemReceivedDate", $data["inventoryitemReceivedDate"]);
        $this->assertEquals("inventoryitemSource", $data["inventoryitemSource"]);
        $this->assertEquals("inventoryitemCost", $data["inventoryitemCost"]);
        $this->assertEquals("inventoryitemConditionID", $data["inventoryitemConditionID"]);
        $this->assertEquals("inventoryitemCondition", $data["inventoryitemCondition"]);
        $this->assertEquals("inventoryitemCategory", $data["inventoryitemCategory"]);
        $this->assertEquals("inventoryitemDisposedDate", $data["inventoryitemDisposedDate"]);
        $this->assertEquals("inventoryitemDisposedDestination", $data["inventoryitemDisposedDestination"]);
        $this->assertEquals("inventoryitemStorageLocation", $data["inventoryitemStorageLocation"]);
        $this->assertEquals("inventoryitemFiles", $data["inventoryitemFiles"]);
        $this->assertEquals("inventoryitemLoaners", $data["inventoryitemLoaners"]);
    }
}
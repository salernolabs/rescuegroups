<?php
/**
 * InventoryItems Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\InventoryItems\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\InventoryItems\Search();

        
        $query->setInventoryitemID("inventoryitemID");
        $query->setInventoryitemName("inventoryitemName");
        $query->setInventoryitemItemID("inventoryitemItemID");
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

        
        $this->assertEquals("inventoryitems", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("inventoryitemID", $data["inventoryitemID"]);
        $this->assertEquals("inventoryitemName", $data["inventoryitemName"]);
        $this->assertEquals("inventoryitemItemID", $data["inventoryitemItemID"]);
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
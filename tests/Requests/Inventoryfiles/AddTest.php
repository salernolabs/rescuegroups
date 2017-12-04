<?php
/**
 * Inventoryfiles Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Inventoryfiles\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Inventoryfiles\Add();

        
        $query->setInventoryfileItemID("inventoryfileItemID");
        $query->setInventoryfileBinary("inventoryfileBinary");
        $query->setInventoryfileOldFileName("inventoryfileOldFileName");
        $query->setInventoryfileDescription("inventoryfileDescription");
        $query->setInventoryfileStatus("inventoryfileStatus");
        $query->setInventoryfileDisplayInline("inventoryfileDisplayInline");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("inventoryfiles", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("inventoryfileItemID", $data["inventoryfileItemID"]);
        $this->assertEquals("inventoryfileBinary", $data["inventoryfileBinary"]);
        $this->assertEquals("inventoryfileOldFileName", $data["inventoryfileOldFileName"]);
        $this->assertEquals("inventoryfileDescription", $data["inventoryfileDescription"]);
        $this->assertEquals("inventoryfileStatus", $data["inventoryfileStatus"]);
        $this->assertEquals("inventoryfileDisplayInline", $data["inventoryfileDisplayInline"]);
    }
}
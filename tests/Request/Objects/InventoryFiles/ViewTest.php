<?php
/**
 * InventoryFiles View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\InventoryFiles;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\InventoryFiles\View();

        
        $query->setInventoryfileID("inventoryfileID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("inventoryfiles", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("inventoryfileID", $data["inventoryfileID"]);
    }
}
<?php
/**
 * InventoryItems View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\InventoryItems\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\InventoryItems\View();

        
        $query->setInventoryitemID("inventoryitemID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("inventoryitems", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("inventoryitemID", $data["inventoryitemID"]);
    }
}
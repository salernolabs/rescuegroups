<?php
/**
 * InventoryItems View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:42
 */
namespace RescueGroups\Tests\Requests\Objects\InventoryItems\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\InventoryItems\View();

        
        $query->setInventoryitemID("inventoryitemID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("inventoryitems", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("inventoryitemID", $data["inventoryitemID"]);
    }
}
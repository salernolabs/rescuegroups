<?php
/**
 * InventoryItems Delete Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:42
 */
namespace RescueGroups\Tests\Requests\Objects\InventoryItems\Delete;

class DeleteTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\InventoryItems\Delete();

        
        $query->setInventoryitemID("inventoryitemID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("inventoryitems", $data["objectType"]);

        $this->assertEquals("delete", $data["objectAction"]);

        $this->assertEquals("inventoryitemID", $data["inventoryitemID"]);
    }
}
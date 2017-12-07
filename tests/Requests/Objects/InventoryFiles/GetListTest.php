<?php
/**
 * InventoryFiles GetList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:42
 */
namespace RescueGroups\Tests\Requests\Objects\InventoryFiles\GetList;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\InventoryFiles\GetList();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("inventoryfiles", $data["objectType"]);

        $this->assertEquals("list", $data["objectAction"]);

    }
}
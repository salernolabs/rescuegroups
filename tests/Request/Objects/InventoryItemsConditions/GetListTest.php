<?php
/**
 * InventoryItemsConditions list Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\InventoryItemsConditions;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\InventoryItemsConditions\GetList();

        $data = $this->api->getPostObject($query);


        $this->assertEquals('inventoryitemsConditions', $data['objectType']);
        $this->assertEquals('list', $data['objectAction']);
    }
}
<?php
/**
 * InventoryItems list Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\InventoryItems;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\InventoryItems\GetList();

        $data = $this->api->getPostObject($query);


        $this->assertEquals('inventoryitems', $data['objectType']);
        $this->assertEquals('list', $data['objectAction']);
    }
}
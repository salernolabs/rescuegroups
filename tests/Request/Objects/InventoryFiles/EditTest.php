<?php
/**
 * InventoryFiles edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\InventoryFiles;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\InventoryFiles\Edit();

        $data = $this->api->getPostObject($query);

        $this->assertEquals('inventoryfiles', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
    }
}
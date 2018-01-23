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

        $testObject = new \RescueGroups\Objects\InventoryFile();
        $testObject->inventoryfileID = 'testValue File';
        $testObject->inventoryfileItemID = 'testValue ID';
        $testObject->inventoryfileDescription = 'testValue Description';
        $testObject->tatus = 'testValue Status';
        $testObject->inventoryfileDisplayInline = 'testValue Inline';

        $query->updateInventoryFile($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('inventoryfiles', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue File', $data['values'][0]['inventoryfileID']);
        $this->assertEquals('testValue ID', $data['values'][0]['inventoryfileItemID']);
        $this->assertEquals('testValue Description', $data['values'][0]['inventoryfileDescription']);
        $this->assertEquals('testValue Status', $data['values'][0]['inventoryfileStatus']);
        $this->assertEquals('testValue Inline', $data['values'][0]['inventoryfileDisplayInline']);
    }
}
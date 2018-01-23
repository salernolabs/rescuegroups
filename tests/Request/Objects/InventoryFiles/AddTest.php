<?php
/**
 * InventoryFiles add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\InventoryFiles;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\InventoryFiles\Add();

        $testObject = new \RescueGroups\Objects\Create\InventoryFile();
        $testObject->inventoryfileBinary = 'testValue File';
        $testObject->inventoryfileOldFileName = 'testValue Old file name';
        $testObject->inventoryfileDescription = 'testValue Description';
        $testObject->tatus = 'testValue Status';
        $testObject->inventoryfileDisplayInline = 'testValue Inline';

        $query->addInventoryFile($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('inventoryfiles', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue File', $data['values'][0]['inventoryfileBinary']);
        $this->assertEquals('testValue Old file name', $data['values'][0]['inventoryfileOldFileName']);
        $this->assertEquals('testValue Description', $data['values'][0]['inventoryfileDescription']);
        $this->assertEquals('testValue Status', $data['values'][0]['inventoryfileStatus']);
        $this->assertEquals('testValue Inline', $data['values'][0]['inventoryfileDisplayInline']);
    }
}
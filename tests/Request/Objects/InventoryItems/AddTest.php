<?php
/**
 * InventoryItems add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\InventoryItems;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\InventoryItems\Add();

        $testObject = new \RescueGroups\Objects\Create\InventoryItem();
        $testObject->name = 'testValue Name';
        $testObject->itemId = 'testValue Item Number/ID';
        $testObject->description = 'testValue Description';
        $testObject->receivedDate = 'testValue Received Date';
        $testObject->source = 'testValue Source';
        $testObject->cost = 'testValue Cost';
        $testObject->category = 'testValue Category';
        $testObject->disposedDate = 'testValue Disposed Date';
        $testObject->disposedDestination = 'testValue Disposed Destination';
        $testObject->storageLocation = 'testValue Storage Location';
        $testObject->quantity = 'testValue Quantity';

        $query->addInventoryItem($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('inventoryitems', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Name', $data['values'][0]['inventoryitemName']);
        $this->assertEquals('testValue Item Number/ID', $data['values'][0]['inventoryitemItemID']);
        $this->assertEquals('testValue Description', $data['values'][0]['inventoryitemDescription']);
        $this->assertEquals('testValue Received Date', $data['values'][0]['inventoryitemReceivedDate']);
        $this->assertEquals('testValue Source', $data['values'][0]['inventoryitemSource']);
        $this->assertEquals('testValue Cost', $data['values'][0]['inventoryitemCost']);
        $this->assertEquals('testValue Category', $data['values'][0]['inventoryitemCategory']);
        $this->assertEquals('testValue Disposed Date', $data['values'][0]['inventoryitemDisposedDate']);
        $this->assertEquals('testValue Disposed Destination', $data['values'][0]['inventoryitemDisposedDestination']);
        $this->assertEquals('testValue Storage Location', $data['values'][0]['inventoryitemStorageLocation']);
        $this->assertEquals('testValue Quantity', $data['values'][0]['inventoryitemQuantity']);
    }
}
<?php
/**
 * InventoryItems search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\InventoryItems;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\InventoryItems\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('inventoryitemID')
            ->addField('inventoryitemName')
            ->addField('inventoryitemItemID')
            ->addField('inventoryitemDescription')
            ->addField('inventoryitemReceivedDate')
            ->addField('inventoryitemSource')
            ->addField('inventoryitemCost')
            ->addField('inventoryitemConditionID')
            ->addField('inventoryitemCondition')
            ->addField('inventoryitemCategory')
            ->addField('inventoryitemDisposedDate')
            ->addField('inventoryitemDisposedDestination')
            ->addField('inventoryitemStorageLocation')
            ->addField('inventoryitemFiles')
            ->addField('inventoryitemLoaners')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('inventoryitems', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
        $translatedFields = [
            "inventoryitemID",
            "inventoryitemName",
            "inventoryitemItemID",
            "inventoryitemDescription",
            "inventoryitemReceivedDate",
            "inventoryitemSource",
            "inventoryitemCost",
            "inventoryitemConditionID",
            "inventoryitemCondition",
            "inventoryitemCategory",
            "inventoryitemDisposedDate",
            "inventoryitemDisposedDestination",
            "inventoryitemStorageLocation",
            "inventoryitemFiles",
            "inventoryitemLoaners",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
    }
}

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
            ->addFilter('inventoryitemID', 'equals', 'ID')
            ->addField('inventoryitemName')
            ->addFilter('inventoryitemName', 'equals', 'Name')
            ->addField('inventoryitemItemID')
            ->addFilter('inventoryitemItemID', 'equals', 'Item Number/ID')
            ->addField('inventoryitemDescription')
            ->addFilter('inventoryitemDescription', 'equals', 'Description')
            ->addField('inventoryitemReceivedDate')
            ->addFilter('inventoryitemReceivedDate', 'equals', 'Received Date')
            ->addField('ource')
            ->addFilter('ource', 'equals', 'Source')
            ->addField('inventoryitemCost')
            ->addFilter('inventoryitemCost', 'equals', 'Cost')
            ->addField('inventoryitemConditionID')
            ->addFilter('inventoryitemConditionID', 'equals', 'Condition')
            ->addField('inventoryitemCondition')
            ->addFilter('inventoryitemCondition', 'equals', 'Condition')
            ->addField('inventoryitemCategory')
            ->addFilter('inventoryitemCategory', 'equals', 'Category')
            ->addField('inventoryitemDisposedDate')
            ->addFilter('inventoryitemDisposedDate', 'equals', 'Disposed Date')
            ->addField('inventoryitemDisposedDestination')
            ->addFilter('inventoryitemDisposedDestination', 'equals', 'Disposed Destination')
            ->addField('torageLocation')
            ->addFilter('torageLocation', 'equals', 'Storage Location')
            ->addField('inventoryitemFiles')
            ->addFilter('inventoryitemFiles', 'equals', 'Files')
            ->addField('inventoryitemLoaners')
            ->addFilter('inventoryitemLoaners', 'equals', 'Loaners')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('inventoryitems', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'inventoryitemID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'inventoryitemName','operation'=>'equals','criteria'=>"Name"],
            ['fieldName'=>'inventoryitemItemID','operation'=>'equals','criteria'=>"Item Number/ID"],
            ['fieldName'=>'inventoryitemDescription','operation'=>'equals','criteria'=>"Description"],
            ['fieldName'=>'inventoryitemReceivedDate','operation'=>'equals','criteria'=>"Received Date"],
            ['fieldName'=>'inventoryitemSource','operation'=>'equals','criteria'=>"Source"],
            ['fieldName'=>'inventoryitemCost','operation'=>'equals','criteria'=>"Cost"],
            ['fieldName'=>'inventoryitemConditionID','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'inventoryitemCondition','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'inventoryitemCategory','operation'=>'equals','criteria'=>"Category"],
            ['fieldName'=>'inventoryitemDisposedDate','operation'=>'equals','criteria'=>"Disposed Date"],
            ['fieldName'=>'inventoryitemDisposedDestination','operation'=>'equals','criteria'=>"Disposed Destination"],
            ['fieldName'=>'inventoryitemStorageLocation','operation'=>'equals','criteria'=>"Storage Location"],
            ['fieldName'=>'inventoryitemFiles','operation'=>'equals','criteria'=>"Files"],
            ['fieldName'=>'inventoryitemLoaners','operation'=>'equals','criteria'=>"Loaners"],
        ];

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
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}

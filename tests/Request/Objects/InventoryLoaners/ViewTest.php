<?php
/**
 * InventoryLoaners view Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\InventoryLoaners;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\InventoryLoaners\View();
        $query->setId("ID");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("ID", $data['values'][0]["inventoryLoanerID"]);

        $this->assertEquals('inventoryLoaners', $data['objectType']);
        $this->assertEquals('view', $data['objectAction']);
    }
}
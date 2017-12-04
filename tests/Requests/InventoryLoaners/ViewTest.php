<?php
/**
 * InventoryLoaners View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\InventoryLoaners\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\InventoryLoaners\View();

        
        $query->setInventoryLoanerID("inventoryLoanerID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("inventoryLoaners", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("inventoryLoanerID", $data["inventoryLoanerID"]);
    }
}
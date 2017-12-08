<?php
/**
 * InventoryLoaners Delete Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\InventoryLoaners\Delete;

class DeleteTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\InventoryLoaners\Delete();

        
        $query->setInventoryLoanerID("inventoryLoanerID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("inventoryLoaners", $data["objectType"]);

        $this->assertEquals("delete", $data["objectAction"]);

        $this->assertEquals("inventoryLoanerID", $data["inventoryLoanerID"]);
    }
}
<?php
/**
 * InventoryLoaners add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\InventoryLoaners;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\InventoryLoaners\Add();
        $data = $this->api->getPostObject($query);

        $this->assertEquals('inventoryLoaners', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
    }
}
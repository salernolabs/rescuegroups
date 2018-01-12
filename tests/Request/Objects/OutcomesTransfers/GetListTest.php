<?php
/**
 * OutcomesTransfers GetList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesTransfers;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesTransfers\GetList();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesTransfers", $data["objectType"]);

        $this->assertEquals("list", $data["objectAction"]);

    }
}
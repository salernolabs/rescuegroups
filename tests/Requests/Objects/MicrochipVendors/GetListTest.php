<?php
/**
 * MicrochipVendors GetList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:43
 */
namespace RescueGroups\Tests\Requests\Objects\MicrochipVendors\GetList;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\MicrochipVendors\GetList();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("microchipVendors", $data["objectType"]);

        $this->assertEquals("list", $data["objectAction"]);

    }
}
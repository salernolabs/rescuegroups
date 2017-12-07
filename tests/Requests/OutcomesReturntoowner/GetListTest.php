<?php
/**
 * OutcomesReturntoowner GetList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\OutcomesReturntoowner\GetList;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\OutcomesReturntoowner\GetList();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesReturntoowner", $data["objectType"]);

        $this->assertEquals("list", $data["objectAction"]);

    }
}
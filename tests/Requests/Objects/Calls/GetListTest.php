<?php
/**
 * Calls GetList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:37
 */
namespace RescueGroups\Tests\Requests\Objects\Calls\GetList;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Calls\GetList();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("calls", $data["objectType"]);

        $this->assertEquals("list", $data["objectAction"]);

    }
}
<?php
/**
 * WebPages GetList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:46
 */
namespace RescueGroups\Tests\Requests\Objects\WebPages\GetList;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\WebPages\GetList();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("webpages", $data["objectType"]);

        $this->assertEquals("list", $data["objectAction"]);

    }
}
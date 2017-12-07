<?php
/**
 * ContactFiles GetList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:20
 */
namespace RescueGroups\Tests\Requests\Objects\ContactFiles\GetList;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\ContactFiles\GetList();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("contactFiles", $data["objectType"]);

        $this->assertEquals("list", $data["objectAction"]);

    }
}
<?php
/**
 * ContactFiles GetList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\ContactFiles\GetList;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\ContactFiles\GetList();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("contactFiles", $data["objectType"]);

        $this->assertEquals("list", $data["objectAction"]);

    }
}
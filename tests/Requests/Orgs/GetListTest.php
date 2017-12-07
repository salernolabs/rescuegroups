<?php
/**
 * Orgs GetList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Orgs\GetList;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Orgs\GetList();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("orgs", $data["objectType"]);

        $this->assertEquals("list", $data["objectAction"]);

    }
}
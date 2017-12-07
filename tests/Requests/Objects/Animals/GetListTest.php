<?php
/**
 * Animals GetList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\Animals\GetList;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Animals\GetList();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animals", $data["objectType"]);

        $this->assertEquals("list", $data["objectAction"]);

    }
}
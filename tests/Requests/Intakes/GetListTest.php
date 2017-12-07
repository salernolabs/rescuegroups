<?php
/**
 * Intakes GetList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Intakes\GetList;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Intakes\GetList();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakes", $data["objectType"]);

        $this->assertEquals("list", $data["objectAction"]);

    }
}
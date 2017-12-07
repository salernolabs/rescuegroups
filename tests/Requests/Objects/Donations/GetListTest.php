<?php
/**
 * Donations GetList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:21
 */
namespace RescueGroups\Tests\Requests\Objects\Donations\GetList;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Donations\GetList();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("donations", $data["objectType"]);

        $this->assertEquals("list", $data["objectAction"]);

    }
}
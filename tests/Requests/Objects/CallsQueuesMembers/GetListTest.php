<?php
/**
 * CallsQueuesMembers GetList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\CallsQueuesMembers\GetList;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\CallsQueuesMembers\GetList();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("callsQueuesMembers", $data["objectType"]);

        $this->assertEquals("list", $data["objectAction"]);

    }
}
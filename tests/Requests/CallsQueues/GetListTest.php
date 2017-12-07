<?php
/**
 * CallsQueues GetList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\CallsQueues\GetList;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\CallsQueues\GetList();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("callsQueues", $data["objectType"]);

        $this->assertEquals("list", $data["objectAction"]);

    }
}
<?php
/**
 * CallsOutcomes GetList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\CallsOutcomes;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\CallsOutcomes\GetList();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("callsOutcomes", $data["objectType"]);

        $this->assertEquals("list", $data["objectAction"]);

    }
}
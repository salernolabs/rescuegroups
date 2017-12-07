<?php
/**
 * OutcomesDeceased GetList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\OutcomesDeceased\GetList;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\OutcomesDeceased\GetList();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesDeceased", $data["objectType"]);

        $this->assertEquals("list", $data["objectAction"]);

    }
}
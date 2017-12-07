<?php
/**
 * AnimalsReasonsEuthanasia GetList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:36
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalsReasonsEuthanasia\GetList;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalsReasonsEuthanasia\GetList();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsReasonsEuthanasia", $data["objectType"]);

        $this->assertEquals("list", $data["objectAction"]);

    }
}
<?php
/**
 * AnimalsReasonsSurrender GetList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:18
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalsReasonsSurrender\GetList;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalsReasonsSurrender\GetList();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsReasonsSurrender", $data["objectType"]);

        $this->assertEquals("list", $data["objectAction"]);

    }
}
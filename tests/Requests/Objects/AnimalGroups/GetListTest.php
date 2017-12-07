<?php
/**
 * AnimalGroups GetList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:34
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalGroups\GetList;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalGroups\GetList();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalGroups", $data["objectType"]);

        $this->assertEquals("list", $data["objectAction"]);

    }
}
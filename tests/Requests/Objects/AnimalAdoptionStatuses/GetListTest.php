<?php
/**
 * AnimalAdoptionStatuses GetList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalAdoptionStatuses\GetList;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalAdoptionStatuses\GetList();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalAdoptionStatuses", $data["objectType"]);

        $this->assertEquals("list", $data["objectAction"]);

    }
}
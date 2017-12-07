<?php
/**
 * AnimalAdoptionLeads GetList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalAdoptionLeads\GetList;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalAdoptionLeads\GetList();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalAdoptionLeads", $data["objectType"]);

        $this->assertEquals("list", $data["objectAction"]);

    }
}
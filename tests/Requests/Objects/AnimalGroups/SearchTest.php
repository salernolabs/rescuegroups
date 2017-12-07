<?php
/**
 * AnimalGroups Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:34
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalGroups\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalGroups\Search();

        
        $query->setGroupID("groupID");
        $query->setGroupName("groupName");
        $query->setGroupHeaderID("groupHeaderID");
        $query->setGroupAnimals("groupAnimals");
        $query->setWebpageName("webpageName");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalGroups", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("groupID", $data["groupID"]);
        $this->assertEquals("groupName", $data["groupName"]);
        $this->assertEquals("groupHeaderID", $data["groupHeaderID"]);
        $this->assertEquals("groupAnimals", $data["groupAnimals"]);
        $this->assertEquals("webpageName", $data["webpageName"]);
    }
}
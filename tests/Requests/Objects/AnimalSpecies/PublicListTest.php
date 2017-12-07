<?php
/**
 * AnimalSpecies PublicList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:18
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalSpecies\PublicList;

class PublicListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalSpecies\PublicList();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalSpecies", $data["objectType"]);

        $this->assertEquals("publicList", $data["objectAction"]);

    }
}
<?php
/**
 * AnimalBreeds PublicList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\AnimalBreeds\PublicList;

class PublicListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\AnimalBreeds\PublicList();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalBreeds", $data["objectType"]);

        $this->assertEquals("publicList", $data["objectAction"]);

    }
}
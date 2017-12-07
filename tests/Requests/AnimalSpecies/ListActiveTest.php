<?php
/**
 * AnimalSpecies ListActive Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\AnimalSpecies\ListActive;

class ListActiveTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\AnimalSpecies\ListActive();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalSpecies", $data["objectType"]);

        $this->assertEquals("listActive", $data["objectAction"]);

    }
}
<?php
/**
 * AnimalSpecies ListActive Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:19
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalSpecies\ListActive;

class ListActiveTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalSpecies\ListActive();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalSpecies", $data["objectType"]);

        $this->assertEquals("listActive", $data["objectAction"]);

    }
}
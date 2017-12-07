<?php
/**
 * AnimalColors PublicSearch Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalColors\PublicSearch;

class PublicSearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalColors\PublicSearch();

        
        $query->setColorID("colorID");
        $query->setColorName("colorName");
        $query->setColorSpecies("colorSpecies");
        $query->setColorSpeciesID("colorSpeciesID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalColors", $data["objectType"]);

        $this->assertEquals("publicSearch", $data["objectAction"]);

        $this->assertEquals("colorID", $data["colorID"]);
        $this->assertEquals("colorName", $data["colorName"]);
        $this->assertEquals("colorSpecies", $data["colorSpecies"]);
        $this->assertEquals("colorSpeciesID", $data["colorSpeciesID"]);
    }
}
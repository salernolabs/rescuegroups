<?php
/**
 * AnimalPatterns PublicSearch Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalPatterns\PublicSearch;

class PublicSearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalPatterns\PublicSearch();

        
        $query->setPatternID("patternID");
        $query->setPatternName("patternName");
        $query->setPatternSpecies("patternSpecies");
        $query->setPatternSpeciesID("patternSpeciesID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalPatterns", $data["objectType"]);

        $this->assertEquals("publicSearch", $data["objectAction"]);

        $this->assertEquals("patternID", $data["patternID"]);
        $this->assertEquals("patternName", $data["patternName"]);
        $this->assertEquals("patternSpecies", $data["patternSpecies"]);
        $this->assertEquals("patternSpeciesID", $data["patternSpeciesID"]);
    }
}
<?php
/**
 * AnimalPatterns Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:36
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalPatterns\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalPatterns\Search();

        
        $query->setPatternID("patternID");
        $query->setPatternName("patternName");
        $query->setPatternSpecies("patternSpecies");
        $query->setPatternSpeciesID("patternSpeciesID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalPatterns", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("patternID", $data["patternID"]);
        $this->assertEquals("patternName", $data["patternName"]);
        $this->assertEquals("patternSpecies", $data["patternSpecies"]);
        $this->assertEquals("patternSpeciesID", $data["patternSpeciesID"]);
    }
}
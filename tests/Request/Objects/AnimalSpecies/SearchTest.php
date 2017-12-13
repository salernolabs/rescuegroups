<?php
/**
 * AnimalSpecies Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalSpecies;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalSpecies\Search();

        
        $query->setSpeciesID("speciesID");
        $query->setSpeciesSingular("speciesSingular");
        $query->setSpeciesPlural("speciesPlural");
        $query->setSpeciesSingularYoung("speciesSingularYoung");
        $query->setSpeciesPluralYoung("speciesPluralYoung");
        $query->setSpeciesFullname("speciesFullname");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalSpecies", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("speciesID", $data["speciesID"]);
        $this->assertEquals("speciesSingular", $data["speciesSingular"]);
        $this->assertEquals("speciesPlural", $data["speciesPlural"]);
        $this->assertEquals("speciesSingularYoung", $data["speciesSingularYoung"]);
        $this->assertEquals("speciesPluralYoung", $data["speciesPluralYoung"]);
        $this->assertEquals("speciesFullname", $data["speciesFullname"]);
    }
}
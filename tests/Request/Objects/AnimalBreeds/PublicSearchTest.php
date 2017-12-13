<?php
/**
 * AnimalBreeds PublicSearch Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalBreeds\PublicSearch;

class PublicSearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalBreeds\PublicSearch();

        
        $query->setBreedID("breedID");
        $query->setBreedName("breedName");
        $query->setBreedSpecies("breedSpecies");
        $query->setBreedSpeciesID("breedSpeciesID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalBreeds", $data["objectType"]);

        $this->assertEquals("publicSearch", $data["objectAction"]);

        $this->assertEquals("breedID", $data["breedID"]);
        $this->assertEquals("breedName", $data["breedName"]);
        $this->assertEquals("breedSpecies", $data["breedSpecies"]);
        $this->assertEquals("breedSpeciesID", $data["breedSpeciesID"]);
    }
}
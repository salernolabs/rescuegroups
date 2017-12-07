<?php
/**
 * AnimalBreeds Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalBreeds\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalBreeds\Search();

        
        $query->setBreedID("breedID");
        $query->setSpecies("species");
        $query->setBreedName("breedName");
        $query->setBreedSpecies("breedSpecies");
        $query->setBreedSpeciesID("breedSpeciesID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalBreeds", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("breedID", $data["breedID"]);
        $this->assertEquals("species", $data["species"]);
        $this->assertEquals("breedName", $data["breedName"]);
        $this->assertEquals("breedSpecies", $data["breedSpecies"]);
        $this->assertEquals("breedSpeciesID", $data["breedSpeciesID"]);
    }
}
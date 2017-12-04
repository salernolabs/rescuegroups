<?php
/**
 * AnimalFiles Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\AnimalFiles\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\AnimalFiles\Search();

        
        $query->setAnimalfileID("animalfileID");
        $query->setAnimalfileAnimalID("animalfileAnimalID");
        $query->setAnimalfileOldName("animalfileOldName");
        $query->setAnimalfileDescription("animalfileDescription");
        $query->setAnimalfileStatus("animalfileStatus");
        $query->setAnimalfileDisplayInline("animalfileDisplayInline");
        $query->setAnimalfilePublic("animalfilePublic");
        $query->setAnimalfileSize("animalfileSize");
        $query->setAnimalfileCreatedDate("animalfileCreatedDate");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalFiles", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("animalfileID", $data["animalfileID"]);
        $this->assertEquals("animalfileAnimalID", $data["animalfileAnimalID"]);
        $this->assertEquals("animalfileOldName", $data["animalfileOldName"]);
        $this->assertEquals("animalfileDescription", $data["animalfileDescription"]);
        $this->assertEquals("animalfileStatus", $data["animalfileStatus"]);
        $this->assertEquals("animalfileDisplayInline", $data["animalfileDisplayInline"]);
        $this->assertEquals("animalfilePublic", $data["animalfilePublic"]);
        $this->assertEquals("animalfileSize", $data["animalfileSize"]);
        $this->assertEquals("animalfileCreatedDate", $data["animalfileCreatedDate"]);
    }
}
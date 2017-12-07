<?php
/**
 * AnimalFiles Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:16
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalFiles\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalFiles\Edit();

        
        $query->setAnimalfileID("animalfileID");
        $query->setAnimalfileAnimalID("animalfileAnimalID");
        $query->setAnimalfileDescription("animalfileDescription");
        $query->setAnimalfileStatus("animalfileStatus");
        $query->setAnimalfileDisplayInline("animalfileDisplayInline");
        $query->setAnimalfilePublic("animalfilePublic");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalFiles", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("animalfileID", $data["animalfileID"]);
        $this->assertEquals("animalfileAnimalID", $data["animalfileAnimalID"]);
        $this->assertEquals("animalfileDescription", $data["animalfileDescription"]);
        $this->assertEquals("animalfileStatus", $data["animalfileStatus"]);
        $this->assertEquals("animalfileDisplayInline", $data["animalfileDisplayInline"]);
        $this->assertEquals("animalfilePublic", $data["animalfilePublic"]);
    }
}
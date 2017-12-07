<?php
/**
 * AnimalFiles Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalFiles\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalFiles\Add();

        
        $query->setAnimalfileAnimalID("animalfileAnimalID");
        $query->setAnimalfileBinary("animalfileBinary");
        $query->setAnimalfileOldFileName("animalfileOldFileName");
        $query->setAnimalfileDescription("animalfileDescription");
        $query->setAnimalfileStatus("animalfileStatus");
        $query->setAnimalfileDisplayInline("animalfileDisplayInline");
        $query->setAnimalfilePublic("animalfilePublic");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalFiles", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("animalfileAnimalID", $data["animalfileAnimalID"]);
        $this->assertEquals("animalfileBinary", $data["animalfileBinary"]);
        $this->assertEquals("animalfileOldFileName", $data["animalfileOldFileName"]);
        $this->assertEquals("animalfileDescription", $data["animalfileDescription"]);
        $this->assertEquals("animalfileStatus", $data["animalfileStatus"]);
        $this->assertEquals("animalfileDisplayInline", $data["animalfileDisplayInline"]);
        $this->assertEquals("animalfilePublic", $data["animalfilePublic"]);
    }
}
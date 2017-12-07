<?php
/**
 * IntakesBornInRescueShelter Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:22
 */
namespace RescueGroups\Tests\Requests\Objects\IntakesBornInRescueShelter\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\IntakesBornInRescueShelter\Search();

        
        $query->setId("id");
        $query->setAnimalID("animalID");
        $query->setAnimalConditionID("animalConditionID");
        $query->setDate("date");
        $query->setNotes("notes");
        $query->setAnimalName("animalName");
        $query->setAnimalConditionName("animalConditionName");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesBorninrescueshelter", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("id", $data["intakesBorninrescueshelterID"]);
        $this->assertEquals("animalID", $data["intakesBorninrescueshelterAnimalID"]);
        $this->assertEquals("animalConditionID", $data["intakesBorninrescueshelterAnimalConditionID"]);
        $this->assertEquals("date", $data["intakesBorninrescueshelterDate"]);
        $this->assertEquals("notes", $data["intakesBorninrescueshelterNotes"]);
        $this->assertEquals("animalName", $data["animalName"]);
        $this->assertEquals("animalConditionName", $data["animalConditionName"]);
    }
}
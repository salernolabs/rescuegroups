<?php
/**
 * IntakesBornInRescueShelter Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesBornInRescueShelter\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesBornInRescueShelter\Edit();

        
        $query->setId("id");
        $query->setAnimalID("animalID");
        $query->setAnimalConditionID("animalConditionID");
        $query->setDate("date");
        $query->setNotes("notes");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesBorninrescueshelter", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("id", $data["intakesBorninrescueshelterID"]);
        $this->assertEquals("animalID", $data["intakesBorninrescueshelterAnimalID"]);
        $this->assertEquals("animalConditionID", $data["intakesBorninrescueshelterAnimalConditionID"]);
        $this->assertEquals("date", $data["intakesBorninrescueshelterDate"]);
        $this->assertEquals("notes", $data["intakesBorninrescueshelterNotes"]);
    }
}
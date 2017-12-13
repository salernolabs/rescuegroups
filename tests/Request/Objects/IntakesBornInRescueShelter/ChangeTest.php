<?php
/**
 * IntakesBornInRescueShelter Change Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesBornInRescueShelter;

class ChangeTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesBornInRescueShelter\Change();

        
        $query->setIntakeID("intakeID");
        $query->setAnimalID("animalID");
        $query->setAnimalConditionID("animalConditionID");
        $query->setDate("date");
        $query->setNotes("notes");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesBorninrescueshelter", $data["objectType"]);

        $this->assertEquals("change", $data["objectAction"]);

        $this->assertEquals("intakeID", $data["intakeID"]);
        $this->assertEquals("animalID", $data["intakesBorninrescueshelterAnimalID"]);
        $this->assertEquals("animalConditionID", $data["intakesBorninrescueshelterAnimalConditionID"]);
        $this->assertEquals("date", $data["intakesBorninrescueshelterDate"]);
        $this->assertEquals("notes", $data["intakesBorninrescueshelterNotes"]);
    }
}
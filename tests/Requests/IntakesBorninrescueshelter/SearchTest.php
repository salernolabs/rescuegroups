<?php
/**
 * IntakesBorninrescueshelter Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\IntakesBorninrescueshelter\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\IntakesBorninrescueshelter\Search();

        
        $query->setIntakesBorninrescueshelterID("intakesBorninrescueshelterID");
        $query->setIntakesBorninrescueshelterAnimalID("intakesBorninrescueshelterAnimalID");
        $query->setIntakesBorninrescueshelterAnimalConditionID("intakesBorninrescueshelterAnimalConditionID");
        $query->setIntakesBorninrescueshelterDate("intakesBorninrescueshelterDate");
        $query->setIntakesBorninrescueshelterNotes("intakesBorninrescueshelterNotes");
        $query->setAnimalName("animalName");
        $query->setAnimalConditionName("animalConditionName");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesBorninrescueshelter", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("intakesBorninrescueshelterID", $data["intakesBorninrescueshelterID"]);
        $this->assertEquals("intakesBorninrescueshelterAnimalID", $data["intakesBorninrescueshelterAnimalID"]);
        $this->assertEquals("intakesBorninrescueshelterAnimalConditionID", $data["intakesBorninrescueshelterAnimalConditionID"]);
        $this->assertEquals("intakesBorninrescueshelterDate", $data["intakesBorninrescueshelterDate"]);
        $this->assertEquals("intakesBorninrescueshelterNotes", $data["intakesBorninrescueshelterNotes"]);
        $this->assertEquals("animalName", $data["animalName"]);
        $this->assertEquals("animalConditionName", $data["animalConditionName"]);
    }
}
<?php
/**
 * IntakesBorninrescueshelter Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\IntakesBorninrescueshelter\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\IntakesBorninrescueshelter\Add();

        
        $query->setIntakesBorninrescueshelterAnimalID("intakesBorninrescueshelterAnimalID");
        $query->setIntakesBorninrescueshelterAnimalConditionID("intakesBorninrescueshelterAnimalConditionID");
        $query->setIntakesBorninrescueshelterDate("intakesBorninrescueshelterDate");
        $query->setIntakesBorninrescueshelterNotes("intakesBorninrescueshelterNotes");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesBorninrescueshelter", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("intakesBorninrescueshelterAnimalID", $data["intakesBorninrescueshelterAnimalID"]);
        $this->assertEquals("intakesBorninrescueshelterAnimalConditionID", $data["intakesBorninrescueshelterAnimalConditionID"]);
        $this->assertEquals("intakesBorninrescueshelterDate", $data["intakesBorninrescueshelterDate"]);
        $this->assertEquals("intakesBorninrescueshelterNotes", $data["intakesBorninrescueshelterNotes"]);
    }
}
<?php
/**
 * IntakesBornInRescueShelter Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:40
 */
namespace RescueGroups\Tests\Requests\Objects\IntakesBornInRescueShelter\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\IntakesBornInRescueShelter\Add();

        
        $query->setAnimalID("animalID");
        $query->setAnimalConditionID("animalConditionID");
        $query->setDate("date");
        $query->setNotes("notes");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesBorninrescueshelter", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("animalID", $data["intakesBorninrescueshelterAnimalID"]);
        $this->assertEquals("animalConditionID", $data["intakesBorninrescueshelterAnimalConditionID"]);
        $this->assertEquals("date", $data["intakesBorninrescueshelterDate"]);
        $this->assertEquals("notes", $data["intakesBorninrescueshelterNotes"]);
    }
}
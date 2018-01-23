<?php
/**
 * IntakesBornInRescueShelter change Request Test
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
        $query->setIntakeId("Intake");
        $query->setAnimalId("Animal");
        $query->setAnimalConditionId("Condition");
        $query->setDate("Date");
        $query->setNotes("Notes");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Intake", $data['values'][0]["intakeID"]);
        $this->assertEquals("Animal", $data['values'][0]["intakesBorninrescueshelterAnimalID"]);
        $this->assertEquals("Condition", $data['values'][0]["intakesBorninrescueshelterAnimalConditionID"]);
        $this->assertEquals("Date", $data['values'][0]["intakesBorninrescueshelterDate"]);
        $this->assertEquals("Notes", $data['values'][0]["intakesBorninrescueshelterNotes"]);

        $this->assertEquals('intakesBorninrescueshelter', $data['objectType']);
        $this->assertEquals('change', $data['objectAction']);
    }
}
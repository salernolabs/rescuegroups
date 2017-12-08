<?php
/**
 * IntakesStrayDropoffs Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\IntakesStrayDropoffs\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\IntakesStrayDropoffs\Edit();

        
        $query->setIntakesStraydropoffID("intakesStraydropoffID");
        $query->setIntakesStraydropoffAnimalID("intakesStraydropoffAnimalID");
        $query->setIntakesStraydropoffAnimalConditionID("intakesStraydropoffAnimalConditionID");
        $query->setIntakesStraydropoffDate("intakesStraydropoffDate");
        $query->setIntakesStraydropoffNotes("intakesStraydropoffNotes");
        $query->setIntakesStraydropoffFoundLocation("intakesStraydropoffFoundLocation");
        $query->setIntakesStraydropoffFoundAddress("intakesStraydropoffFoundAddress");
        $query->setIntakesStraydropoffFoundCity("intakesStraydropoffFoundCity");
        $query->setIntakesStraydropoffFoundState("intakesStraydropoffFoundState");
        $query->setIntakesStraydropoffFoundPostalcode("intakesStraydropoffFoundPostalcode");
        $query->setIntakesStraydropoffFinderID("intakesStraydropoffFinderID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesStraydropoffs", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("intakesStraydropoffID", $data["intakesStraydropoffID"]);
        $this->assertEquals("intakesStraydropoffAnimalID", $data["intakesStraydropoffAnimalID"]);
        $this->assertEquals("intakesStraydropoffAnimalConditionID", $data["intakesStraydropoffAnimalConditionID"]);
        $this->assertEquals("intakesStraydropoffDate", $data["intakesStraydropoffDate"]);
        $this->assertEquals("intakesStraydropoffNotes", $data["intakesStraydropoffNotes"]);
        $this->assertEquals("intakesStraydropoffFoundLocation", $data["intakesStraydropoffFoundLocation"]);
        $this->assertEquals("intakesStraydropoffFoundAddress", $data["intakesStraydropoffFoundAddress"]);
        $this->assertEquals("intakesStraydropoffFoundCity", $data["intakesStraydropoffFoundCity"]);
        $this->assertEquals("intakesStraydropoffFoundState", $data["intakesStraydropoffFoundState"]);
        $this->assertEquals("intakesStraydropoffFoundPostalcode", $data["intakesStraydropoffFoundPostalcode"]);
        $this->assertEquals("intakesStraydropoffFinderID", $data["intakesStraydropoffFinderID"]);
    }
}
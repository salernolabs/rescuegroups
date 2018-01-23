<?php
/**
 * IntakesStrayDropoffs change Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesStrayDropoffs;

class ChangeTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesStrayDropoffs\Change();
        $query->setIntakeId("Intake");
        $query->setAnimalId("Animal");
        $query->setAnimalConditionId("Condition");
        $query->setDate("Date");
        $query->setNotes("Notes");
        $query->setFoundLocation("Found Location");
        $query->setFoundAddress("Found Street address");
        $query->setFoundCity("Found City");
        $query->setFoundState("Found State/Province");
        $query->setFoundPostalcode("Found Postal Code");
        $query->setFinderId("Dropped off by");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Intake", $data['values'][0]["intakeID"]);
        $this->assertEquals("Animal", $data['values'][0]["intakesStraydropoffAnimalID"]);
        $this->assertEquals("Condition", $data['values'][0]["intakesStraydropoffAnimalConditionID"]);
        $this->assertEquals("Date", $data['values'][0]["intakesStraydropoffDate"]);
        $this->assertEquals("Notes", $data['values'][0]["intakesStraydropoffNotes"]);
        $this->assertEquals("Found Location", $data['values'][0]["intakesStraydropoffFoundLocation"]);
        $this->assertEquals("Found Street address", $data['values'][0]["intakesStraydropoffFoundAddress"]);
        $this->assertEquals("Found City", $data['values'][0]["intakesStraydropoffFoundCity"]);
        $this->assertEquals("Found State/Province", $data['values'][0]["intakesStraydropoffFoundState"]);
        $this->assertEquals("Found Postal Code", $data['values'][0]["intakesStraydropoffFoundPostalcode"]);
        $this->assertEquals("Dropped off by", $data['values'][0]["intakesStraydropoffFinderID"]);

        $this->assertEquals('intakesStraydropoffs', $data['objectType']);
        $this->assertEquals('change', $data['objectAction']);
    }
}
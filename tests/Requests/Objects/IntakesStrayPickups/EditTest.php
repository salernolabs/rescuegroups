<?php
/**
 * IntakesStrayPickups Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:23
 */
namespace RescueGroups\Tests\Requests\Objects\IntakesStrayPickups\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\IntakesStrayPickups\Edit();

        
        $query->setIntakesStraypickupID("intakesStraypickupID");
        $query->setIntakesStraypickupAnimalID("intakesStraypickupAnimalID");
        $query->setIntakesStraypickupAnimalConditionID("intakesStraypickupAnimalConditionID");
        $query->setIntakesStraypickupDate("intakesStraypickupDate");
        $query->setIntakesStraypickupNotes("intakesStraypickupNotes");
        $query->setIntakesStraypickupLocation("intakesStraypickupLocation");
        $query->setIntakesStraypickupAddress("intakesStraypickupAddress");
        $query->setIntakesStraypickupCity("intakesStraypickupCity");
        $query->setIntakesStraypickupState("intakesStraypickupState");
        $query->setIntakesStraypickupPostalcode("intakesStraypickupPostalcode");
        $query->setIntakesStraypickupFinderID("intakesStraypickupFinderID");
        $query->setIntakesStraypickupStaffID("intakesStraypickupStaffID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesStraypickups", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("intakesStraypickupID", $data["intakesStraypickupID"]);
        $this->assertEquals("intakesStraypickupAnimalID", $data["intakesStraypickupAnimalID"]);
        $this->assertEquals("intakesStraypickupAnimalConditionID", $data["intakesStraypickupAnimalConditionID"]);
        $this->assertEquals("intakesStraypickupDate", $data["intakesStraypickupDate"]);
        $this->assertEquals("intakesStraypickupNotes", $data["intakesStraypickupNotes"]);
        $this->assertEquals("intakesStraypickupLocation", $data["intakesStraypickupLocation"]);
        $this->assertEquals("intakesStraypickupAddress", $data["intakesStraypickupAddress"]);
        $this->assertEquals("intakesStraypickupCity", $data["intakesStraypickupCity"]);
        $this->assertEquals("intakesStraypickupState", $data["intakesStraypickupState"]);
        $this->assertEquals("intakesStraypickupPostalcode", $data["intakesStraypickupPostalcode"]);
        $this->assertEquals("intakesStraypickupFinderID", $data["intakesStraypickupFinderID"]);
        $this->assertEquals("intakesStraypickupStaffID", $data["intakesStraypickupStaffID"]);
    }
}
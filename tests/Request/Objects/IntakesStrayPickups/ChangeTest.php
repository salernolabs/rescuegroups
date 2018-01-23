<?php
/**
 * IntakesStrayPickups change Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesStrayPickups;

class ChangeTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesStrayPickups\Change();
        $query->setIntakeId("Intake");
        $query->setAnimalId("Animal");
        $query->setAnimalConditionId("Condition");
        $query->setDate("Date");
        $query->setNotes("Notes");
        $query->setLocation("Pickup Location");
        $query->setAddress("Pickup Street address");
        $query->setCity("Pickup City");
        $query->setState("Pickup State/Province");
        $query->setPostalcode("Pickup Postal Code");
        $query->setFinderId("Found By");
        $query->setStaffId("Pickup By");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Intake", $data['values'][0]["intakeID"]);
        $this->assertEquals("Animal", $data['values'][0]["intakesStraypickupAnimalID"]);
        $this->assertEquals("Condition", $data['values'][0]["intakesStraypickupAnimalConditionID"]);
        $this->assertEquals("Date", $data['values'][0]["intakesStraypickupDate"]);
        $this->assertEquals("Notes", $data['values'][0]["intakesStraypickupNotes"]);
        $this->assertEquals("Pickup Location", $data['values'][0]["intakesStraypickupLocation"]);
        $this->assertEquals("Pickup Street address", $data['values'][0]["intakesStraypickupAddress"]);
        $this->assertEquals("Pickup City", $data['values'][0]["intakesStraypickupCity"]);
        $this->assertEquals("Pickup State/Province", $data['values'][0]["intakesStraypickupState"]);
        $this->assertEquals("Pickup Postal Code", $data['values'][0]["intakesStraypickupPostalcode"]);
        $this->assertEquals("Found By", $data['values'][0]["intakesStraypickupFinderID"]);
        $this->assertEquals("Pickup By", $data['values'][0]["intakesStraypickupStaffID"]);

        $this->assertEquals('intakesStraypickups', $data['objectType']);
        $this->assertEquals('change', $data['objectAction']);
    }
}
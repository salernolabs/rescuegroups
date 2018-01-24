<?php
/**
 * IntakesImpounds change Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesImpounds;

class ChangeTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesImpounds\Change();
        $query->setIntakeId("Intake");
        $query->setAnimalId("Animal");
        $query->setAnimalConditionId("Condition");
        $query->setDate("Date");
        $query->setNotes("Notes");
        $query->setLocation("Impound Location");
        $query->setAddress("Impound Street address");
        $query->setCity("Impound City");
        $query->setState("Impound State/Province");
        $query->setPostalcode("Impound Postal Code");
        $query->setFromId("Impound From");
        $query->setStaffId("Impound Performed By");
        $query->setReasonId("Reason");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Intake", $data['values'][0]["intakeID"]);
        $this->assertEquals("Animal", $data['values'][0]["intakesImpoundAnimalID"]);
        $this->assertEquals("Condition", $data['values'][0]["intakesImpoundAnimalConditionID"]);
        $this->assertEquals("Date", $data['values'][0]["intakesImpoundDate"]);
        $this->assertEquals("Notes", $data['values'][0]["intakesImpoundNotes"]);
        $this->assertEquals("Impound Location", $data['values'][0]["intakesImpoundLocation"]);
        $this->assertEquals("Impound Street address", $data['values'][0]["intakesImpoundAddress"]);
        $this->assertEquals("Impound City", $data['values'][0]["intakesImpoundCity"]);
        $this->assertEquals("Impound State/Province", $data['values'][0]["intakesImpoundState"]);
        $this->assertEquals("Impound Postal Code", $data['values'][0]["intakesImpoundPostalcode"]);
        $this->assertEquals("Impound From", $data['values'][0]["intakesImpoundFromID"]);
        $this->assertEquals("Impound Performed By", $data['values'][0]["intakesImpoundStaffID"]);
        $this->assertEquals("Reason", $data['values'][0]["intakesImpoundReasonID"]);

        $this->assertEquals('intakesImpounds', $data['objectType']);
        $this->assertEquals('change', $data['objectAction']);
    }
}
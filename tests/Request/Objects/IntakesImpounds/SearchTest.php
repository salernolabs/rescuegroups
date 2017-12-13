<?php
/**
 * IntakesImpounds Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesImpounds;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesImpounds\Search();

        
        $query->setIntakesImpoundID("intakesImpoundID");
        $query->setIntakesImpoundAnimalID("intakesImpoundAnimalID");
        $query->setIntakesImpoundAnimalConditionID("intakesImpoundAnimalConditionID");
        $query->setIntakesImpoundDate("intakesImpoundDate");
        $query->setIntakesImpoundNotes("intakesImpoundNotes");
        $query->setIntakesImpoundLocation("intakesImpoundLocation");
        $query->setIntakesImpoundAddress("intakesImpoundAddress");
        $query->setIntakesImpoundCity("intakesImpoundCity");
        $query->setIntakesImpoundState("intakesImpoundState");
        $query->setIntakesImpoundPostalcode("intakesImpoundPostalcode");
        $query->setIntakesImpoundFromID("intakesImpoundFromID");
        $query->setIntakesImpoundStaffID("intakesImpoundStaffID");
        $query->setIntakesImpoundReasonID("intakesImpoundReasonID");
        $query->setAnimalName("animalName");
        $query->setAnimalConditionName("animalConditionName");
        $query->setImpoundFromName("impoundFromName");
        $query->setImpoundStaffName("impoundStaffName");
        $query->setImpoundReason("impoundReason");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesImpounds", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("intakesImpoundID", $data["intakesImpoundID"]);
        $this->assertEquals("intakesImpoundAnimalID", $data["intakesImpoundAnimalID"]);
        $this->assertEquals("intakesImpoundAnimalConditionID", $data["intakesImpoundAnimalConditionID"]);
        $this->assertEquals("intakesImpoundDate", $data["intakesImpoundDate"]);
        $this->assertEquals("intakesImpoundNotes", $data["intakesImpoundNotes"]);
        $this->assertEquals("intakesImpoundLocation", $data["intakesImpoundLocation"]);
        $this->assertEquals("intakesImpoundAddress", $data["intakesImpoundAddress"]);
        $this->assertEquals("intakesImpoundCity", $data["intakesImpoundCity"]);
        $this->assertEquals("intakesImpoundState", $data["intakesImpoundState"]);
        $this->assertEquals("intakesImpoundPostalcode", $data["intakesImpoundPostalcode"]);
        $this->assertEquals("intakesImpoundFromID", $data["intakesImpoundFromID"]);
        $this->assertEquals("intakesImpoundStaffID", $data["intakesImpoundStaffID"]);
        $this->assertEquals("intakesImpoundReasonID", $data["intakesImpoundReasonID"]);
        $this->assertEquals("animalName", $data["animalName"]);
        $this->assertEquals("animalConditionName", $data["animalConditionName"]);
        $this->assertEquals("impoundFromName", $data["impoundFromName"]);
        $this->assertEquals("impoundStaffName", $data["impoundStaffName"]);
        $this->assertEquals("impoundReason", $data["impoundReason"]);
    }
}
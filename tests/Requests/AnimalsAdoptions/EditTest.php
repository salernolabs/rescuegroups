<?php
/**
 * AnimalsAdoptions Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\AnimalsAdoptions\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\AnimalsAdoptions\Edit();

        
        $query->setAdoptionID("adoptionID");
        $query->setAdoptionAnimalID("adoptionAnimalID");
        $query->setAdoptionAdopterID("adoptionAdopterID");
        $query->setAdoptionLeadID("adoptionLeadID");
        $query->setAdoptionFeeAmount("adoptionFeeAmount");
        $query->setAdoptionDonationAmount("adoptionDonationAmount");
        $query->setAdoptionDonationID("adoptionDonationID");
        $query->setAdoptionDate("adoptionDate");
        $query->setAdoptionSubmittedformID("adoptionSubmittedformID");
        $query->setAdoptionStatusID("adoptionStatusID");
        $query->setAdoptionLetterSent("adoptionLetterSent");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsAdoptions", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("adoptionID", $data["adoptionID"]);
        $this->assertEquals("adoptionAnimalID", $data["adoptionAnimalID"]);
        $this->assertEquals("adoptionAdopterID", $data["adoptionAdopterID"]);
        $this->assertEquals("adoptionLeadID", $data["adoptionLeadID"]);
        $this->assertEquals("adoptionFeeAmount", $data["adoptionFeeAmount"]);
        $this->assertEquals("adoptionDonationAmount", $data["adoptionDonationAmount"]);
        $this->assertEquals("adoptionDonationID", $data["adoptionDonationID"]);
        $this->assertEquals("adoptionDate", $data["adoptionDate"]);
        $this->assertEquals("adoptionSubmittedformID", $data["adoptionSubmittedformID"]);
        $this->assertEquals("adoptionStatusID", $data["adoptionStatusID"]);
        $this->assertEquals("adoptionLetterSent", $data["adoptionLetterSent"]);
    }
}
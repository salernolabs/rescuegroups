<?php
/**
 * AnimalsAdoptions Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsAdoptions\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsAdoptions\Add();

        
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
        $query->setAdoptionAddAdopterRole("adoptionAddAdopterRole");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsAdoptions", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

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
        $this->assertEquals("adoptionAddAdopterRole", $data["adoptionAddAdopterRole"]);
    }
}
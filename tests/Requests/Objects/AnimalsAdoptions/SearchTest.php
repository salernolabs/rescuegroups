<?php
/**
 * AnimalsAdoptions Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalsAdoptions\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalsAdoptions\Search();

        
        $query->setAdoptionID("adoptionID");
        $query->setAdoptionAnimalID("adoptionAnimalID");
        $query->setAdoptionAdopterID("adoptionAdopterID");
        $query->setAdoptionLeadID("adoptionLeadID");
        $query->setAdoptionLead("adoptionLead");
        $query->setAdoptionFeeAmount("adoptionFeeAmount");
        $query->setAdoptionDonationAmount("adoptionDonationAmount");
        $query->setAdoptionDonationID("adoptionDonationID");
        $query->setAdoptionDate("adoptionDate");
        $query->setAdoptionStatusID("adoptionStatusID");
        $query->setAdoptionStatus("adoptionStatus");
        $query->setAdoptionLetterSent("adoptionLetterSent");
        $query->setAdoptionSubmittedformID("adoptionSubmittedformID");
        $query->setAnimalCost("animalCost");
        $query->setAnimalName("animalName");
        $query->setAnimalFosterID("animalFosterID");
        $query->setAnimalFosterName("animalFosterName");
        $query->setAdopterName("adopterName");
        $query->setAdopterType("adopterType");
        $query->setSubmitterName("submitterName");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsAdoptions", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("adoptionID", $data["adoptionID"]);
        $this->assertEquals("adoptionAnimalID", $data["adoptionAnimalID"]);
        $this->assertEquals("adoptionAdopterID", $data["adoptionAdopterID"]);
        $this->assertEquals("adoptionLeadID", $data["adoptionLeadID"]);
        $this->assertEquals("adoptionLead", $data["adoptionLead"]);
        $this->assertEquals("adoptionFeeAmount", $data["adoptionFeeAmount"]);
        $this->assertEquals("adoptionDonationAmount", $data["adoptionDonationAmount"]);
        $this->assertEquals("adoptionDonationID", $data["adoptionDonationID"]);
        $this->assertEquals("adoptionDate", $data["adoptionDate"]);
        $this->assertEquals("adoptionStatusID", $data["adoptionStatusID"]);
        $this->assertEquals("adoptionStatus", $data["adoptionStatus"]);
        $this->assertEquals("adoptionLetterSent", $data["adoptionLetterSent"]);
        $this->assertEquals("adoptionSubmittedformID", $data["adoptionSubmittedformID"]);
        $this->assertEquals("animalCost", $data["animalCost"]);
        $this->assertEquals("animalName", $data["animalName"]);
        $this->assertEquals("animalFosterID", $data["animalFosterID"]);
        $this->assertEquals("animalFosterName", $data["animalFosterName"]);
        $this->assertEquals("adopterName", $data["adopterName"]);
        $this->assertEquals("adopterType", $data["adopterType"]);
        $this->assertEquals("submitterName", $data["submitterName"]);
    }
}
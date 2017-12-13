<?php
/**
 * AnimalsAdoptions Delete Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsAdoptions;

class DeleteTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsAdoptions\Delete();

        
        $query->setAdoptionID("adoptionID");
        $query->setAdoptionRemoveContact("adoptionRemoveContact");
        $query->setAdoptionChangeAnimal("adoptionChangeAnimal");
        $query->setAdoptionChangeSubmittedform("adoptionChangeSubmittedform");
        $query->setAdoptionRemoveUser("adoptionRemoveUser");
        $query->setAdoptionDonationAmount("adoptionDonationAmount");
        $query->setAdoptionLetterSent("adoptionLetterSent");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsAdoptions", $data["objectType"]);

        $this->assertEquals("delete", $data["objectAction"]);

        $this->assertEquals("adoptionID", $data["adoptionID"]);
        $this->assertEquals("adoptionRemoveContact", $data["adoptionRemoveContact"]);
        $this->assertEquals("adoptionChangeAnimal", $data["adoptionChangeAnimal"]);
        $this->assertEquals("adoptionChangeSubmittedform", $data["adoptionChangeSubmittedform"]);
        $this->assertEquals("adoptionRemoveUser", $data["adoptionRemoveUser"]);
        $this->assertEquals("adoptionDonationAmount", $data["adoptionDonationAmount"]);
        $this->assertEquals("adoptionLetterSent", $data["adoptionLetterSent"]);
    }
}
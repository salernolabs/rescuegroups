<?php
/**
 * AnimalsAdoptions delete Request Test
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
        $query->setId("Adoption ID");
        $query->setRemoveContact("Remove contact from adopters group");
        $query->setChangeAnimal("Change animal to available");
        $query->setChangeSubmittedform("Change submitted form to cancelled");
        $query->setRemoveUser("Remove Adopter role from user");
        $query->setDonationAmount("Donation");
        $query->setLetterSent("Thank you letter sent");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Adoption ID", $data['values'][0]["adoptionID"]);
        $this->assertEquals("Remove contact from adopters group", $data['values'][0]["adoptionRemoveContact"]);
        $this->assertEquals("Change animal to available", $data['values'][0]["adoptionChangeAnimal"]);
        $this->assertEquals("Change submitted form to cancelled", $data['values'][0]["adoptionChangeSubmittedform"]);
        $this->assertEquals("Remove Adopter role from user", $data['values'][0]["adoptionRemoveUser"]);
        $this->assertEquals("Donation", $data['values'][0]["adoptionDonationAmount"]);
        $this->assertEquals("Thank you letter sent", $data['values'][0]["adoptionLetterSent"]);

        $this->assertEquals('animalsAdoptions', $data['objectType']);
        $this->assertEquals('delete', $data['objectAction']);
    }
}
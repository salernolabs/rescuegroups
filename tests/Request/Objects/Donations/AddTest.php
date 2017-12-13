<?php
/**
 * Donations Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Donations\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Donations\Add();

        
        $query->setDonationContactID("donationContactID");
        $query->setDonationAmount("donationAmount");
        $query->setDonationInkind("donationInkind");
        $query->setDonationComment("donationComment");
        $query->setDonationLettersent("donationLettersent");
        $query->setDonationPurpose("donationPurpose");
        $query->setDonationDate("donationDate");
        $query->setDonationAddDonorGroup("donationAddDonorGroup");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("donations", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("donationContactID", $data["donationContactID"]);
        $this->assertEquals("donationAmount", $data["donationAmount"]);
        $this->assertEquals("donationInkind", $data["donationInkind"]);
        $this->assertEquals("donationComment", $data["donationComment"]);
        $this->assertEquals("donationLettersent", $data["donationLettersent"]);
        $this->assertEquals("donationPurpose", $data["donationPurpose"]);
        $this->assertEquals("donationDate", $data["donationDate"]);
        $this->assertEquals("donationAddDonorGroup", $data["donationAddDonorGroup"]);
    }
}
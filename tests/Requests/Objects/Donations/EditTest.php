<?php
/**
 * Donations Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\Donations\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Donations\Edit();

        
        $query->setDonationID("donationID");
        $query->setDonationContactID("donationContactID");
        $query->setDonationAmount("donationAmount");
        $query->setDonationInkind("donationInkind");
        $query->setDonationComment("donationComment");
        $query->setDonationLettersent("donationLettersent");
        $query->setDonationPurpose("donationPurpose");
        $query->setDonationDate("donationDate");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("donations", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("donationID", $data["donationID"]);
        $this->assertEquals("donationContactID", $data["donationContactID"]);
        $this->assertEquals("donationAmount", $data["donationAmount"]);
        $this->assertEquals("donationInkind", $data["donationInkind"]);
        $this->assertEquals("donationComment", $data["donationComment"]);
        $this->assertEquals("donationLettersent", $data["donationLettersent"]);
        $this->assertEquals("donationPurpose", $data["donationPurpose"]);
        $this->assertEquals("donationDate", $data["donationDate"]);
    }
}
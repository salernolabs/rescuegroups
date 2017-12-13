<?php
/**
 * Donations Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Donations;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Donations\Search();

        
        $query->setDonationID("donationID");
        $query->setDonationContactID("donationContactID");
        $query->setDonationContactName("donationContactName");
        $query->setDonationContactType("donationContactType");
        $query->setDonationAmount("donationAmount");
        $query->setDonationInkind("donationInkind");
        $query->setDonationComment("donationComment");
        $query->setDonationLettersent("donationLettersent");
        $query->setDonationPurpose("donationPurpose");
        $query->setDonationDate("donationDate");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("donations", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("donationID", $data["donationID"]);
        $this->assertEquals("donationContactID", $data["donationContactID"]);
        $this->assertEquals("donationContactName", $data["donationContactName"]);
        $this->assertEquals("donationContactType", $data["donationContactType"]);
        $this->assertEquals("donationAmount", $data["donationAmount"]);
        $this->assertEquals("donationInkind", $data["donationInkind"]);
        $this->assertEquals("donationComment", $data["donationComment"]);
        $this->assertEquals("donationLettersent", $data["donationLettersent"]);
        $this->assertEquals("donationPurpose", $data["donationPurpose"]);
        $this->assertEquals("donationDate", $data["donationDate"]);
    }
}
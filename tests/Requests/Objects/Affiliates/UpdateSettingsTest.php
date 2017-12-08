<?php
/**
 * Affiliates UpdateSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\Affiliates\UpdateSettings;

class UpdateSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Affiliates\UpdateSettings();

        
        $query->setSetAffiliatesPayPalEmail("setAffiliatesPayPalEmail");
        $query->setShowAffiliatesPayPalLink("showAffiliatesPayPalLink");
        $query->setSetAffiliatesIGiveCauseID("setAffiliatesIGiveCauseID");
        $query->setShowAffiliatesIGiveLink("showAffiliatesIGiveLink");
        $query->setSetAffiliatesAmazonTag("setAffiliatesAmazonTag");
        $query->setShowAffiliatesAmazonLink("showAffiliatesAmazonLink");
        $query->setSetAffiliatesUWID("setAffiliatesUWID");
        $query->setShowAffiliatesUWLink("showAffiliatesUWLink");
        $query->setSetAffiliatesCFCID("setAffiliatesCFCID");
        $query->setShowAffiliatesCFCLink("showAffiliatesCFCLink");
        $query->setSetAffiliatesVolunteerMatchOrgID("setAffiliatesVolunteerMatchOrgID");
        $query->setShowAffiliatesVolunteerMatchLink("showAffiliatesVolunteerMatchLink");
        $query->setSetAffiliatesEIN("setAffiliatesEIN");
        $query->setShowAffiliatesHelpingLink("showAffiliatesHelpingLink");
        $query->setSetAffiliatesEbayStoreName("setAffiliatesEbayStoreName");
        $query->setShowAffiliatesEbayStoreLink("showAffiliatesEbayStoreLink");
        $query->setSetAffiliatesByVetsOnlyPartner("setAffiliatesByVetsOnlyPartner");
        $query->setShowAffiliatesByVetsOnlyLink("showAffiliatesByVetsOnlyLink");
        $query->setSetAffiliatesFacebookPage("setAffiliatesFacebookPage");
        $query->setShowAffiliatesFacebookLink("showAffiliatesFacebookLink");
        $query->setShowAffiliatesFacebookBadge("showAffiliatesFacebookBadge");
        $query->setSetAffiliatesTwitterAccount("setAffiliatesTwitterAccount");
        $query->setShowAffiliatesTwitterLink("showAffiliatesTwitterLink");
        $query->setShowAffiliatesTwitterBadge("showAffiliatesTwitterBadge");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("affiliates", $data["objectType"]);

        $this->assertEquals("updateSettings", $data["objectAction"]);

        $this->assertEquals("setAffiliatesPayPalEmail", $data["setAffiliatesPayPalEmail"]);
        $this->assertEquals("showAffiliatesPayPalLink", $data["showAffiliatesPayPalLink"]);
        $this->assertEquals("setAffiliatesIGiveCauseID", $data["setAffiliatesIGiveCauseID"]);
        $this->assertEquals("showAffiliatesIGiveLink", $data["showAffiliatesIGiveLink"]);
        $this->assertEquals("setAffiliatesAmazonTag", $data["setAffiliatesAmazonTag"]);
        $this->assertEquals("showAffiliatesAmazonLink", $data["showAffiliatesAmazonLink"]);
        $this->assertEquals("setAffiliatesUWID", $data["setAffiliatesUWID"]);
        $this->assertEquals("showAffiliatesUWLink", $data["showAffiliatesUWLink"]);
        $this->assertEquals("setAffiliatesCFCID", $data["setAffiliatesCFCID"]);
        $this->assertEquals("showAffiliatesCFCLink", $data["showAffiliatesCFCLink"]);
        $this->assertEquals("setAffiliatesVolunteerMatchOrgID", $data["setAffiliatesVolunteerMatchOrgID"]);
        $this->assertEquals("showAffiliatesVolunteerMatchLink", $data["showAffiliatesVolunteerMatchLink"]);
        $this->assertEquals("setAffiliatesEIN", $data["setAffiliatesEIN"]);
        $this->assertEquals("showAffiliatesHelpingLink", $data["showAffiliatesHelpingLink"]);
        $this->assertEquals("setAffiliatesEbayStoreName", $data["setAffiliatesEbayStoreName"]);
        $this->assertEquals("showAffiliatesEbayStoreLink", $data["showAffiliatesEbayStoreLink"]);
        $this->assertEquals("setAffiliatesByVetsOnlyPartner", $data["setAffiliatesByVetsOnlyPartner"]);
        $this->assertEquals("showAffiliatesByVetsOnlyLink", $data["showAffiliatesByVetsOnlyLink"]);
        $this->assertEquals("setAffiliatesFacebookPage", $data["setAffiliatesFacebookPage"]);
        $this->assertEquals("showAffiliatesFacebookLink", $data["showAffiliatesFacebookLink"]);
        $this->assertEquals("showAffiliatesFacebookBadge", $data["showAffiliatesFacebookBadge"]);
        $this->assertEquals("setAffiliatesTwitterAccount", $data["setAffiliatesTwitterAccount"]);
        $this->assertEquals("showAffiliatesTwitterLink", $data["showAffiliatesTwitterLink"]);
        $this->assertEquals("showAffiliatesTwitterBadge", $data["showAffiliatesTwitterBadge"]);
    }
}
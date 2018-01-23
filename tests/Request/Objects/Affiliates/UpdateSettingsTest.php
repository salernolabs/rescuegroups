<?php
/**
 * Affiliates updateSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Affiliates;

class UpdateSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Affiliates\UpdateSettings();
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

        $this->assertEquals("setAffiliatesPayPalEmail", $data['values'][0]["setAffiliatesPayPalEmail"]);
        $this->assertEquals("showAffiliatesPayPalLink", $data['values'][0]["showAffiliatesPayPalLink"]);
        $this->assertEquals("setAffiliatesIGiveCauseID", $data['values'][0]["setAffiliatesIGiveCauseID"]);
        $this->assertEquals("showAffiliatesIGiveLink", $data['values'][0]["showAffiliatesIGiveLink"]);
        $this->assertEquals("setAffiliatesAmazonTag", $data['values'][0]["setAffiliatesAmazonTag"]);
        $this->assertEquals("showAffiliatesAmazonLink", $data['values'][0]["showAffiliatesAmazonLink"]);
        $this->assertEquals("setAffiliatesUWID", $data['values'][0]["setAffiliatesUWID"]);
        $this->assertEquals("showAffiliatesUWLink", $data['values'][0]["showAffiliatesUWLink"]);
        $this->assertEquals("setAffiliatesCFCID", $data['values'][0]["setAffiliatesCFCID"]);
        $this->assertEquals("showAffiliatesCFCLink", $data['values'][0]["showAffiliatesCFCLink"]);
        $this->assertEquals("setAffiliatesVolunteerMatchOrgID", $data['values'][0]["setAffiliatesVolunteerMatchOrgID"]);
        $this->assertEquals("showAffiliatesVolunteerMatchLink", $data['values'][0]["showAffiliatesVolunteerMatchLink"]);
        $this->assertEquals("setAffiliatesEIN", $data['values'][0]["setAffiliatesEIN"]);
        $this->assertEquals("showAffiliatesHelpingLink", $data['values'][0]["showAffiliatesHelpingLink"]);
        $this->assertEquals("setAffiliatesEbayStoreName", $data['values'][0]["setAffiliatesEbayStoreName"]);
        $this->assertEquals("showAffiliatesEbayStoreLink", $data['values'][0]["showAffiliatesEbayStoreLink"]);
        $this->assertEquals("setAffiliatesByVetsOnlyPartner", $data['values'][0]["setAffiliatesByVetsOnlyPartner"]);
        $this->assertEquals("showAffiliatesByVetsOnlyLink", $data['values'][0]["showAffiliatesByVetsOnlyLink"]);
        $this->assertEquals("setAffiliatesFacebookPage", $data['values'][0]["setAffiliatesFacebookPage"]);
        $this->assertEquals("showAffiliatesFacebookLink", $data['values'][0]["showAffiliatesFacebookLink"]);
        $this->assertEquals("showAffiliatesFacebookBadge", $data['values'][0]["showAffiliatesFacebookBadge"]);
        $this->assertEquals("setAffiliatesTwitterAccount", $data['values'][0]["setAffiliatesTwitterAccount"]);
        $this->assertEquals("showAffiliatesTwitterLink", $data['values'][0]["showAffiliatesTwitterLink"]);
        $this->assertEquals("showAffiliatesTwitterBadge", $data['values'][0]["showAffiliatesTwitterBadge"]);

        $this->assertEquals('affiliates', $data['objectType']);
        $this->assertEquals('updateSettings', $data['objectAction']);
    }
}
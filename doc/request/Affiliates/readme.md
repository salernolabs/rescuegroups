# Affiliates

This is the documentation for the Affiliates queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-affiliates)

## Define
Performs affiliates.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\Affiliates\Define();

    $result = $api->executeRequest($query);
## GetSettings
Performs affiliates.getSettings query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Affiliates\GetSettings();


    $result = $api->executeRequest($query);

## UpdateSettings
Performs affiliates.updateSettings query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Affiliates\UpdateSettings();

    $query->setsetAffiliatesPayPalEmail("setAffiliatesPayPalEmail");
    $query->setshowAffiliatesPayPalLink("showAffiliatesPayPalLink");
    $query->setsetAffiliatesIGiveCauseID("setAffiliatesIGiveCauseID");
    $query->setshowAffiliatesIGiveLink("showAffiliatesIGiveLink");
    $query->setsetAffiliatesAmazonTag("setAffiliatesAmazonTag");
    $query->setshowAffiliatesAmazonLink("showAffiliatesAmazonLink");
    $query->setsetAffiliatesUWID("setAffiliatesUWID");
    $query->setshowAffiliatesUWLink("showAffiliatesUWLink");
    $query->setsetAffiliatesCFCID("setAffiliatesCFCID");
    $query->setshowAffiliatesCFCLink("showAffiliatesCFCLink");
    $query->setsetAffiliatesVolunteerMatchOrgID("setAffiliatesVolunteerMatchOrgID");
    $query->setshowAffiliatesVolunteerMatchLink("showAffiliatesVolunteerMatchLink");
    $query->setsetAffiliatesEIN("setAffiliatesEIN");
    $query->setshowAffiliatesHelpingLink("showAffiliatesHelpingLink");
    $query->setsetAffiliatesEbayStoreName("setAffiliatesEbayStoreName");
    $query->setshowAffiliatesEbayStoreLink("showAffiliatesEbayStoreLink");
    $query->setsetAffiliatesByVetsOnlyPartner("setAffiliatesByVetsOnlyPartner");
    $query->setshowAffiliatesByVetsOnlyLink("showAffiliatesByVetsOnlyLink");
    $query->setsetAffiliatesFacebookPage("setAffiliatesFacebookPage");
    $query->setshowAffiliatesFacebookLink("showAffiliatesFacebookLink");
    $query->setshowAffiliatesFacebookBadge("showAffiliatesFacebookBadge");
    $query->setsetAffiliatesTwitterAccount("setAffiliatesTwitterAccount");
    $query->setshowAffiliatesTwitterLink("showAffiliatesTwitterLink");
    $query->setshowAffiliatesTwitterBadge("showAffiliatesTwitterBadge");

    $result = $api->executeRequest($query);


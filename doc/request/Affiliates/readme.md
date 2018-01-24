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

    $query->setAffiliatesPayPalEmail("setAffiliatesPayPalEmail");
    $query->setShowAffiliatesPayPalLink("showAffiliatesPayPalLink");
    $query->setAffiliatesIGiveCauseID("setAffiliatesIGiveCauseID");
    $query->setShowAffiliatesIGiveLink("showAffiliatesIGiveLink");
    $query->setAffiliatesAmazonTag("setAffiliatesAmazonTag");
    $query->setShowAffiliatesAmazonLink("showAffiliatesAmazonLink");
    $query->setAffiliatesUWID("setAffiliatesUWID");
    $query->setShowAffiliatesUWLink("showAffiliatesUWLink");
    $query->setAffiliatesCFCID("setAffiliatesCFCID");
    $query->setShowAffiliatesCFCLink("showAffiliatesCFCLink");
    $query->setAffiliatesVolunteerMatchOrgID("setAffiliatesVolunteerMatchOrgID");
    $query->setShowAffiliatesVolunteerMatchLink("showAffiliatesVolunteerMatchLink");
    $query->setAffiliatesEIN("setAffiliatesEIN");
    $query->setShowAffiliatesHelpingLink("showAffiliatesHelpingLink");
    $query->setAffiliatesEbayStoreName("setAffiliatesEbayStoreName");
    $query->setShowAffiliatesEbayStoreLink("showAffiliatesEbayStoreLink");
    $query->setAffiliatesByVetsOnlyPartner("setAffiliatesByVetsOnlyPartner");
    $query->setShowAffiliatesByVetsOnlyLink("showAffiliatesByVetsOnlyLink");
    $query->setAffiliatesFacebookPage("setAffiliatesFacebookPage");
    $query->setShowAffiliatesFacebookLink("showAffiliatesFacebookLink");
    $query->setShowAffiliatesFacebookBadge("showAffiliatesFacebookBadge");
    $query->setAffiliatesTwitterAccount("setAffiliatesTwitterAccount");
    $query->setShowAffiliatesTwitterLink("showAffiliatesTwitterLink");
    $query->setShowAffiliatesTwitterBadge("showAffiliatesTwitterBadge");

    $result = $api->executeRequest($query);


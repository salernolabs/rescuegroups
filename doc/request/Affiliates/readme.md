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

    $query->setsetPayPalEmail("setPayPalEmail");
    $query->setshowPayPalLink("showPayPalLink");
    $query->setsetIGiveCauseID("setIGiveCauseID");
    $query->setshowIGiveLink("showIGiveLink");
    $query->setsetAmazonTag("setAmazonTag");
    $query->setshowAmazonLink("showAmazonLink");
    $query->setsetUWID("setUWID");
    $query->setshowUWLink("showUWLink");
    $query->setsetCFCID("setCFCID");
    $query->setshowCFCLink("showCFCLink");
    $query->setsetVolunteerMatchOrgID("setVolunteerMatchOrgID");
    $query->setshowVolunteerMatchLink("showVolunteerMatchLink");
    $query->setsetEIN("setEIN");
    $query->setshowHelpingLink("showHelpingLink");
    $query->setsetEbayStoreName("setEbayStoreName");
    $query->setshowEbayStoreLink("showEbayStoreLink");
    $query->setsetByVetsOnlyPartner("setByVetsOnlyPartner");
    $query->setshowByVetsOnlyLink("showByVetsOnlyLink");
    $query->setsetFacebookPage("setFacebookPage");
    $query->setshowFacebookLink("showFacebookLink");
    $query->setshowFacebookBadge("showFacebookBadge");
    $query->setsetTwitterAccount("setTwitterAccount");
    $query->setshowTwitterLink("showTwitterLink");
    $query->setshowTwitterBadge("showTwitterBadge");

    $result = $api->executeRequest($query);


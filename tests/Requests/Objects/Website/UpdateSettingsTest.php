<?php
/**
 * Website UpdateSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\Website\UpdateSettings;

class UpdateSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Website\UpdateSettings();

        
        $query->setEnableWebsiteDown("enableWebsiteDown");
        $query->setDisableWebsiteFavoriteEmails("disableWebsiteFavoriteEmails");
        $query->setEnableWebsitePetfinderHomePageUpload("enableWebsitePetfinderHomePageUpload");
        $query->setSetWebsiteSlogan("setWebsiteSlogan");
        $query->setSetWebsiteMenuSource("setWebsiteMenuSource");
        $query->setSetWebsiteIndexPageID("setWebsiteIndexPageID");
        $query->setEnableWebsiteFrontPageLogo("enableWebsiteFrontPageLogo");
        $query->setEnableWebsiteFrontPageNews("enableWebsiteFrontPageNews");
        $query->setEnableWebsiteFrontPageEvents("enableWebsiteFrontPageEvents");
        $query->setEnableWebsiteFrontPageHighlightedAnimals("enableWebsiteFrontPageHighlightedAnimals");
        $query->setSetWebsiteFrontPageNumberOfHighlightedAnimals("setWebsiteFrontPageNumberOfHighlightedAnimals");
        $query->setSetWebsiteFrontPageHighlightedAnimalsDescriptionLength("setWebsiteFrontPageHighlightedAnimalsDescriptionLength");
        $query->setEnableWebsiteRescueGroupsPoweredByImage("enableWebsiteRescueGroupsPoweredByImage");
        $query->setEnableWebsiteMenuLogoutUsername("enableWebsiteMenuLogoutUsername");
        $query->setEnableWebsiteLastUpdated("enableWebsiteLastUpdated");
        $query->setSetWebsiteAnimalPictureMode("setWebsiteAnimalPictureMode");
        $query->setSetWebsiteAnimalPictureAnimalID("setWebsiteAnimalPictureAnimalID");
        $query->setEnableWebsiteAnimalSearchBox("enableWebsiteAnimalSearchBox");
        $query->setEnableWebsiteSideBarAddress("enableWebsiteSideBarAddress");
        $query->setEnableWebsiteEmailFriend("enableWebsiteEmailFriend");
        $query->setEnableWebsiteShareButton("enableWebsiteShareButton");
        $query->setEnableWebsiteSparky("enableWebsiteSparky");
        $query->setSetWebsiteSideBarWidth("setWebsiteSideBarWidth");
        $query->setEnableWebsiteLogo("enableWebsiteLogo");
        $query->setSetWebsiteBackgroundImageID("setWebsiteBackgroundImageID");
        $query->setEnableAnimalMeet("enableAnimalMeet");
        $query->setEnableWebsiteContactUsForm("enableWebsiteContactUsForm");
        $query->setSetWebsiteAnimalBrowseLayout("setWebsiteAnimalBrowseLayout");
        $query->setSetWebsiteAnimalBrowsePanelWidth("setWebsiteAnimalBrowsePanelWidth");
        $query->setSetWebsiteAnimalBrowsePanelColumns("setWebsiteAnimalBrowsePanelColumns");
        $query->setSetWebsiteAnimalBrowseAnimalsPerPage("setWebsiteAnimalBrowseAnimalsPerPage");
        $query->setSetWebsiteAnimalBrowseLimit("setWebsiteAnimalBrowseLimit");
        $query->setDisableWebsiteAnimalBrowseCourtesyListings("disableWebsiteAnimalBrowseCourtesyListings");
        $query->setShowWebsiteAnimalBrowseSponsorshipLink("showWebsiteAnimalBrowseSponsorshipLink");
        $query->setSetWebsiteAnimalBrowseDescriptionLength("setWebsiteAnimalBrowseDescriptionLength");
        $query->setSetWebsiteAnimalBrowseFields("setWebsiteAnimalBrowseFields");
        $query->setEnableAnimalAdoptions("enableAnimalAdoptions");
        $query->setSetAnimalDetailPageStyle("setAnimalDetailPageStyle");
        $query->setEnableAnimalDetailPagePopover("enableAnimalDetailPagePopover");
        $query->setEnableAnimalDetailPageShareButton("enableAnimalDetailPageShareButton");
        $query->setDisableAnimalDetailPageAdoptionInfoLink("disableAnimalDetailPageAdoptionInfoLink");
        $query->setDisableAnimalDetailPageAdoptionInfoLinkCourtesy("disableAnimalDetailPageAdoptionInfoLinkCourtesy");
        $query->setShowAnimalDetailPageDogTimeContent("showAnimalDetailPageDogTimeContent");
        $query->setShowAnimalDetailPageDogTimeSaveaDog("showAnimalDetailPageDogTimeSaveaDog");
        $query->setSetAnimalDetailPageEventsLimit("setAnimalDetailPageEventsLimit");
        $query->setShowAnimalDetailPageAdoptMeSayings("showAnimalDetailPageAdoptMeSayings");
        $query->setDisableAnimalDetailPageMyRescue("disableAnimalDetailPageMyRescue");
        $query->setDisableAnimalFlyer("disableAnimalFlyer");
        $query->setDisableAnimalFavoriteCount("disableAnimalFavoriteCount");
        $query->setDisableAnimalSuccessesPublic("disableAnimalSuccessesPublic");
        $query->setDisableAnimalStories("disableAnimalStories");
        $query->setShowAnimalTransferredWithSuccesses("showAnimalTransferredWithSuccesses");
        $query->setShowAnimalLinks("showAnimalLinks");
        $query->setShowAnimalHomePageHighlighted("showAnimalHomePageHighlighted");
        $query->setEnableAnimalImageBorder("enableAnimalImageBorder");
        $query->setSetAnimalImageBorderStyle("setAnimalImageBorderStyle");
        $query->setSetAnimalImageBorderColor("setAnimalImageBorderColor");
        $query->setSetAnimalImageMatteColor("setAnimalImageMatteColor");
        $query->setDisableAnimalDescriptionVideo("disableAnimalDescriptionVideo");
        $query->setEnableAnimalDescriptionVideoLink("enableAnimalDescriptionVideoLink");
        $query->setEnableAnimalKennelcardPrintAuto("enableAnimalKennelcardPrintAuto");
        $query->setShowAnimalKennelcardJournalEntries("showAnimalKennelcardJournalEntries");
        $query->setShowAnimalKennelcardJournalCost("showAnimalKennelcardJournalCost");
        $query->setDisableAnimalAgeBestEstimate("disableAnimalAgeBestEstimate");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("website", $data["objectType"]);

        $this->assertEquals("updateSettings", $data["objectAction"]);

        $this->assertEquals("enableWebsiteDown", $data["enableWebsiteDown"]);
        $this->assertEquals("disableWebsiteFavoriteEmails", $data["disableWebsiteFavoriteEmails"]);
        $this->assertEquals("enableWebsitePetfinderHomePageUpload", $data["enableWebsitePetfinderHomePageUpload"]);
        $this->assertEquals("setWebsiteSlogan", $data["setWebsiteSlogan"]);
        $this->assertEquals("setWebsiteMenuSource", $data["setWebsiteMenuSource"]);
        $this->assertEquals("setWebsiteIndexPageID", $data["setWebsiteIndexPageID"]);
        $this->assertEquals("enableWebsiteFrontPageLogo", $data["enableWebsiteFrontPageLogo"]);
        $this->assertEquals("enableWebsiteFrontPageNews", $data["enableWebsiteFrontPageNews"]);
        $this->assertEquals("enableWebsiteFrontPageEvents", $data["enableWebsiteFrontPageEvents"]);
        $this->assertEquals("enableWebsiteFrontPageHighlightedAnimals", $data["enableWebsiteFrontPageHighlightedAnimals"]);
        $this->assertEquals("setWebsiteFrontPageNumberOfHighlightedAnimals", $data["setWebsiteFrontPageNumberOfHighlightedAnimals"]);
        $this->assertEquals("setWebsiteFrontPageHighlightedAnimalsDescriptionLength", $data["setWebsiteFrontPageHighlightedAnimalsDescriptionLength"]);
        $this->assertEquals("enableWebsiteRescueGroupsPoweredByImage", $data["enableWebsiteRescueGroupsPoweredByImage"]);
        $this->assertEquals("enableWebsiteMenuLogoutUsername", $data["enableWebsiteMenuLogoutUsername"]);
        $this->assertEquals("enableWebsiteLastUpdated", $data["enableWebsiteLastUpdated"]);
        $this->assertEquals("setWebsiteAnimalPictureMode", $data["setWebsiteAnimalPictureMode"]);
        $this->assertEquals("setWebsiteAnimalPictureAnimalID", $data["setWebsiteAnimalPictureAnimalID"]);
        $this->assertEquals("enableWebsiteAnimalSearchBox", $data["enableWebsiteAnimalSearchBox"]);
        $this->assertEquals("enableWebsiteSideBarAddress", $data["enableWebsiteSideBarAddress"]);
        $this->assertEquals("enableWebsiteEmailFriend", $data["enableWebsiteEmailFriend"]);
        $this->assertEquals("enableWebsiteShareButton", $data["enableWebsiteShareButton"]);
        $this->assertEquals("enableWebsiteSparky", $data["enableWebsiteSparky"]);
        $this->assertEquals("setWebsiteSideBarWidth", $data["setWebsiteSideBarWidth"]);
        $this->assertEquals("enableWebsiteLogo", $data["enableWebsiteLogo"]);
        $this->assertEquals("setWebsiteBackgroundImageID", $data["setWebsiteBackgroundImageID"]);
        $this->assertEquals("enableAnimalMeet", $data["enableAnimalMeet"]);
        $this->assertEquals("enableWebsiteContactUsForm", $data["enableWebsiteContactUsForm"]);
        $this->assertEquals("setWebsiteAnimalBrowseLayout", $data["setWebsiteAnimalBrowseLayout"]);
        $this->assertEquals("setWebsiteAnimalBrowsePanelWidth", $data["setWebsiteAnimalBrowsePanelWidth"]);
        $this->assertEquals("setWebsiteAnimalBrowsePanelColumns", $data["setWebsiteAnimalBrowsePanelColumns"]);
        $this->assertEquals("setWebsiteAnimalBrowseAnimalsPerPage", $data["setWebsiteAnimalBrowseAnimalsPerPage"]);
        $this->assertEquals("setWebsiteAnimalBrowseLimit", $data["setWebsiteAnimalBrowseLimit"]);
        $this->assertEquals("disableWebsiteAnimalBrowseCourtesyListings", $data["disableWebsiteAnimalBrowseCourtesyListings"]);
        $this->assertEquals("showWebsiteAnimalBrowseSponsorshipLink", $data["showWebsiteAnimalBrowseSponsorshipLink"]);
        $this->assertEquals("setWebsiteAnimalBrowseDescriptionLength", $data["setWebsiteAnimalBrowseDescriptionLength"]);
        $this->assertEquals("setWebsiteAnimalBrowseFields", $data["setWebsiteAnimalBrowseFields"]);
        $this->assertEquals("enableAnimalAdoptions", $data["enableAnimalAdoptions"]);
        $this->assertEquals("setAnimalDetailPageStyle", $data["setAnimalDetailPageStyle"]);
        $this->assertEquals("enableAnimalDetailPagePopover", $data["enableAnimalDetailPagePopover"]);
        $this->assertEquals("enableAnimalDetailPageShareButton", $data["enableAnimalDetailPageShareButton"]);
        $this->assertEquals("disableAnimalDetailPageAdoptionInfoLink", $data["disableAnimalDetailPageAdoptionInfoLink"]);
        $this->assertEquals("disableAnimalDetailPageAdoptionInfoLinkCourtesy", $data["disableAnimalDetailPageAdoptionInfoLinkCourtesy"]);
        $this->assertEquals("showAnimalDetailPageDogTimeContent", $data["showAnimalDetailPageDogTimeContent"]);
        $this->assertEquals("showAnimalDetailPageDogTimeSaveaDog", $data["showAnimalDetailPageDogTimeSaveaDog"]);
        $this->assertEquals("setAnimalDetailPageEventsLimit", $data["setAnimalDetailPageEventsLimit"]);
        $this->assertEquals("showAnimalDetailPageAdoptMeSayings", $data["showAnimalDetailPageAdoptMeSayings"]);
        $this->assertEquals("disableAnimalDetailPageMyRescue", $data["disableAnimalDetailPageMyRescue"]);
        $this->assertEquals("disableAnimalFlyer", $data["disableAnimalFlyer"]);
        $this->assertEquals("disableAnimalFavoriteCount", $data["disableAnimalFavoriteCount"]);
        $this->assertEquals("disableAnimalSuccessesPublic", $data["disableAnimalSuccessesPublic"]);
        $this->assertEquals("disableAnimalStories", $data["disableAnimalStories"]);
        $this->assertEquals("showAnimalTransferredWithSuccesses", $data["showAnimalTransferredWithSuccesses"]);
        $this->assertEquals("showAnimalLinks", $data["showAnimalLinks"]);
        $this->assertEquals("showAnimalHomePageHighlighted", $data["showAnimalHomePageHighlighted"]);
        $this->assertEquals("enableAnimalImageBorder", $data["enableAnimalImageBorder"]);
        $this->assertEquals("setAnimalImageBorderStyle", $data["setAnimalImageBorderStyle"]);
        $this->assertEquals("setAnimalImageBorderColor", $data["setAnimalImageBorderColor"]);
        $this->assertEquals("setAnimalImageMatteColor", $data["setAnimalImageMatteColor"]);
        $this->assertEquals("disableAnimalDescriptionVideo", $data["disableAnimalDescriptionVideo"]);
        $this->assertEquals("enableAnimalDescriptionVideoLink", $data["enableAnimalDescriptionVideoLink"]);
        $this->assertEquals("enableAnimalKennelcardPrintAuto", $data["enableAnimalKennelcardPrintAuto"]);
        $this->assertEquals("showAnimalKennelcardJournalEntries", $data["showAnimalKennelcardJournalEntries"]);
        $this->assertEquals("showAnimalKennelcardJournalCost", $data["showAnimalKennelcardJournalCost"]);
        $this->assertEquals("disableAnimalAgeBestEstimate", $data["disableAnimalAgeBestEstimate"]);
    }
}
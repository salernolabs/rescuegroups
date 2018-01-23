<?php
/**
 * Website updateSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Website;

class UpdateSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Website\UpdateSettings();
        $query->setEnableWebsiteDown("Website down for maintenance");
        $query->setDisableWebsiteFavoriteEmails("Disable user email alerts for Favorite Animals and Breeds");
        $query->setEnableWebsitePetfinderHomePageUpload("Upload website home page as Petfinder web page");
        $query->setSetWebsiteSlogan("Website slogan");
        $query->setSetWebsiteMenuSource("Website menu source");
        $query->setSetWebsiteIndexPageID("Custom front page");
        $query->setEnableWebsiteFrontPageLogo("Display Logo on front page");
        $query->setEnableWebsiteFrontPageNews("Show the latest News articles on the front page");
        $query->setEnableWebsiteFrontPageEvents("Show upcoming Events on the front page");
        $query->setEnableWebsiteFrontPageHighlightedAnimals("Show highlighted animals on the front page");
        $query->setSetWebsiteFrontPageNumberOfHighlightedAnimals("Number of highlighted animals to show on the front page");
        $query->setSetWebsiteFrontPageHighlightedAnimalsDescriptionLength("Amount of highlighted animals' description to show on the front page");
        $query->setEnableWebsiteRescueGroupsPoweredByImage("Show the Powered by RescueGroups.org image");
        $query->setEnableWebsiteMenuLogoutUsername("Show the user name on the menu next to the Logout option");
        $query->setEnableWebsiteLastUpdated("Show the date/time the website was last updated");
        $query->setSetWebsiteAnimalPictureMode("Set the animal picture mode");
        $query->setSetWebsiteAnimalPictureAnimalID("Select the animal for the Featured animal picture");
        $query->setEnableWebsiteAnimalSearchBox("Show the animal seach box");
        $query->setEnableWebsiteSideBarAddress("Show mailing address on the side bar");
        $query->setEnableWebsiteEmailFriend("Show Email Page to a Friend");
        $query->setEnableWebsiteShareButton("Show share button");
        $query->setEnableWebsiteSparky("Show the DogTime Sparky widget");
        $query->setSetWebsiteSideBarWidth("Set the side bar width");
        $query->setEnableWebsiteLogo("Show logo");
        $query->setSetWebsiteBackgroundImageID("Set the background image");
        $query->setEnableAnimalMeet("Enable the Meet Request feature");
        $query->setEnableWebsiteContactUsForm("Enable the Contact Us form");
        $query->setSetWebsiteAnimalBrowseLayout("Animal Browse page layout");
        $query->setSetWebsiteAnimalBrowsePanelWidth("Set the animal browse panel width");
        $query->setSetWebsiteAnimalBrowsePanelColumns("Animal Browse page columns");
        $query->setSetWebsiteAnimalBrowseAnimalsPerPage("Animal Browse page number of animals");
        $query->setSetWebsiteAnimalBrowseLimit("Animal limit");
        $query->setDisableWebsiteAnimalBrowseCourtesyListings("Hide courtesy listings on browse/list page");
        $query->setShowWebsiteAnimalBrowseSponsorshipLink("Show sponsorship link on the browse page");
        $query->setSetWebsiteAnimalBrowseDescriptionLength("How much of each animal's description to display");
        $query->setSetWebsiteAnimalBrowseFields("setWebsiteAnimalBrowseFields");
        $query->setEnableAnimalAdoptions("List Animals available for adoption");
        $query->setSetAnimalDetailPageStyle("Animal detail page layout");
        $query->setEnableAnimalDetailPagePopover("Use a popover to display animal details");
        $query->setEnableAnimalDetailPageShareButton("Show the Animal detail page share button");
        $query->setDisableAnimalDetailPageAdoptionInfoLink("Disable the Animal detail page Adoption Information link");
        $query->setDisableAnimalDetailPageAdoptionInfoLinkCourtesy("Disable the Animal detail page Adoption Information link on courtesy animals");
        $query->setShowAnimalDetailPageDogTimeContent("Show DogTime content on the Animal detail page");
        $query->setShowAnimalDetailPageDogTimeSaveaDog("Show a link on the Animal detail page to Save-a-Dog or Save-a-Cat on DogTime");
        $query->setSetAnimalDetailPageEventsLimit("How many Events to show on the Animal detail page");
        $query->setShowAnimalDetailPageAdoptMeSayings("Show the Adopt Me sayings on the Animal detail page");
        $query->setDisableAnimalDetailPageMyRescue("Disable the My Rescue box on the Animal detail page");
        $query->setDisableAnimalFlyer("Disable the link to the Petbond Animal adoption flyer");
        $query->setDisableAnimalFavoriteCount("Disable the Animal favorite count");
        $query->setDisableAnimalSuccessesPublic("Disable public access to the Animal successes");
        $query->setDisableAnimalStories("Disable Animal success stories");
        $query->setShowAnimalTransferredWithSuccesses("Show transferred Animals with successes");
        $query->setShowAnimalLinks("Show Animal links");
        $query->setShowAnimalHomePageHighlighted("Show Highlighted Animals on the Animal Home Page");
        $query->setEnableAnimalImageBorder("Set the Animal image border");
        $query->setSetAnimalImageBorderStyle("Set the Animal image border style");
        $query->setSetAnimalImageBorderColor("Set the Animal image border color");
        $query->setSetAnimalImageMatteColor("Set the Animal image matte color");
        $query->setDisableAnimalDescriptionVideo("Disable videos in Animal descriptions");
        $query->setEnableAnimalDescriptionVideoLink("Use a link instead of embedding the video in Animal descriptions");
        $query->setEnableAnimalKennelcardPrintAuto("Automatically print the Animal Kennel Card");
        $query->setShowAnimalKennelcardJournalEntries("Show journal entries on the kennel card");
        $query->setShowAnimalKennelcardJournalCost("Show cost on the kennel card");
        $query->setDisableAnimalAgeBestEstimate("Disable the message that animal ages are best estimates");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Website down for maintenance", $data['values'][0]["enableWebsiteDown"]);
        $this->assertEquals("Disable user email alerts for Favorite Animals and Breeds", $data['values'][0]["disableWebsiteFavoriteEmails"]);
        $this->assertEquals("Upload website home page as Petfinder web page", $data['values'][0]["enableWebsitePetfinderHomePageUpload"]);
        $this->assertEquals("Website slogan", $data['values'][0]["setWebsiteSlogan"]);
        $this->assertEquals("Website menu source", $data['values'][0]["setWebsiteMenuSource"]);
        $this->assertEquals("Custom front page", $data['values'][0]["setWebsiteIndexPageID"]);
        $this->assertEquals("Display Logo on front page", $data['values'][0]["enableWebsiteFrontPageLogo"]);
        $this->assertEquals("Show the latest News articles on the front page", $data['values'][0]["enableWebsiteFrontPageNews"]);
        $this->assertEquals("Show upcoming Events on the front page", $data['values'][0]["enableWebsiteFrontPageEvents"]);
        $this->assertEquals("Show highlighted animals on the front page", $data['values'][0]["enableWebsiteFrontPageHighlightedAnimals"]);
        $this->assertEquals("Number of highlighted animals to show on the front page", $data['values'][0]["setWebsiteFrontPageNumberOfHighlightedAnimals"]);
        $this->assertEquals("Amount of highlighted animals' description to show on the front page", $data['values'][0]["setWebsiteFrontPageHighlightedAnimalsDescriptionLength"]);
        $this->assertEquals("Show the Powered by RescueGroups.org image", $data['values'][0]["enableWebsiteRescueGroupsPoweredByImage"]);
        $this->assertEquals("Show the user name on the menu next to the Logout option", $data['values'][0]["enableWebsiteMenuLogoutUsername"]);
        $this->assertEquals("Show the date/time the website was last updated", $data['values'][0]["enableWebsiteLastUpdated"]);
        $this->assertEquals("Set the animal picture mode", $data['values'][0]["setWebsiteAnimalPictureMode"]);
        $this->assertEquals("Select the animal for the Featured animal picture", $data['values'][0]["setWebsiteAnimalPictureAnimalID"]);
        $this->assertEquals("Show the animal seach box", $data['values'][0]["enableWebsiteAnimalSearchBox"]);
        $this->assertEquals("Show mailing address on the side bar", $data['values'][0]["enableWebsiteSideBarAddress"]);
        $this->assertEquals("Show Email Page to a Friend", $data['values'][0]["enableWebsiteEmailFriend"]);
        $this->assertEquals("Show share button", $data['values'][0]["enableWebsiteShareButton"]);
        $this->assertEquals("Show the DogTime Sparky widget", $data['values'][0]["enableWebsiteSparky"]);
        $this->assertEquals("Set the side bar width", $data['values'][0]["setWebsiteSideBarWidth"]);
        $this->assertEquals("Show logo", $data['values'][0]["enableWebsiteLogo"]);
        $this->assertEquals("Set the background image", $data['values'][0]["setWebsiteBackgroundImageID"]);
        $this->assertEquals("Enable the Meet Request feature", $data['values'][0]["enableAnimalMeet"]);
        $this->assertEquals("Enable the Contact Us form", $data['values'][0]["enableWebsiteContactUsForm"]);
        $this->assertEquals("Animal Browse page layout", $data['values'][0]["setWebsiteAnimalBrowseLayout"]);
        $this->assertEquals("Set the animal browse panel width", $data['values'][0]["setWebsiteAnimalBrowsePanelWidth"]);
        $this->assertEquals("Animal Browse page columns", $data['values'][0]["setWebsiteAnimalBrowsePanelColumns"]);
        $this->assertEquals("Animal Browse page number of animals", $data['values'][0]["setWebsiteAnimalBrowseAnimalsPerPage"]);
        $this->assertEquals("Animal limit", $data['values'][0]["setWebsiteAnimalBrowseLimit"]);
        $this->assertEquals("Hide courtesy listings on browse/list page", $data['values'][0]["disableWebsiteAnimalBrowseCourtesyListings"]);
        $this->assertEquals("Show sponsorship link on the browse page", $data['values'][0]["showWebsiteAnimalBrowseSponsorshipLink"]);
        $this->assertEquals("How much of each animal's description to display", $data['values'][0]["setWebsiteAnimalBrowseDescriptionLength"]);
        $this->assertEquals("setWebsiteAnimalBrowseFields", $data['values'][0]["setWebsiteAnimalBrowseFields"]);
        $this->assertEquals("List Animals available for adoption", $data['values'][0]["enableAnimalAdoptions"]);
        $this->assertEquals("Animal detail page layout", $data['values'][0]["setAnimalDetailPageStyle"]);
        $this->assertEquals("Use a popover to display animal details", $data['values'][0]["enableAnimalDetailPagePopover"]);
        $this->assertEquals("Show the Animal detail page share button", $data['values'][0]["enableAnimalDetailPageShareButton"]);
        $this->assertEquals("Disable the Animal detail page Adoption Information link", $data['values'][0]["disableAnimalDetailPageAdoptionInfoLink"]);
        $this->assertEquals("Disable the Animal detail page Adoption Information link on courtesy animals", $data['values'][0]["disableAnimalDetailPageAdoptionInfoLinkCourtesy"]);
        $this->assertEquals("Show DogTime content on the Animal detail page", $data['values'][0]["showAnimalDetailPageDogTimeContent"]);
        $this->assertEquals("Show a link on the Animal detail page to Save-a-Dog or Save-a-Cat on DogTime", $data['values'][0]["showAnimalDetailPageDogTimeSaveaDog"]);
        $this->assertEquals("How many Events to show on the Animal detail page", $data['values'][0]["setAnimalDetailPageEventsLimit"]);
        $this->assertEquals("Show the Adopt Me sayings on the Animal detail page", $data['values'][0]["showAnimalDetailPageAdoptMeSayings"]);
        $this->assertEquals("Disable the My Rescue box on the Animal detail page", $data['values'][0]["disableAnimalDetailPageMyRescue"]);
        $this->assertEquals("Disable the link to the Petbond Animal adoption flyer", $data['values'][0]["disableAnimalFlyer"]);
        $this->assertEquals("Disable the Animal favorite count", $data['values'][0]["disableAnimalFavoriteCount"]);
        $this->assertEquals("Disable public access to the Animal successes", $data['values'][0]["disableAnimalSuccessesPublic"]);
        $this->assertEquals("Disable Animal success stories", $data['values'][0]["disableAnimalStories"]);
        $this->assertEquals("Show transferred Animals with successes", $data['values'][0]["showAnimalTransferredWithSuccesses"]);
        $this->assertEquals("Show Animal links", $data['values'][0]["showAnimalLinks"]);
        $this->assertEquals("Show Highlighted Animals on the Animal Home Page", $data['values'][0]["showAnimalHomePageHighlighted"]);
        $this->assertEquals("Set the Animal image border", $data['values'][0]["enableAnimalImageBorder"]);
        $this->assertEquals("Set the Animal image border style", $data['values'][0]["setAnimalImageBorderStyle"]);
        $this->assertEquals("Set the Animal image border color", $data['values'][0]["setAnimalImageBorderColor"]);
        $this->assertEquals("Set the Animal image matte color", $data['values'][0]["setAnimalImageMatteColor"]);
        $this->assertEquals("Disable videos in Animal descriptions", $data['values'][0]["disableAnimalDescriptionVideo"]);
        $this->assertEquals("Use a link instead of embedding the video in Animal descriptions", $data['values'][0]["enableAnimalDescriptionVideoLink"]);
        $this->assertEquals("Automatically print the Animal Kennel Card", $data['values'][0]["enableAnimalKennelcardPrintAuto"]);
        $this->assertEquals("Show journal entries on the kennel card", $data['values'][0]["showAnimalKennelcardJournalEntries"]);
        $this->assertEquals("Show cost on the kennel card", $data['values'][0]["showAnimalKennelcardJournalCost"]);
        $this->assertEquals("Disable the message that animal ages are best estimates", $data['values'][0]["disableAnimalAgeBestEstimate"]);

        $this->assertEquals('website', $data['objectType']);
        $this->assertEquals('updateSettings', $data['objectAction']);
    }
}
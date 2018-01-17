# Website

This is the documentation for the Website queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-website)

## Define
Performs website.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\Website\Define();

    $result = $api->executeRequest($query);
## GetSettings
Performs website.getSettings query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Website\GetSettings();


    $result = $api->executeRequest($query);

## UpdateSettings
Performs website.updateSettings query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Website\UpdateSettings();

    $query->setenableWebsiteDown("Website down for maintenance");
    $query->setdisableWebsiteFavoriteEmails("Disable user email alerts for Favorite Animals and Breeds");
    $query->setenableWebsitePetfinderHomePageUpload("Upload website home page as Petfinder web page");
    $query->setsetWebsiteSlogan("Website slogan");
    $query->setsetWebsiteMenuSource("Website menu source");
    $query->setsetWebsiteIndexPageID("Custom front page");
    $query->setenableWebsiteFrontPageLogo("Display Logo on front page");
    $query->setenableWebsiteFrontPageNews("Show the latest News articles on the front page");
    $query->setenableWebsiteFrontPageEvents("Show upcoming Events on the front page");
    $query->setenableWebsiteFrontPageHighlightedAnimals("Show highlighted animals on the front page");
    $query->setsetWebsiteFrontPageNumberOfHighlightedAnimals("Number of highlighted animals to show on the front page");
    $query->setsetWebsiteFrontPageHighlightedAnimalsDescriptionLength("Amount of highlighted animals' description to show on the front page");
    $query->setenableWebsiteRescueGroupsPoweredByImage("Show the Powered by RescueGroups.org image");
    $query->setenableWebsiteMenuLogoutUsername("Show the user name on the menu next to the Logout option");
    $query->setenableWebsiteLastUpdated("Show the date/time the website was last updated");
    $query->setsetWebsiteAnimalPictureMode("Set the animal picture mode");
    $query->setsetWebsiteAnimalPictureAnimalID("Select the animal for the Featured animal picture");
    $query->setenableWebsiteAnimalSearchBox("Show the animal seach box");
    $query->setenableWebsiteSideBarAddress("Show mailing address on the side bar");
    $query->setenableWebsiteEmailFriend("Show Email Page to a Friend");
    $query->setenableWebsiteShareButton("Show share button");
    $query->setenableWebsiteSparky("Show the DogTime Sparky widget");
    $query->setsetWebsiteSideBarWidth("Set the side bar width");
    $query->setenableWebsiteLogo("Show logo");
    $query->setsetWebsiteBackgroundImageID("Set the background image");
    $query->setenableAnimalMeet("Enable the Meet Request feature");
    $query->setenableWebsiteContactUsForm("Enable the Contact Us form");
    $query->setsetWebsiteAnimalBrowseLayout("Animal Browse page layout");
    $query->setsetWebsiteAnimalBrowsePanelWidth("Set the animal browse panel width");
    $query->setsetWebsiteAnimalBrowsePanelColumns("Animal Browse page columns");
    $query->setsetWebsiteAnimalBrowseAnimalsPerPage("Animal Browse page number of animals");
    $query->setsetWebsiteAnimalBrowseLimit("Animal limit");
    $query->setdisableWebsiteAnimalBrowseCourtesyListings("Hide courtesy listings on browse/list page");
    $query->setshowWebsiteAnimalBrowseSponsorshipLink("Show sponsorship link on the browse page");
    $query->setsetWebsiteAnimalBrowseDescriptionLength("How much of each animal's description to display");
    $query->setsetWebsiteAnimalBrowseFields("setWebsiteAnimalBrowseFields");
    $query->setenableAnimalAdoptions("List Animals available for adoption");
    $query->setsetAnimalDetailPageStyle("Animal detail page layout");
    $query->setenableAnimalDetailPagePopover("Use a popover to display animal details");
    $query->setenableAnimalDetailPageShareButton("Show the Animal detail page share button");
    $query->setdisableAnimalDetailPageAdoptionInfoLink("Disable the Animal detail page Adoption Information link");
    $query->setdisableAnimalDetailPageAdoptionInfoLinkCourtesy("Disable the Animal detail page Adoption Information link on courtesy animals");
    $query->setshowAnimalDetailPageDogTimeContent("Show DogTime content on the Animal detail page");
    $query->setshowAnimalDetailPageDogTimeSaveaDog("Show a link on the Animal detail page to Save-a-Dog or Save-a-Cat on DogTime");
    $query->setsetAnimalDetailPageEventsLimit("How many Events to show on the Animal detail page");
    $query->setshowAnimalDetailPageAdoptMeSayings("Show the Adopt Me sayings on the Animal detail page");
    $query->setdisableAnimalDetailPageMyRescue("Disable the My Rescue box on the Animal detail page");
    $query->setdisableAnimalFlyer("Disable the link to the Petbond Animal adoption flyer");
    $query->setdisableAnimalFavoriteCount("Disable the Animal favorite count");
    $query->setdisableAnimalSuccessesPublic("Disable public access to the Animal successes");
    $query->setdisableAnimalStories("Disable Animal success stories");
    $query->setshowAnimalTransferredWithSuccesses("Show transferred Animals with successes");
    $query->setshowAnimalLinks("Show Animal links");
    $query->setshowAnimalHomePageHighlighted("Show Highlighted Animals on the Animal Home Page");
    $query->setenableAnimalImageBorder("Set the Animal image border");
    $query->setsetAnimalImageBorderStyle("Set the Animal image border style");
    $query->setsetAnimalImageBorderColor("Set the Animal image border color");
    $query->setsetAnimalImageMatteColor("Set the Animal image matte color");
    $query->setdisableAnimalDescriptionVideo("Disable videos in Animal descriptions");
    $query->setenableAnimalDescriptionVideoLink("Use a link instead of embedding the video in Animal descriptions");
    $query->setenableAnimalKennelcardPrintAuto("Automatically print the Animal Kennel Card");
    $query->setshowAnimalKennelcardJournalEntries("Show journal entries on the kennel card");
    $query->setshowAnimalKennelcardJournalCost("Show cost on the kennel card");
    $query->setdisableAnimalAgeBestEstimate("Disable the message that animal ages are best estimates");

    $result = $api->executeRequest($query);


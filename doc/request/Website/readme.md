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

    $query->setEnableWebsiteDown("Website down for maintenance");
    $query->setDisableWebsiteFavoriteEmails("Disable user email alerts for Favorite Animals and Breeds");
    $query->setEnableWebsitePetfinderHomePageUpload("Upload website home page as Petfinder web page");
    $query->setWebsiteSlogan("Website slogan");
    $query->setWebsiteMenuSource("Website menu source");
    $query->setWebsiteIndexPageID("Custom front page");
    $query->setEnableWebsiteFrontPageLogo("Display Logo on front page");
    $query->setEnableWebsiteFrontPageNews("Show the latest News articles on the front page");
    $query->setEnableWebsiteFrontPageEvents("Show upcoming Events on the front page");
    $query->setEnableWebsiteFrontPageHighlightedAnimals("Show highlighted animals on the front page");
    $query->setWebsiteFrontPageNumberOfHighlightedAnimals("Number of highlighted animals to show on the front page");
    $query->setWebsiteFrontPageHighlightedAnimalsDescriptionLength("Amount of highlighted animals' description to show on the front page");
    $query->setEnableWebsiteRescueGroupsPoweredByImage("Show the Powered by RescueGroups.org image");
    $query->setEnableWebsiteMenuLogoutUsername("Show the user name on the menu next to the Logout option");
    $query->setEnableWebsiteLastUpdated("Show the date/time the website was last updated");
    $query->setWebsiteAnimalPictureMode("Set the animal picture mode");
    $query->setWebsiteAnimalPictureAnimalID("Select the animal for the Featured animal picture");
    $query->setEnableWebsiteAnimalSearchBox("Show the animal seach box");
    $query->setEnableWebsiteSideBarAddress("Show mailing address on the side bar");
    $query->setEnableWebsiteEmailFriend("Show Email Page to a Friend");
    $query->setEnableWebsiteShareButton("Show share button");
    $query->setEnableWebsiteSparky("Show the DogTime Sparky widget");
    $query->setWebsiteSideBarWidth("Set the side bar width");
    $query->setEnableWebsiteLogo("Show logo");
    $query->setWebsiteBackgroundImageID("Set the background image");
    $query->setEnableAnimalMeet("Enable the Meet Request feature");
    $query->setEnableWebsiteContactUsForm("Enable the Contact Us form");
    $query->setWebsiteAnimalBrowseLayout("Animal Browse page layout");
    $query->setWebsiteAnimalBrowsePanelWidth("Set the animal browse panel width");
    $query->setWebsiteAnimalBrowsePanelColumns("Animal Browse page columns");
    $query->setWebsiteAnimalBrowseAnimalsPerPage("Animal Browse page number of animals");
    $query->setWebsiteAnimalBrowseLimit("Animal limit");
    $query->setDisableWebsiteAnimalBrowseCourtesyListings("Hide courtesy listings on browse/list page");
    $query->setShowWebsiteAnimalBrowseSponsorshipLink("Show sponsorship link on the browse page");
    $query->setWebsiteAnimalBrowseDescriptionLength("How much of each animal's description to display");
    $query->setWebsiteAnimalBrowseFields("setWebsiteAnimalBrowseFields");
    $query->setEnableAnimalAdoptions("List Animals available for adoption");
    $query->setAnimalDetailPageStyle("Animal detail page layout");
    $query->setEnableAnimalDetailPagePopover("Use a popover to display animal details");
    $query->setEnableAnimalDetailPageShareButton("Show the Animal detail page share button");
    $query->setDisableAnimalDetailPageAdoptionInfoLink("Disable the Animal detail page Adoption Information link");
    $query->setDisableAnimalDetailPageAdoptionInfoLinkCourtesy("Disable the Animal detail page Adoption Information link on courtesy animals");
    $query->setShowAnimalDetailPageDogTimeContent("Show DogTime content on the Animal detail page");
    $query->setShowAnimalDetailPageDogTimeSaveaDog("Show a link on the Animal detail page to Save-a-Dog or Save-a-Cat on DogTime");
    $query->setAnimalDetailPageEventsLimit("How many Events to show on the Animal detail page");
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
    $query->setAnimalImageBorderStyle("Set the Animal image border style");
    $query->setAnimalImageBorderColor("Set the Animal image border color");
    $query->setAnimalImageMatteColor("Set the Animal image matte color");
    $query->setDisableAnimalDescriptionVideo("Disable videos in Animal descriptions");
    $query->setEnableAnimalDescriptionVideoLink("Use a link instead of embedding the video in Animal descriptions");
    $query->setEnableAnimalKennelcardPrintAuto("Automatically print the Animal Kennel Card");
    $query->setShowAnimalKennelcardJournalEntries("Show journal entries on the kennel card");
    $query->setShowAnimalKennelcardJournalCost("Show cost on the kennel card");
    $query->setDisableAnimalAgeBestEstimate("Disable the message that animal ages are best estimates");

    $result = $api->executeRequest($query);


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

    $query->setenableDown("Website down for maintenance");
    $query->setdisableFavoriteEmails("Disable user email alerts for Favorite Animals and Breeds");
    $query->setenablePetfinderHomePageUpload("Upload website home page as Petfinder web page");
    $query->setsetSlogan("Website slogan");
    $query->setsetMenuSource("Website menu source");
    $query->setsetIndexPageID("Custom front page");
    $query->setenableFrontPageLogo("Display Logo on front page");
    $query->setenableFrontPageNews("Show the latest News articles on the front page");
    $query->setenableFrontPageEvents("Show upcoming Events on the front page");
    $query->setenableFrontPageHighlightedAnimals("Show highlighted animals on the front page");
    $query->setsetFrontPageNumberOfHighlightedAnimals("Number of highlighted animals to show on the front page");
    $query->setsetFrontPageHighlightedAnimalsDescriptionLength("Amount of highlighted animals' description to show on the front page");
    $query->setenableRescueGroupsPoweredByImage("Show the Powered by RescueGroups.org image");
    $query->setenableMenuLogoutUsername("Show the user name on the menu next to the Logout option");
    $query->setenableLastUpdated("Show the date/time the website was last updated");
    $query->setsetAnimalPictureMode("Set the animal picture mode");
    $query->setsetAnimalPictureAnimalID("Select the animal for the Featured animal picture");
    $query->setenableAnimalSearchBox("Show the animal seach box");
    $query->setenableSideBarAddress("Show mailing address on the side bar");
    $query->setenableEmailFriend("Show Email Page to a Friend");
    $query->setenableShareButton("Show share button");
    $query->setenableSparky("Show the DogTime Sparky widget");
    $query->setsetSideBarWidth("Set the side bar width");
    $query->setenableLogo("Show logo");
    $query->setsetBackgroundImageID("Set the background image");
    $query->setenableAnimalMeet("Enable the Meet Request feature");
    $query->setenableContactUsForm("Enable the Contact Us form");
    $query->setsetAnimalBrowseLayout("Animal Browse page layout");
    $query->setsetAnimalBrowsePanelWidth("Set the animal browse panel width");
    $query->setsetAnimalBrowsePanelColumns("Animal Browse page columns");
    $query->setsetAnimalBrowseAnimalsPerPage("Animal Browse page number of animals");
    $query->setsetAnimalBrowseLimit("Animal limit");
    $query->setdisableAnimalBrowseCourtesyListings("Hide courtesy listings on browse/list page");
    $query->setshowAnimalBrowseSponsorshipLink("Show sponsorship link on the browse page");
    $query->setsetAnimalBrowseDescriptionLength("How much of each animal's description to display");
    $query->setsetAnimalBrowseFields("setAnimalBrowseFields");
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


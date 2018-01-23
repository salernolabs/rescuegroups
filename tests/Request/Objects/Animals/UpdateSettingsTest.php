<?php
/**
 * Animals updateSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Animals;

class UpdateSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Animals\UpdateSettings();
        $query->setEnableAnimalsSpecialListBabies("Babies (Kittens, Puppies) enabled");
        $query->setSetAnimalsSpecialListBabiesYoungest("Babies (Kittens, Puppies) Youngest Age");
        $query->setSetAnimalsSpecialListBabiesOldest("Babies (Kittens, Puppies) Oldest Age");
        $query->setEnableAnimalsSpecialListTeens("Teens enabled");
        $query->setSetAnimalsSpecialListTeensYoungest("Teens Youngest Age");
        $query->setSetAnimalsSpecialListTeensOldest("Teens Oldest Age");
        $query->setEnableAnimalsSpecialListAdults("Adults enabled");
        $query->setSetAnimalsSpecialListAdultsYoungest("Adults Youngest Age");
        $query->setSetAnimalsSpecialListAdultsOldest("Adults Oldest Age");
        $query->setEnableAnimalsSpecialListSeniors("Seniors enabled");
        $query->setSetAnimalsSpecialListSeniorsYoungest("Seniors Youngest Age");
        $query->setEnableAnimalsSpecialListLongtime("Long Time/Must Adopt enabled");
        $query->setSetAnimalsSpecialListLongtimeYoungest("Long Time/Must Adopt Shortest length of time");
        $query->setSetAnimalsSpecialListLongtimeOldest("Long Time/Must Adopt Longest length of time");
        $query->setEnableAnimalsSpecialListRecent("Recent Arrivals enabled");
        $query->setSetAnimalsSpecialListRecentDays("Recent Arrivals Shortest length of time");
        $query->setEnableAnimalsSpecialListSpecialNeeds("Special Needs enabled");
        $query->setEnableAnimalsSpecialListUrgent("Urgent enabled");
        $query->setEnableAnimalsSpecialListFoster("Needs a Caretaker/Foster enabled");
        $query->setEnableAnimalsSpecialListCourtesy("Courtesy Listings enabled");
        $query->setEnableAnimalAutoRescueID("Automatically set animal's Rescue ID");
        $query->setSetAnimalAutoRescueIDFormat("Format for Rescue IDs");
        $query->setDisableAnimalAutoRescueIDCourtesyListings("Do not automatically assign Rescue ID for courtesy listings");
        $query->setEnablePortalWebsite("Enable the Portal website");
        $query->setShowAnimalMicrochip("Show if the animal is microchipped");
        $query->setShowAnimalAltered("Show if the animal is altered");
        $query->setShowAnimalWillBeAltered("Show if the animal will be altered before adoption");
        $query->setShowAnimalRescueID("Show the animal's Rescue ID");
        $query->setShowAnimalAdoptionFee("Show the animal's adoption fee");
        $query->setShowAnimalEuthanasiaInfo("Show the animal's euthanasia information");
        $query->setDisableAnimalCourtesyHeaderFooter("Disable the animal header/footer to courtesy animals");
        $query->setShowAnimalKennelcardJournalEntries("Show journal entries on the kennel card");
        $query->setShowAnimalKennelcardJournalCost("Show cost on the kennel card");
        $query->setDisableAnimalExportAdopted("Prevent adopted animals from being uploaded to Petfinder");
        $query->setEnableExportAdoptedToAdoptapet("Export adopted pets to Adopt-a-Pet.com");
        $query->setDisableAnimalExportCourtesy("Prevent courtesy animals from being uploaded to other sites");
        $query->setDisableAnimalExportAnimalWebPageLink("Disable the link to the animal's web page");
        $query->setDisableAnimalExportWebsiteLink("Disable the link to your organization's website");
        $query->setDisableAnimalExportAdoptionFormLink("Disable the link to your adoption form");
        $query->setEnableAnimalExportDescriptionHeader("Include the Animal Description Header in the animal description");
        $query->setEnableAnimalExportDescriptionFooter("Include the Animal Description Footer in the animal description");
        $query->setEnableAnimalExportUniqueAnimalID("Use the RescueGroups.org Animal ID as a Unique ID");
        $query->setEnableAnimalExportContactFieldFirstname("Show the foster/caretaker's first name");
        $query->setEnableAnimalExportContactFieldLastname("Show the foster/caretaker's last name");
        $query->setEnableAnimalExportContactFieldEmail("Show the foster/caretaker's email address");
        $query->setEnableAnimalExportContactFieldPhoneHome("Show the foster/caretaker's home phone number");
        $query->setEnableAnimalExportContactFieldPhoneCell("Show the foster/caretaker's cell phone number");
        $query->setSetAnimalExportYouTubeAccount("Account to use for YouTube video upload");
        $query->setSetAnimalExportYouTubeAuthorizationCode("YouTube authorization code");
        $query->setSetAnimalExportDefaultCategory1("By default, export to services that list animals for adoption");
        $query->setSetAnimalExportDefaultCategory4("By default, export to services that list animals for adoption (from non-rescue/shelters)");
        $query->setSetAnimalExportDefaultCategory3("By default, export to services that list animals for sale by breeder");
        $query->setSetAnimalExportDefaultCategory2("By default, export to services that list animals for sale by owner");
        $query->setSetAnimalExportDefaultCategory5("By default, export to services that provide animal related classifieds");
        $query->setSetAnimalExportDefaultCategory6("By default, export to services that provide animal related community discussion/forums");
        $query->setSetAnimalExportDefaultCategory8("By default, export to services that provide animal related educational information");
        $query->setSetAnimalExportDefaultCategory7("By default, export to services that provide animal related news");
        $query->setSetAnimalExportDefaultCategory13("By default, export to services that provide event calendars");
        $query->setSetAnimalExportDefaultCategory9("By default, export to services that sell/promote animal related products (food, toys, treats, etc)");
        $query->setSetAnimalExportDefaultCategory11("By default, export to services that sell/promote animal related services (training, grooming)");
        $query->setSetAnimalExportDefaultCategory10("By default, export to services that sell/promote non-animal related products");
        $query->setSetAnimalExportDefaultCategory12("By default, export to services that sell/promote non-animal related services");
        $query->setDisableAnimalDescriptionVideo("Disable videos in Animal descriptions");
        $query->setEnableAnimalDescriptionVideoLink("Use a link instead of embedding the video in Animal descriptions");
        $query->setEnableFreePetChipRegistry("Enable FreePetChipRegistry registrations");
        $query->setSetFreePetChipRegistryUserName("FreePetChipRegistry user name");
        $query->setEnablePetLinkRegistry("Enable PetLink registrations");
        $query->setSetPetLinkUserName("PetLink user name");
        $query->setSetPetLinkPassword("PetLink password");
        $query->setDisableMicrochipUserAlert("Disable the email alert to the volunteer concerning microchip registration (success or failure)");
        $query->setSetMicrochipAlertEmails("Email address(es) to alert concerning microchip registration (success or failure)");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Babies (Kittens, Puppies) enabled", $data['values'][0]["enableAnimalsSpecialListBabies"]);
        $this->assertEquals("Babies (Kittens, Puppies) Youngest Age", $data['values'][0]["setAnimalsSpecialListBabiesYoungest"]);
        $this->assertEquals("Babies (Kittens, Puppies) Oldest Age", $data['values'][0]["setAnimalsSpecialListBabiesOldest"]);
        $this->assertEquals("Teens enabled", $data['values'][0]["enableAnimalsSpecialListTeens"]);
        $this->assertEquals("Teens Youngest Age", $data['values'][0]["setAnimalsSpecialListTeensYoungest"]);
        $this->assertEquals("Teens Oldest Age", $data['values'][0]["setAnimalsSpecialListTeensOldest"]);
        $this->assertEquals("Adults enabled", $data['values'][0]["enableAnimalsSpecialListAdults"]);
        $this->assertEquals("Adults Youngest Age", $data['values'][0]["setAnimalsSpecialListAdultsYoungest"]);
        $this->assertEquals("Adults Oldest Age", $data['values'][0]["setAnimalsSpecialListAdultsOldest"]);
        $this->assertEquals("Seniors enabled", $data['values'][0]["enableAnimalsSpecialListSeniors"]);
        $this->assertEquals("Seniors Youngest Age", $data['values'][0]["setAnimalsSpecialListSeniorsYoungest"]);
        $this->assertEquals("Long Time/Must Adopt enabled", $data['values'][0]["enableAnimalsSpecialListLongtime"]);
        $this->assertEquals("Long Time/Must Adopt Shortest length of time", $data['values'][0]["setAnimalsSpecialListLongtimeYoungest"]);
        $this->assertEquals("Long Time/Must Adopt Longest length of time", $data['values'][0]["setAnimalsSpecialListLongtimeOldest"]);
        $this->assertEquals("Recent Arrivals enabled", $data['values'][0]["enableAnimalsSpecialListRecent"]);
        $this->assertEquals("Recent Arrivals Shortest length of time", $data['values'][0]["setAnimalsSpecialListRecentDays"]);
        $this->assertEquals("Special Needs enabled", $data['values'][0]["enableAnimalsSpecialListSpecialNeeds"]);
        $this->assertEquals("Urgent enabled", $data['values'][0]["enableAnimalsSpecialListUrgent"]);
        $this->assertEquals("Needs a Caretaker/Foster enabled", $data['values'][0]["enableAnimalsSpecialListFoster"]);
        $this->assertEquals("Courtesy Listings enabled", $data['values'][0]["enableAnimalsSpecialListCourtesy"]);
        $this->assertEquals("Automatically set animal's Rescue ID", $data['values'][0]["enableAnimalAutoRescueID"]);
        $this->assertEquals("Format for Rescue IDs", $data['values'][0]["setAnimalAutoRescueIDFormat"]);
        $this->assertEquals("Do not automatically assign Rescue ID for courtesy listings", $data['values'][0]["disableAnimalAutoRescueIDCourtesyListings"]);
        $this->assertEquals("Enable the Portal website", $data['values'][0]["enablePortalWebsite"]);
        $this->assertEquals("Show if the animal is microchipped", $data['values'][0]["showAnimalMicrochip"]);
        $this->assertEquals("Show if the animal is altered", $data['values'][0]["showAnimalAltered"]);
        $this->assertEquals("Show if the animal will be altered before adoption", $data['values'][0]["showAnimalWillBeAltered"]);
        $this->assertEquals("Show the animal's Rescue ID", $data['values'][0]["showAnimalRescueID"]);
        $this->assertEquals("Show the animal's adoption fee", $data['values'][0]["showAnimalAdoptionFee"]);
        $this->assertEquals("Show the animal's euthanasia information", $data['values'][0]["showAnimalEuthanasiaInfo"]);
        $this->assertEquals("Disable the animal header/footer to courtesy animals", $data['values'][0]["disableAnimalCourtesyHeaderFooter"]);
        $this->assertEquals("Show journal entries on the kennel card", $data['values'][0]["showAnimalKennelcardJournalEntries"]);
        $this->assertEquals("Show cost on the kennel card", $data['values'][0]["showAnimalKennelcardJournalCost"]);
        $this->assertEquals("Prevent adopted animals from being uploaded to Petfinder", $data['values'][0]["disableAnimalExportAdopted"]);
        $this->assertEquals("Export adopted pets to Adopt-a-Pet.com", $data['values'][0]["enableExportAdoptedToAdoptapet"]);
        $this->assertEquals("Prevent courtesy animals from being uploaded to other sites", $data['values'][0]["disableAnimalExportCourtesy"]);
        $this->assertEquals("Disable the link to the animal's web page", $data['values'][0]["disableAnimalExportAnimalWebPageLink"]);
        $this->assertEquals("Disable the link to your organization's website", $data['values'][0]["disableAnimalExportWebsiteLink"]);
        $this->assertEquals("Disable the link to your adoption form", $data['values'][0]["disableAnimalExportAdoptionFormLink"]);
        $this->assertEquals("Include the Animal Description Header in the animal description", $data['values'][0]["enableAnimalExportDescriptionHeader"]);
        $this->assertEquals("Include the Animal Description Footer in the animal description", $data['values'][0]["enableAnimalExportDescriptionFooter"]);
        $this->assertEquals("Use the RescueGroups.org Animal ID as a Unique ID", $data['values'][0]["enableAnimalExportUniqueAnimalID"]);
        $this->assertEquals("Show the foster/caretaker's first name", $data['values'][0]["enableAnimalExportContactFieldFirstname"]);
        $this->assertEquals("Show the foster/caretaker's last name", $data['values'][0]["enableAnimalExportContactFieldLastname"]);
        $this->assertEquals("Show the foster/caretaker's email address", $data['values'][0]["enableAnimalExportContactFieldEmail"]);
        $this->assertEquals("Show the foster/caretaker's home phone number", $data['values'][0]["enableAnimalExportContactFieldPhoneHome"]);
        $this->assertEquals("Show the foster/caretaker's cell phone number", $data['values'][0]["enableAnimalExportContactFieldPhoneCell"]);
        $this->assertEquals("Account to use for YouTube video upload", $data['values'][0]["setAnimalExportYouTubeAccount"]);
        $this->assertEquals("YouTube authorization code", $data['values'][0]["setAnimalExportYouTubeAuthorizationCode"]);
        $this->assertEquals("By default, export to services that list animals for adoption", $data['values'][0]["setAnimalExportDefaultCategory1"]);
        $this->assertEquals("By default, export to services that list animals for adoption (from non-rescue/shelters)", $data['values'][0]["setAnimalExportDefaultCategory4"]);
        $this->assertEquals("By default, export to services that list animals for sale by breeder", $data['values'][0]["setAnimalExportDefaultCategory3"]);
        $this->assertEquals("By default, export to services that list animals for sale by owner", $data['values'][0]["setAnimalExportDefaultCategory2"]);
        $this->assertEquals("By default, export to services that provide animal related classifieds", $data['values'][0]["setAnimalExportDefaultCategory5"]);
        $this->assertEquals("By default, export to services that provide animal related community discussion/forums", $data['values'][0]["setAnimalExportDefaultCategory6"]);
        $this->assertEquals("By default, export to services that provide animal related educational information", $data['values'][0]["setAnimalExportDefaultCategory8"]);
        $this->assertEquals("By default, export to services that provide animal related news", $data['values'][0]["setAnimalExportDefaultCategory7"]);
        $this->assertEquals("By default, export to services that provide event calendars", $data['values'][0]["setAnimalExportDefaultCategory13"]);
        $this->assertEquals("By default, export to services that sell/promote animal related products (food, toys, treats, etc)", $data['values'][0]["setAnimalExportDefaultCategory9"]);
        $this->assertEquals("By default, export to services that sell/promote animal related services (training, grooming)", $data['values'][0]["setAnimalExportDefaultCategory11"]);
        $this->assertEquals("By default, export to services that sell/promote non-animal related products", $data['values'][0]["setAnimalExportDefaultCategory10"]);
        $this->assertEquals("By default, export to services that sell/promote non-animal related services", $data['values'][0]["setAnimalExportDefaultCategory12"]);
        $this->assertEquals("Disable videos in Animal descriptions", $data['values'][0]["disableAnimalDescriptionVideo"]);
        $this->assertEquals("Use a link instead of embedding the video in Animal descriptions", $data['values'][0]["enableAnimalDescriptionVideoLink"]);
        $this->assertEquals("Enable FreePetChipRegistry registrations", $data['values'][0]["enableFreePetChipRegistry"]);
        $this->assertEquals("FreePetChipRegistry user name", $data['values'][0]["setFreePetChipRegistryUserName"]);
        $this->assertEquals("Enable PetLink registrations", $data['values'][0]["enablePetLinkRegistry"]);
        $this->assertEquals("PetLink user name", $data['values'][0]["setPetLinkUserName"]);
        $this->assertEquals("PetLink password", $data['values'][0]["setPetLinkPassword"]);
        $this->assertEquals("Disable the email alert to the volunteer concerning microchip registration (success or failure)", $data['values'][0]["disableMicrochipUserAlert"]);
        $this->assertEquals("Email address(es) to alert concerning microchip registration (success or failure)", $data['values'][0]["setMicrochipAlertEmails"]);

        $this->assertEquals('animals', $data['objectType']);
        $this->assertEquals('updateSettings', $data['objectAction']);
    }
}
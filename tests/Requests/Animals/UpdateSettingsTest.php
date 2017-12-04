<?php
/**
 * Animals UpdateSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Animals\UpdateSettings;

class UpdateSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Animals\UpdateSettings();

        
        $query->setEnableAnimalsSpecialListBabies("enableAnimalsSpecialListBabies");
        $query->setSetAnimalsSpecialListBabiesYoungest("setAnimalsSpecialListBabiesYoungest");
        $query->setSetAnimalsSpecialListBabiesOldest("setAnimalsSpecialListBabiesOldest");
        $query->setEnableAnimalsSpecialListTeens("enableAnimalsSpecialListTeens");
        $query->setSetAnimalsSpecialListTeensYoungest("setAnimalsSpecialListTeensYoungest");
        $query->setSetAnimalsSpecialListTeensOldest("setAnimalsSpecialListTeensOldest");
        $query->setEnableAnimalsSpecialListAdults("enableAnimalsSpecialListAdults");
        $query->setSetAnimalsSpecialListAdultsYoungest("setAnimalsSpecialListAdultsYoungest");
        $query->setSetAnimalsSpecialListAdultsOldest("setAnimalsSpecialListAdultsOldest");
        $query->setEnableAnimalsSpecialListSeniors("enableAnimalsSpecialListSeniors");
        $query->setSetAnimalsSpecialListSeniorsYoungest("setAnimalsSpecialListSeniorsYoungest");
        $query->setEnableAnimalsSpecialListLongtime("enableAnimalsSpecialListLongtime");
        $query->setSetAnimalsSpecialListLongtimeYoungest("setAnimalsSpecialListLongtimeYoungest");
        $query->setSetAnimalsSpecialListLongtimeOldest("setAnimalsSpecialListLongtimeOldest");
        $query->setEnableAnimalsSpecialListRecent("enableAnimalsSpecialListRecent");
        $query->setSetAnimalsSpecialListRecentDays("setAnimalsSpecialListRecentDays");
        $query->setEnableAnimalsSpecialListSpecialNeeds("enableAnimalsSpecialListSpecialNeeds");
        $query->setEnableAnimalsSpecialListUrgent("enableAnimalsSpecialListUrgent");
        $query->setEnableAnimalsSpecialListFoster("enableAnimalsSpecialListFoster");
        $query->setEnableAnimalsSpecialListCourtesy("enableAnimalsSpecialListCourtesy");
        $query->setEnableAnimalAutoRescueID("enableAnimalAutoRescueID");
        $query->setSetAnimalAutoRescueIDFormat("setAnimalAutoRescueIDFormat");
        $query->setDisableAnimalAutoRescueIDCourtesyListings("disableAnimalAutoRescueIDCourtesyListings");
        $query->setEnablePortalWebsite("enablePortalWebsite");
        $query->setShowAnimalMicrochip("showAnimalMicrochip");
        $query->setShowAnimalAltered("showAnimalAltered");
        $query->setShowAnimalWillBeAltered("showAnimalWillBeAltered");
        $query->setShowAnimalRescueID("showAnimalRescueID");
        $query->setShowAnimalAdoptionFee("showAnimalAdoptionFee");
        $query->setShowAnimalEuthanasiaInfo("showAnimalEuthanasiaInfo");
        $query->setDisableAnimalCourtesyHeaderFooter("disableAnimalCourtesyHeaderFooter");
        $query->setShowAnimalKennelcardJournalEntries("showAnimalKennelcardJournalEntries");
        $query->setShowAnimalKennelcardJournalCost("showAnimalKennelcardJournalCost");
        $query->setDisableAnimalExportAdopted("disableAnimalExportAdopted");
        $query->setEnableExportAdoptedToAdoptapet("enableExportAdoptedToAdoptapet");
        $query->setDisableAnimalExportCourtesy("disableAnimalExportCourtesy");
        $query->setDisableAnimalExportAnimalWebPageLink("disableAnimalExportAnimalWebPageLink");
        $query->setDisableAnimalExportWebsiteLink("disableAnimalExportWebsiteLink");
        $query->setDisableAnimalExportAdoptionFormLink("disableAnimalExportAdoptionFormLink");
        $query->setEnableAnimalExportDescriptionHeader("enableAnimalExportDescriptionHeader");
        $query->setEnableAnimalExportDescriptionFooter("enableAnimalExportDescriptionFooter");
        $query->setEnableAnimalExportUniqueAnimalID("enableAnimalExportUniqueAnimalID");
        $query->setEnableAnimalExportContactFieldFirstname("enableAnimalExportContactFieldFirstname");
        $query->setEnableAnimalExportContactFieldLastname("enableAnimalExportContactFieldLastname");
        $query->setEnableAnimalExportContactFieldEmail("enableAnimalExportContactFieldEmail");
        $query->setEnableAnimalExportContactFieldPhoneHome("enableAnimalExportContactFieldPhoneHome");
        $query->setEnableAnimalExportContactFieldPhoneCell("enableAnimalExportContactFieldPhoneCell");
        $query->setSetAnimalExportYouTubeAccount("setAnimalExportYouTubeAccount");
        $query->setSetAnimalExportYouTubeAuthorizationCode("setAnimalExportYouTubeAuthorizationCode");
        $query->setSetAnimalExportDefaultCategory1("setAnimalExportDefaultCategory1");
        $query->setSetAnimalExportDefaultCategory4("setAnimalExportDefaultCategory4");
        $query->setSetAnimalExportDefaultCategory3("setAnimalExportDefaultCategory3");
        $query->setSetAnimalExportDefaultCategory2("setAnimalExportDefaultCategory2");
        $query->setSetAnimalExportDefaultCategory5("setAnimalExportDefaultCategory5");
        $query->setSetAnimalExportDefaultCategory6("setAnimalExportDefaultCategory6");
        $query->setSetAnimalExportDefaultCategory8("setAnimalExportDefaultCategory8");
        $query->setSetAnimalExportDefaultCategory7("setAnimalExportDefaultCategory7");
        $query->setSetAnimalExportDefaultCategory13("setAnimalExportDefaultCategory13");
        $query->setSetAnimalExportDefaultCategory9("setAnimalExportDefaultCategory9");
        $query->setSetAnimalExportDefaultCategory11("setAnimalExportDefaultCategory11");
        $query->setSetAnimalExportDefaultCategory10("setAnimalExportDefaultCategory10");
        $query->setSetAnimalExportDefaultCategory12("setAnimalExportDefaultCategory12");
        $query->setDisableAnimalDescriptionVideo("disableAnimalDescriptionVideo");
        $query->setEnableAnimalDescriptionVideoLink("enableAnimalDescriptionVideoLink");
        $query->setEnableFreePetChipRegistry("enableFreePetChipRegistry");
        $query->setSetFreePetChipRegistryUserName("setFreePetChipRegistryUserName");
        $query->setEnablePetLinkRegistry("enablePetLinkRegistry");
        $query->setSetPetLinkUserName("setPetLinkUserName");
        $query->setSetPetLinkPassword("setPetLinkPassword");
        $query->setDisableMicrochipUserAlert("disableMicrochipUserAlert");
        $query->setSetMicrochipAlertEmails("setMicrochipAlertEmails");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animals", $data["objectType"]);

        $this->assertEquals("updateSettings", $data["objectAction"]);

        $this->assertEquals("enableAnimalsSpecialListBabies", $data["enableAnimalsSpecialListBabies"]);
        $this->assertEquals("setAnimalsSpecialListBabiesYoungest", $data["setAnimalsSpecialListBabiesYoungest"]);
        $this->assertEquals("setAnimalsSpecialListBabiesOldest", $data["setAnimalsSpecialListBabiesOldest"]);
        $this->assertEquals("enableAnimalsSpecialListTeens", $data["enableAnimalsSpecialListTeens"]);
        $this->assertEquals("setAnimalsSpecialListTeensYoungest", $data["setAnimalsSpecialListTeensYoungest"]);
        $this->assertEquals("setAnimalsSpecialListTeensOldest", $data["setAnimalsSpecialListTeensOldest"]);
        $this->assertEquals("enableAnimalsSpecialListAdults", $data["enableAnimalsSpecialListAdults"]);
        $this->assertEquals("setAnimalsSpecialListAdultsYoungest", $data["setAnimalsSpecialListAdultsYoungest"]);
        $this->assertEquals("setAnimalsSpecialListAdultsOldest", $data["setAnimalsSpecialListAdultsOldest"]);
        $this->assertEquals("enableAnimalsSpecialListSeniors", $data["enableAnimalsSpecialListSeniors"]);
        $this->assertEquals("setAnimalsSpecialListSeniorsYoungest", $data["setAnimalsSpecialListSeniorsYoungest"]);
        $this->assertEquals("enableAnimalsSpecialListLongtime", $data["enableAnimalsSpecialListLongtime"]);
        $this->assertEquals("setAnimalsSpecialListLongtimeYoungest", $data["setAnimalsSpecialListLongtimeYoungest"]);
        $this->assertEquals("setAnimalsSpecialListLongtimeOldest", $data["setAnimalsSpecialListLongtimeOldest"]);
        $this->assertEquals("enableAnimalsSpecialListRecent", $data["enableAnimalsSpecialListRecent"]);
        $this->assertEquals("setAnimalsSpecialListRecentDays", $data["setAnimalsSpecialListRecentDays"]);
        $this->assertEquals("enableAnimalsSpecialListSpecialNeeds", $data["enableAnimalsSpecialListSpecialNeeds"]);
        $this->assertEquals("enableAnimalsSpecialListUrgent", $data["enableAnimalsSpecialListUrgent"]);
        $this->assertEquals("enableAnimalsSpecialListFoster", $data["enableAnimalsSpecialListFoster"]);
        $this->assertEquals("enableAnimalsSpecialListCourtesy", $data["enableAnimalsSpecialListCourtesy"]);
        $this->assertEquals("enableAnimalAutoRescueID", $data["enableAnimalAutoRescueID"]);
        $this->assertEquals("setAnimalAutoRescueIDFormat", $data["setAnimalAutoRescueIDFormat"]);
        $this->assertEquals("disableAnimalAutoRescueIDCourtesyListings", $data["disableAnimalAutoRescueIDCourtesyListings"]);
        $this->assertEquals("enablePortalWebsite", $data["enablePortalWebsite"]);
        $this->assertEquals("showAnimalMicrochip", $data["showAnimalMicrochip"]);
        $this->assertEquals("showAnimalAltered", $data["showAnimalAltered"]);
        $this->assertEquals("showAnimalWillBeAltered", $data["showAnimalWillBeAltered"]);
        $this->assertEquals("showAnimalRescueID", $data["showAnimalRescueID"]);
        $this->assertEquals("showAnimalAdoptionFee", $data["showAnimalAdoptionFee"]);
        $this->assertEquals("showAnimalEuthanasiaInfo", $data["showAnimalEuthanasiaInfo"]);
        $this->assertEquals("disableAnimalCourtesyHeaderFooter", $data["disableAnimalCourtesyHeaderFooter"]);
        $this->assertEquals("showAnimalKennelcardJournalEntries", $data["showAnimalKennelcardJournalEntries"]);
        $this->assertEquals("showAnimalKennelcardJournalCost", $data["showAnimalKennelcardJournalCost"]);
        $this->assertEquals("disableAnimalExportAdopted", $data["disableAnimalExportAdopted"]);
        $this->assertEquals("enableExportAdoptedToAdoptapet", $data["enableExportAdoptedToAdoptapet"]);
        $this->assertEquals("disableAnimalExportCourtesy", $data["disableAnimalExportCourtesy"]);
        $this->assertEquals("disableAnimalExportAnimalWebPageLink", $data["disableAnimalExportAnimalWebPageLink"]);
        $this->assertEquals("disableAnimalExportWebsiteLink", $data["disableAnimalExportWebsiteLink"]);
        $this->assertEquals("disableAnimalExportAdoptionFormLink", $data["disableAnimalExportAdoptionFormLink"]);
        $this->assertEquals("enableAnimalExportDescriptionHeader", $data["enableAnimalExportDescriptionHeader"]);
        $this->assertEquals("enableAnimalExportDescriptionFooter", $data["enableAnimalExportDescriptionFooter"]);
        $this->assertEquals("enableAnimalExportUniqueAnimalID", $data["enableAnimalExportUniqueAnimalID"]);
        $this->assertEquals("enableAnimalExportContactFieldFirstname", $data["enableAnimalExportContactFieldFirstname"]);
        $this->assertEquals("enableAnimalExportContactFieldLastname", $data["enableAnimalExportContactFieldLastname"]);
        $this->assertEquals("enableAnimalExportContactFieldEmail", $data["enableAnimalExportContactFieldEmail"]);
        $this->assertEquals("enableAnimalExportContactFieldPhoneHome", $data["enableAnimalExportContactFieldPhoneHome"]);
        $this->assertEquals("enableAnimalExportContactFieldPhoneCell", $data["enableAnimalExportContactFieldPhoneCell"]);
        $this->assertEquals("setAnimalExportYouTubeAccount", $data["setAnimalExportYouTubeAccount"]);
        $this->assertEquals("setAnimalExportYouTubeAuthorizationCode", $data["setAnimalExportYouTubeAuthorizationCode"]);
        $this->assertEquals("setAnimalExportDefaultCategory1", $data["setAnimalExportDefaultCategory1"]);
        $this->assertEquals("setAnimalExportDefaultCategory4", $data["setAnimalExportDefaultCategory4"]);
        $this->assertEquals("setAnimalExportDefaultCategory3", $data["setAnimalExportDefaultCategory3"]);
        $this->assertEquals("setAnimalExportDefaultCategory2", $data["setAnimalExportDefaultCategory2"]);
        $this->assertEquals("setAnimalExportDefaultCategory5", $data["setAnimalExportDefaultCategory5"]);
        $this->assertEquals("setAnimalExportDefaultCategory6", $data["setAnimalExportDefaultCategory6"]);
        $this->assertEquals("setAnimalExportDefaultCategory8", $data["setAnimalExportDefaultCategory8"]);
        $this->assertEquals("setAnimalExportDefaultCategory7", $data["setAnimalExportDefaultCategory7"]);
        $this->assertEquals("setAnimalExportDefaultCategory13", $data["setAnimalExportDefaultCategory13"]);
        $this->assertEquals("setAnimalExportDefaultCategory9", $data["setAnimalExportDefaultCategory9"]);
        $this->assertEquals("setAnimalExportDefaultCategory11", $data["setAnimalExportDefaultCategory11"]);
        $this->assertEquals("setAnimalExportDefaultCategory10", $data["setAnimalExportDefaultCategory10"]);
        $this->assertEquals("setAnimalExportDefaultCategory12", $data["setAnimalExportDefaultCategory12"]);
        $this->assertEquals("disableAnimalDescriptionVideo", $data["disableAnimalDescriptionVideo"]);
        $this->assertEquals("enableAnimalDescriptionVideoLink", $data["enableAnimalDescriptionVideoLink"]);
        $this->assertEquals("enableFreePetChipRegistry", $data["enableFreePetChipRegistry"]);
        $this->assertEquals("setFreePetChipRegistryUserName", $data["setFreePetChipRegistryUserName"]);
        $this->assertEquals("enablePetLinkRegistry", $data["enablePetLinkRegistry"]);
        $this->assertEquals("setPetLinkUserName", $data["setPetLinkUserName"]);
        $this->assertEquals("setPetLinkPassword", $data["setPetLinkPassword"]);
        $this->assertEquals("disableMicrochipUserAlert", $data["disableMicrochipUserAlert"]);
        $this->assertEquals("setMicrochipAlertEmails", $data["setMicrochipAlertEmails"]);
    }
}
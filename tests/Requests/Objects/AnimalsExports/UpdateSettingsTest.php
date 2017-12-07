<?php
/**
 * AnimalsExports UpdateSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:36
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalsExports\UpdateSettings;

class UpdateSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalsExports\UpdateSettings();

        
        $query->setDisableAnimalExportAdopted("disableAnimalExportAdopted");
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

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsExports", $data["objectType"]);

        $this->assertEquals("updateSettings", $data["objectAction"]);

        $this->assertEquals("disableAnimalExportAdopted", $data["disableAnimalExportAdopted"]);
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
    }
}
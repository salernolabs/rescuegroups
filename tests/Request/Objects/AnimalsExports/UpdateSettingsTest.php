<?php
/**
 * AnimalsExports updateSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsExports;

class UpdateSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsExports\UpdateSettings();
        $query->setDisableAnimalExportAdopted("Prevent adopted animals from being uploaded to Petfinder");
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

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Prevent adopted animals from being uploaded to Petfinder", $data['values'][0]["disableAnimalExportAdopted"]);
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

        $this->assertEquals('animalsExports', $data['objectType']);
        $this->assertEquals('updateSettings', $data['objectAction']);
    }
}
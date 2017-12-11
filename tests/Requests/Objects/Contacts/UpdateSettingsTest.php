<?php
/**
 * Contacts UpdateSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\Contacts\UpdateSettings;

class UpdateSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Contacts\UpdateSettings();

        
        $query->setEnableContactsDoNotAdoptListSharing("enableContactsDoNotAdoptListSharing");
        $query->setEnableContactsAutoSelectRegistrationInvitation("enableContactsAutoSelectRegistrationInvitation");
        $query->setEnableContactsAutoSelectCaretakerInfoPublic("enableContactsAutoSelectCaretakerInfoPublic");
        $query->setEnableAddContactOnlineFormSubmission("enableAddContactOnlineFormSubmission");
        $query->setEnableContactsAddContactMeetRequest("enableContactsAddContactMeetRequest");
        $query->setEnableContactsAddContactCallCreation("enableContactsAddContactCallCreation");
        $query->setEnableContactsAddContactAnimalSponsorship("enableContactsAddContactAnimalSponsorship");
        $query->setEnableContactsAddContactUserRegistration("enableContactsAddContactUserRegistration");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("contacts", $data["objectType"]);

        $this->assertEquals("updateSettings", $data["objectAction"]);

        $this->assertEquals("enableContactsDoNotAdoptListSharing", $data["enableContactsDoNotAdoptListSharing"]);
        $this->assertEquals("enableContactsAutoSelectRegistrationInvitation", $data["enableContactsAutoSelectRegistrationInvitation"]);
        $this->assertEquals("enableContactsAutoSelectCaretakerInfoPublic", $data["enableContactsAutoSelectCaretakerInfoPublic"]);
        $this->assertEquals("enableAddContactOnlineFormSubmission", $data["enableAddContactOnlineFormSubmission"]);
        $this->assertEquals("enableContactsAddContactMeetRequest", $data["enableContactsAddContactMeetRequest"]);
        $this->assertEquals("enableContactsAddContactCallCreation", $data["enableContactsAddContactCallCreation"]);
        $this->assertEquals("enableContactsAddContactAnimalSponsorship", $data["enableContactsAddContactAnimalSponsorship"]);
        $this->assertEquals("enableContactsAddContactUserRegistration", $data["enableContactsAddContactUserRegistration"]);
    }
}
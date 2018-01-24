<?php
/**
 * Contacts updateSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Contacts;

class UpdateSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Contacts\UpdateSettings();
        $query->setEnableContactsDoNotAdoptListSharing("Share your organization's Do Not Adopt list");
        $query->setEnableContactsAutoSelectRegistrationInvitation("Automatically select to send Registration Invitation");
        $query->setEnableContactsAutoSelectCaretakerInfoPublic("Automatically select to set caretaker information public");
        $query->setEnableAddContactOnlineFormSubmission("Add a Contact record when an Online Form is submitted");
        $query->setEnableContactsAddContactMeetRequest("Add a Contact record when an Meet Request is submitted");
        $query->setEnableContactsAddContactCallCreation("Add a Contact record when a Call is created from the Contact Us page");
        $query->setEnableContactsAddContactAnimalSponsorship("Add a Contact record when an Animal Sponsorship is submitted");
        $query->setEnableContactsAddContactUserRegistration("Add a Contact record when a user registers");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Share your organization's Do Not Adopt list", $data['values'][0]["enableContactsDoNotAdoptListSharing"]);
        $this->assertEquals("Automatically select to send Registration Invitation", $data['values'][0]["enableContactsAutoSelectRegistrationInvitation"]);
        $this->assertEquals("Automatically select to set caretaker information public", $data['values'][0]["enableContactsAutoSelectCaretakerInfoPublic"]);
        $this->assertEquals("Add a Contact record when an Online Form is submitted", $data['values'][0]["enableAddContactOnlineFormSubmission"]);
        $this->assertEquals("Add a Contact record when an Meet Request is submitted", $data['values'][0]["enableContactsAddContactMeetRequest"]);
        $this->assertEquals("Add a Contact record when a Call is created from the Contact Us page", $data['values'][0]["enableContactsAddContactCallCreation"]);
        $this->assertEquals("Add a Contact record when an Animal Sponsorship is submitted", $data['values'][0]["enableContactsAddContactAnimalSponsorship"]);
        $this->assertEquals("Add a Contact record when a user registers", $data['values'][0]["enableContactsAddContactUserRegistration"]);

        $this->assertEquals('contacts', $data['objectType']);
        $this->assertEquals('updateSettings', $data['objectAction']);
    }
}
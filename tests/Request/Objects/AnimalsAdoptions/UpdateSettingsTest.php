<?php
/**
 * AnimalsAdoptions updateSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsAdoptions;

class UpdateSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsAdoptions\UpdateSettings();
        $query->setShowAdoptionsTrackingMessage("Show a reminder to use the Adoptions feature when changing an animal's status to Adopted");
        $query->setShowAppPending("Show an &quot;Application Pending&quot; message on public pages for animals when applicable");
        $query->setShowAppPendingAdoptAnyway("Show an &quot;Apply anyway&quot; message on public pages for animals when applicable");
        $query->setPreventApplicationsForPendingAnimals("Prevent applications from being submitted for animals with a pending application");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Show a reminder to use the Adoptions feature when changing an animal's status to Adopted", $data['values'][0]["showAdoptionsTrackingMessage"]);
        $this->assertEquals("Show an &quot;Application Pending&quot; message on public pages for animals when applicable", $data['values'][0]["showAppPending"]);
        $this->assertEquals("Show an &quot;Apply anyway&quot; message on public pages for animals when applicable", $data['values'][0]["showAppPendingAdoptAnyway"]);
        $this->assertEquals("Prevent applications from being submitted for animals with a pending application", $data['values'][0]["preventApplicationsForPendingAnimals"]);

        $this->assertEquals('animalsAdoptions', $data['objectType']);
        $this->assertEquals('updateSettings', $data['objectAction']);
    }
}
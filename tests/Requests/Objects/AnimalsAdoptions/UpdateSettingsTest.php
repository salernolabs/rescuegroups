<?php
/**
 * AnimalsAdoptions UpdateSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:17
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalsAdoptions\UpdateSettings;

class UpdateSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalsAdoptions\UpdateSettings();

        
        $query->setShowAdoptionsTrackingMessage("showAdoptionsTrackingMessage");
        $query->setShowAppPending("showAppPending");
        $query->setShowAppPendingAdoptAnyway("showAppPendingAdoptAnyway");
        $query->setPreventApplicationsForPendingAnimals("preventApplicationsForPendingAnimals");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsAdoptions", $data["objectType"]);

        $this->assertEquals("updateSettings", $data["objectAction"]);

        $this->assertEquals("showAdoptionsTrackingMessage", $data["showAdoptionsTrackingMessage"]);
        $this->assertEquals("showAppPending", $data["showAppPending"]);
        $this->assertEquals("showAppPendingAdoptAnyway", $data["showAppPendingAdoptAnyway"]);
        $this->assertEquals("preventApplicationsForPendingAnimals", $data["preventApplicationsForPendingAnimals"]);
    }
}
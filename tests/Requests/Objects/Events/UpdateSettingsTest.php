<?php
/**
 * Events UpdateSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:21
 */
namespace RescueGroups\Tests\Requests\Objects\Events\UpdateSettings;

class UpdateSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Events\UpdateSettings();

        
        $query->setEnableEvents("enableEvents");
        $query->setSetEventsMapWebsite("setEventsMapWebsite");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("events", $data["objectType"]);

        $this->assertEquals("updateSettings", $data["objectAction"]);

        $this->assertEquals("enableEvents", $data["enableEvents"]);
        $this->assertEquals("setEventsMapWebsite", $data["setEventsMapWebsite"]);
    }
}
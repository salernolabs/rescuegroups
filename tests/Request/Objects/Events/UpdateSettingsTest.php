<?php
/**
 * Events updateSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Events;

class UpdateSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Events\UpdateSettings();
        $query->setEnableEvents("Enable the Events feature");
        $query->setEventsMapWebsite("Map website to use with the Events feature");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Enable the Events feature", $data['values'][0]["enableEvents"]);
        $this->assertEquals("Map website to use with the Events feature", $data['values'][0]["setEventsMapWebsite"]);

        $this->assertEquals('events', $data['objectType']);
        $this->assertEquals('updateSettings', $data['objectAction']);
    }
}
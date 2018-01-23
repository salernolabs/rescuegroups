<?php
/**
 * Memorials updateSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Memorials;

class UpdateSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Memorials\UpdateSettings();
        $query->setEnableMemorials("Enable the Memorials feature");
        $query->setSetMemorialsDonationOnlineStoreItem("Select Memorials donation store item");
        $query->setShowMemorialsAlphaLinks("Show alphabetical links (A-Z) on the Memorials page");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Enable the Memorials feature", $data['values'][0]["enableMemorials"]);
        $this->assertEquals("Select Memorials donation store item", $data['values'][0]["setMemorialsDonationOnlineStoreItem"]);
        $this->assertEquals("Show alphabetical links (A-Z) on the Memorials page", $data['values'][0]["showMemorialsAlphaLinks"]);

        $this->assertEquals('memorials', $data['objectType']);
        $this->assertEquals('updateSettings', $data['objectAction']);
    }
}
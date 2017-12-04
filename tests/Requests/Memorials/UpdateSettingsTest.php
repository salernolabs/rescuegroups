<?php
/**
 * Memorials UpdateSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Memorials\UpdateSettings;

class UpdateSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Memorials\UpdateSettings();

        
        $query->setEnableMemorials("enableMemorials");
        $query->setSetMemorialsDonationOnlineStoreItem("setMemorialsDonationOnlineStoreItem");
        $query->setShowMemorialsAlphaLinks("showMemorialsAlphaLinks");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("memorials", $data["objectType"]);

        $this->assertEquals("updateSettings", $data["objectAction"]);

        $this->assertEquals("enableMemorials", $data["enableMemorials"]);
        $this->assertEquals("setMemorialsDonationOnlineStoreItem", $data["setMemorialsDonationOnlineStoreItem"]);
        $this->assertEquals("showMemorialsAlphaLinks", $data["showMemorialsAlphaLinks"]);
    }
}
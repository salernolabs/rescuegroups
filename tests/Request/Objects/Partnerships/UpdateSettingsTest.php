<?php
/**
 * Partnerships UpdateSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Partnerships\UpdateSettings;

class UpdateSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Partnerships\UpdateSettings();

        
        $query->setEnablePartnerships("enablePartnerships");
        $query->setSetPartnershipAlertEmailAddresses("setPartnershipAlertEmailAddresses");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("partnerships", $data["objectType"]);

        $this->assertEquals("updateSettings", $data["objectAction"]);

        $this->assertEquals("enablePartnerships", $data["enablePartnerships"]);
        $this->assertEquals("setPartnershipAlertEmailAddresses", $data["setPartnershipAlertEmailAddresses"]);
    }
}
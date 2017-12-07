<?php
/**
 * Partnerships UpdateSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:26
 */
namespace RescueGroups\Tests\Requests\Objects\Partnerships\UpdateSettings;

class UpdateSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Partnerships\UpdateSettings();

        
        $query->setEnablePartnerships("enablePartnerships");
        $query->setSetPartnershipAlertEmailAddresses("setPartnershipAlertEmailAddresses");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("partnerships", $data["objectType"]);

        $this->assertEquals("updateSettings", $data["objectAction"]);

        $this->assertEquals("enablePartnerships", $data["enablePartnerships"]);
        $this->assertEquals("setPartnershipAlertEmailAddresses", $data["setPartnershipAlertEmailAddresses"]);
    }
}
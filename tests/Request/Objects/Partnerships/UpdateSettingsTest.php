<?php
/**
 * Partnerships updateSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Partnerships;

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
        $query->setEnablePartnerships("Enable the Partnerships feature");
        $query->setSetPartnershipAlertEmailAddresses("Partnership alert email address(es)");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Enable the Partnerships feature", $data['values'][0]["enablePartnerships"]);
        $this->assertEquals("Partnership alert email address(es)", $data['values'][0]["setPartnershipAlertEmailAddresses"]);

        $this->assertEquals('partnerships', $data['objectType']);
        $this->assertEquals('updateSettings', $data['objectAction']);
    }
}
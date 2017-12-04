<?php
/**
 * Settings GetUserSetting Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Settings\GetUserSetting;

class GetUserSettingTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Settings\GetUserSetting();

        
        $query->setSettingName("settingName");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("settings", $data["objectType"]);

        $this->assertEquals("getUserSetting", $data["objectAction"]);

        $this->assertEquals("settingName", $data["settingName"]);
    }
}
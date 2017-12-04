<?php
/**
 * Settings SetUserSetting Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Settings\SetUserSetting;

class SetUserSettingTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Settings\SetUserSetting();

        
        $query->setSettingDefaultAnimalTemplate("settingDefaultAnimalTemplate");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("settings", $data["objectType"]);

        $this->assertEquals("setUserSetting", $data["objectAction"]);

        $this->assertEquals("settingDefaultAnimalTemplate", $data["settingDefaultAnimalTemplate"]);
    }
}
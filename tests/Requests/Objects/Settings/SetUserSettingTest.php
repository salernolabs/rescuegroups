<?php
/**
 * Settings SetUserSetting Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:27
 */
namespace RescueGroups\Tests\Requests\Objects\Settings\SetUserSetting;

class SetUserSettingTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Settings\SetUserSetting();

        
        $query->setSettingDefaultAnimalTemplate("settingDefaultAnimalTemplate");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("settings", $data["objectType"]);

        $this->assertEquals("setUserSetting", $data["objectAction"]);

        $this->assertEquals("settingDefaultAnimalTemplate", $data["settingDefaultAnimalTemplate"]);
    }
}
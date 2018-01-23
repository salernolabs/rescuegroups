<?php
/**
 * Settings setUserSetting Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Settings;

class SetUserSettingTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Settings\SetUserSetting();
        $query->setDefaultAnimalTemplate(" Default template to load when adding an animal");

        $data = $this->api->getPostObject($query);

        $this->assertEquals(" Default template to load when adding an animal", $data['values'][0]["settingDefaultAnimalTemplate"]);

        $this->assertEquals('settings', $data['objectType']);
        $this->assertEquals('setUserSetting', $data['objectAction']);
    }
}
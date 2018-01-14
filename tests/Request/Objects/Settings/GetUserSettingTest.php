<?php
/**
 * Settings getUserSetting Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Settings;

class GetUserSettingTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Settings\GetUserSetting();
        $data = $this->api->getPostObject($query);

        $this->assertEquals('settings', $data['objectType']);
        $this->assertEquals('getUserSetting', $data['objectAction']);
    }
}
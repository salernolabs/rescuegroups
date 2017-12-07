<?php
/**
 * Website GetSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:46
 */
namespace RescueGroups\Tests\Requests\Objects\Website\GetSettings;

class GetSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Website\GetSettings();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("website", $data["objectType"]);

        $this->assertEquals("getSettings", $data["objectAction"]);

    }
}
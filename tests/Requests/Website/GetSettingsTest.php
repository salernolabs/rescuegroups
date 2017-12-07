<?php
/**
 * Website GetSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Website\GetSettings;

class GetSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Website\GetSettings();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("website", $data["objectType"]);

        $this->assertEquals("getSettings", $data["objectAction"]);

    }
}
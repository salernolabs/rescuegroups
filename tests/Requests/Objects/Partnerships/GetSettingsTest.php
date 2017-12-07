<?php
/**
 * Partnerships GetSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:26
 */
namespace RescueGroups\Tests\Requests\Objects\Partnerships\GetSettings;

class GetSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Partnerships\GetSettings();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("partnerships", $data["objectType"]);

        $this->assertEquals("getSettings", $data["objectAction"]);

    }
}
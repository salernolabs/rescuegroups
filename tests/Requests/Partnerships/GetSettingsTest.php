<?php
/**
 * Partnerships GetSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Partnerships\GetSettings;

class GetSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Partnerships\GetSettings();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("partnerships", $data["objectType"]);

        $this->assertEquals("getSettings", $data["objectAction"]);

    }
}
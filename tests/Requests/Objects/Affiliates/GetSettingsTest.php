<?php
/**
 * Affiliates GetSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\Affiliates\GetSettings;

class GetSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Affiliates\GetSettings();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("affiliates", $data["objectType"]);

        $this->assertEquals("getSettings", $data["objectAction"]);

    }
}
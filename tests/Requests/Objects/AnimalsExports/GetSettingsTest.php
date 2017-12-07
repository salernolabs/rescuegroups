<?php
/**
 * AnimalsExports GetSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:36
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalsExports\GetSettings;

class GetSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalsExports\GetSettings();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsExports", $data["objectType"]);

        $this->assertEquals("getSettings", $data["objectAction"]);

    }
}
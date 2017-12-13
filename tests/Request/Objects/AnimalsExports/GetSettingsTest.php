<?php
/**
 * AnimalsExports GetSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsExports\GetSettings;

class GetSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsExports\GetSettings();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsExports", $data["objectType"]);

        $this->assertEquals("getSettings", $data["objectAction"]);

    }
}
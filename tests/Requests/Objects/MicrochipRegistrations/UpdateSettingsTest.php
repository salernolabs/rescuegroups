<?php
/**
 * MicrochipRegistrations UpdateSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:43
 */
namespace RescueGroups\Tests\Requests\Objects\MicrochipRegistrations\UpdateSettings;

class UpdateSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\MicrochipRegistrations\UpdateSettings();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("microchipRegistrations", $data["objectType"]);

        $this->assertEquals("updateSettings", $data["objectAction"]);

    }
}
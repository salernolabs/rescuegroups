<?php
/**
 * AnimalsExports updateSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsExports;

class UpdateSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsExports\UpdateSettings();
        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsExports', $data['objectType']);
        $this->assertEquals('updateSettings', $data['objectAction']);
    }
}
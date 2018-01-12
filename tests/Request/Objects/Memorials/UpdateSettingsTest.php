<?php
/**
 * Memorials updateSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Memorials;

class UpdateSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Memorials\UpdateSettings();

        $data = $this->api->getPostObject($query);

        $this->assertEquals('memorials', $data['objectType']);
        $this->assertEquals('updateSettings', $data['objectAction']);
    }
}
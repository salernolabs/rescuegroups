<?php
/**
 * Partnerships updateSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Partnerships;

class UpdateSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Partnerships\UpdateSettings();

        $data = $this->api->getPostObject($query);

        $this->assertEquals('partnerships', $data['objectType']);
        $this->assertEquals('updateSettings', $data['objectAction']);
    }
}
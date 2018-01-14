<?php
/**
 * Affiliates updateSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Affiliates;

class UpdateSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Affiliates\UpdateSettings();
        $data = $this->api->getPostObject($query);

        $this->assertEquals('affiliates', $data['objectType']);
        $this->assertEquals('updateSettings', $data['objectAction']);
    }
}
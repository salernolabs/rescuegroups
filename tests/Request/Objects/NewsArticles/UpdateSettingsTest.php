<?php
/**
 * NewsArticles updateSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\NewsArticles;

class UpdateSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\NewsArticles\UpdateSettings();
        $query->setEnableNewsarticles("Enable the News Articles feature");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Enable the News Articles feature", $data['values'][0]["enableNewsarticles"]);

        $this->assertEquals('newsarticles', $data['objectType']);
        $this->assertEquals('updateSettings', $data['objectAction']);
    }
}
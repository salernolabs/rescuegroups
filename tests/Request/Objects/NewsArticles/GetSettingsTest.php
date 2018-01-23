<?php
/**
 * NewsArticles getSettings Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\NewsArticles;

class GetSettingsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\NewsArticles\GetSettings();

        $data = $this->api->getPostObject($query);


        $this->assertEquals('newsarticles', $data['objectType']);
        $this->assertEquals('getSettings', $data['objectAction']);
    }
}